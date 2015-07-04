<?php
    
/**
* Efficient Exception and Error  Handling
*
* @author Md. Mahbubur R. Aaman <mahbubur.r.aaman@gmail.com>
* @link http://mahbubur-r-aaman.blogspot.com
* @copyright (c) 2015 Md. Mahbubur R. Aaman
* @license MIT License - http://www.opensource.org/licenses/mit-license.php
*/
    

    
class NoticeException extends Exception { 
    public function __toString() {
        return  "NOTICE :: $this->message";
    }
}
 
class WarningException extends Exception { 
    public function __toString() {
        return  "WARNING :: $this->message";
    }
}

class StrictException extends Exception {
    public function __toString() {
        return  "STRICT :: $this->message";
    }
}

class UserThrownException extends Exception {
    public function __toString() {
        return "USER ERROR :: $this->message";
    }
}

class UserDepricatedException extends Exception {
    public function __toString() {
        return "USER DEPRICATED ERROR :: $this->message";
    }
}
 
class OtherErrorException extends Exception {
    public function __toString() {
        return  "OTHER ERROR :: $this->message";
    }
}

function pc_error_handler($errno,$error,$file,$line,$context) {
    $message = "MessageFromExceptionHadler [$error][FILE : $file][LINE : $line]";
    
    if($errno == E_WARNING) {
        throw new WarningException($message);
    } else if($errno == E_NOTICE) {
        throw new NoticeException($message);
    } else if($errno == E_STRICT) {
        throw new StrictException($message);
    } else if($errno == E_USER_ERROR) {
        throw new UserThrownException($message);
    } else if($errno == E_USER_DEPRECATED) {
        throw new UserDepricatedException($message);
    } else {
        throw new OtherErrorException($message);
    }
}


?>

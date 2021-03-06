<?php

namespace App\Exceptions;

use Exception;

class ObjectNotFoundException extends Exception
{

    /**
    * Report the exception.
    *
    * @return void
    */
    public function report(Exception $e)
    {
        if ($e instanceof ObjectNotFoundException) {
            return response()->setStatusCode(400);
        }
    
        return parent::report($e);
    }

   /**
    * Render the exception into an HTTP response.
    *
    * @param  \Illuminate\Http\Request
    * @return \Illuminate\Http\Response
    */
   public function render($request, Exception $exception)
   {
        if ($exception instanceof ObjectNotFoundException) {
            return response()->setStatusCode(400);
        }

        return parent::render($request, $exception);
   }

   /**
    * Return status code expection
    * @return int $status
    */
    public function getStatusCode() {
        return 400;
    }
}

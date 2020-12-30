<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\SDK\CCC\V20170705\Models\CheckNumberAvaliableResponseBody\calleeAvaliable;
use AlibabaCloud\SDK\CCC\V20170705\Models\CheckNumberAvaliableResponseBody\callerAvaliable;
use AlibabaCloud\Tea\Model;

class CheckNumberAvaliableResponseBody extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var string
     */
    public $code;

    /**
     * @var callerAvaliable
     */
    public $callerAvaliable;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var calleeAvaliable
     */
    public $calleeAvaliable;
    protected $_name = [
        'message'         => 'Message',
        'requestId'       => 'RequestId',
        'httpStatusCode'  => 'HttpStatusCode',
        'code'            => 'Code',
        'callerAvaliable' => 'CallerAvaliable',
        'success'         => 'Success',
        'calleeAvaliable' => 'CalleeAvaliable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->callerAvaliable) {
            $res['CallerAvaliable'] = null !== $this->callerAvaliable ? $this->callerAvaliable->toMap() : null;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->calleeAvaliable) {
            $res['CalleeAvaliable'] = null !== $this->calleeAvaliable ? $this->calleeAvaliable->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckNumberAvaliableResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['CallerAvaliable'])) {
            $model->callerAvaliable = callerAvaliable::fromMap($map['CallerAvaliable']);
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['CalleeAvaliable'])) {
            $model->calleeAvaliable = calleeAvaliable::fromMap($map['CalleeAvaliable']);
        }

        return $model;
    }
}

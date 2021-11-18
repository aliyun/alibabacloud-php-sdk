<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\SDK\CCC\V20170705\Models\CheckNumberAvaliableResponseBody\calleeAvaliable;
use AlibabaCloud\SDK\CCC\V20170705\Models\CheckNumberAvaliableResponseBody\callerAvaliable;
use AlibabaCloud\Tea\Model;

class CheckNumberAvaliableResponseBody extends Model
{
    /**
     * @var calleeAvaliable
     */
    public $calleeAvaliable;

    /**
     * @var callerAvaliable
     */
    public $callerAvaliable;

    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'calleeAvaliable' => 'CalleeAvaliable',
        'callerAvaliable' => 'CallerAvaliable',
        'code'            => 'Code',
        'httpStatusCode'  => 'HttpStatusCode',
        'message'         => 'Message',
        'requestId'       => 'RequestId',
        'success'         => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->calleeAvaliable) {
            $res['CalleeAvaliable'] = null !== $this->calleeAvaliable ? $this->calleeAvaliable->toMap() : null;
        }
        if (null !== $this->callerAvaliable) {
            $res['CallerAvaliable'] = null !== $this->callerAvaliable ? $this->callerAvaliable->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['CalleeAvaliable'])) {
            $model->calleeAvaliable = calleeAvaliable::fromMap($map['CalleeAvaliable']);
        }
        if (isset($map['CallerAvaliable'])) {
            $model->callerAvaliable = callerAvaliable::fromMap($map['CallerAvaliable']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20190620\Models;

use AlibabaCloud\SDK\Gpdb\V20190620\Models\DescribeDBInstanceForDmsResponseBody\instance;
use AlibabaCloud\Tea\Model;

class DescribeDBInstanceForDmsResponseBody extends Model
{
    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var int
     */
    public $count;

    /**
     * @var instance
     */
    public $instance;
    protected $_name = [
        'httpStatusCode' => 'HttpStatusCode',
        'requestId'      => 'RequestId',
        'success'        => 'Success',
        'code'           => 'Code',
        'message'        => 'Message',
        'count'          => 'Count',
        'instance'       => 'Instance',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->instance) {
            $res['Instance'] = null !== $this->instance ? $this->instance->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBInstanceForDmsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Instance'])) {
            $model->instance = instance::fromMap($map['Instance']);
        }

        return $model;
    }
}

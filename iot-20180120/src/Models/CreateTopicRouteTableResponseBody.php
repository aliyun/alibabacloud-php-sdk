<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\CreateTopicRouteTableResponseBody\failureTopics;
use AlibabaCloud\Tea\Model;

class CreateTopicRouteTableResponseBody extends Model
{
    /**
     * @example iot.system.SystemException
     *
     * @var string
     */
    public $code;

    /**
     * @example iot.system.SystemException
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @var failureTopics
     */
    public $failureTopics;

    /**
     * @example true
     *
     * @var bool
     */
    public $isAllSucceed;

    /**
     * @example FCC27691-9151-4B93-9622-9C90F30542EC
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'          => 'Code',
        'errorMessage'  => 'ErrorMessage',
        'failureTopics' => 'FailureTopics',
        'isAllSucceed'  => 'IsAllSucceed',
        'requestId'     => 'RequestId',
        'success'       => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->failureTopics) {
            $res['FailureTopics'] = null !== $this->failureTopics ? $this->failureTopics->toMap() : null;
        }
        if (null !== $this->isAllSucceed) {
            $res['IsAllSucceed'] = $this->isAllSucceed;
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
     * @return CreateTopicRouteTableResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['FailureTopics'])) {
            $model->failureTopics = failureTopics::fromMap($map['FailureTopics']);
        }
        if (isset($map['IsAllSucceed'])) {
            $model->isAllSucceed = $map['IsAllSucceed'];
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

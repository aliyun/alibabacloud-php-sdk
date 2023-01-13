<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteTopicRouteTableResponse\failureTopics;
use AlibabaCloud\Tea\Model;

class DeleteTopicRouteTableResponse extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var bool
     */
    public $isAllSucceed;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var failureTopics
     */
    public $failureTopics;
    protected $_name = [
        'code'          => 'Code',
        'errorMessage'  => 'ErrorMessage',
        'isAllSucceed'  => 'IsAllSucceed',
        'requestId'     => 'RequestId',
        'success'       => 'Success',
        'failureTopics' => 'FailureTopics',
    ];

    public function validate()
    {
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('errorMessage', $this->errorMessage, true);
        Model::validateRequired('isAllSucceed', $this->isAllSucceed, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('success', $this->success, true);
        Model::validateRequired('failureTopics', $this->failureTopics, true);
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
        if (null !== $this->isAllSucceed) {
            $res['IsAllSucceed'] = $this->isAllSucceed;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->failureTopics) {
            $res['FailureTopics'] = null !== $this->failureTopics ? $this->failureTopics->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteTopicRouteTableResponse
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
        if (isset($map['IsAllSucceed'])) {
            $model->isAllSucceed = $map['IsAllSucceed'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['FailureTopics'])) {
            $model->failureTopics = failureTopics::fromMap($map['FailureTopics']);
        }

        return $model;
    }
}

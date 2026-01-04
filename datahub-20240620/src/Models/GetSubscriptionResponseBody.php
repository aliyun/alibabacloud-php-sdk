<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Datahub\V20240620\Models;

use AlibabaCloud\Dara\Model;

class GetSubscriptionResponseBody extends Model
{
    /**
     * @var string
     */
    public $application;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $state;

    /**
     * @var string
     */
    public $subscriptionId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $topicName;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'application' => 'Application',
        'comment' => 'Comment',
        'createTime' => 'CreateTime',
        'creator' => 'Creator',
        'projectName' => 'ProjectName',
        'requestId' => 'RequestId',
        'state' => 'State',
        'subscriptionId' => 'SubscriptionId',
        'success' => 'Success',
        'topicName' => 'TopicName',
        'type' => 'Type',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->application) {
            $res['Application'] = $this->application;
        }

        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->subscriptionId) {
            $res['SubscriptionId'] = $this->subscriptionId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->topicName) {
            $res['TopicName'] = $this->topicName;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Application'])) {
            $model->application = $map['Application'];
        }

        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['SubscriptionId'])) {
            $model->subscriptionId = $map['SubscriptionId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['TopicName'])) {
            $model->topicName = $map['TopicName'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}

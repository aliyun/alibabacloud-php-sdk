<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mnsopen\V20220119\Models\GetSubscriptionAttributesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var string
     */
    public $filterTag;

    /**
     * @var int
     */
    public $lastModifyTime;

    /**
     * @var string
     */
    public $notifyContentFormat;

    /**
     * @var string
     */
    public $notifyStrategy;

    /**
     * @var string
     */
    public $subscriptionName;

    /**
     * @var string
     */
    public $subscriptionURL;

    /**
     * @var string
     */
    public $topicName;

    /**
     * @var string
     */
    public $topicOwner;
    protected $_name = [
        'createTime'          => 'CreateTime',
        'endpoint'            => 'Endpoint',
        'filterTag'           => 'FilterTag',
        'lastModifyTime'      => 'LastModifyTime',
        'notifyContentFormat' => 'NotifyContentFormat',
        'notifyStrategy'      => 'NotifyStrategy',
        'subscriptionName'    => 'SubscriptionName',
        'subscriptionURL'     => 'SubscriptionURL',
        'topicName'           => 'TopicName',
        'topicOwner'          => 'TopicOwner',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->filterTag) {
            $res['FilterTag'] = $this->filterTag;
        }
        if (null !== $this->lastModifyTime) {
            $res['LastModifyTime'] = $this->lastModifyTime;
        }
        if (null !== $this->notifyContentFormat) {
            $res['NotifyContentFormat'] = $this->notifyContentFormat;
        }
        if (null !== $this->notifyStrategy) {
            $res['NotifyStrategy'] = $this->notifyStrategy;
        }
        if (null !== $this->subscriptionName) {
            $res['SubscriptionName'] = $this->subscriptionName;
        }
        if (null !== $this->subscriptionURL) {
            $res['SubscriptionURL'] = $this->subscriptionURL;
        }
        if (null !== $this->topicName) {
            $res['TopicName'] = $this->topicName;
        }
        if (null !== $this->topicOwner) {
            $res['TopicOwner'] = $this->topicOwner;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['FilterTag'])) {
            $model->filterTag = $map['FilterTag'];
        }
        if (isset($map['LastModifyTime'])) {
            $model->lastModifyTime = $map['LastModifyTime'];
        }
        if (isset($map['NotifyContentFormat'])) {
            $model->notifyContentFormat = $map['NotifyContentFormat'];
        }
        if (isset($map['NotifyStrategy'])) {
            $model->notifyStrategy = $map['NotifyStrategy'];
        }
        if (isset($map['SubscriptionName'])) {
            $model->subscriptionName = $map['SubscriptionName'];
        }
        if (isset($map['SubscriptionURL'])) {
            $model->subscriptionURL = $map['SubscriptionURL'];
        }
        if (isset($map['TopicName'])) {
            $model->topicName = $map['TopicName'];
        }
        if (isset($map['TopicOwner'])) {
            $model->topicOwner = $map['TopicOwner'];
        }

        return $model;
    }
}

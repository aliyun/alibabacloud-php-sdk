<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetTraceResponseBody\data;

use AlibabaCloud\Tea\Model;

class messageInfo extends Model
{
    /**
     * @description Message body.
     *
     * @example {}
     *
     * @var string
     */
    public $body;

    /**
     * @description Message born host.
     *
     * @example x.x.x.x
     *
     * @var string
     */
    public $bornHost;

    /**
     * @description Message born time.
     *
     * @example 2023-03-22 12:17:08
     *
     * @var string
     */
    public $bornTime;

    /**
     * @description The instance ID.
     *
     * @example rmq-cn-u0t2ygjq505
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Message grpup.
     *
     * @example xx
     *
     * @var string
     */
    public $messageGroup;

    /**
     * @description The message ID.
     *
     * @example 0A79275A00207A4F0F2916C92F9A0B94
     *
     * @var string
     */
    public $messageId;

    /**
     * @description Message keys.
     *
     * @var string[]
     */
    public $messageKeys;

    /**
     * @description Message tag.
     *
     * @example xx
     *
     * @var string
     */
    public $messageTag;

    /**
     * @description Message type.
     *
     * @example NORMAL
     *
     * @var string
     */
    public $messageType;

    /**
     * @description The region ID.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Message store host.
     *
     * @example x.x.x.x
     *
     * @var string
     */
    public $storeHost;

    /**
     * @description Message store time.
     *
     * @example 2023-03-22 12:17:08
     *
     * @var string
     */
    public $storeTime;

    /**
     * @description The topic name.
     *
     * @example Topic_normal_inspector
     *
     * @var string
     */
    public $topicName;

    /**
     * @description Message transaction id.
     *
     * @example xx
     *
     * @var string
     */
    public $transactionId;

    /**
     * @description Message user properties.
     *
     * @var string[]
     */
    public $userProperties;
    protected $_name = [
        'body'           => 'body',
        'bornHost'       => 'bornHost',
        'bornTime'       => 'bornTime',
        'instanceId'     => 'instanceId',
        'messageGroup'   => 'messageGroup',
        'messageId'      => 'messageId',
        'messageKeys'    => 'messageKeys',
        'messageTag'     => 'messageTag',
        'messageType'    => 'messageType',
        'regionId'       => 'regionId',
        'storeHost'      => 'storeHost',
        'storeTime'      => 'storeTime',
        'topicName'      => 'topicName',
        'transactionId'  => 'transactionId',
        'userProperties' => 'userProperties',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['body'] = $this->body;
        }
        if (null !== $this->bornHost) {
            $res['bornHost'] = $this->bornHost;
        }
        if (null !== $this->bornTime) {
            $res['bornTime'] = $this->bornTime;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->messageGroup) {
            $res['messageGroup'] = $this->messageGroup;
        }
        if (null !== $this->messageId) {
            $res['messageId'] = $this->messageId;
        }
        if (null !== $this->messageKeys) {
            $res['messageKeys'] = $this->messageKeys;
        }
        if (null !== $this->messageTag) {
            $res['messageTag'] = $this->messageTag;
        }
        if (null !== $this->messageType) {
            $res['messageType'] = $this->messageType;
        }
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }
        if (null !== $this->storeHost) {
            $res['storeHost'] = $this->storeHost;
        }
        if (null !== $this->storeTime) {
            $res['storeTime'] = $this->storeTime;
        }
        if (null !== $this->topicName) {
            $res['topicName'] = $this->topicName;
        }
        if (null !== $this->transactionId) {
            $res['transactionId'] = $this->transactionId;
        }
        if (null !== $this->userProperties) {
            $res['userProperties'] = $this->userProperties;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return messageInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['body'])) {
            $model->body = $map['body'];
        }
        if (isset($map['bornHost'])) {
            $model->bornHost = $map['bornHost'];
        }
        if (isset($map['bornTime'])) {
            $model->bornTime = $map['bornTime'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['messageGroup'])) {
            $model->messageGroup = $map['messageGroup'];
        }
        if (isset($map['messageId'])) {
            $model->messageId = $map['messageId'];
        }
        if (isset($map['messageKeys'])) {
            if (!empty($map['messageKeys'])) {
                $model->messageKeys = $map['messageKeys'];
            }
        }
        if (isset($map['messageTag'])) {
            $model->messageTag = $map['messageTag'];
        }
        if (isset($map['messageType'])) {
            $model->messageType = $map['messageType'];
        }
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }
        if (isset($map['storeHost'])) {
            $model->storeHost = $map['storeHost'];
        }
        if (isset($map['storeTime'])) {
            $model->storeTime = $map['storeTime'];
        }
        if (isset($map['topicName'])) {
            $model->topicName = $map['topicName'];
        }
        if (isset($map['transactionId'])) {
            $model->transactionId = $map['transactionId'];
        }
        if (isset($map['userProperties'])) {
            $model->userProperties = $map['userProperties'];
        }

        return $model;
    }
}

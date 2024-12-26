<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListMessagesResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
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
     * @description Message body size.
     *
     * @example 100
     *
     * @var int
     */
    public $bodySize;

    /**
     * @description The client on which messages are produced.
     *
     * @example xx.xx.xx.xx
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
     * @example rmq-cn-7e22ody****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The message group. This parameter is returned only for ordered messages.
     *
     * @example xx
     *
     * @var string
     */
    public $messageGroup;

    /**
     * @description Message Id.
     *
     * @example 7F000001000114B4340C5ABF94500079
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
     * @description The message tag.
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
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The broker on which messages are stored.
     *
     * @example xx.xx.xx.xx
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
     * @description The name of the topic.
     *
     * @example topic_test
     *
     * @var string
     */
    public $topicName;

    /**
     * @description Message user properties.
     *
     * @var string[]
     */
    public $userProperties;
    protected $_name = [
        'body'           => 'body',
        'bodySize'       => 'bodySize',
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
        if (null !== $this->bodySize) {
            $res['bodySize'] = $this->bodySize;
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
        if (null !== $this->userProperties) {
            $res['userProperties'] = $this->userProperties;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['body'])) {
            $model->body = $map['body'];
        }
        if (isset($map['bodySize'])) {
            $model->bodySize = $map['bodySize'];
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
        if (isset($map['userProperties'])) {
            $model->userProperties = $map['userProperties'];
        }

        return $model;
    }
}

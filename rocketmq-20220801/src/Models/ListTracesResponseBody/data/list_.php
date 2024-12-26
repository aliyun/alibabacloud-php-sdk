<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListTracesResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
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
     * @description Message id.
     *
     * @example 7F00000100207A4F0F294A938F7807AE
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
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the topic.
     *
     * @example topic_test
     *
     * @var string
     */
    public $topicName;
    protected $_name = [
        'bornTime'    => 'bornTime',
        'instanceId'  => 'instanceId',
        'messageId'   => 'messageId',
        'messageKeys' => 'messageKeys',
        'messageTag'  => 'messageTag',
        'regionId'    => 'regionId',
        'topicName'   => 'topicName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bornTime) {
            $res['bornTime'] = $this->bornTime;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
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
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }
        if (null !== $this->topicName) {
            $res['topicName'] = $this->topicName;
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
        if (isset($map['bornTime'])) {
            $model->bornTime = $map['bornTime'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
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
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }
        if (isset($map['topicName'])) {
            $model->topicName = $map['topicName'];
        }

        return $model;
    }
}

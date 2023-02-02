<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsMessageTraceResponseBody\data;

use AlibabaCloud\Tea\Model;

class messageTrack extends Model
{
    /**
     * @description The ID of the consumer group that subscribes to the topic.
     *
     * @example GID_test_group_id
     *
     * @var string
     */
    public $consumerGroup;

    /**
     * @description The ID of the instance where the message that you want to query resides.
     *
     * @example MQ_INST_111111111111_DOxxxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The status of the message. Valid values:
     *
     *   **CONSUMED**: The message is consumed.
     *   **CONSUMED_BUT_FILTERED:** No consumer groups subscribe to the message. The message is filtered out and not consumed.
     *   **NOT_CONSUME_YET**: The message is pending to be consumed.
     *   **NOT_ONLINE**: The consumer group is offline.
     *   **UNKNOWN**: The message is not consumed due to unknown reasons.
     *
     * @example CONSUMED
     *
     * @var string
     */
    public $trackType;
    protected $_name = [
        'consumerGroup' => 'ConsumerGroup',
        'instanceId'    => 'InstanceId',
        'trackType'     => 'TrackType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consumerGroup) {
            $res['ConsumerGroup'] = $this->consumerGroup;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->trackType) {
            $res['TrackType'] = $this->trackType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return messageTrack
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConsumerGroup'])) {
            $model->consumerGroup = $map['ConsumerGroup'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['TrackType'])) {
            $model->trackType = $map['TrackType'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models;

use AlibabaCloud\Tea\Model;

class OnsTrendGroupOutputTpsRequest extends Model
{
    /**
     * @description The beginning of the time range to query. The value is a UNIX timestamp representing the number of milliseconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     *
     * @example 1570852800000
     *
     * @var int
     */
    public $beginTime;

    /**
     * @description The end of the time range to query. The value is a UNIX timestamp representing the number of milliseconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     *
     * @example 1570868400000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The ID of the consumer group that you want to query.
     *
     * @example GID_test
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The ID of the Message Queue for Apache RocketMQ instance which contains the specified consumer group.
     *
     * @example MQ_INST_111111111111_DOxxxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The sampling period. Unit: minutes. Valid values: 1, 5, and 10.
     *
     * @example 10
     *
     * @var int
     */
    public $period;

    /**
     * @description The name of the topic that you want to query.
     *
     * @example test
     *
     * @var string
     */
    public $topic;

    /**
     * @description The type of information that you want to query. Valid values:
     *
     *   **0**: the number of messages that are consumed during each sampling period.
     *   **1**: the TPS for message consumption during each sampling period.
     *
     * @example 0
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'beginTime'  => 'BeginTime',
        'endTime'    => 'EndTime',
        'groupId'    => 'GroupId',
        'instanceId' => 'InstanceId',
        'period'     => 'Period',
        'topic'      => 'Topic',
        'type'       => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OnsTrendGroupOutputTpsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

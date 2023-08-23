<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models;

use AlibabaCloud\Tea\Model;

class OnsTrendTopicInputTpsRequest extends Model
{
    /**
     * @description The timestamp that indicates the beginning of the time range to query. Unit: milliseconds.
     *
     * @example 1570852800000
     *
     * @var int
     */
    public $beginTime;

    /**
     * @description The timestamp that indicates the end of the time range to query. Unit: milliseconds.
     *
     * @example 1570868400000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The ID of the instance to which the topic you want to query belongs.
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
     *   **0**: the number of messages that are published to the topic during each sampling period.
     *   **1**: the TPS for message publishing in the topic during each sampling period.
     *
     * @example 0
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'beginTime'  => 'BeginTime',
        'endTime'    => 'EndTime',
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
     * @return OnsTrendTopicInputTpsRequest
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

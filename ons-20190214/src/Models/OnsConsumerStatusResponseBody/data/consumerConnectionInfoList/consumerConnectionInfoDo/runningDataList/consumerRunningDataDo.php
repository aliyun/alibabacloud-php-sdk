<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusResponseBody\data\consumerConnectionInfoList\consumerConnectionInfoDo\runningDataList;

use AlibabaCloud\Tea\Model;

class consumerRunningDataDo extends Model
{
    /**
     * @description The number of messages that failed to be consumed each hour.
     *
     * @example 0
     *
     * @var int
     */
    public $failedCountPerHour;

    /**
     * @description The TPS for failed message consumption.
     *
     * @example 0
     *
     * @var float
     */
    public $failedTps;

    /**
     * @description The ID of the consumer group.
     *
     * @example 0
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The TPS for successful message consumption.
     *
     * @example 0
     *
     * @var float
     */
    public $okTps;

    /**
     * @description The consumption RT. Unit: milliseconds.
     *
     * @example 0
     *
     * @var float
     */
    public $rt;

    /**
     * @description The name of the topic to which the consumer subscribes.
     *
     * @example test-mq_topic
     *
     * @var string
     */
    public $topic;
    protected $_name = [
        'failedCountPerHour' => 'FailedCountPerHour',
        'failedTps'          => 'FailedTps',
        'groupId'            => 'GroupId',
        'okTps'              => 'OkTps',
        'rt'                 => 'Rt',
        'topic'              => 'Topic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failedCountPerHour) {
            $res['FailedCountPerHour'] = $this->failedCountPerHour;
        }
        if (null !== $this->failedTps) {
            $res['FailedTps'] = $this->failedTps;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->okTps) {
            $res['OkTps'] = $this->okTps;
        }
        if (null !== $this->rt) {
            $res['Rt'] = $this->rt;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return consumerRunningDataDo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailedCountPerHour'])) {
            $model->failedCountPerHour = $map['FailedCountPerHour'];
        }
        if (isset($map['FailedTps'])) {
            $model->failedTps = $map['FailedTps'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['OkTps'])) {
            $model->okTps = $map['OkTps'];
        }
        if (isset($map['Rt'])) {
            $model->rt = $map['Rt'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusResponseBody\data\consumerConnectionInfoList;

use AlibabaCloud\Tea\Model;

class runningDataList extends Model
{
    /**
     * @var string
     */
    public $groupId;

    /**
     * @var float
     */
    public $rt;

    /**
     * @var string
     */
    public $topic;

    /**
     * @var int
     */
    public $failedCountPerHour;

    /**
     * @var float
     */
    public $okTps;

    /**
     * @var float
     */
    public $failedTps;
    protected $_name = [
        'groupId'            => 'GroupId',
        'rt'                 => 'Rt',
        'topic'              => 'Topic',
        'failedCountPerHour' => 'FailedCountPerHour',
        'okTps'              => 'OkTps',
        'failedTps'          => 'FailedTps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->rt) {
            $res['Rt'] = $this->rt;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }
        if (null !== $this->failedCountPerHour) {
            $res['FailedCountPerHour'] = $this->failedCountPerHour;
        }
        if (null !== $this->okTps) {
            $res['OkTps'] = $this->okTps;
        }
        if (null !== $this->failedTps) {
            $res['FailedTps'] = $this->failedTps;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return runningDataList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Rt'])) {
            $model->rt = $map['Rt'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }
        if (isset($map['FailedCountPerHour'])) {
            $model->failedCountPerHour = $map['FailedCountPerHour'];
        }
        if (isset($map['OkTps'])) {
            $model->okTps = $map['OkTps'];
        }
        if (isset($map['FailedTps'])) {
            $model->failedTps = $map['FailedTps'];
        }

        return $model;
    }
}

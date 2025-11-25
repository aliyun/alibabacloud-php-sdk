<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusResponseBody\data\consumerConnectionInfoList\consumerConnectionInfoDo\runningDataList;

use AlibabaCloud\Dara\Model;

class consumerRunningDataDo extends Model
{
    /**
     * @var int
     */
    public $failedCountPerHour;

    /**
     * @var float
     */
    public $failedTps;

    /**
     * @var float
     */
    public $okTps;

    /**
     * @var float
     */
    public $rt;

    /**
     * @var string
     */
    public $topic;
    protected $_name = [
        'failedCountPerHour' => 'FailedCountPerHour',
        'failedTps' => 'FailedTps',
        'okTps' => 'OkTps',
        'rt' => 'Rt',
        'topic' => 'Topic',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failedCountPerHour) {
            $res['FailedCountPerHour'] = $this->failedCountPerHour;
        }

        if (null !== $this->failedTps) {
            $res['FailedTps'] = $this->failedTps;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailedCountPerHour'])) {
            $model->failedCountPerHour = $map['FailedCountPerHour'];
        }

        if (isset($map['FailedTps'])) {
            $model->failedTps = $map['FailedTps'];
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

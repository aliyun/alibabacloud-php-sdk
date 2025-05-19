<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;

class TrafficControlTaskTrafficInfoTargetTrafficsDataValue extends Model
{
    /**
     * @var float
     */
    public $traffic;

    /**
     * @var int
     */
    public $recordTime;
    protected $_name = [
        'traffic' => 'Traffic',
        'recordTime' => 'RecordTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->traffic) {
            $res['Traffic'] = $this->traffic;
        }

        if (null !== $this->recordTime) {
            $res['RecordTime'] = $this->recordTime;
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
        if (isset($map['Traffic'])) {
            $model->traffic = $map['Traffic'];
        }

        if (isset($map['RecordTime'])) {
            $model->recordTime = $map['RecordTime'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models;

use AlibabaCloud\Dara\Model;

class GetInstanceEventsRequest extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $maxEventsNum;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $token;
    protected $_name = [
        'endTime' => 'EndTime',
        'maxEventsNum' => 'MaxEventsNum',
        'startTime' => 'StartTime',
        'token' => 'Token',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->maxEventsNum) {
            $res['MaxEventsNum'] = $this->maxEventsNum;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->token) {
            $res['Token'] = $this->token;
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['MaxEventsNum'])) {
            $model->maxEventsNum = $map['MaxEventsNum'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}

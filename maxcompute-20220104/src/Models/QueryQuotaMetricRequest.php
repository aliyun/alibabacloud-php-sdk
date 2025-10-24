<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Dara\Model;

class QueryQuotaMetricRequest extends Model
{
    /**
     * @var int
     */
    public $interval;

    /**
     * @var string
     */
    public $nickname;

    /**
     * @var string
     */
    public $subQuotaNickname;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $strategy;
    protected $_name = [
        'interval' => 'interval',
        'nickname' => 'nickname',
        'subQuotaNickname' => 'subQuotaNickname',
        'endTime' => 'endTime',
        'startTime' => 'startTime',
        'strategy' => 'strategy',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->interval) {
            $res['interval'] = $this->interval;
        }

        if (null !== $this->nickname) {
            $res['nickname'] = $this->nickname;
        }

        if (null !== $this->subQuotaNickname) {
            $res['subQuotaNickname'] = $this->subQuotaNickname;
        }

        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->strategy) {
            $res['strategy'] = $this->strategy;
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
        if (isset($map['interval'])) {
            $model->interval = $map['interval'];
        }

        if (isset($map['nickname'])) {
            $model->nickname = $map['nickname'];
        }

        if (isset($map['subQuotaNickname'])) {
            $model->subQuotaNickname = $map['subQuotaNickname'];
        }

        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['strategy'])) {
            $model->strategy = $map['strategy'];
        }

        return $model;
    }
}

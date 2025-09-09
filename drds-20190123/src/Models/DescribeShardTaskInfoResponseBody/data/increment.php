<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeShardTaskInfoResponseBody\data;

use AlibabaCloud\Dara\Model;

class increment extends Model
{
    /**
     * @var int
     */
    public $delay;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var int
     */
    public $tps;
    protected $_name = [
        'delay' => 'Delay',
        'startTime' => 'StartTime',
        'tps' => 'Tps',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->delay) {
            $res['Delay'] = $this->delay;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->tps) {
            $res['Tps'] = $this->tps;
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
        if (isset($map['Delay'])) {
            $model->delay = $map['Delay'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Tps'])) {
            $model->tps = $map['Tps'];
        }

        return $model;
    }
}

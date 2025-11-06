<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqp\V20190901\Models\GetTpsByTimeResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $maxTps;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int[]
     */
    public $tpsList;
    protected $_name = [
        'endTime' => 'EndTime',
        'maxTps' => 'MaxTps',
        'startTime' => 'StartTime',
        'tpsList' => 'tpsList',
    ];

    public function validate()
    {
        if (\is_array($this->tpsList)) {
            Model::validateArray($this->tpsList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->maxTps) {
            $res['MaxTps'] = $this->maxTps;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->tpsList) {
            if (\is_array($this->tpsList)) {
                $res['tpsList'] = [];
                $n1 = 0;
                foreach ($this->tpsList as $item1) {
                    $res['tpsList'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['MaxTps'])) {
            $model->maxTps = $map['MaxTps'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['tpsList'])) {
            if (!empty($map['tpsList'])) {
                $model->tpsList = [];
                $n1 = 0;
                foreach ($map['tpsList'] as $item1) {
                    $model->tpsList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

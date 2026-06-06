<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetTaskExecutionStatisticsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetTaskExecutionStatisticsResponseBody\data\tpmPerMinute;

class data extends Model
{
    /**
     * @var int
     */
    public $completedCount;

    /**
     * @var int
     */
    public $runningCount;

    /**
     * @var tpmPerMinute[]
     */
    public $tpmPerMinute;

    /**
     * @var int
     */
    public $waitingCount;
    protected $_name = [
        'completedCount' => 'completedCount',
        'runningCount' => 'runningCount',
        'tpmPerMinute' => 'tpmPerMinute',
        'waitingCount' => 'waitingCount',
    ];

    public function validate()
    {
        if (\is_array($this->tpmPerMinute)) {
            Model::validateArray($this->tpmPerMinute);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->completedCount) {
            $res['completedCount'] = $this->completedCount;
        }

        if (null !== $this->runningCount) {
            $res['runningCount'] = $this->runningCount;
        }

        if (null !== $this->tpmPerMinute) {
            if (\is_array($this->tpmPerMinute)) {
                $res['tpmPerMinute'] = [];
                $n1 = 0;
                foreach ($this->tpmPerMinute as $item1) {
                    $res['tpmPerMinute'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->waitingCount) {
            $res['waitingCount'] = $this->waitingCount;
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
        if (isset($map['completedCount'])) {
            $model->completedCount = $map['completedCount'];
        }

        if (isset($map['runningCount'])) {
            $model->runningCount = $map['runningCount'];
        }

        if (isset($map['tpmPerMinute'])) {
            if (!empty($map['tpmPerMinute'])) {
                $model->tpmPerMinute = [];
                $n1 = 0;
                foreach ($map['tpmPerMinute'] as $item1) {
                    $model->tpmPerMinute[$n1] = tpmPerMinute::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['waitingCount'])) {
            $model->waitingCount = $map['waitingCount'];
        }

        return $model;
    }
}

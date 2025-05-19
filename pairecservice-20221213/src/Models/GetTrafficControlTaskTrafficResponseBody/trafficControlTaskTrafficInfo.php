<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetTrafficControlTaskTrafficResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetTrafficControlTaskTrafficResponseBody\trafficControlTaskTrafficInfo\targetTraffics;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\TrafficControlTaskTrafficInfoTaskTrafficsValue;

class trafficControlTaskTrafficInfo extends Model
{
    /**
     * @var targetTraffics[]
     */
    public $targetTraffics;

    /**
     * @var TrafficControlTaskTrafficInfoTaskTrafficsValue[]
     */
    public $taskTraffics;
    protected $_name = [
        'targetTraffics' => 'TargetTraffics',
        'taskTraffics' => 'TaskTraffics',
    ];

    public function validate()
    {
        if (\is_array($this->targetTraffics)) {
            Model::validateArray($this->targetTraffics);
        }
        if (\is_array($this->taskTraffics)) {
            Model::validateArray($this->taskTraffics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->targetTraffics) {
            if (\is_array($this->targetTraffics)) {
                $res['TargetTraffics'] = [];
                $n1 = 0;
                foreach ($this->targetTraffics as $item1) {
                    $res['TargetTraffics'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->taskTraffics) {
            if (\is_array($this->taskTraffics)) {
                $res['TaskTraffics'] = [];
                foreach ($this->taskTraffics as $key1 => $value1) {
                    $res['TaskTraffics'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
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
        if (isset($map['TargetTraffics'])) {
            if (!empty($map['TargetTraffics'])) {
                $model->targetTraffics = [];
                $n1 = 0;
                foreach ($map['TargetTraffics'] as $item1) {
                    $model->targetTraffics[$n1++] = targetTraffics::fromMap($item1);
                }
            }
        }

        if (isset($map['TaskTraffics'])) {
            if (!empty($map['TaskTraffics'])) {
                $model->taskTraffics = [];
                foreach ($map['TaskTraffics'] as $key1 => $value1) {
                    $model->taskTraffics[$key1] = TrafficControlTaskTrafficInfoTaskTrafficsValue::fromMap($value1);
                }
            }
        }

        return $model;
    }
}

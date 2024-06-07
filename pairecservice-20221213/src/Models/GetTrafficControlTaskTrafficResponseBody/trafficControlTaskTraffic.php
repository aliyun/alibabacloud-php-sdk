<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetTrafficControlTaskTrafficResponseBody;

use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetTrafficControlTaskTrafficResponseBody\trafficControlTaskTraffic\targetTraffics;
use AlibabaCloud\Tea\Model;

class trafficControlTaskTraffic extends Model
{
    /**
     * @var targetTraffics[]
     */
    public $targetTraffics;

    /**
     * @var mixed[]
     */
    public $taskTraffics;
    protected $_name = [
        'targetTraffics' => 'TargetTraffics',
        'taskTraffics'   => 'TaskTraffics',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->targetTraffics) {
            $res['TargetTraffics'] = [];
            if (null !== $this->targetTraffics && \is_array($this->targetTraffics)) {
                $n = 0;
                foreach ($this->targetTraffics as $item) {
                    $res['TargetTraffics'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->taskTraffics) {
            $res['TaskTraffics'] = $this->taskTraffics;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trafficControlTaskTraffic
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TargetTraffics'])) {
            if (!empty($map['TargetTraffics'])) {
                $model->targetTraffics = [];
                $n                     = 0;
                foreach ($map['TargetTraffics'] as $item) {
                    $model->targetTraffics[$n++] = null !== $item ? targetTraffics::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TaskTraffics'])) {
            $model->taskTraffics = $map['TaskTraffics'];
        }

        return $model;
    }
}

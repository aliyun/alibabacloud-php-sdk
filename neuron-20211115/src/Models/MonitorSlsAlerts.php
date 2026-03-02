<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class MonitorSlsAlerts extends Model
{
    /**
     * @var MonitorSlsAlert[]
     */
    public $monitorSlsAlerts;
    protected $_name = [
        'monitorSlsAlerts' => 'monitorSlsAlerts',
    ];

    public function validate()
    {
        if (\is_array($this->monitorSlsAlerts)) {
            Model::validateArray($this->monitorSlsAlerts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->monitorSlsAlerts) {
            if (\is_array($this->monitorSlsAlerts)) {
                $res['monitorSlsAlerts'] = [];
                $n1 = 0;
                foreach ($this->monitorSlsAlerts as $item1) {
                    $res['monitorSlsAlerts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['monitorSlsAlerts'])) {
            if (!empty($map['monitorSlsAlerts'])) {
                $model->monitorSlsAlerts = [];
                $n1 = 0;
                foreach ($map['monitorSlsAlerts'] as $item1) {
                    $model->monitorSlsAlerts[$n1] = MonitorSlsAlert::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

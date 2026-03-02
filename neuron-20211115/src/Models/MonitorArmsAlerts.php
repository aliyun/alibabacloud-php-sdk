<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class MonitorArmsAlerts extends Model
{
    /**
     * @var MonitorArmsAlert[]
     */
    public $monitorArmsAlerts;
    protected $_name = [
        'monitorArmsAlerts' => 'monitorArmsAlerts',
    ];

    public function validate()
    {
        if (\is_array($this->monitorArmsAlerts)) {
            Model::validateArray($this->monitorArmsAlerts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->monitorArmsAlerts) {
            if (\is_array($this->monitorArmsAlerts)) {
                $res['monitorArmsAlerts'] = [];
                $n1 = 0;
                foreach ($this->monitorArmsAlerts as $item1) {
                    $res['monitorArmsAlerts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['monitorArmsAlerts'])) {
            if (!empty($map['monitorArmsAlerts'])) {
                $model->monitorArmsAlerts = [];
                $n1 = 0;
                foreach ($map['monitorArmsAlerts'] as $item1) {
                    $model->monitorArmsAlerts[$n1] = MonitorArmsAlert::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

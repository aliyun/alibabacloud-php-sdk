<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class MonitorMqAlerts extends Model
{
    /**
     * @var MonitorMqAlert[]
     */
    public $monitorMqAlerts;
    protected $_name = [
        'monitorMqAlerts' => 'monitorMqAlerts',
    ];

    public function validate()
    {
        if (\is_array($this->monitorMqAlerts)) {
            Model::validateArray($this->monitorMqAlerts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->monitorMqAlerts) {
            if (\is_array($this->monitorMqAlerts)) {
                $res['monitorMqAlerts'] = [];
                $n1 = 0;
                foreach ($this->monitorMqAlerts as $item1) {
                    $res['monitorMqAlerts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['monitorMqAlerts'])) {
            if (!empty($map['monitorMqAlerts'])) {
                $model->monitorMqAlerts = [];
                $n1 = 0;
                foreach ($map['monitorMqAlerts'] as $item1) {
                    $model->monitorMqAlerts[$n1] = MonitorMqAlert::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

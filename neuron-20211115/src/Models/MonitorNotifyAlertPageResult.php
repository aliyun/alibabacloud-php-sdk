<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class MonitorNotifyAlertPageResult extends Model
{
    /**
     * @var int
     */
    public $intTotal;

    /**
     * @var MonitorNotifyAlert[]
     */
    public $notifyAlerts;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'intTotal' => 'intTotal',
        'notifyAlerts' => 'notifyAlerts',
        'requestId' => 'requestId',
        'total' => 'total',
    ];

    public function validate()
    {
        if (\is_array($this->notifyAlerts)) {
            Model::validateArray($this->notifyAlerts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->intTotal) {
            $res['intTotal'] = $this->intTotal;
        }

        if (null !== $this->notifyAlerts) {
            if (\is_array($this->notifyAlerts)) {
                $res['notifyAlerts'] = [];
                $n1 = 0;
                foreach ($this->notifyAlerts as $item1) {
                    $res['notifyAlerts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->total) {
            $res['total'] = $this->total;
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
        if (isset($map['intTotal'])) {
            $model->intTotal = $map['intTotal'];
        }

        if (isset($map['notifyAlerts'])) {
            if (!empty($map['notifyAlerts'])) {
                $model->notifyAlerts = [];
                $n1 = 0;
                foreach ($map['notifyAlerts'] as $item1) {
                    $model->notifyAlerts[$n1] = MonitorNotifyAlert::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}

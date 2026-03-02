<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class MonitorAlertHistoryPageResult extends Model
{
    /**
     * @var MonitorAlertHistory[]
     */
    public $alertHistories;

    /**
     * @var int
     */
    public $intTotal;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'alertHistories' => 'alertHistories',
        'intTotal' => 'intTotal',
        'requestId' => 'requestId',
        'total' => 'total',
    ];

    public function validate()
    {
        if (\is_array($this->alertHistories)) {
            Model::validateArray($this->alertHistories);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertHistories) {
            if (\is_array($this->alertHistories)) {
                $res['alertHistories'] = [];
                $n1 = 0;
                foreach ($this->alertHistories as $item1) {
                    $res['alertHistories'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->intTotal) {
            $res['intTotal'] = $this->intTotal;
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
        if (isset($map['alertHistories'])) {
            if (!empty($map['alertHistories'])) {
                $model->alertHistories = [];
                $n1 = 0;
                foreach ($map['alertHistories'] as $item1) {
                    $model->alertHistories[$n1] = MonitorAlertHistory::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['intTotal'])) {
            $model->intTotal = $map['intTotal'];
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

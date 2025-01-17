<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetClientRatioStatisticResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetClientRatioStatisticResponseBody\clientInstallRatio\currentItems;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetClientRatioStatisticResponseBody\clientInstallRatio\historyItems;

class clientInstallRatio extends Model
{
    /**
     * @var currentItems[]
     */
    public $currentItems;
    /**
     * @var historyItems[]
     */
    public $historyItems;
    protected $_name = [
        'currentItems' => 'CurrentItems',
        'historyItems' => 'HistoryItems',
    ];

    public function validate()
    {
        if (\is_array($this->currentItems)) {
            Model::validateArray($this->currentItems);
        }
        if (\is_array($this->historyItems)) {
            Model::validateArray($this->historyItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentItems) {
            if (\is_array($this->currentItems)) {
                $res['CurrentItems'] = [];
                $n1                  = 0;
                foreach ($this->currentItems as $item1) {
                    $res['CurrentItems'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->historyItems) {
            if (\is_array($this->historyItems)) {
                $res['HistoryItems'] = [];
                $n1                  = 0;
                foreach ($this->historyItems as $item1) {
                    $res['HistoryItems'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CurrentItems'])) {
            if (!empty($map['CurrentItems'])) {
                $model->currentItems = [];
                $n1                  = 0;
                foreach ($map['CurrentItems'] as $item1) {
                    $model->currentItems[$n1++] = currentItems::fromMap($item1);
                }
            }
        }

        if (isset($map['HistoryItems'])) {
            if (!empty($map['HistoryItems'])) {
                $model->historyItems = [];
                $n1                  = 0;
                foreach ($map['HistoryItems'] as $item1) {
                    $model->historyItems[$n1++] = historyItems::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetClientInstallationStatisticResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetClientInstallationStatisticResponseBody\clientInstallRatio\currentItems;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetClientInstallationStatisticResponseBody\clientInstallRatio\historyItems;
use AlibabaCloud\Tea\Model;

class clientInstallRatio extends Model
{
    /**
     * @var currentItems[]
     */
    public $currentItems;

    /**
     * @var int[]
     */
    public $dates;

    /**
     * @var historyItems[]
     */
    public $historyItems;
    protected $_name = [
        'currentItems' => 'CurrentItems',
        'dates'        => 'Dates',
        'historyItems' => 'HistoryItems',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentItems) {
            $res['CurrentItems'] = [];
            if (null !== $this->currentItems && \is_array($this->currentItems)) {
                $n = 0;
                foreach ($this->currentItems as $item) {
                    $res['CurrentItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->dates) {
            $res['Dates'] = $this->dates;
        }
        if (null !== $this->historyItems) {
            $res['HistoryItems'] = [];
            if (null !== $this->historyItems && \is_array($this->historyItems)) {
                $n = 0;
                foreach ($this->historyItems as $item) {
                    $res['HistoryItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clientInstallRatio
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentItems'])) {
            if (!empty($map['CurrentItems'])) {
                $model->currentItems = [];
                $n                   = 0;
                foreach ($map['CurrentItems'] as $item) {
                    $model->currentItems[$n++] = null !== $item ? currentItems::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Dates'])) {
            if (!empty($map['Dates'])) {
                $model->dates = $map['Dates'];
            }
        }
        if (isset($map['HistoryItems'])) {
            if (!empty($map['HistoryItems'])) {
                $model->historyItems = [];
                $n                   = 0;
                foreach ($map['HistoryItems'] as $item) {
                    $model->historyItems[$n++] = null !== $item ? historyItems::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

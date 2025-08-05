<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\SumStorageMetricsByDateResponseBody;

use AlibabaCloud\SDK\MaxCompute\V20220104\Models\SumStorageMetricsByDateResponseBody\data\itemStorageMetrics;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 20250719
     *
     * @var string
     */
    public $dateTime;

    /**
     * @var itemStorageMetrics[]
     */
    public $itemStorageMetrics;

    /**
     * @example Storage
     *
     * @var string
     */
    public $storageType;

    /**
     * @example GB
     *
     * @var string
     */
    public $unit;

    /**
     * @example 329.503338
     *
     * @var string
     */
    public $usage;
    protected $_name = [
        'dateTime' => 'dateTime',
        'itemStorageMetrics' => 'itemStorageMetrics',
        'storageType' => 'storageType',
        'unit' => 'unit',
        'usage' => 'usage',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dateTime) {
            $res['dateTime'] = $this->dateTime;
        }
        if (null !== $this->itemStorageMetrics) {
            $res['itemStorageMetrics'] = [];
            if (null !== $this->itemStorageMetrics && \is_array($this->itemStorageMetrics)) {
                $n = 0;
                foreach ($this->itemStorageMetrics as $item) {
                    $res['itemStorageMetrics'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->storageType) {
            $res['storageType'] = $this->storageType;
        }
        if (null !== $this->unit) {
            $res['unit'] = $this->unit;
        }
        if (null !== $this->usage) {
            $res['usage'] = $this->usage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dateTime'])) {
            $model->dateTime = $map['dateTime'];
        }
        if (isset($map['itemStorageMetrics'])) {
            if (!empty($map['itemStorageMetrics'])) {
                $model->itemStorageMetrics = [];
                $n = 0;
                foreach ($map['itemStorageMetrics'] as $item) {
                    $model->itemStorageMetrics[$n++] = null !== $item ? itemStorageMetrics::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['storageType'])) {
            $model->storageType = $map['storageType'];
        }
        if (isset($map['unit'])) {
            $model->unit = $map['unit'];
        }
        if (isset($map['usage'])) {
            $model->usage = $map['usage'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetClientRatioStatisticResponseBody\clientOnlineRatio;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetClientRatioStatisticResponseBody\clientOnlineRatio\currentItems\items;
use AlibabaCloud\Tea\Model;

class currentItems extends Model
{
    /**
     * @description The list of current statistics on the online rate of the client by vendor.
     *
     * @var items[]
     */
    public $items;

    /**
     * @description The type of the cloud asset. Valid values:
     *
     *   **0**: an asset provided by Alibaba Cloud
     *   **1**: a third-party cloud asset
     *   **2**: an asset in a data center
     *   **3**, **4**, **5**, and **7**: other cloud asset
     *   **8**: a simple application server
     *
     * @example 3
     *
     * @var int
     */
    public $vendor;
    protected $_name = [
        'items'  => 'Items',
        'vendor' => 'Vendor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->items) {
            $res['Items'] = [];
            if (null !== $this->items && \is_array($this->items)) {
                $n = 0;
                foreach ($this->items as $item) {
                    $res['Items'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return currentItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Items'])) {
            if (!empty($map['Items'])) {
                $model->items = [];
                $n            = 0;
                foreach ($map['Items'] as $item) {
                    $model->items[$n++] = null !== $item ? items::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}

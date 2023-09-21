<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetClientInstallationStatisticResponseBody\clientInstallRatio;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetClientInstallationStatisticResponseBody\clientInstallRatio\historyItems\items;
use AlibabaCloud\Tea\Model;

class historyItems extends Model
{
    /**
     * @description The statistics on the client installation rate.
     *
     * @var items[]
     */
    public $items;

    /**
     * @description The type of the cloud asset. Valid values:
     *
     *   **0**: a cloud asset provided by Alibaba Cloud.
     *   **1**: a third-party cloud asset
     *   **2**: an asset in a data center
     *   **3**, **4**, **5**, and **7**: other cloud asset
     *   **8**: a lightweight cloud asset
     *
     * @example 4
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
     * @return historyItems
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

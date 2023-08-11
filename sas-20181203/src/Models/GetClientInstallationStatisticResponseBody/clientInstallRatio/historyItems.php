<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetClientInstallationStatisticResponseBody\clientInstallRatio;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetClientInstallationStatisticResponseBody\clientInstallRatio\historyItems\items;
use AlibabaCloud\Tea\Model;

class historyItems extends Model
{
    /**
     * @var items[]
     */
    public $items;

    /**
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryLicenseDeviceListResponse\data;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryLicenseDeviceListResponse\data\deviceList\item;
use AlibabaCloud\Tea\Model;

class deviceList extends Model
{
    /**
     * @var item[]
     */
    public $item;
    protected $_name = [
        'item' => 'item',
    ];

    public function validate()
    {
        Model::validateRequired('item', $this->item, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->item) {
            $res['item'] = [];
            if (null !== $this->item && \is_array($this->item)) {
                $n = 0;
                foreach ($this->item as $item) {
                    $res['item'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deviceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['item'])) {
            if (!empty($map['item'])) {
                $model->item = [];
                $n           = 0;
                foreach ($map['item'] as $item) {
                    $model->item[$n++] = null !== $item ? item::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

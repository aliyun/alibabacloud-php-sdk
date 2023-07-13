<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QuerySolutionDeviceGroupPageResponseBody\data;

use AlibabaCloud\SDK\Iot\V20180120\Models\QuerySolutionDeviceGroupPageResponseBody\data\list_\itemName;
use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var itemName[]
     */
    public $itemName;
    protected $_name = [
        'itemName' => 'itemName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->itemName) {
            $res['itemName'] = [];
            if (null !== $this->itemName && \is_array($this->itemName)) {
                $n = 0;
                foreach ($this->itemName as $item) {
                    $res['itemName'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['itemName'])) {
            if (!empty($map['itemName'])) {
                $model->itemName = [];
                $n               = 0;
                foreach ($map['itemName'] as $item) {
                    $model->itemName[$n++] = null !== $item ? itemName::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QuerySolutionDeviceGroupPageResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\QuerySolutionDeviceGroupPageResponseBody\data\list_\itemName;

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
        if (\is_array($this->itemName)) {
            Model::validateArray($this->itemName);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->itemName) {
            if (\is_array($this->itemName)) {
                $res['itemName'] = [];
                $n1 = 0;
                foreach ($this->itemName as $item1) {
                    $res['itemName'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['itemName'])) {
            if (!empty($map['itemName'])) {
                $model->itemName = [];
                $n1 = 0;
                foreach ($map['itemName'] as $item1) {
                    $model->itemName[$n1] = itemName::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

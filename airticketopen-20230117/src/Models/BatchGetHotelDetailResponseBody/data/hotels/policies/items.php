<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\BatchGetHotelDetailResponseBody\data\hotels\policies;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var mixed[]
     */
    public $children;

    /**
     * @var string
     */
    public $itemName;

    /**
     * @var string
     */
    public $itemTypeId;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'children' => 'Children',
        'itemName' => 'ItemName',
        'itemTypeId' => 'ItemTypeId',
        'value' => 'Value',
    ];

    public function validate()
    {
        if (\is_array($this->children)) {
            Model::validateArray($this->children);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->children) {
            if (\is_array($this->children)) {
                $res['Children'] = [];
                $n1 = 0;
                foreach ($this->children as $item1) {
                    $res['Children'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->itemName) {
            $res['ItemName'] = $this->itemName;
        }

        if (null !== $this->itemTypeId) {
            $res['ItemTypeId'] = $this->itemTypeId;
        }

        if (null !== $this->value) {
            $res['Value'] = $this->value;
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
        if (isset($map['Children'])) {
            if (!empty($map['Children'])) {
                $model->children = [];
                $n1 = 0;
                foreach ($map['Children'] as $item1) {
                    $model->children[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ItemName'])) {
            $model->itemName = $map['ItemName'];
        }

        if (isset($map['ItemTypeId'])) {
            $model->itemTypeId = $map['ItemTypeId'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}

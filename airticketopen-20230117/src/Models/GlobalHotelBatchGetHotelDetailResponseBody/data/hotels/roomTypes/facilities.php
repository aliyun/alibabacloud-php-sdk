<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelBatchGetHotelDetailResponseBody\data\hotels\roomTypes;

use AlibabaCloud\Dara\Model;

class facilities extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var mixed[]
     */
    public $subItems;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'description' => 'Description',
        'name' => 'Name',
        'subItems' => 'SubItems',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->subItems)) {
            Model::validateArray($this->subItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->subItems) {
            if (\is_array($this->subItems)) {
                $res['SubItems'] = [];
                $n1 = 0;
                foreach ($this->subItems as $item1) {
                    $res['SubItems'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['SubItems'])) {
            if (!empty($map['SubItems'])) {
                $model->subItems = [];
                $n1 = 0;
                foreach ($map['SubItems'] as $item1) {
                    $model->subItems[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

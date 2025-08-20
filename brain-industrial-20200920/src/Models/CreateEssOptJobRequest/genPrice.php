<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\CreateEssOptJobRequest;

use AlibabaCloud\Dara\Model;

class genPrice extends Model
{
    /**
     * @var string
     */
    public $dataTime;

    /**
     * @var string
     */
    public $price;
    protected $_name = [
        'dataTime' => 'DataTime',
        'price' => 'Price',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataTime) {
            $res['DataTime'] = $this->dataTime;
        }

        if (null !== $this->price) {
            $res['Price'] = $this->price;
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
        if (isset($map['DataTime'])) {
            $model->dataTime = $map['DataTime'];
        }

        if (isset($map['Price'])) {
            $model->price = $map['Price'];
        }

        return $model;
    }
}

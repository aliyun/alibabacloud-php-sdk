<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\CreateEssOptJobRequest;

use AlibabaCloud\Tea\Model;

class elecPrice extends Model
{
    /**
     * @example 00:00:15
     *
     * @var string
     */
    public $dataTime;

    /**
     * @example 0.5
     *
     * @var string
     */
    public $price;
    protected $_name = [
        'dataTime' => 'DataTime',
        'price' => 'Price',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return elecPrice
     */
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

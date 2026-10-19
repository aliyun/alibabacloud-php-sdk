<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelStudio\V20260210\Models\ListModelsResponseBody\models\prices;

use AlibabaCloud\Dara\Model;

class prices extends Model
{
    /**
     * @var string
     */
    public $price;

    /**
     * @var string
     */
    public $priceName;

    /**
     * @var string
     */
    public $priceUnit;

    /**
     * @var string
     */
    public $timeBand;
    protected $_name = [
        'price' => 'price',
        'priceName' => 'priceName',
        'priceUnit' => 'priceUnit',
        'timeBand' => 'timeBand',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->price) {
            $res['price'] = $this->price;
        }

        if (null !== $this->priceName) {
            $res['priceName'] = $this->priceName;
        }

        if (null !== $this->priceUnit) {
            $res['priceUnit'] = $this->priceUnit;
        }

        if (null !== $this->timeBand) {
            $res['timeBand'] = $this->timeBand;
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
        if (isset($map['price'])) {
            $model->price = $map['price'];
        }

        if (isset($map['priceName'])) {
            $model->priceName = $map['priceName'];
        }

        if (isset($map['priceUnit'])) {
            $model->priceUnit = $map['priceUnit'];
        }

        if (isset($map['timeBand'])) {
            $model->timeBand = $map['timeBand'];
        }

        return $model;
    }
}

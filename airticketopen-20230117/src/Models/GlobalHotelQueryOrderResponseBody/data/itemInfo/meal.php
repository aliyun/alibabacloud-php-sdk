<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelQueryOrderResponseBody\data\itemInfo;

use AlibabaCloud\Dara\Model;

class meal extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $mealType;

    /**
     * @var string
     */
    public $tracerId;
    protected $_name = [
        'description' => 'Description',
        'mealType' => 'MealType',
        'tracerId' => 'TracerId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->mealType) {
            $res['MealType'] = $this->mealType;
        }

        if (null !== $this->tracerId) {
            $res['TracerId'] = $this->tracerId;
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

        if (isset($map['MealType'])) {
            $model->mealType = $map['MealType'];
        }

        if (isset($map['TracerId'])) {
            $model->tracerId = $map['TracerId'];
        }

        return $model;
    }
}

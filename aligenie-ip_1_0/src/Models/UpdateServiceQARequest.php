<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Dara\Model;

class UpdateServiceQARequest extends Model
{
    /**
     * @var string
     */
    public $answer;

    /**
     * @var string
     */
    public $hotelId;

    /**
     * @var int
     */
    public $serviceQAId;

    /**
     * @var bool
     */
    public $isActive;
    protected $_name = [
        'answer' => 'Answer',
        'hotelId' => 'HotelId',
        'serviceQAId' => 'ServiceQAId',
        'isActive' => 'isActive',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->answer) {
            $res['Answer'] = $this->answer;
        }

        if (null !== $this->hotelId) {
            $res['HotelId'] = $this->hotelId;
        }

        if (null !== $this->serviceQAId) {
            $res['ServiceQAId'] = $this->serviceQAId;
        }

        if (null !== $this->isActive) {
            $res['isActive'] = $this->isActive;
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
        if (isset($map['Answer'])) {
            $model->answer = $map['Answer'];
        }

        if (isset($map['HotelId'])) {
            $model->hotelId = $map['HotelId'];
        }

        if (isset($map['ServiceQAId'])) {
            $model->serviceQAId = $map['ServiceQAId'];
        }

        if (isset($map['isActive'])) {
            $model->isActive = $map['isActive'];
        }

        return $model;
    }
}

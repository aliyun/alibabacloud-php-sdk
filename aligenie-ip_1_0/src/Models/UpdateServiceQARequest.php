<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Tea\Model;

class UpdateServiceQARequest extends Model
{
    /**
     * @var string
     */
    public $answer;

    /**
     * @example af7***536
     *
     * @var string
     */
    public $hotelId;

    /**
     * @example 1
     *
     * @var int
     */
    public $serviceQAId;

    /**
     * @example true
     *
     * @var bool
     */
    public $isActive;
    protected $_name = [
        'answer'      => 'Answer',
        'hotelId'     => 'HotelId',
        'serviceQAId' => 'ServiceQAId',
        'isActive'    => 'isActive',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return UpdateServiceQARequest
     */
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

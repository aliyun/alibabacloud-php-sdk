<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Dara\Model;

class DeleteCustomQARequest extends Model
{
    /**
     * @var string[]
     */
    public $customQAIds;

    /**
     * @var string
     */
    public $hotelId;
    protected $_name = [
        'customQAIds' => 'CustomQAIds',
        'hotelId' => 'HotelId',
    ];

    public function validate()
    {
        if (\is_array($this->customQAIds)) {
            Model::validateArray($this->customQAIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customQAIds) {
            if (\is_array($this->customQAIds)) {
                $res['CustomQAIds'] = [];
                $n1 = 0;
                foreach ($this->customQAIds as $item1) {
                    $res['CustomQAIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->hotelId) {
            $res['HotelId'] = $this->hotelId;
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
        if (isset($map['CustomQAIds'])) {
            if (!empty($map['CustomQAIds'])) {
                $model->customQAIds = [];
                $n1 = 0;
                foreach ($map['CustomQAIds'] as $item1) {
                    $model->customQAIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['HotelId'])) {
            $model->hotelId = $map['HotelId'];
        }

        return $model;
    }
}

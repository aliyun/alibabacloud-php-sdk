<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Tea\Model;

class DeleteCustomQARequest extends Model
{
    /**
     * @var string[]
     */
    public $customQAIds;

    /**
     * @example a7a3***013
     *
     * @var string
     */
    public $hotelId;
    protected $_name = [
        'customQAIds' => 'CustomQAIds',
        'hotelId'     => 'HotelId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customQAIds) {
            $res['CustomQAIds'] = $this->customQAIds;
        }
        if (null !== $this->hotelId) {
            $res['HotelId'] = $this->hotelId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteCustomQARequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomQAIds'])) {
            if (!empty($map['CustomQAIds'])) {
                $model->customQAIds = $map['CustomQAIds'];
            }
        }
        if (isset($map['HotelId'])) {
            $model->hotelId = $map['HotelId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelInfoResponseBody;

use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelInfoResponseBody\result\authAccount;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var authAccount[]
     */
    public $authAccount;

    /**
     * @var string
     */
    public $hotelAddress;

    /**
     * @example cf2446fc9d144c85aaee4f9ae20a96e7
     *
     * @var string
     */
    public $hotelId;

    /**
     * @var string
     */
    public $hotelName;
    protected $_name = [
        'authAccount'  => 'AuthAccount',
        'hotelAddress' => 'HotelAddress',
        'hotelId'      => 'HotelId',
        'hotelName'    => 'HotelName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authAccount) {
            $res['AuthAccount'] = [];
            if (null !== $this->authAccount && \is_array($this->authAccount)) {
                $n = 0;
                foreach ($this->authAccount as $item) {
                    $res['AuthAccount'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->hotelAddress) {
            $res['HotelAddress'] = $this->hotelAddress;
        }
        if (null !== $this->hotelId) {
            $res['HotelId'] = $this->hotelId;
        }
        if (null !== $this->hotelName) {
            $res['HotelName'] = $this->hotelName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthAccount'])) {
            if (!empty($map['AuthAccount'])) {
                $model->authAccount = [];
                $n                  = 0;
                foreach ($map['AuthAccount'] as $item) {
                    $model->authAccount[$n++] = null !== $item ? authAccount::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['HotelAddress'])) {
            $model->hotelAddress = $map['HotelAddress'];
        }
        if (isset($map['HotelId'])) {
            $model->hotelId = $map['HotelId'];
        }
        if (isset($map['HotelName'])) {
            $model->hotelName = $map['HotelName'];
        }

        return $model;
    }
}

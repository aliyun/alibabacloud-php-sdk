<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelInfoResponseBody\result\authAccount;

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
     * @var string
     */
    public $hotelId;

    /**
     * @var string
     */
    public $hotelName;
    protected $_name = [
        'authAccount' => 'AuthAccount',
        'hotelAddress' => 'HotelAddress',
        'hotelId' => 'HotelId',
        'hotelName' => 'HotelName',
    ];

    public function validate()
    {
        if (\is_array($this->authAccount)) {
            Model::validateArray($this->authAccount);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authAccount) {
            if (\is_array($this->authAccount)) {
                $res['AuthAccount'] = [];
                $n1 = 0;
                foreach ($this->authAccount as $item1) {
                    $res['AuthAccount'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthAccount'])) {
            if (!empty($map['AuthAccount'])) {
                $model->authAccount = [];
                $n1 = 0;
                foreach ($map['AuthAccount'] as $item1) {
                    $model->authAccount[$n1] = authAccount::fromMap($item1);
                    ++$n1;
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

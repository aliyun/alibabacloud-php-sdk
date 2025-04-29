<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class HotelStaticInfoRequest extends Model
{
    /**
     * @var string[]
     */
    public $hotelIds;
    protected $_name = [
        'hotelIds' => 'hotel_ids',
    ];

    public function validate()
    {
        if (\is_array($this->hotelIds)) {
            Model::validateArray($this->hotelIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hotelIds) {
            if (\is_array($this->hotelIds)) {
                $res['hotel_ids'] = [];
                $n1 = 0;
                foreach ($this->hotelIds as $item1) {
                    $res['hotel_ids'][$n1++] = $item1;
                }
            }
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
        if (isset($map['hotel_ids'])) {
            if (!empty($map['hotel_ids'])) {
                $model->hotelIds = [];
                $n1 = 0;
                foreach ($map['hotel_ids'] as $item1) {
                    $model->hotelIds[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}

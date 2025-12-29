<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelHomeBackImageAndModesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelHomeBackImageAndModesResponseBody\result\modeList;

class result extends Model
{
    /**
     * @var string
     */
    public $backgroundImage;

    /**
     * @var string
     */
    public $hotelName;

    /**
     * @var modeList[]
     */
    public $modeList;
    protected $_name = [
        'backgroundImage' => 'BackgroundImage',
        'hotelName' => 'HotelName',
        'modeList' => 'ModeList',
    ];

    public function validate()
    {
        if (\is_array($this->modeList)) {
            Model::validateArray($this->modeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backgroundImage) {
            $res['BackgroundImage'] = $this->backgroundImage;
        }

        if (null !== $this->hotelName) {
            $res['HotelName'] = $this->hotelName;
        }

        if (null !== $this->modeList) {
            if (\is_array($this->modeList)) {
                $res['ModeList'] = [];
                $n1 = 0;
                foreach ($this->modeList as $item1) {
                    $res['ModeList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['BackgroundImage'])) {
            $model->backgroundImage = $map['BackgroundImage'];
        }

        if (isset($map['HotelName'])) {
            $model->hotelName = $map['HotelName'];
        }

        if (isset($map['ModeList'])) {
            if (!empty($map['ModeList'])) {
                $model->modeList = [];
                $n1 = 0;
                foreach ($map['ModeList'] as $item1) {
                    $model->modeList[$n1] = modeList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

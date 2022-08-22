<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelHomeBackImageAndModesResponseBody;

use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelHomeBackImageAndModesResponseBody\result\modeList;
use AlibabaCloud\Tea\Model;

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
        'hotelName'       => 'HotelName',
        'modeList'        => 'ModeList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backgroundImage) {
            $res['BackgroundImage'] = $this->backgroundImage;
        }
        if (null !== $this->hotelName) {
            $res['HotelName'] = $this->hotelName;
        }
        if (null !== $this->modeList) {
            $res['ModeList'] = [];
            if (null !== $this->modeList && \is_array($this->modeList)) {
                $n = 0;
                foreach ($this->modeList as $item) {
                    $res['ModeList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['BackgroundImage'])) {
            $model->backgroundImage = $map['BackgroundImage'];
        }
        if (isset($map['HotelName'])) {
            $model->hotelName = $map['HotelName'];
        }
        if (isset($map['ModeList'])) {
            if (!empty($map['ModeList'])) {
                $model->modeList = [];
                $n               = 0;
                foreach ($map['ModeList'] as $item) {
                    $model->modeList[$n++] = null !== $item ? modeList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

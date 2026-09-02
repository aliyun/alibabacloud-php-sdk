<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelBatchGetHotelDetailResponseBody\data\hotels\roomTypes\bedGroups;

use AlibabaCloud\Dara\Model;

class bedInfos extends Model
{
    /**
     * @var int
     */
    public $bedCount;

    /**
     * @var string
     */
    public $bedNameCn;

    /**
     * @var string
     */
    public $bedNameEn;

    /**
     * @var string
     */
    public $bedSize;

    /**
     * @var string
     */
    public $bedType;
    protected $_name = [
        'bedCount' => 'BedCount',
        'bedNameCn' => 'BedNameCn',
        'bedNameEn' => 'BedNameEn',
        'bedSize' => 'BedSize',
        'bedType' => 'BedType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bedCount) {
            $res['BedCount'] = $this->bedCount;
        }

        if (null !== $this->bedNameCn) {
            $res['BedNameCn'] = $this->bedNameCn;
        }

        if (null !== $this->bedNameEn) {
            $res['BedNameEn'] = $this->bedNameEn;
        }

        if (null !== $this->bedSize) {
            $res['BedSize'] = $this->bedSize;
        }

        if (null !== $this->bedType) {
            $res['BedType'] = $this->bedType;
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
        if (isset($map['BedCount'])) {
            $model->bedCount = $map['BedCount'];
        }

        if (isset($map['BedNameCn'])) {
            $model->bedNameCn = $map['BedNameCn'];
        }

        if (isset($map['BedNameEn'])) {
            $model->bedNameEn = $map['BedNameEn'];
        }

        if (isset($map['BedSize'])) {
            $model->bedSize = $map['BedSize'];
        }

        if (isset($map['BedType'])) {
            $model->bedType = $map['BedType'];
        }

        return $model;
    }
}

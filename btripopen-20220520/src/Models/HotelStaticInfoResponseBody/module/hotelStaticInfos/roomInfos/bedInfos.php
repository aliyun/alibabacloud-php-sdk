<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelStaticInfoResponseBody\module\hotelStaticInfos\roomInfos;

use AlibabaCloud\Tea\Model;

class bedInfos extends Model
{
    /**
     * @var string
     */
    public $bedDesc;

    /**
     * @example 1
     *
     * @var int
     */
    public $bedNum;

    /**
     * @example 1.8m
     *
     * @var string
     */
    public $bedSize;

    /**
     * @example 0
     *
     * @var string
     */
    public $bedType;

    /**
     * @var string
     */
    public $length;

    /**
     * @var string
     */
    public $width;
    protected $_name = [
        'bedDesc' => 'bed_desc',
        'bedNum'  => 'bed_num',
        'bedSize' => 'bed_size',
        'bedType' => 'bed_type',
        'length'  => 'length',
        'width'   => 'width',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bedDesc) {
            $res['bed_desc'] = $this->bedDesc;
        }
        if (null !== $this->bedNum) {
            $res['bed_num'] = $this->bedNum;
        }
        if (null !== $this->bedSize) {
            $res['bed_size'] = $this->bedSize;
        }
        if (null !== $this->bedType) {
            $res['bed_type'] = $this->bedType;
        }
        if (null !== $this->length) {
            $res['length'] = $this->length;
        }
        if (null !== $this->width) {
            $res['width'] = $this->width;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bedInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['bed_desc'])) {
            $model->bedDesc = $map['bed_desc'];
        }
        if (isset($map['bed_num'])) {
            $model->bedNum = $map['bed_num'];
        }
        if (isset($map['bed_size'])) {
            $model->bedSize = $map['bed_size'];
        }
        if (isset($map['bed_type'])) {
            $model->bedType = $map['bed_type'];
        }
        if (isset($map['length'])) {
            $model->length = $map['length'];
        }
        if (isset($map['width'])) {
            $model->width = $map['width'];
        }

        return $model;
    }
}

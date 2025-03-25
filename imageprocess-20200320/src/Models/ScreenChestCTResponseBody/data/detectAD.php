<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data;

use AlibabaCloud\Dara\Model;

class detectAD extends Model
{
    /**
     * @var string
     */
    public $distanceMap;

    /**
     * @var string
     */
    public $mask;

    /**
     * @var string
     */
    public $possibility;

    /**
     * @var string
     */
    public $seriesInstanceUid;

    /**
     * @var int
     */
    public $sliceVal;
    protected $_name = [
        'distanceMap' => 'DistanceMap',
        'mask' => 'Mask',
        'possibility' => 'Possibility',
        'seriesInstanceUid' => 'SeriesInstanceUid',
        'sliceVal' => 'SliceVal',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->distanceMap) {
            $res['DistanceMap'] = $this->distanceMap;
        }

        if (null !== $this->mask) {
            $res['Mask'] = $this->mask;
        }

        if (null !== $this->possibility) {
            $res['Possibility'] = $this->possibility;
        }

        if (null !== $this->seriesInstanceUid) {
            $res['SeriesInstanceUid'] = $this->seriesInstanceUid;
        }

        if (null !== $this->sliceVal) {
            $res['SliceVal'] = $this->sliceVal;
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
        if (isset($map['DistanceMap'])) {
            $model->distanceMap = $map['DistanceMap'];
        }

        if (isset($map['Mask'])) {
            $model->mask = $map['Mask'];
        }

        if (isset($map['Possibility'])) {
            $model->possibility = $map['Possibility'];
        }

        if (isset($map['SeriesInstanceUid'])) {
            $model->seriesInstanceUid = $map['SeriesInstanceUid'];
        }

        if (isset($map['SliceVal'])) {
            $model->sliceVal = $map['SliceVal'];
        }

        return $model;
    }
}

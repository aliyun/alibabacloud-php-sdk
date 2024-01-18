<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\OrderDetailResponseBody\data\flightItemDetailList;

use AlibabaCloud\Tea\Model;

class flightSegmentCabinRelation extends Model
{
    /**
     * @example V
     *
     * @var string
     */
    public $cabin;

    /**
     * @example Y
     *
     * @var string
     */
    public $cabinClass;

    /**
     * @example economy class
     *
     * @var string
     */
    public $cabinClassName;

    /**
     * @example A
     *
     * @var string
     */
    public $cabinQuantity;

    /**
     * @example HO1295-PVG-MFM-20230310
     *
     * @var string
     */
    public $segmentId;
    protected $_name = [
        'cabin'          => 'cabin',
        'cabinClass'     => 'cabin_class',
        'cabinClassName' => 'cabin_class_name',
        'cabinQuantity'  => 'cabin_quantity',
        'segmentId'      => 'segment_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cabin) {
            $res['cabin'] = $this->cabin;
        }
        if (null !== $this->cabinClass) {
            $res['cabin_class'] = $this->cabinClass;
        }
        if (null !== $this->cabinClassName) {
            $res['cabin_class_name'] = $this->cabinClassName;
        }
        if (null !== $this->cabinQuantity) {
            $res['cabin_quantity'] = $this->cabinQuantity;
        }
        if (null !== $this->segmentId) {
            $res['segment_id'] = $this->segmentId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flightSegmentCabinRelation
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cabin'])) {
            $model->cabin = $map['cabin'];
        }
        if (isset($map['cabin_class'])) {
            $model->cabinClass = $map['cabin_class'];
        }
        if (isset($map['cabin_class_name'])) {
            $model->cabinClassName = $map['cabin_class_name'];
        }
        if (isset($map['cabin_quantity'])) {
            $model->cabinQuantity = $map['cabin_quantity'];
        }
        if (isset($map['segment_id'])) {
            $model->segmentId = $map['segment_id'];
        }

        return $model;
    }
}

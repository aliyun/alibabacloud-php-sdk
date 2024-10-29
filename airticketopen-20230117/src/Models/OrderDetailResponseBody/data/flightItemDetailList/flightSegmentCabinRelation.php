<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\OrderDetailResponseBody\data\flightItemDetailList;

use AlibabaCloud\Tea\Model;

class flightSegmentCabinRelation extends Model
{
    /**
     * @description RBD
     *
     * @example V
     *
     * @var string
     */
    public $cabin;

    /**
     * @description cabin class
     *
     * @example Y
     *
     * @var string
     */
    public $cabinClass;

    /**
     * @description cabin class description
     *
     * @example economy class
     *
     * @var string
     */
    public $cabinClassName;

    /**
     * @description availability
     *
     * @example A
     *
     * @var string
     */
    public $cabinQuantity;

    /**
     * @description segment ID format: flight no.+departure airport[IATA airport code]+arrival airport[IATA airport code]+departure time(yyMMddHHmm)
     *
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

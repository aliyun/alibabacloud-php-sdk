<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models;

use AlibabaCloud\Tea\Model;

class SearchShrinkRequest extends Model
{
    /**
     * @example 2
     *
     * @var int
     */
    public $adults;

    /**
     * @var string
     */
    public $airLegsShrink;

    /**
     * @example ALL_CABIN
     *
     * @var string
     */
    public $cabinClass;

    /**
     * @example 1
     *
     * @var int
     */
    public $children;

    /**
     * @example 1
     *
     * @var int
     */
    public $infants;
    protected $_name = [
        'adults'        => 'adults',
        'airLegsShrink' => 'air_legs',
        'cabinClass'    => 'cabin_class',
        'children'      => 'children',
        'infants'       => 'infants',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adults) {
            $res['adults'] = $this->adults;
        }
        if (null !== $this->airLegsShrink) {
            $res['air_legs'] = $this->airLegsShrink;
        }
        if (null !== $this->cabinClass) {
            $res['cabin_class'] = $this->cabinClass;
        }
        if (null !== $this->children) {
            $res['children'] = $this->children;
        }
        if (null !== $this->infants) {
            $res['infants'] = $this->infants;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['adults'])) {
            $model->adults = $map['adults'];
        }
        if (isset($map['air_legs'])) {
            $model->airLegsShrink = $map['air_legs'];
        }
        if (isset($map['cabin_class'])) {
            $model->cabinClass = $map['cabin_class'];
        }
        if (isset($map['children'])) {
            $model->children = $map['children'];
        }
        if (isset($map['infants'])) {
            $model->infants = $map['infants'];
        }

        return $model;
    }
}

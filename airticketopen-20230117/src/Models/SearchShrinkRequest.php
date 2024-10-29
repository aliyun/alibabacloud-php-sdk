<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models;

use AlibabaCloud\Tea\Model;

class SearchShrinkRequest extends Model
{
    /**
     * @description adult passenger amount 1-9
     *
     * @example 2
     *
     * @var int
     */
    public $adults;

    /**
     * @description itinerary list
     *
     * This parameter is required.
     * @var string
     */
    public $airLegsShrink;

    /**
     * @description cabin class
     * 1. **ALL_CABIN** : all cabin class
     * 2. **Y** : economy class
     * 3. **FC** : first class and business class
     * 4. **S** : premium economy class
     * 5. **YS** : economy class and premium economy class
     * 6. **YSC** : economy class, premium economy class and business class
     * @example ALL_CABIN
     *
     * @var string
     */
    public $cabinClass;

    /**
     * @description child passenger amount 0-9
     *
     * @example 1
     *
     * @var int
     */
    public $children;

    /**
     * @description infant passenger amount 0-9
     *
     * @example 1
     *
     * @var int
     */
    public $infants;

    /**
     * @description search controls
     *
     * @var string
     */
    public $searchControlOptionsShrink;
    protected $_name = [
        'adults'                     => 'adults',
        'airLegsShrink'              => 'air_legs',
        'cabinClass'                 => 'cabin_class',
        'children'                   => 'children',
        'infants'                    => 'infants',
        'searchControlOptionsShrink' => 'search_control_options',
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
        if (null !== $this->searchControlOptionsShrink) {
            $res['search_control_options'] = $this->searchControlOptionsShrink;
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
        if (isset($map['search_control_options'])) {
            $model->searchControlOptionsShrink = $map['search_control_options'];
        }

        return $model;
    }
}

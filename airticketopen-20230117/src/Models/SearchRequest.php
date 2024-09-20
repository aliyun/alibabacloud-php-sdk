<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models;

use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\SearchRequest\airLegs;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\SearchRequest\searchControlOptions;
use AlibabaCloud\Tea\Model;

class SearchRequest extends Model
{
    /**
     * @example 2
     *
     * @var int
     */
    public $adults;

    /**
     * @description This parameter is required.
     *
     * @var airLegs[]
     */
    public $airLegs;

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

    /**
     * @var searchControlOptions
     */
    public $searchControlOptions;
    protected $_name = [
        'adults'               => 'adults',
        'airLegs'              => 'air_legs',
        'cabinClass'           => 'cabin_class',
        'children'             => 'children',
        'infants'              => 'infants',
        'searchControlOptions' => 'search_control_options',
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
        if (null !== $this->airLegs) {
            $res['air_legs'] = [];
            if (null !== $this->airLegs && \is_array($this->airLegs)) {
                $n = 0;
                foreach ($this->airLegs as $item) {
                    $res['air_legs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->searchControlOptions) {
            $res['search_control_options'] = null !== $this->searchControlOptions ? $this->searchControlOptions->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['adults'])) {
            $model->adults = $map['adults'];
        }
        if (isset($map['air_legs'])) {
            if (!empty($map['air_legs'])) {
                $model->airLegs = [];
                $n              = 0;
                foreach ($map['air_legs'] as $item) {
                    $model->airLegs[$n++] = null !== $item ? airLegs::fromMap($item) : $item;
                }
            }
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
            $model->searchControlOptions = searchControlOptions::fromMap($map['search_control_options']);
        }

        return $model;
    }
}

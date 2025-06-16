<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models;

use AlibabaCloud\Dara\Model;

class SearchShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $adults;

    /**
     * @var string
     */
    public $airLegsShrink;

    /**
     * @var string
     */
    public $cabinClass;

    /**
     * @var int
     */
    public $children;

    /**
     * @var int
     */
    public $infants;

    /**
     * @var string
     */
    public $searchControlOptionsShrink;
    protected $_name = [
        'adults' => 'adults',
        'airLegsShrink' => 'air_legs',
        'cabinClass' => 'cabin_class',
        'children' => 'children',
        'infants' => 'infants',
        'searchControlOptionsShrink' => 'search_control_options',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

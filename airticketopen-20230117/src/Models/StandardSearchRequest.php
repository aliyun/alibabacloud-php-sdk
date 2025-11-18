<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\StandardSearchRequest\airLegs;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\StandardSearchRequest\searchControlOptions;

class StandardSearchRequest extends Model
{
    /**
     * @var int
     */
    public $adults;

    /**
     * @var airLegs[]
     */
    public $airLegs;

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
     * @var searchControlOptions
     */
    public $searchControlOptions;
    protected $_name = [
        'adults' => 'adults',
        'airLegs' => 'air_legs',
        'cabinClass' => 'cabin_class',
        'children' => 'children',
        'infants' => 'infants',
        'searchControlOptions' => 'search_control_options',
    ];

    public function validate()
    {
        if (\is_array($this->airLegs)) {
            Model::validateArray($this->airLegs);
        }
        if (null !== $this->searchControlOptions) {
            $this->searchControlOptions->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adults) {
            $res['adults'] = $this->adults;
        }

        if (null !== $this->airLegs) {
            if (\is_array($this->airLegs)) {
                $res['air_legs'] = [];
                $n1 = 0;
                foreach ($this->airLegs as $item1) {
                    $res['air_legs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            $res['search_control_options'] = null !== $this->searchControlOptions ? $this->searchControlOptions->toArray($noStream) : $this->searchControlOptions;
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
            if (!empty($map['air_legs'])) {
                $model->airLegs = [];
                $n1 = 0;
                foreach ($map['air_legs'] as $item1) {
                    $model->airLegs[$n1] = airLegs::fromMap($item1);
                    ++$n1;
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

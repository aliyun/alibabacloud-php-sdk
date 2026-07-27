<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetKgNeighborRequest;

use AlibabaCloud\Dara\Model;

class neighborsQuery extends Model
{
    /**
     * @var int
     */
    public $depth;

    /**
     * @var string
     */
    public $directionType;

    /**
     * @var string[]
     */
    public $relationTypes;
    protected $_name = [
        'depth' => 'Depth',
        'directionType' => 'DirectionType',
        'relationTypes' => 'RelationTypes',
    ];

    public function validate()
    {
        if (\is_array($this->relationTypes)) {
            Model::validateArray($this->relationTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->depth) {
            $res['Depth'] = $this->depth;
        }

        if (null !== $this->directionType) {
            $res['DirectionType'] = $this->directionType;
        }

        if (null !== $this->relationTypes) {
            if (\is_array($this->relationTypes)) {
                $res['RelationTypes'] = [];
                $n1 = 0;
                foreach ($this->relationTypes as $item1) {
                    $res['RelationTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Depth'])) {
            $model->depth = $map['Depth'];
        }

        if (isset($map['DirectionType'])) {
            $model->directionType = $map['DirectionType'];
        }

        if (isset($map['RelationTypes'])) {
            if (!empty($map['RelationTypes'])) {
                $model->relationTypes = [];
                $n1 = 0;
                foreach ($map['RelationTypes'] as $item1) {
                    $model->relationTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

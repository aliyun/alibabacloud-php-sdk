<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVehicleIllegalParkingResponseBody\data;

use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVehicleIllegalParkingResponseBody\data\elements\boxes;
use AlibabaCloud\Tea\Model;

class elements extends Model
{
    /**
     * @var boxes[]
     */
    public $boxes;

    /**
     * @var int
     */
    public $id;

    /**
     * @var float
     */
    public $score;

    /**
     * @var string
     */
    public $typeName;
    protected $_name = [
        'boxes'    => 'Boxes',
        'id'       => 'Id',
        'score'    => 'Score',
        'typeName' => 'TypeName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->boxes) {
            $res['Boxes'] = [];
            if (null !== $this->boxes && \is_array($this->boxes)) {
                $n = 0;
                foreach ($this->boxes as $item) {
                    $res['Boxes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->typeName) {
            $res['TypeName'] = $this->typeName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return elements
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Boxes'])) {
            if (!empty($map['Boxes'])) {
                $model->boxes = [];
                $n            = 0;
                foreach ($map['Boxes'] as $item) {
                    $model->boxes[$n++] = null !== $item ? boxes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['TypeName'])) {
            $model->typeName = $map['TypeName'];
        }

        return $model;
    }
}

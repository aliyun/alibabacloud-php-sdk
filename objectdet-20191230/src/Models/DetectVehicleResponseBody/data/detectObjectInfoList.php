<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVehicleResponseBody\data;

use AlibabaCloud\Tea\Model;

class detectObjectInfoList extends Model
{
    /**
     * @var int[]
     */
    public $boxes;

    /**
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @example 0.897
     *
     * @var float
     */
    public $score;

    /**
     * @example vehicle
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'boxes' => 'Boxes',
        'id'    => 'Id',
        'score' => 'Score',
        'type'  => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->boxes) {
            $res['Boxes'] = $this->boxes;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detectObjectInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Boxes'])) {
            if (!empty($map['Boxes'])) {
                $model->boxes = $map['Boxes'];
            }
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

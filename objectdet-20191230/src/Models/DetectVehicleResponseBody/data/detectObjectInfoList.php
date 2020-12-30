<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVehicleResponseBody\data;

use AlibabaCloud\Tea\Model;

class detectObjectInfoList extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var int[]
     */
    public $boxes;

    /**
     * @var float
     */
    public $score;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'type'  => 'Type',
        'boxes' => 'Boxes',
        'score' => 'Score',
        'id'    => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->boxes) {
            $res['Boxes'] = $this->boxes;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Boxes'])) {
            if (!empty($map['Boxes'])) {
                $model->boxes = $map['Boxes'];
            }
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimGlbModelListResponseBody\datas\buildings;

use AlibabaCloud\Tea\Model;

class floors extends Model
{
    /**
     * @var string
     */
    public $architecture;

    /**
     * @var string
     */
    public $floorNo;

    /**
     * @var string
     */
    public $floorType;

    /**
     * @var string
     */
    public $structure;
    protected $_name = [
        'architecture' => 'Architecture',
        'floorNo'      => 'FloorNo',
        'floorType'    => 'FloorType',
        'structure'    => 'Structure',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->architecture) {
            $res['Architecture'] = $this->architecture;
        }
        if (null !== $this->floorNo) {
            $res['FloorNo'] = $this->floorNo;
        }
        if (null !== $this->floorType) {
            $res['FloorType'] = $this->floorType;
        }
        if (null !== $this->structure) {
            $res['Structure'] = $this->structure;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return floors
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Architecture'])) {
            $model->architecture = $map['Architecture'];
        }
        if (isset($map['FloorNo'])) {
            $model->floorNo = $map['FloorNo'];
        }
        if (isset($map['FloorType'])) {
            $model->floorType = $map['FloorType'];
        }
        if (isset($map['Structure'])) {
            $model->structure = $map['Structure'];
        }

        return $model;
    }
}

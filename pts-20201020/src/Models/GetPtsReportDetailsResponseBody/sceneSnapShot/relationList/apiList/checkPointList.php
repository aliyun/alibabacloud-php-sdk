<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsReportDetailsResponseBody\sceneSnapShot\relationList\apiList;

use AlibabaCloud\Tea\Model;

class checkPointList extends Model
{
    /**
     * @var string
     */
    public $checkPoint;

    /**
     * @var string
     */
    public $checkType;

    /**
     * @var string
     */
    public $expectValue;

    /**
     * @var string
     */
    public $operator;
    protected $_name = [
        'checkPoint'  => 'CheckPoint',
        'checkType'   => 'CheckType',
        'expectValue' => 'ExpectValue',
        'operator'    => 'Operator',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkPoint) {
            $res['CheckPoint'] = $this->checkPoint;
        }
        if (null !== $this->checkType) {
            $res['CheckType'] = $this->checkType;
        }
        if (null !== $this->expectValue) {
            $res['ExpectValue'] = $this->expectValue;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return checkPointList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckPoint'])) {
            $model->checkPoint = $map['CheckPoint'];
        }
        if (isset($map['CheckType'])) {
            $model->checkType = $map['CheckType'];
        }
        if (isset($map['ExpectValue'])) {
            $model->expectValue = $map['ExpectValue'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\SavePtsSceneRequest\scene\relationList\apiList;

use AlibabaCloud\Tea\Model;

class checkPointList extends Model
{
    /**
     * @description 检查对象 type=HEADER 时，表示header中的字段，type=EXPORTED_PARAM ，表示出参名
     *
     * @var string
     */
    public $checkPoint;

    /**
     * @description 检查点类型 响应body(BODY_TEXT)，响应header(HEADER)， 响应状态码(STATUS_CODE) ，出参（EXPORTED_PARAM）
     *
     * @var string
     */
    public $checkType;

    /**
     * @description 检查内容，即期望值
     *
     * @var string
     */
    public $expectValue;

    /**
     * @description 检查条件 CheckPointOperator 中
     *
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

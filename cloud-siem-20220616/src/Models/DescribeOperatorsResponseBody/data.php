<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeOperatorsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 3
     *
     * @var int
     */
    public $index;

    /**
     * @example <=
     *
     * @var string
     */
    public $operator;

    /**
     * @example arger than or equal to
     *
     * @var string
     */
    public $operatorDescCn;

    /**
     * @example larger than or equal to
     *
     * @var string
     */
    public $operatorDescEn;

    /**
     * @example <=
     *
     * @var string
     */
    public $operatorName;

    /**
     * @example varchar
     *
     * @var string
     */
    public $supportDataType;

    /**
     * @example [AGGREGATE]
     *
     * @var string[]
     */
    public $supportTag;
    protected $_name = [
        'index'           => 'Index',
        'operator'        => 'Operator',
        'operatorDescCn'  => 'OperatorDescCn',
        'operatorDescEn'  => 'OperatorDescEn',
        'operatorName'    => 'OperatorName',
        'supportDataType' => 'SupportDataType',
        'supportTag'      => 'SupportTag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->operatorDescCn) {
            $res['OperatorDescCn'] = $this->operatorDescCn;
        }
        if (null !== $this->operatorDescEn) {
            $res['OperatorDescEn'] = $this->operatorDescEn;
        }
        if (null !== $this->operatorName) {
            $res['OperatorName'] = $this->operatorName;
        }
        if (null !== $this->supportDataType) {
            $res['SupportDataType'] = $this->supportDataType;
        }
        if (null !== $this->supportTag) {
            $res['SupportTag'] = $this->supportTag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['OperatorDescCn'])) {
            $model->operatorDescCn = $map['OperatorDescCn'];
        }
        if (isset($map['OperatorDescEn'])) {
            $model->operatorDescEn = $map['OperatorDescEn'];
        }
        if (isset($map['OperatorName'])) {
            $model->operatorName = $map['OperatorName'];
        }
        if (isset($map['SupportDataType'])) {
            $model->supportDataType = $map['SupportDataType'];
        }
        if (isset($map['SupportTag'])) {
            if (!empty($map['SupportTag'])) {
                $model->supportTag = $map['SupportTag'];
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\ListDeviceFormsResponseBody\deviceForms;

use AlibabaCloud\Tea\Model;

class attributeList extends Model
{
    /**
     * @description 内置属性不可修改和删除
     *
     * @example true
     *
     * @var bool
     */
    public $attributeBuiltIn;

    /**
     * @example ASW,PSW,DSW,CSW,CR,FW,AC/AP,UNKNOWN,AP
     *
     * @var string
     */
    public $attributeContent;

    /**
     * @description 设备形态属性值格式
     *
     * @example STRING
     *
     * @var string
     */
    public $attributeFormat;

    /**
     * @description 前端查询控件是否支持模糊搜索
     *
     * @example false
     *
     * @var bool
     */
    public $attributeFuzzyQuery;

    /**
     * @description 设备形态属性主键
     *
     * @example serviceStatus
     *
     * @var string
     */
    public $attributeKey;

    /**
     * @description 设备形态属性名称
     *
     * @example 服务状态
     *
     * @var string
     */
    public $attributeName;

    /**
     * @description 前端查询控件占位符
     *
     * @example 前端占位符说明
     *
     * @var string
     */
    public $attributePlaceholder;

    /**
     * @description 前端是否展示对应的查询控件
     *
     * @example false
     *
     * @var bool
     */
    public $attributeQuery;

    /**
     * @description 设备形态属性关联对象
     *
     * @example status
     *
     * @var string
     */
    public $attributeReference;

    /**
     * @description 设备形态属性是否必填
     *
     * @example true
     *
     * @var bool
     */
    public $attributeRequirement;

    /**
     * @example 1
     *
     * @var int
     */
    public $attributeSequence;

    /**
     * @description 设备形态属性是否表格可见
     *
     * @example true
     *
     * @var bool
     */
    public $attributeTableDisplay;

    /**
     * @description 设备形态属性值类型
     *
     * @example ENUMS
     *
     * @var string
     */
    public $attributeType;

    /**
     * @description 设备形态属性是否唯一
     *
     * @example false
     *
     * @var bool
     */
    public $attributeUniqueness;
    protected $_name = [
        'attributeBuiltIn'      => 'AttributeBuiltIn',
        'attributeContent'      => 'AttributeContent',
        'attributeFormat'       => 'AttributeFormat',
        'attributeFuzzyQuery'   => 'AttributeFuzzyQuery',
        'attributeKey'          => 'AttributeKey',
        'attributeName'         => 'AttributeName',
        'attributePlaceholder'  => 'AttributePlaceholder',
        'attributeQuery'        => 'AttributeQuery',
        'attributeReference'    => 'AttributeReference',
        'attributeRequirement'  => 'AttributeRequirement',
        'attributeSequence'     => 'AttributeSequence',
        'attributeTableDisplay' => 'AttributeTableDisplay',
        'attributeType'         => 'AttributeType',
        'attributeUniqueness'   => 'AttributeUniqueness',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attributeBuiltIn) {
            $res['AttributeBuiltIn'] = $this->attributeBuiltIn;
        }
        if (null !== $this->attributeContent) {
            $res['AttributeContent'] = $this->attributeContent;
        }
        if (null !== $this->attributeFormat) {
            $res['AttributeFormat'] = $this->attributeFormat;
        }
        if (null !== $this->attributeFuzzyQuery) {
            $res['AttributeFuzzyQuery'] = $this->attributeFuzzyQuery;
        }
        if (null !== $this->attributeKey) {
            $res['AttributeKey'] = $this->attributeKey;
        }
        if (null !== $this->attributeName) {
            $res['AttributeName'] = $this->attributeName;
        }
        if (null !== $this->attributePlaceholder) {
            $res['AttributePlaceholder'] = $this->attributePlaceholder;
        }
        if (null !== $this->attributeQuery) {
            $res['AttributeQuery'] = $this->attributeQuery;
        }
        if (null !== $this->attributeReference) {
            $res['AttributeReference'] = $this->attributeReference;
        }
        if (null !== $this->attributeRequirement) {
            $res['AttributeRequirement'] = $this->attributeRequirement;
        }
        if (null !== $this->attributeSequence) {
            $res['AttributeSequence'] = $this->attributeSequence;
        }
        if (null !== $this->attributeTableDisplay) {
            $res['AttributeTableDisplay'] = $this->attributeTableDisplay;
        }
        if (null !== $this->attributeType) {
            $res['AttributeType'] = $this->attributeType;
        }
        if (null !== $this->attributeUniqueness) {
            $res['AttributeUniqueness'] = $this->attributeUniqueness;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return attributeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttributeBuiltIn'])) {
            $model->attributeBuiltIn = $map['AttributeBuiltIn'];
        }
        if (isset($map['AttributeContent'])) {
            $model->attributeContent = $map['AttributeContent'];
        }
        if (isset($map['AttributeFormat'])) {
            $model->attributeFormat = $map['AttributeFormat'];
        }
        if (isset($map['AttributeFuzzyQuery'])) {
            $model->attributeFuzzyQuery = $map['AttributeFuzzyQuery'];
        }
        if (isset($map['AttributeKey'])) {
            $model->attributeKey = $map['AttributeKey'];
        }
        if (isset($map['AttributeName'])) {
            $model->attributeName = $map['AttributeName'];
        }
        if (isset($map['AttributePlaceholder'])) {
            $model->attributePlaceholder = $map['AttributePlaceholder'];
        }
        if (isset($map['AttributeQuery'])) {
            $model->attributeQuery = $map['AttributeQuery'];
        }
        if (isset($map['AttributeReference'])) {
            $model->attributeReference = $map['AttributeReference'];
        }
        if (isset($map['AttributeRequirement'])) {
            $model->attributeRequirement = $map['AttributeRequirement'];
        }
        if (isset($map['AttributeSequence'])) {
            $model->attributeSequence = $map['AttributeSequence'];
        }
        if (isset($map['AttributeTableDisplay'])) {
            $model->attributeTableDisplay = $map['AttributeTableDisplay'];
        }
        if (isset($map['AttributeType'])) {
            $model->attributeType = $map['AttributeType'];
        }
        if (isset($map['AttributeUniqueness'])) {
            $model->attributeUniqueness = $map['AttributeUniqueness'];
        }

        return $model;
    }
}

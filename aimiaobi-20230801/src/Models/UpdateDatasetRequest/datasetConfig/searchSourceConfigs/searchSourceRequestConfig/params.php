<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\UpdateDatasetRequest\datasetConfig\searchSourceConfigs\searchSourceRequestConfig;

use AlibabaCloud\Tea\Model;

class params extends Model
{
    /**
     * @example 参数名称
     *
     * @var string
     */
    public $name;

    /**
     * @example 参数值
     *
     * @var string
     */
    public $value;

    /**
     * @example valueType = time 时有效
     *
     * @var string
     */
    public $valueFormat;

    /**
     * @example 参数值数据类型: 默认string
     *
     * @var string
     */
    public $valueType;
    protected $_name = [
        'name' => 'Name',
        'value' => 'Value',
        'valueFormat' => 'ValueFormat',
        'valueType' => 'ValueType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->valueFormat) {
            $res['ValueFormat'] = $this->valueFormat;
        }
        if (null !== $this->valueType) {
            $res['ValueType'] = $this->valueType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return params
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['ValueFormat'])) {
            $model->valueFormat = $map['ValueFormat'];
        }
        if (isset($map['ValueType'])) {
            $model->valueType = $map['ValueType'];
        }

        return $model;
    }
}

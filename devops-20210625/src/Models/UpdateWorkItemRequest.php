<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class UpdateWorkItemRequest extends Model
{
    /**
     * @description 更新字段的类型，标题：subject/自定义字段：customField/状态：status/描述：document/基本字段：basic(包括负责人、迭代、参与人等)
     *
     * @var string
     */
    public $fieldType;

    /**
     * @description 工作项唯一标识id
     *
     * @var string
     */
    public $identifier;

    /**
     * @description 更新的字段名
     *
     * @var string
     */
    public $propertyKey;

    /**
     * @description 更新后的值
     *
     * @var string
     */
    public $propertyValue;
    protected $_name = [
        'fieldType'     => 'fieldType',
        'identifier'    => 'identifier',
        'propertyKey'   => 'propertyKey',
        'propertyValue' => 'propertyValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fieldType) {
            $res['fieldType'] = $this->fieldType;
        }
        if (null !== $this->identifier) {
            $res['identifier'] = $this->identifier;
        }
        if (null !== $this->propertyKey) {
            $res['propertyKey'] = $this->propertyKey;
        }
        if (null !== $this->propertyValue) {
            $res['propertyValue'] = $this->propertyValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateWorkItemRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['fieldType'])) {
            $model->fieldType = $map['fieldType'];
        }
        if (isset($map['identifier'])) {
            $model->identifier = $map['identifier'];
        }
        if (isset($map['propertyKey'])) {
            $model->propertyKey = $map['propertyKey'];
        }
        if (isset($map['propertyValue'])) {
            $model->propertyValue = $map['propertyValue'];
        }

        return $model;
    }
}

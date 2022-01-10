<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class UpdateWorkItemRequest extends Model
{
    /**
     * @description 工作项id
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

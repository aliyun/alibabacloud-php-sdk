<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class UpdateWorkItemRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example subject
     *
     * @var string
     */
    public $fieldType;

    /**
     * @description This parameter is required.
     *
     * @example e8b2xxxxxx2abdxxxxxxxx23
     *
     * @var string
     */
    public $identifier;

    /**
     * @description This parameter is required.
     *
     * @example subject
     *
     * @var string
     */
    public $propertyKey;

    /**
     * @description This parameter is required.
     *
     * @example newValue
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class ModifyModelRequest extends Model
{
    /**
     * @description The new definition of the model.
     *
     * @example Model Description
     *
     * @var string
     */
    public $description;

    /**
     * @description The new name of the model.
     *
     * @example 30e792398d6c4569b04c0e53a3494381
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The description of the new model definition.
     *
     * @example Test
     *
     * @var string
     */
    public $modelName;

    /**
     * @description The ID of the request.
     *
     * @example NewTest
     *
     * @var string
     */
    public $newModelName;

    /**
     * @description The ID of the API group to which the model belongs.
     *
     * @example {\"type\":\"object\",\"properties\":{\"id\":{\"format\":\"int64\",\"maximum\":100,\"exclusiveMaximum\":true,\"type\":\"integer\"},\"name\":{\"maxLength\":10,\"type\":\"string\"}}}
     *
     * @var string
     */
    public $schema;
    protected $_name = [
        'description'  => 'Description',
        'groupId'      => 'GroupId',
        'modelName'    => 'ModelName',
        'newModelName' => 'NewModelName',
        'schema'       => 'Schema',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }
        if (null !== $this->newModelName) {
            $res['NewModelName'] = $this->newModelName;
        }
        if (null !== $this->schema) {
            $res['Schema'] = $this->schema;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyModelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }
        if (isset($map['NewModelName'])) {
            $model->newModelName = $map['NewModelName'];
        }
        if (isset($map['Schema'])) {
            $model->schema = $map['Schema'];
        }

        return $model;
    }
}

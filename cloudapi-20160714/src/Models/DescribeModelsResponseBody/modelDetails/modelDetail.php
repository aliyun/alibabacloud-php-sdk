<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeModelsResponseBody\modelDetails;

use AlibabaCloud\Tea\Model;

class modelDetail extends Model
{
    /**
     * @description The URI of the model.
     *
     * @example 2019-01-29T11:07:48Z
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description The name of the model.
     *
     * @example Model Description
     *
     * @var string
     */
    public $description;

    /**
     * @description The definition of the model.
     *
     * @example 30e792398d6c4569b04c0e53a3494381
     *
     * @var string
     */
    public $groupId;

    /**
     * @description *   Fuzzy queries are supported.
     *
     * @example 766c0b9538a04bdf974953b5576783ba
     *
     * @var string
     */
    public $modelId;

    /**
     * @description The ID of the model.
     *
     * @example Test
     *
     * @var string
     */
    public $modelName;

    /**
     * @description Obtains the created models of an API group.
     *
     * @example https://apigateway.aliyun.com/models/30e792398d6c4569b04c0e53a3494381/766c0b9538a04bdf974953b5576783ba
     *
     * @var string
     */
    public $modelRef;

    /**
     * @description The definition of the model description.
     *
     * @example 2019-01-29T11:07:48Z
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description The time when the model was created.
     *
     * @example {\"type\":\"object\",\"properties\":{\"id\":{\"format\":\"int64\",\"maximum\":100,\"exclusiveMaximum\":true,\"type\":\"integer\"},\"name\":{\"maxLength\":10,\"type\":\"string\"}}}
     *
     * @var string
     */
    public $schema;
    protected $_name = [
        'createdTime'  => 'CreatedTime',
        'description'  => 'Description',
        'groupId'      => 'GroupId',
        'modelId'      => 'ModelId',
        'modelName'    => 'ModelName',
        'modelRef'     => 'ModelRef',
        'modifiedTime' => 'ModifiedTime',
        'schema'       => 'Schema',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
        }
        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }
        if (null !== $this->modelRef) {
            $res['ModelRef'] = $this->modelRef;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->schema) {
            $res['Schema'] = $this->schema;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return modelDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }
        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }
        if (isset($map['ModelRef'])) {
            $model->modelRef = $map['ModelRef'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['Schema'])) {
            $model->schema = $map['Schema'];
        }

        return $model;
    }
}

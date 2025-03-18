<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeModelsResponseBody\modelDetails;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeModelsResponseBody\modelDetails\modelDetail\tags;
use AlibabaCloud\Tea\Model;

class modelDetail extends Model
{
    /**
     * @description The time when the model was created.
     *
     * @example 2019-01-29T11:07:48Z
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description The description of the model definition.
     *
     * @example Model Description
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the API group to which the model belongs.
     *
     * @example 30e792398d6c4569b04c0e53a3494381
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The ID of the model.
     *
     * @example 766c0b9538a04bdf974953b5576783ba
     *
     * @var string
     */
    public $modelId;

    /**
     * @description The name of the model.
     *
     * @example Test
     *
     * @var string
     */
    public $modelName;

    /**
     * @description The URI of the model.
     *
     * @example https://apigateway.aliyun.com/models/30e792398d6c4569b04c0e53a3494381/766c0b9538a04bdf974953b5576783ba
     *
     * @var string
     */
    public $modelRef;

    /**
     * @description The time when the model was last modified.
     *
     * @example 2019-01-29T11:07:48Z
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description The definition of the model.
     *
     * @example {\\"type\\":\\"object\\",\\"properties\\":{\\"id\\":{\\"format\\":\\"int64\\",\\"maximum\\":100,\\"exclusiveMaximum\\":true,\\"type\\":\\"integer\\"},\\"name\\":{\\"maxLength\\":10,\\"type\\":\\"string\\"}}}
     *
     * @var string
     */
    public $schema;

    /**
     * @description The tags of the model.
     *
     * @var tags
     */
    public $tags;
    protected $_name = [
        'createdTime' => 'CreatedTime',
        'description' => 'Description',
        'groupId' => 'GroupId',
        'modelId' => 'ModelId',
        'modelName' => 'ModelName',
        'modelRef' => 'ModelRef',
        'modifiedTime' => 'ModifiedTime',
        'schema' => 'Schema',
        'tags' => 'Tags',
    ];

    public function validate() {}

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
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
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
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        return $model;
    }
}

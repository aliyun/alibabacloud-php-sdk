<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class CreateModelResponseBody extends Model
{
    /**
     * @description The time when the model was created.
     *
     * @example 2019-01-29T09:33:01Z
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description The description of the created model.
     *
     * @example Model Description
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the API group to which the created model belongs.
     *
     * @example 30e792398d6c4569b04c0e53a3494381
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The ID of the created model.
     *
     * @example 766c0b9538a04bdf974953b5576783ba
     *
     * @var string
     */
    public $modelId;

    /**
     * @description The name of the created model.
     *
     * @example Test
     *
     * @var string
     */
    public $modelName;

    /**
     * @description The URI of the created model.
     *
     * @example https://apigateway.aliyun.com/models/30e792398d6c4569b04c0e53a3494381/766c0b9538a04bdf974953b5576783ba
     *
     * @var string
     */
    public $modelRef;

    /**
     * @description The time when the model is last modified.
     *
     * @example 2019-01-29T09:33:01Z
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description The region to which the created model belongs.
     *
     * @example cn-qingdao
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the request.
     *
     * @example 4173F95B-360C-460C-9F6C-4A960B904411
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The definition of the created model.
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
        'regionId'     => 'RegionId',
        'requestId'    => 'RequestId',
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->schema) {
            $res['Schema'] = $this->schema;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateModelResponseBody
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Schema'])) {
            $model->schema = $map['Schema'];
        }

        return $model;
    }
}

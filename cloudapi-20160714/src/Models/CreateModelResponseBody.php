<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class CreateModelResponseBody extends Model
{
    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $schema;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $modelId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $modelRef;
    protected $_name = [
        'modifiedTime' => 'ModifiedTime',
        'requestId'    => 'RequestId',
        'description'  => 'Description',
        'groupId'      => 'GroupId',
        'schema'       => 'Schema',
        'modelName'    => 'ModelName',
        'createdTime'  => 'CreatedTime',
        'modelId'      => 'ModelId',
        'regionId'     => 'RegionId',
        'modelRef'     => 'ModelRef',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->schema) {
            $res['Schema'] = $this->schema;
        }
        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->modelRef) {
            $res['ModelRef'] = $this->modelRef;
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
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Schema'])) {
            $model->schema = $map['Schema'];
        }
        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ModelRef'])) {
            $model->modelRef = $map['ModelRef'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EmrStudio\V20240430\Models\DescribeWorkflowResponseBody;

use AlibabaCloud\Dara\Model;

class workflow extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $executionType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $parentDirectoryId;

    /**
     * @var int
     */
    public $timeout;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $workflowId;

    /**
     * @var string
     */
    public $workflowParams;
    protected $_name = [
        'createTime' => 'createTime',
        'description' => 'description',
        'executionType' => 'executionType',
        'name' => 'name',
        'parentDirectoryId' => 'parentDirectoryId',
        'timeout' => 'timeout',
        'updateTime' => 'updateTime',
        'workflowId' => 'workflowId',
        'workflowParams' => 'workflowParams',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->executionType) {
            $res['executionType'] = $this->executionType;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->parentDirectoryId) {
            $res['parentDirectoryId'] = $this->parentDirectoryId;
        }

        if (null !== $this->timeout) {
            $res['timeout'] = $this->timeout;
        }

        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }

        if (null !== $this->workflowId) {
            $res['workflowId'] = $this->workflowId;
        }

        if (null !== $this->workflowParams) {
            $res['workflowParams'] = $this->workflowParams;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['executionType'])) {
            $model->executionType = $map['executionType'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['parentDirectoryId'])) {
            $model->parentDirectoryId = $map['parentDirectoryId'];
        }

        if (isset($map['timeout'])) {
            $model->timeout = $map['timeout'];
        }

        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        if (isset($map['workflowId'])) {
            $model->workflowId = $map['workflowId'];
        }

        if (isset($map['workflowParams'])) {
            $model->workflowParams = $map['workflowParams'];
        }

        return $model;
    }
}

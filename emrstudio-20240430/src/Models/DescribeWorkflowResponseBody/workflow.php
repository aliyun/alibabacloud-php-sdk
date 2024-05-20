<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EmrStudio\V20240430\Models\DescribeWorkflowResponseBody;

use AlibabaCloud\Tea\Model;

class workflow extends Model
{
    /**
     * @example 2024-01-01 00:00:00
     *
     * @var string
     */
    public $createTime;

    /**
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @example PARALLEL
     *
     * @var string
     */
    public $executionType;

    /**
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @example wd-n72kong0832****
     *
     * @var string
     */
    public $parentDirectoryId;

    /**
     * @example 0
     *
     * @var int
     */
    public $timeout;

    /**
     * @example 2024-01-01 00:00:00
     *
     * @var string
     */
    public $updateTime;

    /**
     * @example w-n72kong0832****
     *
     * @var string
     */
    public $workflowId;

    /**
     * @example [{"prop":"key1","value":"value1"}]
     *
     * @var string
     */
    public $workflowParams;
    protected $_name = [
        'createTime'        => 'createTime',
        'description'       => 'description',
        'executionType'     => 'executionType',
        'name'              => 'name',
        'parentDirectoryId' => 'parentDirectoryId',
        'timeout'           => 'timeout',
        'updateTime'        => 'updateTime',
        'workflowId'        => 'workflowId',
        'workflowParams'    => 'workflowParams',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return workflow
     */
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

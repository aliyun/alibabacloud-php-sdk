<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EmrStudio\V20240430\Models\ListWorkflowsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2024-01-01 00:00:00
     *
     * @var string
     */
    public $createTime;

    /**
     * @example workflow description
     *
     * @var string
     */
    public $description;

    /**
     * @example workflow_name
     *
     * @var string
     */
    public $name;

    /**
     * @example wd-3q9jo749ne5****
     *
     * @var string
     */
    public $parentDirectoryId;

    /**
     * @example 2024-01-01 00:00:00
     *
     * @var string
     */
    public $updateTime;

    /**
     * @example w-3q9jo749ne5****
     *
     * @var string
     */
    public $workflowId;
    protected $_name = [
        'createTime'        => 'createTime',
        'description'       => 'description',
        'name'              => 'name',
        'parentDirectoryId' => 'parentDirectoryId',
        'updateTime'        => 'updateTime',
        'workflowId'        => 'workflowId',
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
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->parentDirectoryId) {
            $res['parentDirectoryId'] = $this->parentDirectoryId;
        }
        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }
        if (null !== $this->workflowId) {
            $res['workflowId'] = $this->workflowId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
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
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['parentDirectoryId'])) {
            $model->parentDirectoryId = $map['parentDirectoryId'];
        }
        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }
        if (isset($map['workflowId'])) {
            $model->workflowId = $map['workflowId'];
        }

        return $model;
    }
}

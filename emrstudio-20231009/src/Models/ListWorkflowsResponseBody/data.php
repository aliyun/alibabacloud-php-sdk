<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EmrStudio\V20231009\Models\ListWorkflowsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2023-06-07T02:35:13Z
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
     * @example ONLINE
     *
     * @var string
     */
    public $releaseState;

    /**
     * @example 2023-10-30T14:22:03Z
     *
     * @var string
     */
    public $updateTime;

    /**
     * @example 1231311
     *
     * @var int
     */
    public $workflowId;
    protected $_name = [
        'createTime'   => 'createTime',
        'description'  => 'description',
        'name'         => 'name',
        'releaseState' => 'releaseState',
        'updateTime'   => 'updateTime',
        'workflowId'   => 'workflowId',
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
        if (null !== $this->releaseState) {
            $res['releaseState'] = $this->releaseState;
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
        if (isset($map['releaseState'])) {
            $model->releaseState = $map['releaseState'];
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

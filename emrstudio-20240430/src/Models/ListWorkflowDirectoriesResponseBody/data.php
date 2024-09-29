<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EmrStudio\V20240430\Models\ListWorkflowDirectoriesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example wd-y98v7non5dx****
     *
     * @var string
     */
    public $directoryId;

    /**
     * @example 目录名称。
     *
     * @var string
     */
    public $name;

    /**
     * @example wd-y98v7non5dx****
     *
     * @var string
     */
    public $parentDirectoryId;

    /**
     * @example p-v7n28j0m4ol****
     *
     * @var string
     */
    public $projectId;

    /**
     * @example w-lxyy60mpgpg****
     *
     * @var string
     */
    public $workflowId;
    protected $_name = [
        'directoryId'       => 'directoryId',
        'name'              => 'name',
        'parentDirectoryId' => 'parentDirectoryId',
        'projectId'         => 'projectId',
        'workflowId'        => 'workflowId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->directoryId) {
            $res['directoryId'] = $this->directoryId;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->parentDirectoryId) {
            $res['parentDirectoryId'] = $this->parentDirectoryId;
        }
        if (null !== $this->projectId) {
            $res['projectId'] = $this->projectId;
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
        if (isset($map['directoryId'])) {
            $model->directoryId = $map['directoryId'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['parentDirectoryId'])) {
            $model->parentDirectoryId = $map['parentDirectoryId'];
        }
        if (isset($map['projectId'])) {
            $model->projectId = $map['projectId'];
        }
        if (isset($map['workflowId'])) {
            $model->workflowId = $map['workflowId'];
        }

        return $model;
    }
}

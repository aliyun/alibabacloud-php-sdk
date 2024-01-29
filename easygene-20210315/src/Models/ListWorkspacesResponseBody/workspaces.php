<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models\ListWorkspacesResponseBody;

use AlibabaCloud\Tea\Model;

class workspaces extends Model
{
    /**
     * @example my-bucket
     *
     * @var string
     */
    public $bucketName;

    /**
     * @example 2021-06-16T15:09:14.378297+08:00
     *
     * @var string
     */
    public $createTime;

    /**
     * @example This is a test workspace
     *
     * @var string
     */
    public $description;

    /**
     * @example 30
     *
     * @var int
     */
    public $jobLifecycle;

    /**
     * @var string[]
     */
    public $labels;

    /**
     * @example 2021-06-16T15:09:14.378297+08:00
     *
     * @var string
     */
    public $lastModifiedTime;

    /**
     * @example cn-beijing
     *
     * @var string
     */
    public $location;

    /**
     * @description RAM Role
     *
     * @example TestRole
     *
     * @var string
     */
    public $role;

    /**
     * @example Active
     *
     * @var string
     */
    public $status;

    /**
     * @example oss://my-bucket/my-path/
     *
     * @var string
     */
    public $storage;

    /**
     * @example TestWorkspace
     *
     * @var string
     */
    public $workspace;
    protected $_name = [
        'bucketName'       => 'BucketName',
        'createTime'       => 'CreateTime',
        'description'      => 'Description',
        'jobLifecycle'     => 'JobLifecycle',
        'labels'           => 'Labels',
        'lastModifiedTime' => 'LastModifiedTime',
        'location'         => 'Location',
        'role'             => 'Role',
        'status'           => 'Status',
        'storage'          => 'Storage',
        'workspace'        => 'Workspace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->jobLifecycle) {
            $res['JobLifecycle'] = $this->jobLifecycle;
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }
        if (null !== $this->lastModifiedTime) {
            $res['LastModifiedTime'] = $this->lastModifiedTime;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->storage) {
            $res['Storage'] = $this->storage;
        }
        if (null !== $this->workspace) {
            $res['Workspace'] = $this->workspace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return workspaces
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['JobLifecycle'])) {
            $model->jobLifecycle = $map['JobLifecycle'];
        }
        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }
        if (isset($map['LastModifiedTime'])) {
            $model->lastModifiedTime = $map['LastModifiedTime'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Storage'])) {
            $model->storage = $map['Storage'];
        }
        if (isset($map['Workspace'])) {
            $model->workspace = $map['Workspace'];
        }

        return $model;
    }
}

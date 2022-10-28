<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class DatasetItemVO extends Model
{
    /**
     * @var AsyncTaskVO[]
     */
    public $asyncTaskList;

    /**
     * @var int
     */
    public $datasetStatus;

    /**
     * @var int
     */
    public $datasetType;

    /**
     * @var string
     */
    public $fileSystem;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $keyName;

    /**
     * @var string
     */
    public $moreInfo;

    /**
     * @var string
     */
    public $path;

    /**
     * @var ProjectDetailsLiteVO[]
     */
    public $projectsLinked;

    /**
     * @var int
     */
    public $recentTaskStatus;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $schema;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'asyncTaskList'    => 'AsyncTaskList',
        'datasetStatus'    => 'DatasetStatus',
        'datasetType'      => 'DatasetType',
        'fileSystem'       => 'FileSystem',
        'id'               => 'Id',
        'keyName'          => 'KeyName',
        'moreInfo'         => 'MoreInfo',
        'path'             => 'Path',
        'projectsLinked'   => 'ProjectsLinked',
        'recentTaskStatus' => 'RecentTaskStatus',
        'remark'           => 'Remark',
        'schema'           => 'Schema',
        'tableName'        => 'TableName',
        'url'              => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asyncTaskList) {
            $res['AsyncTaskList'] = [];
            if (null !== $this->asyncTaskList && \is_array($this->asyncTaskList)) {
                $n = 0;
                foreach ($this->asyncTaskList as $item) {
                    $res['AsyncTaskList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->datasetStatus) {
            $res['DatasetStatus'] = $this->datasetStatus;
        }
        if (null !== $this->datasetType) {
            $res['DatasetType'] = $this->datasetType;
        }
        if (null !== $this->fileSystem) {
            $res['FileSystem'] = $this->fileSystem;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->keyName) {
            $res['KeyName'] = $this->keyName;
        }
        if (null !== $this->moreInfo) {
            $res['MoreInfo'] = $this->moreInfo;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->projectsLinked) {
            $res['ProjectsLinked'] = [];
            if (null !== $this->projectsLinked && \is_array($this->projectsLinked)) {
                $n = 0;
                foreach ($this->projectsLinked as $item) {
                    $res['ProjectsLinked'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->recentTaskStatus) {
            $res['RecentTaskStatus'] = $this->recentTaskStatus;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->schema) {
            $res['Schema'] = $this->schema;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DatasetItemVO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AsyncTaskList'])) {
            if (!empty($map['AsyncTaskList'])) {
                $model->asyncTaskList = [];
                $n                    = 0;
                foreach ($map['AsyncTaskList'] as $item) {
                    $model->asyncTaskList[$n++] = null !== $item ? AsyncTaskVO::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DatasetStatus'])) {
            $model->datasetStatus = $map['DatasetStatus'];
        }
        if (isset($map['DatasetType'])) {
            $model->datasetType = $map['DatasetType'];
        }
        if (isset($map['FileSystem'])) {
            $model->fileSystem = $map['FileSystem'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['KeyName'])) {
            $model->keyName = $map['KeyName'];
        }
        if (isset($map['MoreInfo'])) {
            $model->moreInfo = $map['MoreInfo'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['ProjectsLinked'])) {
            if (!empty($map['ProjectsLinked'])) {
                $model->projectsLinked = [];
                $n                     = 0;
                foreach ($map['ProjectsLinked'] as $item) {
                    $model->projectsLinked[$n++] = null !== $item ? ProjectDetailsLiteVO::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RecentTaskStatus'])) {
            $model->recentTaskStatus = $map['RecentTaskStatus'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['Schema'])) {
            $model->schema = $map['Schema'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}

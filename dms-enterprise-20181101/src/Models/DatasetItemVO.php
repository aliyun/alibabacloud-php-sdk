<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

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
    public $digest;

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
        'asyncTaskList' => 'AsyncTaskList',
        'datasetStatus' => 'DatasetStatus',
        'datasetType' => 'DatasetType',
        'digest' => 'Digest',
        'fileSystem' => 'FileSystem',
        'id' => 'Id',
        'keyName' => 'KeyName',
        'moreInfo' => 'MoreInfo',
        'path' => 'Path',
        'projectsLinked' => 'ProjectsLinked',
        'recentTaskStatus' => 'RecentTaskStatus',
        'remark' => 'Remark',
        'schema' => 'Schema',
        'tableName' => 'TableName',
        'url' => 'Url',
    ];

    public function validate()
    {
        if (\is_array($this->asyncTaskList)) {
            Model::validateArray($this->asyncTaskList);
        }
        if (\is_array($this->projectsLinked)) {
            Model::validateArray($this->projectsLinked);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->asyncTaskList) {
            if (\is_array($this->asyncTaskList)) {
                $res['AsyncTaskList'] = [];
                $n1 = 0;
                foreach ($this->asyncTaskList as $item1) {
                    $res['AsyncTaskList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->datasetStatus) {
            $res['DatasetStatus'] = $this->datasetStatus;
        }

        if (null !== $this->datasetType) {
            $res['DatasetType'] = $this->datasetType;
        }

        if (null !== $this->digest) {
            $res['Digest'] = $this->digest;
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
            if (\is_array($this->projectsLinked)) {
                $res['ProjectsLinked'] = [];
                $n1 = 0;
                foreach ($this->projectsLinked as $item1) {
                    $res['ProjectsLinked'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AsyncTaskList'])) {
            if (!empty($map['AsyncTaskList'])) {
                $model->asyncTaskList = [];
                $n1 = 0;
                foreach ($map['AsyncTaskList'] as $item1) {
                    $model->asyncTaskList[$n1++] = AsyncTaskVO::fromMap($item1);
                }
            }
        }

        if (isset($map['DatasetStatus'])) {
            $model->datasetStatus = $map['DatasetStatus'];
        }

        if (isset($map['DatasetType'])) {
            $model->datasetType = $map['DatasetType'];
        }

        if (isset($map['Digest'])) {
            $model->digest = $map['Digest'];
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
                $n1 = 0;
                foreach ($map['ProjectsLinked'] as $item1) {
                    $model->projectsLinked[$n1++] = ProjectDetailsLiteVO::fromMap($item1);
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

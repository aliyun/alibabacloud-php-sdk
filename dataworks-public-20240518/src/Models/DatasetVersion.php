<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class DatasetVersion extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $creatorId;

    /**
     * @var string
     */
    public $datasetId;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string[]
     */
    public $importInfo;

    /**
     * @var DatasetLabel[]
     */
    public $labels;

    /**
     * @var int
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $mountPath;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var string
     */
    public $url;

    /**
     * @var int
     */
    public $versionNumber;
    protected $_name = [
        'comment' => 'Comment',
        'createTime' => 'CreateTime',
        'creatorId' => 'CreatorId',
        'datasetId' => 'DatasetId',
        'id' => 'Id',
        'importInfo' => 'ImportInfo',
        'labels' => 'Labels',
        'modifyTime' => 'ModifyTime',
        'mountPath' => 'MountPath',
        'storageType' => 'StorageType',
        'url' => 'Url',
        'versionNumber' => 'VersionNumber',
    ];

    public function validate()
    {
        if (\is_array($this->importInfo)) {
            Model::validateArray($this->importInfo);
        }
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }

        if (null !== $this->datasetId) {
            $res['DatasetId'] = $this->datasetId;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->importInfo) {
            if (\is_array($this->importInfo)) {
                $res['ImportInfo'] = [];
                foreach ($this->importInfo as $key1 => $value1) {
                    $res['ImportInfo'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->labels) {
            if (\is_array($this->labels)) {
                $res['Labels'] = [];
                $n1 = 0;
                foreach ($this->labels as $item1) {
                    $res['Labels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        if (null !== $this->mountPath) {
            $res['MountPath'] = $this->mountPath;
        }

        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        if (null !== $this->versionNumber) {
            $res['VersionNumber'] = $this->versionNumber;
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
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }

        if (isset($map['DatasetId'])) {
            $model->datasetId = $map['DatasetId'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['ImportInfo'])) {
            if (!empty($map['ImportInfo'])) {
                $model->importInfo = [];
                foreach ($map['ImportInfo'] as $key1 => $value1) {
                    $model->importInfo[$key1] = $value1;
                }
            }
        }

        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n1 = 0;
                foreach ($map['Labels'] as $item1) {
                    $model->labels[$n1] = DatasetLabel::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['MountPath'])) {
            $model->mountPath = $map['MountPath'];
        }

        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        if (isset($map['VersionNumber'])) {
            $model->versionNumber = $map['VersionNumber'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20210226\Models;

use AlibabaCloud\Tea\Model;

class Dataset extends Model
{
    /**
     * @description 数据集id
     *
     * @var string
     */
    public $datasetId;

    /**
     * @description 默认挂载路径
     *
     * @var string
     */
    public $defaultMountPath;

    /**
     * @description 文件系统Id
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description 挂载路径
     *
     * @var string
     */
    public $mountPath;

    /**
     * @description 数据集名称
     *
     * @var string
     */
    public $name;

    /**
     * @description 文件系统被挂载路径
     *
     * @var string
     */
    public $nasPath;
    protected $_name = [
        'datasetId'        => 'DatasetId',
        'defaultMountPath' => 'DefaultMountPath',
        'fileSystemId'     => 'FileSystemId',
        'mountPath'        => 'MountPath',
        'name'             => 'Name',
        'nasPath'          => 'NasPath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->datasetId) {
            $res['DatasetId'] = $this->datasetId;
        }
        if (null !== $this->defaultMountPath) {
            $res['DefaultMountPath'] = $this->defaultMountPath;
        }
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->mountPath) {
            $res['MountPath'] = $this->mountPath;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nasPath) {
            $res['NasPath'] = $this->nasPath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Dataset
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatasetId'])) {
            $model->datasetId = $map['DatasetId'];
        }
        if (isset($map['DefaultMountPath'])) {
            $model->defaultMountPath = $map['DefaultMountPath'];
        }
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['MountPath'])) {
            $model->mountPath = $map['MountPath'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NasPath'])) {
            $model->nasPath = $map['NasPath'];
        }

        return $model;
    }
}

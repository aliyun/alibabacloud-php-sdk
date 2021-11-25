<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class CreateDataSourceRequest extends Model
{
    /**
     * @description 数据源类型
     *
     * @var string
     */
    public $dataSourceType;

    /**
     * @description 数据源描述
     *
     * @var string
     */
    public $description;

    /**
     * @description 数据源显示名称
     *
     * @var string
     */
    public $displayName;

    /**
     * @description 阿里云OSS文件系统服务端点
     *
     * @var string
     */
    public $endpoint;

    /**
     * @description 阿里云NAS文件系统Id
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description 本地挂载目录
     *
     * @var string
     */
    public $mountPath;

    /**
     * @description 阿里云OSS文件系统配置选项
     *
     * @var string
     */
    public $options;

    /**
     * @description 阿里云OSS文件系统路径
     *
     * @var string
     */
    public $path;
    protected $_name = [
        'dataSourceType' => 'DataSourceType',
        'description'    => 'Description',
        'displayName'    => 'DisplayName',
        'endpoint'       => 'Endpoint',
        'fileSystemId'   => 'FileSystemId',
        'mountPath'      => 'MountPath',
        'options'        => 'Options',
        'path'           => 'Path',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSourceType) {
            $res['DataSourceType'] = $this->dataSourceType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->mountPath) {
            $res['MountPath'] = $this->mountPath;
        }
        if (null !== $this->options) {
            $res['Options'] = $this->options;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDataSourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataSourceType'])) {
            $model->dataSourceType = $map['DataSourceType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['MountPath'])) {
            $model->mountPath = $map['MountPath'];
        }
        if (isset($map['Options'])) {
            $model->options = $map['Options'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        return $model;
    }
}

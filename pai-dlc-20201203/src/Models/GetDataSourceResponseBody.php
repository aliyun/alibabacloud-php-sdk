<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class GetDataSourceResponseBody extends Model
{
    /**
     * @description 数据源Id
     *
     * @var string
     */
    public $dataSourceId;

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
     * @description 创建时间（UTC）
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @description 修改时间（UTC）
     *
     * @var string
     */
    public $gmtModifyTime;

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

    /**
     * @description 请求Id
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 创建人Id
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'dataSourceId'   => 'DataSourceId',
        'dataSourceType' => 'DataSourceType',
        'description'    => 'Description',
        'displayName'    => 'DisplayName',
        'endpoint'       => 'Endpoint',
        'fileSystemId'   => 'FileSystemId',
        'gmtCreateTime'  => 'GmtCreateTime',
        'gmtModifyTime'  => 'GmtModifyTime',
        'mountPath'      => 'MountPath',
        'options'        => 'Options',
        'path'           => 'Path',
        'requestId'      => 'RequestId',
        'userId'         => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }
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
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtModifyTime) {
            $res['GmtModifyTime'] = $this->gmtModifyTime;
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDataSourceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }
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
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtModifyTime'])) {
            $model->gmtModifyTime = $map['GmtModifyTime'];
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}

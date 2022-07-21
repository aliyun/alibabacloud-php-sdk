<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class SmartCache extends Model
{
    /**
     * @description cache worker的数量单位是个
     *
     * @var int
     */
    public $cacheWorkerNum;

    /**
     * @description 每个cache worker的cache大小单位是GB
     *
     * @var int
     */
    public $cacheWorkerSize;

    /**
     * @description SmartCache 描述
     *
     * @var string
     */
    public $description;

    /**
     * @description SmartCache 名称
     *
     * @var string
     */
    public $displayName;

    /**
     * @description 已运行时长
     *
     * @var string
     */
    public $duration;

    /**
     * @description OSS Endpoint
     *
     * @var string
     */
    public $endpoint;

    /**
     * @description 阿里云的NAS文件系统ID
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
     * @description 数据源本地挂载目录
     *
     * @var string
     */
    public $mountPath;

    /**
     * @description 可选的超参数
     *
     * @var string
     */
    public $options;

    /**
     * @description OSS数据源路径
     *
     * @var string
     */
    public $path;

    /**
     * @description SmartCacheId
     *
     * @var string
     */
    public $smartCacheId;

    /**
     * @description 运行状态
     *
     * @var string
     */
    public $status;

    /**
     * @description 挂载的数据类型
     *
     * @var string
     */
    public $type;

    /**
     * @description 创建者Id
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'cacheWorkerNum'  => 'CacheWorkerNum',
        'cacheWorkerSize' => 'CacheWorkerSize',
        'description'     => 'Description',
        'displayName'     => 'DisplayName',
        'duration'        => 'Duration',
        'endpoint'        => 'Endpoint',
        'fileSystemId'    => 'FileSystemId',
        'gmtCreateTime'   => 'GmtCreateTime',
        'gmtModifyTime'   => 'GmtModifyTime',
        'mountPath'       => 'MountPath',
        'options'         => 'Options',
        'path'            => 'Path',
        'smartCacheId'    => 'SmartCacheId',
        'status'          => 'Status',
        'type'            => 'Type',
        'userId'          => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cacheWorkerNum) {
            $res['CacheWorkerNum'] = $this->cacheWorkerNum;
        }
        if (null !== $this->cacheWorkerSize) {
            $res['CacheWorkerSize'] = $this->cacheWorkerSize;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
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
        if (null !== $this->smartCacheId) {
            $res['SmartCacheId'] = $this->smartCacheId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SmartCache
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CacheWorkerNum'])) {
            $model->cacheWorkerNum = $map['CacheWorkerNum'];
        }
        if (isset($map['CacheWorkerSize'])) {
            $model->cacheWorkerSize = $map['CacheWorkerSize'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
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
        if (isset($map['SmartCacheId'])) {
            $model->smartCacheId = $map['SmartCacheId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}

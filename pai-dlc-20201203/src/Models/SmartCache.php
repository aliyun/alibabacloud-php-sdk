<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class SmartCache extends Model
{
    /**
     * @var int
     */
    public $cacheWorkerNum;

    /**
     * @var int
     */
    public $cacheWorkerSize;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $duration;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var string
     */
    public $fileSystemId;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $gmtModifyTime;

    /**
     * @var string
     */
    public $mountPath;

    /**
     * @var string
     */
    public $options;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $smartCacheId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;

    /**
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

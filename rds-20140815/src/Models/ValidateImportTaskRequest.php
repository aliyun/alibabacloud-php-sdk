<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class ValidateImportTaskRequest extends Model
{
    /**
     * @var string
     */
    public $dbInstanceId;

    /**
     * @var int
     */
    public $estimatedSize;

    /**
     * @var string
     */
    public $host;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $password;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $sourceInstanceId;

    /**
     * @var string
     */
    public $sourcePlatform;

    /**
     * @var int
     */
    public $streamPort;

    /**
     * @var string
     */
    public $user;

    /**
     * @var string
     */
    public $xtrabackupPath;
    protected $_name = [
        'dbInstanceId' => 'DbInstanceId',
        'estimatedSize' => 'EstimatedSize',
        'host' => 'Host',
        'ownerId' => 'OwnerId',
        'password' => 'Password',
        'port' => 'Port',
        'regionId' => 'RegionId',
        'sourceInstanceId' => 'SourceInstanceId',
        'sourcePlatform' => 'SourcePlatform',
        'streamPort' => 'StreamPort',
        'user' => 'User',
        'xtrabackupPath' => 'XtrabackupPath',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dbInstanceId) {
            $res['DbInstanceId'] = $this->dbInstanceId;
        }

        if (null !== $this->estimatedSize) {
            $res['EstimatedSize'] = $this->estimatedSize;
        }

        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }

        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->sourceInstanceId) {
            $res['SourceInstanceId'] = $this->sourceInstanceId;
        }

        if (null !== $this->sourcePlatform) {
            $res['SourcePlatform'] = $this->sourcePlatform;
        }

        if (null !== $this->streamPort) {
            $res['StreamPort'] = $this->streamPort;
        }

        if (null !== $this->user) {
            $res['User'] = $this->user;
        }

        if (null !== $this->xtrabackupPath) {
            $res['XtrabackupPath'] = $this->xtrabackupPath;
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
        if (isset($map['DbInstanceId'])) {
            $model->dbInstanceId = $map['DbInstanceId'];
        }

        if (isset($map['EstimatedSize'])) {
            $model->estimatedSize = $map['EstimatedSize'];
        }

        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SourceInstanceId'])) {
            $model->sourceInstanceId = $map['SourceInstanceId'];
        }

        if (isset($map['SourcePlatform'])) {
            $model->sourcePlatform = $map['SourcePlatform'];
        }

        if (isset($map['StreamPort'])) {
            $model->streamPort = $map['StreamPort'];
        }

        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        if (isset($map['XtrabackupPath'])) {
            $model->xtrabackupPath = $map['XtrabackupPath'];
        }

        return $model;
    }
}

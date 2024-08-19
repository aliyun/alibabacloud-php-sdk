<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Tea\Model;

class GetBackupConfigResponseBody extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $backupMode;

    /**
     * @example buckect_test
     *
     * @var string
     */
    public $bucket;

    /**
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @example 300
     *
     * @var int
     */
    public $expireSeconds;

    /**
     * @example 2023-01-17 12:29:56
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example aliyun/template/
     *
     * @var string
     */
    public $path;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @example AAAAAA-BBBB-CCCCC-DDDD-EEEEEEEE****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example image
     *
     * @var string
     */
    public $resourceType;

    /**
     * @example baselineCheck
     *
     * @var string
     */
    public $serviceCode;

    /**
     * @description UID。
     *
     * @example 1772612608370735
     *
     * @var string
     */
    public $uid;
    protected $_name = [
        'backupMode'    => 'BackupMode',
        'bucket'        => 'Bucket',
        'enable'        => 'Enable',
        'expireSeconds' => 'ExpireSeconds',
        'gmtModified'   => 'GmtModified',
        'path'          => 'Path',
        'region'        => 'Region',
        'requestId'     => 'RequestId',
        'resourceType'  => 'ResourceType',
        'serviceCode'   => 'ServiceCode',
        'uid'           => 'Uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupMode) {
            $res['BackupMode'] = $this->backupMode;
        }
        if (null !== $this->bucket) {
            $res['Bucket'] = $this->bucket;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->expireSeconds) {
            $res['ExpireSeconds'] = $this->expireSeconds;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->serviceCode) {
            $res['ServiceCode'] = $this->serviceCode;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetBackupConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupMode'])) {
            $model->backupMode = $map['BackupMode'];
        }
        if (isset($map['Bucket'])) {
            $model->bucket = $map['Bucket'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['ExpireSeconds'])) {
            $model->expireSeconds = $map['ExpireSeconds'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['ServiceCode'])) {
            $model->serviceCode = $map['ServiceCode'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}

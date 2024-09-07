<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\AttachSharedStoragesRequest;

use AlibabaCloud\Tea\Model;

class sharedStorages extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 0bd504b0**
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @example PublicCloud
     *
     * @var string
     */
    public $location;

    /**
     * @description This parameter is required.
     *
     * @example /test
     *
     * @var string
     */
    public $mountDirectory;

    /**
     * @example -t nfs -o vers=3,nolock,proto=tcp,noresvport
     *
     * @var string
     */
    public $mountOptions;

    /**
     * @description This parameter is required.
     *
     * @example 0bd504b***-ngq26.cn-hangzhou.nas.aliyuncs.com
     *
     * @var string
     */
    public $mountTarget;

    /**
     * @description This parameter is required.
     *
     * @example NFS
     *
     * @var string
     */
    public $protocolType;

    /**
     * @description This parameter is required.
     *
     * @example /testehpc
     *
     * @var string
     */
    public $storageDirectory;

    /**
     * @description This parameter is required.
     *
     * @example nas
     *
     * @var string
     */
    public $volumeType;
    protected $_name = [
        'fileSystemId'     => 'FileSystemId',
        'location'         => 'Location',
        'mountDirectory'   => 'MountDirectory',
        'mountOptions'     => 'MountOptions',
        'mountTarget'      => 'MountTarget',
        'protocolType'     => 'ProtocolType',
        'storageDirectory' => 'StorageDirectory',
        'volumeType'       => 'VolumeType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->mountDirectory) {
            $res['MountDirectory'] = $this->mountDirectory;
        }
        if (null !== $this->mountOptions) {
            $res['MountOptions'] = $this->mountOptions;
        }
        if (null !== $this->mountTarget) {
            $res['MountTarget'] = $this->mountTarget;
        }
        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }
        if (null !== $this->storageDirectory) {
            $res['StorageDirectory'] = $this->storageDirectory;
        }
        if (null !== $this->volumeType) {
            $res['VolumeType'] = $this->volumeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sharedStorages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['MountDirectory'])) {
            $model->mountDirectory = $map['MountDirectory'];
        }
        if (isset($map['MountOptions'])) {
            $model->mountOptions = $map['MountOptions'];
        }
        if (isset($map['MountTarget'])) {
            $model->mountTarget = $map['MountTarget'];
        }
        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }
        if (isset($map['StorageDirectory'])) {
            $model->storageDirectory = $map['StorageDirectory'];
        }
        if (isset($map['VolumeType'])) {
            $model->volumeType = $map['VolumeType'];
        }

        return $model;
    }
}

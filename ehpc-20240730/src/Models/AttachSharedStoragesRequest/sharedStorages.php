<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\AttachSharedStoragesRequest;

use AlibabaCloud\Tea\Model;

class sharedStorages extends Model
{
    /**
     * @description The ID of the file system to be attached.
     *
     * This parameter is required.
     * @example 0bd504b0**
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description The storage location of the file system to be attached. Valid values:
     *
     *   OnPremise: The file system is deployed on a hybrid cloud.
     *   PublicCloud: The file system is deployed on a public cloud.
     *
     * @example PublicCloud
     *
     * @var string
     */
    public $location;

    /**
     * @description The local mount directory of the file system that you want to attach.
     *
     * This parameter is required.
     * @example /test
     *
     * @var string
     */
    public $mountDirectory;

    /**
     * @description The attaching options of the file system to be attached. Valid values:
     *
     *   \\-t nfs -o vers=3,nolock,proto=tcp,noresvport
     *   \\-t nfs -o vers=4.0,noresvport
     *
     * >  The v3 version is recommended for higher performance if multiple Elastic Compute Service (ECS) instances do not edit the same file at the same time.
     * @example -t nfs -o vers=3,nolock,proto=tcp,noresvport
     *
     * @var string
     */
    public $mountOptions;

    /**
     * @description The address of the mount point of the file system to be attached.
     *
     * This parameter is required.
     * @example 0bd504b***-ngq26.cn-hangzhou.nas.aliyuncs.com
     *
     * @var string
     */
    public $mountTarget;

    /**
     * @description The protocol type of the file system to be attached. Valid values:
     *
     *   NFS
     *   SMB
     *
     * This parameter is required.
     * @example NFS
     *
     * @var string
     */
    public $protocolType;

    /**
     * @description The storage directory of the file system. You can mount any directory in the file system to the specified cluster directory.
     *
     * This parameter is required.
     * @example /testehpc
     *
     * @var string
     */
    public $storageDirectory;

    /**
     * @description The type of the file system to be attached. Valid values:
     *
     *   nas
     *   cpfs
     *
     * This parameter is required.
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

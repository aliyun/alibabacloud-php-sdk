<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\ListSharedStoragesResponseBody\sharedStorages;

use AlibabaCloud\Tea\Model;

class mountInfo extends Model
{
    /**
     * @description The local mount directory of the attached file system.
     *
     * @example /test
     *
     * @var string
     */
    public $mountDirectory;

    /**
     * @description The mount options for the attached file system. Valid values:
     *
     *   \\-t nfs -o vers=3,nolock,proto=tcp,noresvport
     *   \\-t nfs -o vers=4.0,noresvport
     *
     * @example -t nfs -o vers=4.0,noresvport
     *
     * @var string
     */
    public $mountOptions;

    /**
     * @description The mount target of the attached file system.
     *
     * @example 0bd504b***-ngq26.cn-hangzhou.nas.aliyuncs.com
     *
     * @var string
     */
    public $mountTarget;

    /**
     * @description The protocol used by the mount target of the attached file system. Valid values:
     *
     *   nfs3
     *   nfs4
     *   cpfs
     *
     * @example nfs3
     *
     * @var string
     */
    public $protocolType;

    /**
     * @description The storage directory of the attached file system.
     *
     * @example /testehpc
     *
     * @var string
     */
    public $storageDirectory;
    protected $_name = [
        'mountDirectory'   => 'MountDirectory',
        'mountOptions'     => 'MountOptions',
        'mountTarget'      => 'MountTarget',
        'protocolType'     => 'ProtocolType',
        'storageDirectory' => 'StorageDirectory',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mountInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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

        return $model;
    }
}

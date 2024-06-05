<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeZonesResponseBody\zones\zone\instanceTypes;

use AlibabaCloud\Tea\Model;

class instanceType extends Model
{
    /**
     * @description The protocol type.
     *
     *   If the FileSystemType parameter is set to standard, the protocol type is nfs or smb.
     *   If the FileSystemType parameter is set to extreme, the protocol type is nfs.
     *   If the FileSystemType parameter is set to cpfs, the protocol type is cpfs.
     *
     * > CPFS file systems are available only on the China site (aliyun.com).
     * @example nfs
     *
     * @var string
     */
    public $protocolType;

    /**
     * @description The storage type.
     *
     *   If the FileSystemType parameter is set to standard, the storage type is Performance or Capacity.
     *   If the FileSystemType parameter is set to extreme, the storage type is standard or advance.
     *   If the FileSystemType parameter is set to cpfs, the storage type is advance_100 (100 MB/s/TiB baseline) or advance_200 (200 MB/s/TiB baseline).
     *
     * > CPFS file systems are available only on the China site (aliyun.com).
     * @example Capacity
     *
     * @var string
     */
    public $storageType;
    protected $_name = [
        'protocolType' => 'ProtocolType',
        'storageType'  => 'StorageType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }

        return $model;
    }
}

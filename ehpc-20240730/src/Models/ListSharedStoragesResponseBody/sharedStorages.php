<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\ListSharedStoragesResponseBody;

use AlibabaCloud\SDK\EHPC\V20240730\Models\ListSharedStoragesResponseBody\sharedStorages\mountInfo;
use AlibabaCloud\Tea\Model;

class sharedStorages extends Model
{
    /**
     * @description The ID of the attached file system.
     *
     * @example 08c7f4b***
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description The protocol used by the attached file system. Valid values:
     *
     *   nfs3
     *   nfs4
     *   cpfs
     *
     * @example nfs4
     *
     * @var string
     */
    public $fileSystemProtocol;

    /**
     * @description The type of the attached file system. Valid values:
     *
     *   nas
     *   cpfs
     *
     * @example nas
     *
     * @var string
     */
    public $fileSystemType;

    /**
     * @description The mount information.
     *
     * @var mountInfo[]
     */
    public $mountInfo;
    protected $_name = [
        'fileSystemId'       => 'FileSystemId',
        'fileSystemProtocol' => 'FileSystemProtocol',
        'fileSystemType'     => 'FileSystemType',
        'mountInfo'          => 'MountInfo',
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
        if (null !== $this->fileSystemProtocol) {
            $res['FileSystemProtocol'] = $this->fileSystemProtocol;
        }
        if (null !== $this->fileSystemType) {
            $res['FileSystemType'] = $this->fileSystemType;
        }
        if (null !== $this->mountInfo) {
            $res['MountInfo'] = [];
            if (null !== $this->mountInfo && \is_array($this->mountInfo)) {
                $n = 0;
                foreach ($this->mountInfo as $item) {
                    $res['MountInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['FileSystemProtocol'])) {
            $model->fileSystemProtocol = $map['FileSystemProtocol'];
        }
        if (isset($map['FileSystemType'])) {
            $model->fileSystemType = $map['FileSystemType'];
        }
        if (isset($map['MountInfo'])) {
            if (!empty($map['MountInfo'])) {
                $model->mountInfo = [];
                $n                = 0;
                foreach ($map['MountInfo'] as $item) {
                    $model->mountInfo[$n++] = null !== $item ? mountInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

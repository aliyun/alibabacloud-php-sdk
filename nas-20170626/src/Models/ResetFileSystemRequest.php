<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class ResetFileSystemRequest extends Model
{
    /**
     * @description The ID of the advanced Extreme NAS file system.
     *
     * This parameter is required.
     *
     * @example extreme-012dd****
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description The snapshot ID.
     *
     * This parameter is required.
     *
     * @example s-extreme-snapsho****
     *
     * @var string
     */
    public $snapshotId;
    protected $_name = [
        'fileSystemId' => 'FileSystemId',
        'snapshotId' => 'SnapshotId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResetFileSystemRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }

        return $model;
    }
}

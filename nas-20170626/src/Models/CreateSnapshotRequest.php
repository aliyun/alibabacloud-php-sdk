<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class CreateSnapshotRequest extends Model
{
    /**
     * @description The description of the snapshot.
     *
     * Limits:
     *
     *   The description must be 2 to 256 characters in length.
     *   The description cannot start with `http://` or `https://`.
     *   This parameter is empty by default.
     *
     * @example FinanceDepet
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the advanced Extreme NAS file system. The value must start with `extreme-`, for example, `extreme-01dd****`.
     *
     * This parameter is required.
     * @example extreme-01dd****
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description The retention period of the snapshot.
     *
     * Valid values:
     *
     *   \\-1 (default). Auto snapshots are permanently retained. After the number of auto snapshots exceeds the upper limit, the earliest auto snapshot is automatically deleted.
     *   1 to 65536: Auto snapshots are retained for the specified days. After the retention period of auto snapshots expires, the auto snapshots are automatically deleted.
     *
     * @example 30
     *
     * @var int
     */
    public $retentionDays;

    /**
     * @description The snapshot name.
     *
     * Limits:
     *
     *   The name must be 2 to 128 characters in length. The name must start with a letter and cannot start with `http://` or `https://`.
     *   The name can contain letters, digits, colons (:), underscores (_), and hyphens (-).
     *   The name cannot start with auto because snapshots whose names start with auto are recognized as auto snapshots.
     *
     * @example FinanceJoshua
     *
     * @var string
     */
    public $snapshotName;
    protected $_name = [
        'description'   => 'Description',
        'fileSystemId'  => 'FileSystemId',
        'retentionDays' => 'RetentionDays',
        'snapshotName'  => 'SnapshotName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->retentionDays) {
            $res['RetentionDays'] = $this->retentionDays;
        }
        if (null !== $this->snapshotName) {
            $res['SnapshotName'] = $this->snapshotName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSnapshotRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['RetentionDays'])) {
            $model->retentionDays = $map['RetentionDays'];
        }
        if (isset($map['SnapshotName'])) {
            $model->snapshotName = $map['SnapshotName'];
        }

        return $model;
    }
}

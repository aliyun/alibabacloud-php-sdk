<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class UpdateDriveRequest extends Model
{
    /**
     * @description The description of the drive. The description can be up to 1,024 characters in length.
     *
     * @var string
     */
    public $description;

    /**
     * @description The drive ID.
     *
     * @example 1
     *
     * @var string
     */
    public $driveId;

    /**
     * @description The name of the drive. The name can be up to 128 characters in length.
     *
     * @example my_drive
     *
     * @var string
     */
    public $driveName;

    /**
     * @description The owner of the drive. Note: You can modify the owner of a personal drive only by using an AccessKey pair.
     *
     * @example user1
     *
     * @var string
     */
    public $owner;

    /**
     * @description The state of the drive. Valid values:
     *
     * enabled and disabled.
     * @example enabled
     *
     * @var string
     */
    public $status;

    /**
     * @description The total size of the drive. Unit: bytes. A value of -1 specifies that the size is unlimited.
     *
     * @example 10240
     *
     * @var int
     */
    public $totalSize;
    protected $_name = [
        'description' => 'description',
        'driveId'     => 'drive_id',
        'driveName'   => 'drive_name',
        'owner'       => 'owner',
        'status'      => 'status',
        'totalSize'   => 'total_size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->driveId) {
            $res['drive_id'] = $this->driveId;
        }
        if (null !== $this->driveName) {
            $res['drive_name'] = $this->driveName;
        }
        if (null !== $this->owner) {
            $res['owner'] = $this->owner;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->totalSize) {
            $res['total_size'] = $this->totalSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDriveRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['drive_id'])) {
            $model->driveId = $map['drive_id'];
        }
        if (isset($map['drive_name'])) {
            $model->driveName = $map['drive_name'];
        }
        if (isset($map['owner'])) {
            $model->owner = $map['owner'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['total_size'])) {
            $model->totalSize = $map['total_size'];
        }

        return $model;
    }
}

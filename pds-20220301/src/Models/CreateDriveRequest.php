<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class CreateDriveRequest extends Model
{
    /**
     * @description Specifies whether the drive is the default drive. Default value: false.
     *
     * @example true
     *
     * @var bool
     */
    public $default;

    /**
     * @description The description of the drive. The description can be up to 1,024 characters in length.
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the drive. The name can be up to 128 characters in length.
     *
     * @example my_drive
     *
     * @var string
     */
    public $driveName;

    /**
     * @description The type of the drive. Set the value to normal.
     *
     * @example normal
     *
     * @var string
     */
    public $driveType;

    /**
     * @description The owner of the drive.
     *
     * @example 3b3d7245c159488da17d081ad6c64687
     *
     * @var string
     */
    public $owner;

    /**
     * @description The type of the owner. Valid values:
     *
     * user and group.
     * @example user
     *
     * @var string
     */
    public $ownerType;

    /**
     * @description The state of the drive. Valid values:
     *
     * Default value: enabled.
     * @example enabled
     *
     * @var string
     */
    public $status;

    /**
     * @description The total size of the drive. Unit: bytes. By default, the size is unlimited.
     *
     * @example 1024
     *
     * @var int
     */
    public $totalSize;
    protected $_name = [
        'default'     => 'default',
        'description' => 'description',
        'driveName'   => 'drive_name',
        'driveType'   => 'drive_type',
        'owner'       => 'owner',
        'ownerType'   => 'owner_type',
        'status'      => 'status',
        'totalSize'   => 'total_size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->default) {
            $res['default'] = $this->default;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->driveName) {
            $res['drive_name'] = $this->driveName;
        }
        if (null !== $this->driveType) {
            $res['drive_type'] = $this->driveType;
        }
        if (null !== $this->owner) {
            $res['owner'] = $this->owner;
        }
        if (null !== $this->ownerType) {
            $res['owner_type'] = $this->ownerType;
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
     * @return CreateDriveRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['default'])) {
            $model->default = $map['default'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['drive_name'])) {
            $model->driveName = $map['drive_name'];
        }
        if (isset($map['drive_type'])) {
            $model->driveType = $map['drive_type'];
        }
        if (isset($map['owner'])) {
            $model->owner = $map['owner'];
        }
        if (isset($map['owner_type'])) {
            $model->ownerType = $map['owner_type'];
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

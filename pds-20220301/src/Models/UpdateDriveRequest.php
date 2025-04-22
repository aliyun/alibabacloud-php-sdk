<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class UpdateDriveRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $driveId;

    /**
     * @var string
     */
    public $driveName;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $totalSize;
    protected $_name = [
        'description' => 'description',
        'driveId' => 'drive_id',
        'driveName' => 'drive_name',
        'owner' => 'owner',
        'status' => 'status',
        'totalSize' => 'total_size',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateCloudDriveGroupRequest extends Model
{
    /**
     * @var string[]
     */
    public $adminUserIds;

    /**
     * @description The ID of the cloud disk in Cloud Drive Service.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou+cds-532033****
     *
     * @var string
     */
    public $cdsId;

    /**
     * @description The ID of the team.
     *
     * This parameter is required.
     *
     * @example 7f4bbccda0cf40bb85981b65fb5e****
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The ID of the region.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The size of the cloud disk in Cloud Drive Service. Unit: bytes. The size is unlimited.
     *
     * This parameter is required.
     *
     * @example 1024000
     *
     * @var int
     */
    public $totalSize;
    protected $_name = [
        'adminUserIds' => 'AdminUserIds',
        'cdsId' => 'CdsId',
        'groupId' => 'GroupId',
        'regionId' => 'RegionId',
        'totalSize' => 'TotalSize',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->adminUserIds) {
            $res['AdminUserIds'] = $this->adminUserIds;
        }
        if (null !== $this->cdsId) {
            $res['CdsId'] = $this->cdsId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->totalSize) {
            $res['TotalSize'] = $this->totalSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCloudDriveGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdminUserIds'])) {
            if (!empty($map['AdminUserIds'])) {
                $model->adminUserIds = $map['AdminUserIds'];
            }
        }
        if (isset($map['CdsId'])) {
            $model->cdsId = $map['CdsId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TotalSize'])) {
            $model->totalSize = $map['TotalSize'];
        }

        return $model;
    }
}

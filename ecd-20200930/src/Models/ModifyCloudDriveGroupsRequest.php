<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ModifyCloudDriveGroupsRequest extends Model
{
    /**
     * @description The ID of the cloud disk in Cloud Drive Service.
     *
     * This parameter is required.
     * @example cn-shanghai+cds-135515****
     *
     * @var string
     */
    public $cdsId;

    /**
     * @description The IDs of the teams.
     *
     * @var string[]
     */
    public $groupId;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The status of the team space. Valid values:
     *
     *   enabled
     *   disabled
     *
     * Default value: enabled.
     * @example disabled
     *
     * @var string
     */
    public $status;

    /**
     * @description The total capacity of the team space.
     *
     * @example 32212254720
     *
     * @var int
     */
    public $totalSize;
    protected $_name = [
        'cdsId'     => 'CdsId',
        'groupId'   => 'GroupId',
        'regionId'  => 'RegionId',
        'status'    => 'Status',
        'totalSize' => 'TotalSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cdsId) {
            $res['CdsId'] = $this->cdsId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->totalSize) {
            $res['TotalSize'] = $this->totalSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyCloudDriveGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CdsId'])) {
            $model->cdsId = $map['CdsId'];
        }
        if (isset($map['GroupId'])) {
            if (!empty($map['GroupId'])) {
                $model->groupId = $map['GroupId'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TotalSize'])) {
            $model->totalSize = $map['TotalSize'];
        }

        return $model;
    }
}

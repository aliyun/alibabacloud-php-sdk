<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DeleteCloudDriveGroupsRequest extends Model
{
    /**
     * @description The ID of the cloud disk in Cloud Drive Service.
     *
     * @example cn-hangzhou+cds-532033****
     *
     * @var string
     */
    public $cdsId;

    /**
     * @description The IDs of the teams that you want to delete. You can delete multiple teams at a time.
     *
     * @var string[]
     */
    public $groupId;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'cdsId'    => 'CdsId',
        'groupId'  => 'GroupId',
        'regionId' => 'RegionId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteCloudDriveGroupsRequest
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

        return $model;
    }
}

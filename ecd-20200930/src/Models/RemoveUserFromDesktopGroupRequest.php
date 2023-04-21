<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class RemoveUserFromDesktopGroupRequest extends Model
{
    /**
     * @description The ID of the desktop group on which the permissions you want to revoke from the authorized user.
     *
     * @example dg-2i8qxpv6t1a03****
     *
     * @var string
     */
    public $desktopGroupId;

    /**
     * @description Details about the IDs of the desktop groups.
     *
     * @var string[]
     */
    public $desktopGroupIds;

    /**
     * @description Details about the authorized users from which you want to revoke permissions on the desktop group.
     *
     * @var string[]
     */
    public $endUserIds;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'desktopGroupId'  => 'DesktopGroupId',
        'desktopGroupIds' => 'DesktopGroupIds',
        'endUserIds'      => 'EndUserIds',
        'regionId'        => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desktopGroupId) {
            $res['DesktopGroupId'] = $this->desktopGroupId;
        }
        if (null !== $this->desktopGroupIds) {
            $res['DesktopGroupIds'] = $this->desktopGroupIds;
        }
        if (null !== $this->endUserIds) {
            $res['EndUserIds'] = $this->endUserIds;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveUserFromDesktopGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DesktopGroupId'])) {
            $model->desktopGroupId = $map['DesktopGroupId'];
        }
        if (isset($map['DesktopGroupIds'])) {
            if (!empty($map['DesktopGroupIds'])) {
                $model->desktopGroupIds = $map['DesktopGroupIds'];
            }
        }
        if (isset($map['EndUserIds'])) {
            if (!empty($map['EndUserIds'])) {
                $model->endUserIds = $map['EndUserIds'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}

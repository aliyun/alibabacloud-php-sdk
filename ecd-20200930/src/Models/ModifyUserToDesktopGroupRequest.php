<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ModifyUserToDesktopGroupRequest extends Model
{
    /**
     * @description The ID of the desktop group that you want to assign to users.
     *
     * @example dg-2i8qxpv6t1a03****
     *
     * @var string
     */
    public $desktopGroupId;

    /**
     * @description The IDs of the regular users to whom you want to grant the permissions on the cloud desktop.
     *
     * @var string[]
     */
    public $newEndUserIds;

    /**
     * @description The IDs of the original regular users who have the permissions on the cloud desktop.
     *
     * @var string[]
     */
    public $oldEndUserIds;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'desktopGroupId' => 'DesktopGroupId',
        'newEndUserIds'  => 'NewEndUserIds',
        'oldEndUserIds'  => 'OldEndUserIds',
        'regionId'       => 'RegionId',
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
        if (null !== $this->newEndUserIds) {
            $res['NewEndUserIds'] = $this->newEndUserIds;
        }
        if (null !== $this->oldEndUserIds) {
            $res['OldEndUserIds'] = $this->oldEndUserIds;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyUserToDesktopGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DesktopGroupId'])) {
            $model->desktopGroupId = $map['DesktopGroupId'];
        }
        if (isset($map['NewEndUserIds'])) {
            if (!empty($map['NewEndUserIds'])) {
                $model->newEndUserIds = $map['NewEndUserIds'];
            }
        }
        if (isset($map['OldEndUserIds'])) {
            if (!empty($map['OldEndUserIds'])) {
                $model->oldEndUserIds = $map['OldEndUserIds'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ModifyUserToDesktopGroupRequest extends Model
{
    /**
     * @description The ID of the cloud computer pool whose end users you want to change.
     *
     * This parameter is required.
     * @example dg-2i8qxpv6t1a03****
     *
     * @var string
     */
    public $desktopGroupId;

    /**
     * @description The IDs of the end users that you want to add. You can configure 1 to 500 IDs.
     *
     * This parameter is required.
     * @var string[]
     */
    public $newEndUserIds;

    /**
     * @description The IDs of the end users that you want to remove. You can configure 1 to 500 IDs.
     *
     * This parameter is required.
     * @var string[]
     */
    public $oldEndUserIds;

    /**
     * @description The region ID. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/196646.html) operation to query the most recent region list.
     *
     * This parameter is required.
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

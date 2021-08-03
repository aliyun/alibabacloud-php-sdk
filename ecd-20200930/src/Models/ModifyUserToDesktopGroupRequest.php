<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ModifyUserToDesktopGroupRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $desktopGroupId;

    /**
     * @var string[]
     */
    public $oldEndUserIds;

    /**
     * @var string[]
     */
    public $newEndUserIds;
    protected $_name = [
        'regionId'       => 'RegionId',
        'desktopGroupId' => 'DesktopGroupId',
        'oldEndUserIds'  => 'OldEndUserIds',
        'newEndUserIds'  => 'NewEndUserIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->desktopGroupId) {
            $res['DesktopGroupId'] = $this->desktopGroupId;
        }
        if (null !== $this->oldEndUserIds) {
            $res['OldEndUserIds'] = $this->oldEndUserIds;
        }
        if (null !== $this->newEndUserIds) {
            $res['NewEndUserIds'] = $this->newEndUserIds;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['DesktopGroupId'])) {
            $model->desktopGroupId = $map['DesktopGroupId'];
        }
        if (isset($map['OldEndUserIds'])) {
            if (!empty($map['OldEndUserIds'])) {
                $model->oldEndUserIds = $map['OldEndUserIds'];
            }
        }
        if (isset($map['NewEndUserIds'])) {
            if (!empty($map['NewEndUserIds'])) {
                $model->newEndUserIds = $map['NewEndUserIds'];
            }
        }

        return $model;
    }
}

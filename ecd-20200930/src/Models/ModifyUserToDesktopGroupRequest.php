<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ModifyUserToDesktopGroupRequest extends Model
{
    /**
     * @var string
     */
    public $desktopGroupId;

    /**
     * @var string[]
     */
    public $newEndUserIds;

    /**
     * @var string[]
     */
    public $oldEndUserIds;

    /**
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
        Model::validateRequired('desktopGroupId', $this->desktopGroupId, true);
        Model::validateRequired('newEndUserIds', $this->newEndUserIds, true);
        Model::validateRequired('oldEndUserIds', $this->oldEndUserIds, true);
        Model::validateRequired('regionId', $this->regionId, true);
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

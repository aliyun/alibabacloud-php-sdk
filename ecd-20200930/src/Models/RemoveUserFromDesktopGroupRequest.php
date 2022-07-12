<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class RemoveUserFromDesktopGroupRequest extends Model
{
    /**
     * @var string
     */
    public $desktopGroupId;

    /**
     * @var string[]
     */
    public $desktopGroupIds;

    /**
     * @var string[]
     */
    public $endUserIds;

    /**
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

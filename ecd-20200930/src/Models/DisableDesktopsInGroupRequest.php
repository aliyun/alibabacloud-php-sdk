<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DisableDesktopsInGroupRequest extends Model
{
    /**
     * @var string
     */
    public $desktopGroupId;

    /**
     * @var string[]
     */
    public $desktopIds;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'desktopGroupId' => 'DesktopGroupId',
        'desktopIds'     => 'DesktopIds',
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
        if (null !== $this->desktopIds) {
            $res['DesktopIds'] = $this->desktopIds;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DisableDesktopsInGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DesktopGroupId'])) {
            $model->desktopGroupId = $map['DesktopGroupId'];
        }
        if (isset($map['DesktopIds'])) {
            if (!empty($map['DesktopIds'])) {
                $model->desktopIds = $map['DesktopIds'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}

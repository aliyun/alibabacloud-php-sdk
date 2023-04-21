<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class StartVirusScanTaskRequest extends Model
{
    /**
     * @description The IDs of the cloud desktops.
     *
     * @example ecd-138dsptkrt00u****
     *
     * @var string[]
     */
    public $desktopId;

    /**
     * @description The IDs of the workspaces.
     *
     * @example cn-hangzhou+dir-363353****
     *
     * @var string[]
     */
    public $officeSiteId;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'desktopId'    => 'DesktopId',
        'officeSiteId' => 'OfficeSiteId',
        'regionId'     => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartVirusScanTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DesktopId'])) {
            if (!empty($map['DesktopId'])) {
                $model->desktopId = $map['DesktopId'];
            }
        }
        if (isset($map['OfficeSiteId'])) {
            if (!empty($map['OfficeSiteId'])) {
                $model->officeSiteId = $map['OfficeSiteId'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}

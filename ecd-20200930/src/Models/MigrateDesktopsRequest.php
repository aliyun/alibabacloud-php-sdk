<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class MigrateDesktopsRequest extends Model
{
    /**
     * @var string[]
     */
    public $desktopId;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @example cn-shenzhen+dir-388505****
     *
     * @var string
     */
    public $targetOfficeSiteId;
    protected $_name = [
        'desktopId'          => 'DesktopId',
        'regionId'           => 'RegionId',
        'targetOfficeSiteId' => 'TargetOfficeSiteId',
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->targetOfficeSiteId) {
            $res['TargetOfficeSiteId'] = $this->targetOfficeSiteId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MigrateDesktopsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DesktopId'])) {
            if (!empty($map['DesktopId'])) {
                $model->desktopId = $map['DesktopId'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TargetOfficeSiteId'])) {
            $model->targetOfficeSiteId = $map['TargetOfficeSiteId'];
        }

        return $model;
    }
}

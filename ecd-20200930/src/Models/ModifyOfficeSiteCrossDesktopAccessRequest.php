<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ModifyOfficeSiteCrossDesktopAccessRequest extends Model
{
    /**
     * @var bool
     */
    public $enableCrossDesktopAccess;

    /**
     * @var string
     */
    public $officeSiteId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'enableCrossDesktopAccess' => 'EnableCrossDesktopAccess',
        'officeSiteId'             => 'OfficeSiteId',
        'regionId'                 => 'RegionId',
    ];

    public function validate()
    {
        Model::validateRequired('enableCrossDesktopAccess', $this->enableCrossDesktopAccess, true);
        Model::validateRequired('officeSiteId', $this->officeSiteId, true);
        Model::validateRequired('regionId', $this->regionId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableCrossDesktopAccess) {
            $res['EnableCrossDesktopAccess'] = $this->enableCrossDesktopAccess;
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
     * @return ModifyOfficeSiteCrossDesktopAccessRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableCrossDesktopAccess'])) {
            $model->enableCrossDesktopAccess = $map['EnableCrossDesktopAccess'];
        }
        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}

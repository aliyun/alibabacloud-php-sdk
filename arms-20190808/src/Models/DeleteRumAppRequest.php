<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class DeleteRumAppRequest extends Model
{
    /**
     * @description The group where the application resides.
     *
     * @example default
     *
     * @var string
     */
    public $appGroup;

    /**
     * @description The ID of the application.
     *
     * This parameter is required.
     * @example b590lhguqs@28f515462******
     *
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $realRegionId;

    /**
     * @description The ID of the region.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'appGroup'     => 'AppGroup',
        'appId'        => 'AppId',
        'realRegionId' => 'RealRegionId',
        'regionId'     => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appGroup) {
            $res['AppGroup'] = $this->appGroup;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->realRegionId) {
            $res['RealRegionId'] = $this->realRegionId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteRumAppRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppGroup'])) {
            $model->appGroup = $map['AppGroup'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['RealRegionId'])) {
            $model->realRegionId = $map['RealRegionId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}

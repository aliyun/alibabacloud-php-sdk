<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class UpgradeInstanceVersionRequest extends Model
{
    /**
     * @description The ID of the PolarDB-X 1.0 instance that you want to upgrade.
     *
     * @example drdshbgaen89****
     *
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The version number of the PolarDB-X 1.0 instance. You can leave this parameter unspecified.
     *
     * @example t-drds-server-5.4.12-16348095.noarch.rpm
     *
     * @var string
     */
    public $rpm;
    protected $_name = [
        'drdsInstanceId' => 'DrdsInstanceId',
        'regionId'       => 'RegionId',
        'rpm'            => 'Rpm',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->rpm) {
            $res['Rpm'] = $this->rpm;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpgradeInstanceVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Rpm'])) {
            $model->rpm = $map['Rpm'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBClusterArchRequest extends Model
{
    /**
     * @example pc-****************
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @example on
     *
     * @var string
     */
    public $hotStandbyCluster;

    /**
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @example cn-beijing-i
     *
     * @var string
     */
    public $standbyAZ;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'hotStandbyCluster' => 'HotStandbyCluster',
        'regionId' => 'RegionId',
        'standbyAZ' => 'StandbyAZ',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->hotStandbyCluster) {
            $res['HotStandbyCluster'] = $this->hotStandbyCluster;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->standbyAZ) {
            $res['StandbyAZ'] = $this->standbyAZ;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDBClusterArchRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['HotStandbyCluster'])) {
            $model->hotStandbyCluster = $map['HotStandbyCluster'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StandbyAZ'])) {
            $model->standbyAZ = $map['StandbyAZ'];
        }

        return $model;
    }
}

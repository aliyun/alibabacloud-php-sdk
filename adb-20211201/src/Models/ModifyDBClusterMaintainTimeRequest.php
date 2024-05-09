<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBClusterMaintainTimeRequest extends Model
{
    /**
     * @description The ID of the AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *
     * @example amv-bp1r053byu48p****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The maintenance window of the cluster. It must be in the hh:mmZ-hh:mmZ format.
     *
     * > The interval must be 1 hour and start and end at the beginning of an hour.
     * @example 22:00Z-23:00Z
     *
     * @var string
     */
    public $maintainTime;
    protected $_name = [
        'DBClusterId'  => 'DBClusterId',
        'maintainTime' => 'MaintainTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->maintainTime) {
            $res['MaintainTime'] = $this->maintainTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDBClusterMaintainTimeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['MaintainTime'])) {
            $model->maintainTime = $map['MaintainTime'];
        }

        return $model;
    }
}

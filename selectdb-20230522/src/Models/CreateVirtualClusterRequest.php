<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522\Models;

use AlibabaCloud\Dara\Model;

class CreateVirtualClusterRequest extends Model
{
    /**
     * @var string
     */
    public $activeClusterId;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $standbyClusterId;
    protected $_name = [
        'activeClusterId' => 'ActiveClusterId',
        'clusterName' => 'ClusterName',
        'DBInstanceId' => 'DBInstanceId',
        'regionId' => 'RegionId',
        'standbyClusterId' => 'StandbyClusterId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activeClusterId) {
            $res['ActiveClusterId'] = $this->activeClusterId;
        }

        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }

        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->standbyClusterId) {
            $res['StandbyClusterId'] = $this->standbyClusterId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActiveClusterId'])) {
            $model->activeClusterId = $map['ActiveClusterId'];
        }

        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }

        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['StandbyClusterId'])) {
            $model->standbyClusterId = $map['StandbyClusterId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Dara\Model;

class UpdateClusterRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;
    /**
     * @var string
     */
    public $clusterAliasName;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $maintenanceEndTime;
    /**
     * @var string
     */
    public $maintenanceStartTime;
    /**
     * @var string
     */
    public $requestPars;
    protected $_name = [
        'acceptLanguage'       => 'AcceptLanguage',
        'clusterAliasName'     => 'ClusterAliasName',
        'instanceId'           => 'InstanceId',
        'maintenanceEndTime'   => 'MaintenanceEndTime',
        'maintenanceStartTime' => 'MaintenanceStartTime',
        'requestPars'          => 'RequestPars',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }

        if (null !== $this->clusterAliasName) {
            $res['ClusterAliasName'] = $this->clusterAliasName;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->maintenanceEndTime) {
            $res['MaintenanceEndTime'] = $this->maintenanceEndTime;
        }

        if (null !== $this->maintenanceStartTime) {
            $res['MaintenanceStartTime'] = $this->maintenanceStartTime;
        }

        if (null !== $this->requestPars) {
            $res['RequestPars'] = $this->requestPars;
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
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }

        if (isset($map['ClusterAliasName'])) {
            $model->clusterAliasName = $map['ClusterAliasName'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['MaintenanceEndTime'])) {
            $model->maintenanceEndTime = $map['MaintenanceEndTime'];
        }

        if (isset($map['MaintenanceStartTime'])) {
            $model->maintenanceStartTime = $map['MaintenanceStartTime'];
        }

        if (isset($map['RequestPars'])) {
            $model->requestPars = $map['RequestPars'];
        }

        return $model;
    }
}

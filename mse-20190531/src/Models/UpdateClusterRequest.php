<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class UpdateClusterRequest extends Model
{
    /**
     * @description The language of the response. Valid values:
     *
     *   zh: Chinese
     *   en: English
     *
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description The alias of the instance.
     *
     * @example cluster-1
     *
     * @var string
     */
    public $clusterAliasName;

    /**
     * @description The ID of the instance.
     *
     * @example mse-cn-78v1l83****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The end time of the O\&M window.
     *
     * @example 06:00
     *
     * @var string
     */
    public $maintenanceEndTime;

    /**
     * @description The start time of the O\&M window.
     *
     * @example 02:00
     *
     * @var string
     */
    public $maintenanceStartTime;

    /**
     * @description The extended request parameters in the JSON format.
     *
     * @example {}
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return UpdateClusterRequest
     */
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

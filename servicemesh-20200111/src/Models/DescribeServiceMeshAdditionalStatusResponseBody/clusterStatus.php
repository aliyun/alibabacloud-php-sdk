<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshAdditionalStatusResponseBody;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshAdditionalStatusResponseBody\clusterStatus\apiServerLoadBalancerStatus;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshAdditionalStatusResponseBody\clusterStatus\canaryPilotLoadBalancerStatus;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshAdditionalStatusResponseBody\clusterStatus\pilotLoadBalancerStatus;
use AlibabaCloud\Tea\Model;

class clusterStatus extends Model
{
    /**
     * @example exist
     *
     * @var string
     */
    public $accessLogProjectStatus;

    /**
     * @example exist
     *
     * @var string
     */
    public $apiServerEIPStatus;

    /**
     * @description Indicates whether the SLB instance is locked. Valid values:
     *
     *   `true`: The SLB instance is locked.
     *   `false`: The SLB instance is not locked.
     *
     * @var apiServerLoadBalancerStatus
     */
    public $apiServerLoadBalancerStatus;

    /**
     * @description The check result of the EIP associated with the API server. Valid values:
     *
     *   `exist`: The EIP exists.
     *   `not_exist`: The EIP does not exist.
     *   `failed`: The check fails.
     *   `time_out`: The check times out.
     *   `not_in_use`: The EIP is not associated with the API Server.
     *   `locked`: The EIP is locked.
     *
     * @example exist
     *
     * @var string
     */
    public $auditProjectStatus;

    /**
     * @var canaryPilotLoadBalancerStatus
     */
    public $canaryPilotLoadBalancerStatus;

    /**
     * @example exist
     *
     * @var string
     */
    public $controlPlaneProjectStatus;

    /**
     * @description The check result of access logs. Valid values:
     *
     *   `exist`: Access logs exist.
     *   `not_exist`: Access logs do not exist.
     *   `failed`: The check fails.
     *   `time_out`: The check times out.
     *
     * @example {   "ca35eae22013e43758a0e26d04****":{     "accessLogDashboards":[       {         "title":"mesh-access-log_details_cn",         "url":"https://sls.console.aliyun.com/lognext/project/****\/dashboard/mesh-access-log_details_cn"       },       {         "title":"mesh-access-log_monitoring_center_cn",         "url":"https://sls.console.aliyun.com/lognext/project/****\/dashboard/mesh-access-log_monitoring_center_cn"       }     ],     "logtailStatus":"exist",     "clusterId":"ca35eae22013e43758a0e26d04****"   } }
     *
     * @var mixed[]
     */
    public $logtailStatusRecord;

    /**
     * @description Indicates whether the SLB instance is locked. Valid values:
     *
     *   `true`: The SLB instance is locked.
     *   `false`: The SLB instance is not locked.
     *
     * @var pilotLoadBalancerStatus
     */
    public $pilotLoadBalancerStatus;

    /**
     * @example reused
     *
     * @var string
     */
    public $sgStatus;
    protected $_name = [
        'accessLogProjectStatus'        => 'AccessLogProjectStatus',
        'apiServerEIPStatus'            => 'ApiServerEIPStatus',
        'apiServerLoadBalancerStatus'   => 'ApiServerLoadBalancerStatus',
        'auditProjectStatus'            => 'AuditProjectStatus',
        'canaryPilotLoadBalancerStatus' => 'CanaryPilotLoadBalancerStatus',
        'controlPlaneProjectStatus'     => 'ControlPlaneProjectStatus',
        'logtailStatusRecord'           => 'LogtailStatusRecord',
        'pilotLoadBalancerStatus'       => 'PilotLoadBalancerStatus',
        'sgStatus'                      => 'SgStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessLogProjectStatus) {
            $res['AccessLogProjectStatus'] = $this->accessLogProjectStatus;
        }
        if (null !== $this->apiServerEIPStatus) {
            $res['ApiServerEIPStatus'] = $this->apiServerEIPStatus;
        }
        if (null !== $this->apiServerLoadBalancerStatus) {
            $res['ApiServerLoadBalancerStatus'] = null !== $this->apiServerLoadBalancerStatus ? $this->apiServerLoadBalancerStatus->toMap() : null;
        }
        if (null !== $this->auditProjectStatus) {
            $res['AuditProjectStatus'] = $this->auditProjectStatus;
        }
        if (null !== $this->canaryPilotLoadBalancerStatus) {
            $res['CanaryPilotLoadBalancerStatus'] = null !== $this->canaryPilotLoadBalancerStatus ? $this->canaryPilotLoadBalancerStatus->toMap() : null;
        }
        if (null !== $this->controlPlaneProjectStatus) {
            $res['ControlPlaneProjectStatus'] = $this->controlPlaneProjectStatus;
        }
        if (null !== $this->logtailStatusRecord) {
            $res['LogtailStatusRecord'] = $this->logtailStatusRecord;
        }
        if (null !== $this->pilotLoadBalancerStatus) {
            $res['PilotLoadBalancerStatus'] = null !== $this->pilotLoadBalancerStatus ? $this->pilotLoadBalancerStatus->toMap() : null;
        }
        if (null !== $this->sgStatus) {
            $res['SgStatus'] = $this->sgStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessLogProjectStatus'])) {
            $model->accessLogProjectStatus = $map['AccessLogProjectStatus'];
        }
        if (isset($map['ApiServerEIPStatus'])) {
            $model->apiServerEIPStatus = $map['ApiServerEIPStatus'];
        }
        if (isset($map['ApiServerLoadBalancerStatus'])) {
            $model->apiServerLoadBalancerStatus = apiServerLoadBalancerStatus::fromMap($map['ApiServerLoadBalancerStatus']);
        }
        if (isset($map['AuditProjectStatus'])) {
            $model->auditProjectStatus = $map['AuditProjectStatus'];
        }
        if (isset($map['CanaryPilotLoadBalancerStatus'])) {
            $model->canaryPilotLoadBalancerStatus = canaryPilotLoadBalancerStatus::fromMap($map['CanaryPilotLoadBalancerStatus']);
        }
        if (isset($map['ControlPlaneProjectStatus'])) {
            $model->controlPlaneProjectStatus = $map['ControlPlaneProjectStatus'];
        }
        if (isset($map['LogtailStatusRecord'])) {
            $model->logtailStatusRecord = $map['LogtailStatusRecord'];
        }
        if (isset($map['PilotLoadBalancerStatus'])) {
            $model->pilotLoadBalancerStatus = pilotLoadBalancerStatus::fromMap($map['PilotLoadBalancerStatus']);
        }
        if (isset($map['SgStatus'])) {
            $model->sgStatus = $map['SgStatus'];
        }

        return $model;
    }
}

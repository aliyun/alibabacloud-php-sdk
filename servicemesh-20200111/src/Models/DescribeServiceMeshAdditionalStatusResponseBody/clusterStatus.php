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
     * @description Indicates whether access logs exist. Valid values:
     *
     *   `exist`: Access logs exist.
     *   `not_exist`: Access logs do not exist.
     *   `failed`: The check fails.
     *   `time_out`: The check times out.
     *
     * @example exist
     *
     * @var string
     */
    public $accessLogProjectStatus;

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
    public $apiServerEIPStatus;

    /**
     * @description The check results of the SLB instance created for exposing the API server.
     *
     * @var apiServerLoadBalancerStatus
     */
    public $apiServerLoadBalancerStatus;

    /**
     * @description Indicates whether audit logs exist. Valid values:
     *
     *   `exist`
     *   `not exist`
     *
     * @example exist
     *
     * @var string
     */
    public $auditProjectStatus;

    /**
     * @description The check results of the SLB instance that is created for exposing Istio Pilot and used during canary release.
     *
     * @var canaryPilotLoadBalancerStatus
     */
    public $canaryPilotLoadBalancerStatus;

    /**
     * @description Indicates whether control plane logs exist. Valid values:
     *
     *   `exist`: Control plane logs exist.
     *   `not_exist`: Control plane logs do not exist.
     *   `failed`: The check fails.
     *   `time_out`: The check times out.
     *
     * @example exist
     *
     * @var string
     */
    public $controlPlaneProjectStatus;

    /**
     * @description Indicates whether Logtail is installed in clusters on the data plane.
     *
     * @example {   "ca35eae22013e43758a0e26d04****":{     "accessLogDashboards":[       {         "title":"mesh-access-log_details_cn",         "url":"https://sls.console.aliyun.com/lognext/project/****\/dashboard/mesh-access-log_details_cn"       },       {         "title":"mesh-access-log_monitoring_center_cn",         "url":"https://sls.console.aliyun.com/lognext/project/****\/dashboard/mesh-access-log_monitoring_center_cn"       }     ],     "logtailStatus":"exist",     "clusterId":"ca35eae22013e43758a0e26d04****"   } }
     *
     * @var mixed[]
     */
    public $logtailStatusRecord;

    /**
     * @description The check results of the SLB instance created for exposing Istio Pilot.
     *
     * @var pilotLoadBalancerStatus
     */
    public $pilotLoadBalancerStatus;

    /**
     * @description The status of the RAM OAuth application that is integrated with Mesh Topology. Valid values:
     *
     *   `exist`: The RAM OAuth application exists.
     *   `reused`: The RAM OAuth application is reused.
     *   `not_exist`: The RAM OAuth application does not exist.
     *   `failed`: The check fails.
     *   `time_out`: The check times out.
     *
     * @example reused
     *
     * @var string
     */
    public $RAMApplicationStatus;

    /**
     * @description Indicates whether the security group is reused. Valid values:
     *
     *   `reused`: The security group is reused.
     *   `not_reused`: The security group is not reused.
     *   `failed`: The check fails.
     *   `time_out`: The check times out.
     *
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
        'RAMApplicationStatus'          => 'RAMApplicationStatus',
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
        if (null !== $this->RAMApplicationStatus) {
            $res['RAMApplicationStatus'] = $this->RAMApplicationStatus;
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
        if (isset($map['RAMApplicationStatus'])) {
            $model->RAMApplicationStatus = $map['RAMApplicationStatus'];
        }
        if (isset($map['SgStatus'])) {
            $model->sgStatus = $map['SgStatus'];
        }

        return $model;
    }
}

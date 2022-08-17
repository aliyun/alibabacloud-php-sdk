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
     * @var string
     */
    public $accessLogProjectStatus;

    /**
     * @var string
     */
    public $apiServerEIPStatus;

    /**
     * @var apiServerLoadBalancerStatus
     */
    public $apiServerLoadBalancerStatus;

    /**
     * @var string
     */
    public $auditProjectStatus;

    /**
     * @var canaryPilotLoadBalancerStatus
     */
    public $canaryPilotLoadBalancerStatus;

    /**
     * @var string
     */
    public $controlPlaneProjectStatus;

    /**
     * @var mixed[]
     */
    public $logtailStatusRecord;

    /**
     * @var pilotLoadBalancerStatus
     */
    public $pilotLoadBalancerStatus;

    /**
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

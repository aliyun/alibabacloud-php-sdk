<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshAdditionalStatusResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshAdditionalStatusResponseBody\clusterStatus\apiServerLoadBalancerStatus;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshAdditionalStatusResponseBody\clusterStatus\canaryPilotLoadBalancerStatus;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshAdditionalStatusResponseBody\clusterStatus\pilotLoadBalancerStatus;

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
     * @var string
     */
    public $canaryPilotEIPStatus;

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
     * @var string
     */
    public $pilotEIPStatus;

    /**
     * @var pilotLoadBalancerStatus
     */
    public $pilotLoadBalancerStatus;

    /**
     * @var string
     */
    public $RAMApplicationStatus;

    /**
     * @var string
     */
    public $sgStatus;
    protected $_name = [
        'accessLogProjectStatus' => 'AccessLogProjectStatus',
        'apiServerEIPStatus' => 'ApiServerEIPStatus',
        'apiServerLoadBalancerStatus' => 'ApiServerLoadBalancerStatus',
        'auditProjectStatus' => 'AuditProjectStatus',
        'canaryPilotEIPStatus' => 'CanaryPilotEIPStatus',
        'canaryPilotLoadBalancerStatus' => 'CanaryPilotLoadBalancerStatus',
        'controlPlaneProjectStatus' => 'ControlPlaneProjectStatus',
        'logtailStatusRecord' => 'LogtailStatusRecord',
        'pilotEIPStatus' => 'PilotEIPStatus',
        'pilotLoadBalancerStatus' => 'PilotLoadBalancerStatus',
        'RAMApplicationStatus' => 'RAMApplicationStatus',
        'sgStatus' => 'SgStatus',
    ];

    public function validate()
    {
        if (null !== $this->apiServerLoadBalancerStatus) {
            $this->apiServerLoadBalancerStatus->validate();
        }
        if (null !== $this->canaryPilotLoadBalancerStatus) {
            $this->canaryPilotLoadBalancerStatus->validate();
        }
        if (\is_array($this->logtailStatusRecord)) {
            Model::validateArray($this->logtailStatusRecord);
        }
        if (null !== $this->pilotLoadBalancerStatus) {
            $this->pilotLoadBalancerStatus->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessLogProjectStatus) {
            $res['AccessLogProjectStatus'] = $this->accessLogProjectStatus;
        }

        if (null !== $this->apiServerEIPStatus) {
            $res['ApiServerEIPStatus'] = $this->apiServerEIPStatus;
        }

        if (null !== $this->apiServerLoadBalancerStatus) {
            $res['ApiServerLoadBalancerStatus'] = null !== $this->apiServerLoadBalancerStatus ? $this->apiServerLoadBalancerStatus->toArray($noStream) : $this->apiServerLoadBalancerStatus;
        }

        if (null !== $this->auditProjectStatus) {
            $res['AuditProjectStatus'] = $this->auditProjectStatus;
        }

        if (null !== $this->canaryPilotEIPStatus) {
            $res['CanaryPilotEIPStatus'] = $this->canaryPilotEIPStatus;
        }

        if (null !== $this->canaryPilotLoadBalancerStatus) {
            $res['CanaryPilotLoadBalancerStatus'] = null !== $this->canaryPilotLoadBalancerStatus ? $this->canaryPilotLoadBalancerStatus->toArray($noStream) : $this->canaryPilotLoadBalancerStatus;
        }

        if (null !== $this->controlPlaneProjectStatus) {
            $res['ControlPlaneProjectStatus'] = $this->controlPlaneProjectStatus;
        }

        if (null !== $this->logtailStatusRecord) {
            if (\is_array($this->logtailStatusRecord)) {
                $res['LogtailStatusRecord'] = [];
                foreach ($this->logtailStatusRecord as $key1 => $value1) {
                    $res['LogtailStatusRecord'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->pilotEIPStatus) {
            $res['PilotEIPStatus'] = $this->pilotEIPStatus;
        }

        if (null !== $this->pilotLoadBalancerStatus) {
            $res['PilotLoadBalancerStatus'] = null !== $this->pilotLoadBalancerStatus ? $this->pilotLoadBalancerStatus->toArray($noStream) : $this->pilotLoadBalancerStatus;
        }

        if (null !== $this->RAMApplicationStatus) {
            $res['RAMApplicationStatus'] = $this->RAMApplicationStatus;
        }

        if (null !== $this->sgStatus) {
            $res['SgStatus'] = $this->sgStatus;
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

        if (isset($map['CanaryPilotEIPStatus'])) {
            $model->canaryPilotEIPStatus = $map['CanaryPilotEIPStatus'];
        }

        if (isset($map['CanaryPilotLoadBalancerStatus'])) {
            $model->canaryPilotLoadBalancerStatus = canaryPilotLoadBalancerStatus::fromMap($map['CanaryPilotLoadBalancerStatus']);
        }

        if (isset($map['ControlPlaneProjectStatus'])) {
            $model->controlPlaneProjectStatus = $map['ControlPlaneProjectStatus'];
        }

        if (isset($map['LogtailStatusRecord'])) {
            if (!empty($map['LogtailStatusRecord'])) {
                $model->logtailStatusRecord = [];
                foreach ($map['LogtailStatusRecord'] as $key1 => $value1) {
                    $model->logtailStatusRecord[$key1] = $value1;
                }
            }
        }

        if (isset($map['PilotEIPStatus'])) {
            $model->pilotEIPStatus = $map['PilotEIPStatus'];
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

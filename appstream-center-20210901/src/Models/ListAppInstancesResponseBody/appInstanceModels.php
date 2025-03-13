<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAppInstancesResponseBody;

use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAppInstancesResponseBody\appInstanceModels\bindInfo;
use AlibabaCloud\Tea\Model;

class appInstanceModels extends Model
{
    /**
     * @description The ID of the delivery group.
     *
     * @example aig-dk8p95irqfst9****
     *
     * @var string
     */
    public $appInstanceGroupId;

    /**
     * @description The ID of the application instance.
     *
     * @example ai-8dl7dzchklmka****
     *
     * @var string
     */
    public $appInstanceId;

    /**
     * @description The information about the binding between the application instance and end users.
     *
     * @var bindInfo
     */
    public $bindInfo;

    /**
     * @description The billing method of the app instance. Valid values:
     *
     *   **PrePaid**: subscription.
     *   **PostPaid**: pay-as-you-go
     *
     * >  This parameter is returned only if the ChargeResourceMode parameter of the delivery group to which the app instance belongs is set to Node.
     * @example PostPaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The time when the application instance was created.
     *
     * @example 2023-03-07T20:29:19.000+08:00
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The time when the application instance was updated.
     *
     * @example 2023-03-07T20:29:19.000+08:00
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The public IP address associated with the primary NIC. This value is returned only if `StrategyType` is set to `Mixed`.
     *
     * @example 10.13.13.211
     *
     * @var string
     */
    public $mainEthPublicIp;

    /**
     * @var string
     */
    public $networkInterfaceIp;

    /**
     * @description The ID of the node on which the app instance runs.
     *
     * >  This parameter is returned only if the ChargeResourceMode parameter of the delivery group to which the app instance belongs is set to Node.
     * @example i-bp13********
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The session status. This parameter is returned only if the application instance is in the `RUNNING` state.
     *
     * Valid values:
     *
     *   disconnect: disconnected
     *   connect: connected
     *
     * @example connect
     *
     * @var string
     */
    public $sessionStatus;

    /**
     * @description The status of the application instance.
     *
     * @example BOUND
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'appInstanceGroupId' => 'AppInstanceGroupId',
        'appInstanceId'      => 'AppInstanceId',
        'bindInfo'           => 'BindInfo',
        'chargeType'         => 'ChargeType',
        'gmtCreate'          => 'GmtCreate',
        'gmtModified'        => 'GmtModified',
        'mainEthPublicIp'    => 'MainEthPublicIp',
        'networkInterfaceIp' => 'NetworkInterfaceIp',
        'nodeId'             => 'NodeId',
        'sessionStatus'      => 'SessionStatus',
        'status'             => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appInstanceGroupId) {
            $res['AppInstanceGroupId'] = $this->appInstanceGroupId;
        }
        if (null !== $this->appInstanceId) {
            $res['AppInstanceId'] = $this->appInstanceId;
        }
        if (null !== $this->bindInfo) {
            $res['BindInfo'] = null !== $this->bindInfo ? $this->bindInfo->toMap() : null;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->mainEthPublicIp) {
            $res['MainEthPublicIp'] = $this->mainEthPublicIp;
        }
        if (null !== $this->networkInterfaceIp) {
            $res['NetworkInterfaceIp'] = $this->networkInterfaceIp;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->sessionStatus) {
            $res['SessionStatus'] = $this->sessionStatus;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appInstanceModels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppInstanceGroupId'])) {
            $model->appInstanceGroupId = $map['AppInstanceGroupId'];
        }
        if (isset($map['AppInstanceId'])) {
            $model->appInstanceId = $map['AppInstanceId'];
        }
        if (isset($map['BindInfo'])) {
            $model->bindInfo = bindInfo::fromMap($map['BindInfo']);
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['MainEthPublicIp'])) {
            $model->mainEthPublicIp = $map['MainEthPublicIp'];
        }
        if (isset($map['NetworkInterfaceIp'])) {
            $model->networkInterfaceIp = $map['NetworkInterfaceIp'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['SessionStatus'])) {
            $model->sessionStatus = $map['SessionStatus'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

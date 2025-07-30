<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Tea\Model;

class CreateNetworkAccessEndpointRequest extends Model
{
    /**
     * @description Idempotent token.
     *
     * @example client-token-example
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The region ID of the VPC.
     *
     * This parameter is required.
     *
     * @example idaas_ue2jvisn35ea5lmthk267xxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Private network endpoint name.
     *
     * This parameter is required.
     *
     * @example eiam-vpc-access-endpoint
     *
     * @var string
     */
    public $networkAccessEndpointName;

    /**
     * @description The IDs of vSwitches.
     *
     * @example vsw-examplexxx
     *
     * @var string[]
     */
    public $vSwitchIds;

    /**
     * @description The ID of the VPC.
     *
     * This parameter is required.
     *
     * @example vpc-examplexxx
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The region ID of the outbound VPC.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $vpcRegionId;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'instanceId' => 'InstanceId',
        'networkAccessEndpointName' => 'NetworkAccessEndpointName',
        'vSwitchIds' => 'VSwitchIds',
        'vpcId' => 'VpcId',
        'vpcRegionId' => 'VpcRegionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->networkAccessEndpointName) {
            $res['NetworkAccessEndpointName'] = $this->networkAccessEndpointName;
        }
        if (null !== $this->vSwitchIds) {
            $res['VSwitchIds'] = $this->vSwitchIds;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vpcRegionId) {
            $res['VpcRegionId'] = $this->vpcRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateNetworkAccessEndpointRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NetworkAccessEndpointName'])) {
            $model->networkAccessEndpointName = $map['NetworkAccessEndpointName'];
        }
        if (isset($map['VSwitchIds'])) {
            if (!empty($map['VSwitchIds'])) {
                $model->vSwitchIds = $map['VSwitchIds'];
            }
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VpcRegionId'])) {
            $model->vpcRegionId = $map['VpcRegionId'];
        }

        return $model;
    }
}

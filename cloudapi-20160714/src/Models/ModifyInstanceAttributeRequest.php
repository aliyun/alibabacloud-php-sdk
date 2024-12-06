<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyInstanceAttributeRequest\toConnectVpcIpBlock;
use AlibabaCloud\Tea\Model;

class ModifyInstanceAttributeRequest extends Model
{
    /**
     * @description If delete VPC Ip block.
     *
     * @example true
     *
     * @var string
     */
    public $deleteVpcIpBlock;

    /**
     * @description If enable outbound IPv6 Traffic.
     *
     * @example true
     *
     * @var string
     */
    public $egressIpv6Enable;

    /**
     * @description The HTTPS policy.
     *
     * @example HTTPS2_TLS1_0
     *
     * @var string
     */
    public $httpsPolicy;

    /**
     * @description If enable inbound IPv6 Traffic.
     *
     * @example true
     *
     * @var string
     */
    public $IPV6Enabled;

    /**
     * @description The ID of the instance.
     *
     * This parameter is required.
     * @example apigateway-ht-8xxxxxxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Instance Name
     *
     * @example apigatewayInstance
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description Custom private CIDR block.
     *
     * @example 172.0.0.1/24
     *
     * @var string
     */
    public $intranetSegments;

    /**
     * @description Maintainable end time.
     *
     * @example 23:00Z
     *
     * @var string
     */
    public $maintainEndTime;

    /**
     * @description Maintainable start time.
     *
     * @example 18:00Z
     *
     * @var string
     */
    public $maintainStartTime;

    /**
     * @description The information about the CIDR block that API Gateway can use to access the virtual private cloud (VPC) of the backend service.
     *
     * @var toConnectVpcIpBlock
     */
    public $toConnectVpcIpBlock;

    /**
     * @description The token of the request.
     *
     * @example c20d86c4-1eb3-4d0b-afe9-c586df1e2136
     *
     * @var string
     */
    public $token;

    /**
     * @description Specifies whether to enable the self-calling domain name.
     *
     * @example false
     *
     * @var string
     */
    public $vpcSlbIntranetEnable;
    protected $_name = [
        'deleteVpcIpBlock'     => 'DeleteVpcIpBlock',
        'egressIpv6Enable'     => 'EgressIpv6Enable',
        'httpsPolicy'          => 'HttpsPolicy',
        'IPV6Enabled'          => 'IPV6Enabled',
        'instanceId'           => 'InstanceId',
        'instanceName'         => 'InstanceName',
        'intranetSegments'     => 'IntranetSegments',
        'maintainEndTime'      => 'MaintainEndTime',
        'maintainStartTime'    => 'MaintainStartTime',
        'toConnectVpcIpBlock'  => 'ToConnectVpcIpBlock',
        'token'                => 'Token',
        'vpcSlbIntranetEnable' => 'VpcSlbIntranetEnable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deleteVpcIpBlock) {
            $res['DeleteVpcIpBlock'] = $this->deleteVpcIpBlock;
        }
        if (null !== $this->egressIpv6Enable) {
            $res['EgressIpv6Enable'] = $this->egressIpv6Enable;
        }
        if (null !== $this->httpsPolicy) {
            $res['HttpsPolicy'] = $this->httpsPolicy;
        }
        if (null !== $this->IPV6Enabled) {
            $res['IPV6Enabled'] = $this->IPV6Enabled;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->intranetSegments) {
            $res['IntranetSegments'] = $this->intranetSegments;
        }
        if (null !== $this->maintainEndTime) {
            $res['MaintainEndTime'] = $this->maintainEndTime;
        }
        if (null !== $this->maintainStartTime) {
            $res['MaintainStartTime'] = $this->maintainStartTime;
        }
        if (null !== $this->toConnectVpcIpBlock) {
            $res['ToConnectVpcIpBlock'] = null !== $this->toConnectVpcIpBlock ? $this->toConnectVpcIpBlock->toMap() : null;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }
        if (null !== $this->vpcSlbIntranetEnable) {
            $res['VpcSlbIntranetEnable'] = $this->vpcSlbIntranetEnable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyInstanceAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeleteVpcIpBlock'])) {
            $model->deleteVpcIpBlock = $map['DeleteVpcIpBlock'];
        }
        if (isset($map['EgressIpv6Enable'])) {
            $model->egressIpv6Enable = $map['EgressIpv6Enable'];
        }
        if (isset($map['HttpsPolicy'])) {
            $model->httpsPolicy = $map['HttpsPolicy'];
        }
        if (isset($map['IPV6Enabled'])) {
            $model->IPV6Enabled = $map['IPV6Enabled'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['IntranetSegments'])) {
            $model->intranetSegments = $map['IntranetSegments'];
        }
        if (isset($map['MaintainEndTime'])) {
            $model->maintainEndTime = $map['MaintainEndTime'];
        }
        if (isset($map['MaintainStartTime'])) {
            $model->maintainStartTime = $map['MaintainStartTime'];
        }
        if (isset($map['ToConnectVpcIpBlock'])) {
            $model->toConnectVpcIpBlock = toConnectVpcIpBlock::fromMap($map['ToConnectVpcIpBlock']);
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['VpcSlbIntranetEnable'])) {
            $model->vpcSlbIntranetEnable = $map['VpcSlbIntranetEnable'];
        }

        return $model;
    }
}

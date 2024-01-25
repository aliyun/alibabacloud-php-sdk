<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyInstanceAttributeRequest\toConnectVpcIpBlock;
use AlibabaCloud\Tea\Model;

class ModifyInstanceAttributeRequest extends Model
{
    /**
     * @example true
     *
     * @var string
     */
    public $deleteVpcIpBlock;

    /**
     * @example true
     *
     * @var string
     */
    public $egressIpv6Enable;

    /**
     * @example HTTPS2_TLS1_0
     *
     * @var string
     */
    public $httpsPolicy;

    /**
     * @example true
     *
     * @var string
     */
    public $IPV6Enabled;

    /**
     * @example apigateway-ht-8xxxxxxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example apigatewayInstance
     *
     * @var string
     */
    public $instanceName;

    /**
     * @example 172.0.0.1/24
     *
     * @var string
     */
    public $intranetSegments;

    /**
     * @example 23:00Z
     *
     * @var string
     */
    public $maintainEndTime;

    /**
     * @example 18:00Z
     *
     * @var string
     */
    public $maintainStartTime;

    /**
     * @var toConnectVpcIpBlock
     */
    public $toConnectVpcIpBlock;

    /**
     * @example c20d86c4-1eb3-4d0b-afe9-c586df1e2136
     *
     * @var string
     */
    public $token;

    /**
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

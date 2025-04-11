<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;

class ModifyInstanceAttributeShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $deleteVpcIpBlock;

    /**
     * @var string
     */
    public $egressIpv6Enable;

    /**
     * @var string
     */
    public $httpsPolicy;

    /**
     * @var string
     */
    public $IPV6Enabled;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $intranetSegments;

    /**
     * @var string
     */
    public $maintainEndTime;

    /**
     * @var string
     */
    public $maintainStartTime;

    /**
     * @var string
     */
    public $toConnectVpcIpBlockShrink;

    /**
     * @var string
     */
    public $token;

    /**
     * @var string
     */
    public $vpcSlbIntranetEnable;
    protected $_name = [
        'deleteVpcIpBlock' => 'DeleteVpcIpBlock',
        'egressIpv6Enable' => 'EgressIpv6Enable',
        'httpsPolicy' => 'HttpsPolicy',
        'IPV6Enabled' => 'IPV6Enabled',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'intranetSegments' => 'IntranetSegments',
        'maintainEndTime' => 'MaintainEndTime',
        'maintainStartTime' => 'MaintainStartTime',
        'toConnectVpcIpBlockShrink' => 'ToConnectVpcIpBlock',
        'token' => 'Token',
        'vpcSlbIntranetEnable' => 'VpcSlbIntranetEnable',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->toConnectVpcIpBlockShrink) {
            $res['ToConnectVpcIpBlock'] = $this->toConnectVpcIpBlockShrink;
        }

        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }

        if (null !== $this->vpcSlbIntranetEnable) {
            $res['VpcSlbIntranetEnable'] = $this->vpcSlbIntranetEnable;
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
            $model->toConnectVpcIpBlockShrink = $map['ToConnectVpcIpBlock'];
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

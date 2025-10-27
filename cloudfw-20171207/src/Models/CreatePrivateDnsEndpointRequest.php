<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class CreatePrivateDnsEndpointRequest extends Model
{
    /**
     * @var string
     */
    public $accessInstanceName;

    /**
     * @var string[]
     */
    public $firewallType;

    /**
     * @var string
     */
    public $ipProtocol;

    /**
     * @var int
     */
    public $memberUid;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $primaryDns;

    /**
     * @var string
     */
    public $primaryVSwitchId;

    /**
     * @var string
     */
    public $primaryVSwitchIp;

    /**
     * @var string
     */
    public $privateDnsType;

    /**
     * @var string
     */
    public $regionNo;

    /**
     * @var string
     */
    public $standbyDns;

    /**
     * @var string
     */
    public $standbyVSwitchId;

    /**
     * @var string
     */
    public $standbyVSwitchIp;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'accessInstanceName' => 'AccessInstanceName',
        'firewallType' => 'FirewallType',
        'ipProtocol' => 'IpProtocol',
        'memberUid' => 'MemberUid',
        'port' => 'Port',
        'primaryDns' => 'PrimaryDns',
        'primaryVSwitchId' => 'PrimaryVSwitchId',
        'primaryVSwitchIp' => 'PrimaryVSwitchIp',
        'privateDnsType' => 'PrivateDnsType',
        'regionNo' => 'RegionNo',
        'standbyDns' => 'StandbyDns',
        'standbyVSwitchId' => 'StandbyVSwitchId',
        'standbyVSwitchIp' => 'StandbyVSwitchIp',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        if (\is_array($this->firewallType)) {
            Model::validateArray($this->firewallType);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessInstanceName) {
            $res['AccessInstanceName'] = $this->accessInstanceName;
        }

        if (null !== $this->firewallType) {
            if (\is_array($this->firewallType)) {
                $res['FirewallType'] = [];
                $n1 = 0;
                foreach ($this->firewallType as $item1) {
                    $res['FirewallType'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ipProtocol) {
            $res['IpProtocol'] = $this->ipProtocol;
        }

        if (null !== $this->memberUid) {
            $res['MemberUid'] = $this->memberUid;
        }

        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        if (null !== $this->primaryDns) {
            $res['PrimaryDns'] = $this->primaryDns;
        }

        if (null !== $this->primaryVSwitchId) {
            $res['PrimaryVSwitchId'] = $this->primaryVSwitchId;
        }

        if (null !== $this->primaryVSwitchIp) {
            $res['PrimaryVSwitchIp'] = $this->primaryVSwitchIp;
        }

        if (null !== $this->privateDnsType) {
            $res['PrivateDnsType'] = $this->privateDnsType;
        }

        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }

        if (null !== $this->standbyDns) {
            $res['StandbyDns'] = $this->standbyDns;
        }

        if (null !== $this->standbyVSwitchId) {
            $res['StandbyVSwitchId'] = $this->standbyVSwitchId;
        }

        if (null !== $this->standbyVSwitchIp) {
            $res['StandbyVSwitchIp'] = $this->standbyVSwitchIp;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
        if (isset($map['AccessInstanceName'])) {
            $model->accessInstanceName = $map['AccessInstanceName'];
        }

        if (isset($map['FirewallType'])) {
            if (!empty($map['FirewallType'])) {
                $model->firewallType = [];
                $n1 = 0;
                foreach ($map['FirewallType'] as $item1) {
                    $model->firewallType[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['IpProtocol'])) {
            $model->ipProtocol = $map['IpProtocol'];
        }

        if (isset($map['MemberUid'])) {
            $model->memberUid = $map['MemberUid'];
        }

        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        if (isset($map['PrimaryDns'])) {
            $model->primaryDns = $map['PrimaryDns'];
        }

        if (isset($map['PrimaryVSwitchId'])) {
            $model->primaryVSwitchId = $map['PrimaryVSwitchId'];
        }

        if (isset($map['PrimaryVSwitchIp'])) {
            $model->primaryVSwitchIp = $map['PrimaryVSwitchIp'];
        }

        if (isset($map['PrivateDnsType'])) {
            $model->privateDnsType = $map['PrivateDnsType'];
        }

        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }

        if (isset($map['StandbyDns'])) {
            $model->standbyDns = $map['StandbyDns'];
        }

        if (isset($map['StandbyVSwitchId'])) {
            $model->standbyVSwitchId = $map['StandbyVSwitchId'];
        }

        if (isset($map['StandbyVSwitchIp'])) {
            $model->standbyVSwitchIp = $map['StandbyVSwitchIp'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}

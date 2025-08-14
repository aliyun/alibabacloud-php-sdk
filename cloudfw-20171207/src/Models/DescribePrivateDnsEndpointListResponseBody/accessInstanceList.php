<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribePrivateDnsEndpointListResponseBody;

use AlibabaCloud\Dara\Model;

class accessInstanceList extends Model
{
    /**
     * @var string
     */
    public $accessInstanceId;

    /**
     * @var string
     */
    public $accessInstanceName;

    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var int
     */
    public $domainNameCount;

    /**
     * @var string[]
     */
    public $firewallType;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
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
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'accessInstanceId' => 'AccessInstanceId',
        'accessInstanceName' => 'AccessInstanceName',
        'aliUid' => 'AliUid',
        'domainNameCount' => 'DomainNameCount',
        'firewallType' => 'FirewallType',
        'gmtCreate' => 'GmtCreate',
        'ipProtocol' => 'IpProtocol',
        'memberUid' => 'MemberUid',
        'port' => 'Port',
        'primaryDns' => 'PrimaryDns',
        'privateDnsType' => 'PrivateDnsType',
        'regionNo' => 'RegionNo',
        'standbyDns' => 'StandbyDns',
        'status' => 'Status',
        'taskId' => 'TaskId',
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
        if (null !== $this->accessInstanceId) {
            $res['AccessInstanceId'] = $this->accessInstanceId;
        }

        if (null !== $this->accessInstanceName) {
            $res['AccessInstanceName'] = $this->accessInstanceName;
        }

        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }

        if (null !== $this->domainNameCount) {
            $res['DomainNameCount'] = $this->domainNameCount;
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

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
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

        if (null !== $this->privateDnsType) {
            $res['PrivateDnsType'] = $this->privateDnsType;
        }

        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }

        if (null !== $this->standbyDns) {
            $res['StandbyDns'] = $this->standbyDns;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['AccessInstanceId'])) {
            $model->accessInstanceId = $map['AccessInstanceId'];
        }

        if (isset($map['AccessInstanceName'])) {
            $model->accessInstanceName = $map['AccessInstanceName'];
        }

        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }

        if (isset($map['DomainNameCount'])) {
            $model->domainNameCount = $map['DomainNameCount'];
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

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
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

        if (isset($map['PrivateDnsType'])) {
            $model->privateDnsType = $map['PrivateDnsType'];
        }

        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }

        if (isset($map['StandbyDns'])) {
            $model->standbyDns = $map['StandbyDns'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}

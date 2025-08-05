<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribePrivateDnsEndpointListResponseBody;

use AlibabaCloud\Tea\Model;

class accessInstanceList extends Model
{
    /**
     * @example 123
     *
     * @var string
     */
    public $accessInstanceId;

    /**
     * @example test
     *
     * @var string
     */
    public $accessInstanceName;

    /**
     * @example 1379490574415****
     *
     * @var int
     */
    public $aliUid;

    /**
     * @example 3
     *
     * @var int
     */
    public $domainNameCount;

    /**
     * @var string[]
     */
    public $firewallType;

    /**
     * @example 1715075765
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example tcp
     *
     * @var int
     */
    public $ipProtocol;

    /**
     * @example 1844802493****
     *
     * @var int
     */
    public $memberUid;

    /**
     * @example 443
     *
     * @var int
     */
    public $port;

    /**
     * @example 1.1.1.1
     *
     * @var string
     */
    public $primaryDns;

    /**
     * @example Custom
     *
     * @var string
     */
    public $privateDnsType;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionNo;

    /**
     * @example 1.1.1.2
     *
     * @var string
     */
    public $standbyDns;

    /**
     * @example normal
     *
     * @var int
     */
    public $status;

    /**
     * @example 123
     *
     * @var string
     */
    public $taskId;

    /**
     * @example vpc-2zelphbaourpun****
     *
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

    public function validate() {}

    public function toMap()
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
            $res['FirewallType'] = $this->firewallType;
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

    /**
     * @param array $map
     *
     * @return accessInstanceList
     */
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
                $model->firewallType = $map['FirewallType'];
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

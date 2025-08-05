<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DescribePrivateDnsEndpointDetailResponseBody extends Model
{
    /**
     * @example pd-12345
     *
     * @var string
     */
    public $accessInstanceId;

    /**
     * @var string
     */
    public $accessInstanceName;

    /**
     * @example 119898001566xxxx
     *
     * @var int
     */
    public $aliUid;

    /**
     * @example ep-1nmi412c28c374****
     *
     * @var string
     */
    public $endpointId;

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
     * @var string
     */
    public $ipProtocol;

    /**
     * @example 258039427902****
     *
     * @var int
     */
    public $memberUid;

    /**
     * @example 80
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
     * @example vsw-8vbno9zxz8j9qiot****
     *
     * @var string
     */
    public $primaryVSwitchId;

    /**
     * @example 10.1.1.1
     *
     * @var string
     */
    public $primaryVSwitchIp;

    /**
     * @example cn-shenzhen-d
     *
     * @var string
     */
    public $primaryZoneId;

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
     * @example 4E7F94C7-781F-5192-86CF-DB0850****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 1.1.1.2
     *
     * @var string
     */
    public $standbyDns;

    /**
     * @example vsw-8vb6jk75wfcwnuq****
     *
     * @var string
     */
    public $standbyVSwitchId;

    /**
     * @example 10.1.1.2
     *
     * @var string
     */
    public $standbyVSwitchIp;

    /**
     * @example cn-shenzhen-e
     *
     * @var string
     */
    public $standbyZoneId;

    /**
     * @example normal
     *
     * @var string
     */
    public $status;

    /**
     * @example 132
     *
     * @var string
     */
    public $taskId;

    /**
     * @example vpc-uf6b5lyul0x******
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'accessInstanceId' => 'AccessInstanceId',
        'accessInstanceName' => 'AccessInstanceName',
        'aliUid' => 'AliUid',
        'endpointId' => 'EndpointId',
        'firewallType' => 'FirewallType',
        'gmtCreate' => 'GmtCreate',
        'ipProtocol' => 'IpProtocol',
        'memberUid' => 'MemberUid',
        'port' => 'Port',
        'primaryDns' => 'PrimaryDns',
        'primaryVSwitchId' => 'PrimaryVSwitchId',
        'primaryVSwitchIp' => 'PrimaryVSwitchIp',
        'primaryZoneId' => 'PrimaryZoneId',
        'privateDnsType' => 'PrivateDnsType',
        'regionNo' => 'RegionNo',
        'requestId' => 'RequestId',
        'standbyDns' => 'StandbyDns',
        'standbyVSwitchId' => 'StandbyVSwitchId',
        'standbyVSwitchIp' => 'StandbyVSwitchIp',
        'standbyZoneId' => 'StandbyZoneId',
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
        if (null !== $this->endpointId) {
            $res['EndpointId'] = $this->endpointId;
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
        if (null !== $this->primaryVSwitchId) {
            $res['PrimaryVSwitchId'] = $this->primaryVSwitchId;
        }
        if (null !== $this->primaryVSwitchIp) {
            $res['PrimaryVSwitchIp'] = $this->primaryVSwitchIp;
        }
        if (null !== $this->primaryZoneId) {
            $res['PrimaryZoneId'] = $this->primaryZoneId;
        }
        if (null !== $this->privateDnsType) {
            $res['PrivateDnsType'] = $this->privateDnsType;
        }
        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (null !== $this->standbyZoneId) {
            $res['StandbyZoneId'] = $this->standbyZoneId;
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
     * @return DescribePrivateDnsEndpointDetailResponseBody
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
        if (isset($map['EndpointId'])) {
            $model->endpointId = $map['EndpointId'];
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
        if (isset($map['PrimaryVSwitchId'])) {
            $model->primaryVSwitchId = $map['PrimaryVSwitchId'];
        }
        if (isset($map['PrimaryVSwitchIp'])) {
            $model->primaryVSwitchIp = $map['PrimaryVSwitchIp'];
        }
        if (isset($map['PrimaryZoneId'])) {
            $model->primaryZoneId = $map['PrimaryZoneId'];
        }
        if (isset($map['PrivateDnsType'])) {
            $model->privateDnsType = $map['PrivateDnsType'];
        }
        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
        if (isset($map['StandbyZoneId'])) {
            $model->standbyZoneId = $map['StandbyZoneId'];
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

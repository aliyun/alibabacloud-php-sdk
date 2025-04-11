<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstanceClusterInfoResponseBody;

use AlibabaCloud\Dara\Model;

class instanceClusterAttribute extends Model
{
    /**
     * @var string
     */
    public $connectCidrBlocks;

    /**
     * @var string
     */
    public $connectVpcId;

    /**
     * @var bool
     */
    public $egressIpv6Enable;

    /**
     * @var string
     */
    public $httpsPolicies;

    /**
     * @var string
     */
    public $IPV4AclId;

    /**
     * @var string
     */
    public $IPV4AclName;

    /**
     * @var string
     */
    public $IPV4AclStatus;

    /**
     * @var string
     */
    public $IPV4AclType;

    /**
     * @var string
     */
    public $IPV6AclId;

    /**
     * @var string
     */
    public $IPV6AclName;

    /**
     * @var string
     */
    public $IPV6AclStatus;

    /**
     * @var string
     */
    public $IPV6AclType;

    /**
     * @var string
     */
    public $internetEgressAddress;

    /**
     * @var string
     */
    public $intranetEgressAddress;

    /**
     * @var string
     */
    public $intranetSegments;

    /**
     * @var bool
     */
    public $supportIpv6;

    /**
     * @var string
     */
    public $userVpcId;

    /**
     * @var string
     */
    public $userVswitchId;

    /**
     * @var string
     */
    public $vipTypeList;

    /**
     * @var bool
     */
    public $vpcIntranetEnable;

    /**
     * @var int
     */
    public $vpcOwnerId;

    /**
     * @var bool
     */
    public $vpcSlbIntranetEnable;
    protected $_name = [
        'connectCidrBlocks' => 'ConnectCidrBlocks',
        'connectVpcId' => 'ConnectVpcId',
        'egressIpv6Enable' => 'EgressIpv6Enable',
        'httpsPolicies' => 'HttpsPolicies',
        'IPV4AclId' => 'IPV4AclId',
        'IPV4AclName' => 'IPV4AclName',
        'IPV4AclStatus' => 'IPV4AclStatus',
        'IPV4AclType' => 'IPV4AclType',
        'IPV6AclId' => 'IPV6AclId',
        'IPV6AclName' => 'IPV6AclName',
        'IPV6AclStatus' => 'IPV6AclStatus',
        'IPV6AclType' => 'IPV6AclType',
        'internetEgressAddress' => 'InternetEgressAddress',
        'intranetEgressAddress' => 'IntranetEgressAddress',
        'intranetSegments' => 'IntranetSegments',
        'supportIpv6' => 'SupportIpv6',
        'userVpcId' => 'UserVpcId',
        'userVswitchId' => 'UserVswitchId',
        'vipTypeList' => 'VipTypeList',
        'vpcIntranetEnable' => 'VpcIntranetEnable',
        'vpcOwnerId' => 'VpcOwnerId',
        'vpcSlbIntranetEnable' => 'VpcSlbIntranetEnable',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectCidrBlocks) {
            $res['ConnectCidrBlocks'] = $this->connectCidrBlocks;
        }

        if (null !== $this->connectVpcId) {
            $res['ConnectVpcId'] = $this->connectVpcId;
        }

        if (null !== $this->egressIpv6Enable) {
            $res['EgressIpv6Enable'] = $this->egressIpv6Enable;
        }

        if (null !== $this->httpsPolicies) {
            $res['HttpsPolicies'] = $this->httpsPolicies;
        }

        if (null !== $this->IPV4AclId) {
            $res['IPV4AclId'] = $this->IPV4AclId;
        }

        if (null !== $this->IPV4AclName) {
            $res['IPV4AclName'] = $this->IPV4AclName;
        }

        if (null !== $this->IPV4AclStatus) {
            $res['IPV4AclStatus'] = $this->IPV4AclStatus;
        }

        if (null !== $this->IPV4AclType) {
            $res['IPV4AclType'] = $this->IPV4AclType;
        }

        if (null !== $this->IPV6AclId) {
            $res['IPV6AclId'] = $this->IPV6AclId;
        }

        if (null !== $this->IPV6AclName) {
            $res['IPV6AclName'] = $this->IPV6AclName;
        }

        if (null !== $this->IPV6AclStatus) {
            $res['IPV6AclStatus'] = $this->IPV6AclStatus;
        }

        if (null !== $this->IPV6AclType) {
            $res['IPV6AclType'] = $this->IPV6AclType;
        }

        if (null !== $this->internetEgressAddress) {
            $res['InternetEgressAddress'] = $this->internetEgressAddress;
        }

        if (null !== $this->intranetEgressAddress) {
            $res['IntranetEgressAddress'] = $this->intranetEgressAddress;
        }

        if (null !== $this->intranetSegments) {
            $res['IntranetSegments'] = $this->intranetSegments;
        }

        if (null !== $this->supportIpv6) {
            $res['SupportIpv6'] = $this->supportIpv6;
        }

        if (null !== $this->userVpcId) {
            $res['UserVpcId'] = $this->userVpcId;
        }

        if (null !== $this->userVswitchId) {
            $res['UserVswitchId'] = $this->userVswitchId;
        }

        if (null !== $this->vipTypeList) {
            $res['VipTypeList'] = $this->vipTypeList;
        }

        if (null !== $this->vpcIntranetEnable) {
            $res['VpcIntranetEnable'] = $this->vpcIntranetEnable;
        }

        if (null !== $this->vpcOwnerId) {
            $res['VpcOwnerId'] = $this->vpcOwnerId;
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
        if (isset($map['ConnectCidrBlocks'])) {
            $model->connectCidrBlocks = $map['ConnectCidrBlocks'];
        }

        if (isset($map['ConnectVpcId'])) {
            $model->connectVpcId = $map['ConnectVpcId'];
        }

        if (isset($map['EgressIpv6Enable'])) {
            $model->egressIpv6Enable = $map['EgressIpv6Enable'];
        }

        if (isset($map['HttpsPolicies'])) {
            $model->httpsPolicies = $map['HttpsPolicies'];
        }

        if (isset($map['IPV4AclId'])) {
            $model->IPV4AclId = $map['IPV4AclId'];
        }

        if (isset($map['IPV4AclName'])) {
            $model->IPV4AclName = $map['IPV4AclName'];
        }

        if (isset($map['IPV4AclStatus'])) {
            $model->IPV4AclStatus = $map['IPV4AclStatus'];
        }

        if (isset($map['IPV4AclType'])) {
            $model->IPV4AclType = $map['IPV4AclType'];
        }

        if (isset($map['IPV6AclId'])) {
            $model->IPV6AclId = $map['IPV6AclId'];
        }

        if (isset($map['IPV6AclName'])) {
            $model->IPV6AclName = $map['IPV6AclName'];
        }

        if (isset($map['IPV6AclStatus'])) {
            $model->IPV6AclStatus = $map['IPV6AclStatus'];
        }

        if (isset($map['IPV6AclType'])) {
            $model->IPV6AclType = $map['IPV6AclType'];
        }

        if (isset($map['InternetEgressAddress'])) {
            $model->internetEgressAddress = $map['InternetEgressAddress'];
        }

        if (isset($map['IntranetEgressAddress'])) {
            $model->intranetEgressAddress = $map['IntranetEgressAddress'];
        }

        if (isset($map['IntranetSegments'])) {
            $model->intranetSegments = $map['IntranetSegments'];
        }

        if (isset($map['SupportIpv6'])) {
            $model->supportIpv6 = $map['SupportIpv6'];
        }

        if (isset($map['UserVpcId'])) {
            $model->userVpcId = $map['UserVpcId'];
        }

        if (isset($map['UserVswitchId'])) {
            $model->userVswitchId = $map['UserVswitchId'];
        }

        if (isset($map['VipTypeList'])) {
            $model->vipTypeList = $map['VipTypeList'];
        }

        if (isset($map['VpcIntranetEnable'])) {
            $model->vpcIntranetEnable = $map['VpcIntranetEnable'];
        }

        if (isset($map['VpcOwnerId'])) {
            $model->vpcOwnerId = $map['VpcOwnerId'];
        }

        if (isset($map['VpcSlbIntranetEnable'])) {
            $model->vpcSlbIntranetEnable = $map['VpcSlbIntranetEnable'];
        }

        return $model;
    }
}

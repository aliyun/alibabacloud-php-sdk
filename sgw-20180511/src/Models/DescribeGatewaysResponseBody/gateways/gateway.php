<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewaysResponseBody\gateways;

use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewaysResponseBody\gateways\gateway\elasticNodes;
use AlibabaCloud\Tea\Model;

class gateway extends Model
{
    /**
     * @example 1577179769
     *
     * @var int
     */
    public $activatedTime;

    /**
     * @example https://common-buy.aliyun.com/?commodityCode=hcs_sgw_csg_pre&request={"gateway_id":"gw-0007va9bnidei3s8a***”,”directBuy":"false","gateway_class":"standard","cache_cloud_efficiency_size":0}&regionId=cn-hangzhou#/buy
     *
     * @var string
     */
    public $buyURL;

    /**
     * @var int
     */
    public $capacity;

    /**
     * @example Aliyun
     *
     * @var string
     */
    public $category;

    /**
     * @example gw-0001b2onkdzvl3b***
     *
     * @var string
     */
    public $commonBuyInstanceId;

    /**
     * @example 1577179604
     *
     * @var int
     */
    public $createdTime;

    /**
     * @var int
     */
    public $dataLoadInterval;

    /**
     * @var string
     */
    public $dataLoadType;

    /**
     * @var string
     */
    public $description;

    /**
     * @example gw-0001b2onkdzvl3b***
     *
     * @var string
     */
    public $ecsInstanceId;

    /**
     * @var bool
     */
    public $elasticGateway;

    /**
     * @var elasticNodes
     */
    public $elasticNodes;

    /**
     * @example 0
     *
     * @var int
     */
    public $expireStatus;

    /**
     * @example 1532426471
     *
     * @var int
     */
    public $expiredTime;

    /**
     * @example Advanced
     *
     * @var string
     */
    public $gatewayClass;

    /**
     * @example gw-0001b2odzvl3b1mhi***
     *
     * @var string
     */
    public $gatewayId;

    /**
     * @var string
     */
    public $gatewayRegionId;

    /**
     * @example File
     *
     * @var string
     */
    public $gatewayType;

    /**
     * @example 1.2.6
     *
     * @var string
     */
    public $gatewayVersion;

    /**
     * @var bool
     */
    public $highAvailability;

    /**
     * @example 172.16.0.21
     *
     * @var string
     */
    public $innerIp;

    /**
     * @var string
     */
    public $innerIpv6Ip;

    /**
     * @example 47.111.145.66
     *
     * @var string
     */
    public $ip;

    /**
     * @example true
     *
     * @var bool
     */
    public $isPostPaid;

    /**
     * @example false
     *
     * @var bool
     */
    public $isReleaseAfterExpiration;

    /**
     * @var string
     */
    public $lastErrorKey;

    /**
     * @example Cloud
     *
     * @var string
     */
    public $location;

    /**
     * @var int
     */
    public $maxThroughput;

    /**
     * @example fio-weekly***
     *
     * @var string
     */
    public $name;

    /**
     * @example 55
     *
     * @var int
     */
    public $publicNetworkBandwidth;

    /**
     * @example https://common-buy.aliyun.com/?commodityCode=hcs_sgw_csg_pre&orderType=RENEW&instanceId=ca-0007va9bnideidndnu72#/renew
     *
     * @var string
     */
    public $renewURL;

    /**
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @example sb-0001b2otrigeqkso***
     *
     * @var string
     */
    public $storageBundleId;

    /**
     * @example t-000978oflgrd8ah6p***
     *
     * @var string
     */
    public $taskId;

    /**
     * @example File
     *
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $untrustedEnvInstanceType;

    /**
     * @example vsw-bp1krhkgnahkb9stp0***
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @example vpc-bp1p0usrgr5z9e7lwr***
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'activatedTime'            => 'ActivatedTime',
        'buyURL'                   => 'BuyURL',
        'capacity'                 => 'Capacity',
        'category'                 => 'Category',
        'commonBuyInstanceId'      => 'CommonBuyInstanceId',
        'createdTime'              => 'CreatedTime',
        'dataLoadInterval'         => 'DataLoadInterval',
        'dataLoadType'             => 'DataLoadType',
        'description'              => 'Description',
        'ecsInstanceId'            => 'EcsInstanceId',
        'elasticGateway'           => 'ElasticGateway',
        'elasticNodes'             => 'ElasticNodes',
        'expireStatus'             => 'ExpireStatus',
        'expiredTime'              => 'ExpiredTime',
        'gatewayClass'             => 'GatewayClass',
        'gatewayId'                => 'GatewayId',
        'gatewayRegionId'          => 'GatewayRegionId',
        'gatewayType'              => 'GatewayType',
        'gatewayVersion'           => 'GatewayVersion',
        'highAvailability'         => 'HighAvailability',
        'innerIp'                  => 'InnerIp',
        'innerIpv6Ip'              => 'InnerIpv6Ip',
        'ip'                       => 'Ip',
        'isPostPaid'               => 'IsPostPaid',
        'isReleaseAfterExpiration' => 'IsReleaseAfterExpiration',
        'lastErrorKey'             => 'LastErrorKey',
        'location'                 => 'Location',
        'maxThroughput'            => 'MaxThroughput',
        'name'                     => 'Name',
        'publicNetworkBandwidth'   => 'PublicNetworkBandwidth',
        'renewURL'                 => 'RenewURL',
        'status'                   => 'Status',
        'storageBundleId'          => 'StorageBundleId',
        'taskId'                   => 'TaskId',
        'type'                     => 'Type',
        'untrustedEnvInstanceType' => 'UntrustedEnvInstanceType',
        'vSwitchId'                => 'VSwitchId',
        'vpcId'                    => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activatedTime) {
            $res['ActivatedTime'] = $this->activatedTime;
        }
        if (null !== $this->buyURL) {
            $res['BuyURL'] = $this->buyURL;
        }
        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->commonBuyInstanceId) {
            $res['CommonBuyInstanceId'] = $this->commonBuyInstanceId;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->dataLoadInterval) {
            $res['DataLoadInterval'] = $this->dataLoadInterval;
        }
        if (null !== $this->dataLoadType) {
            $res['DataLoadType'] = $this->dataLoadType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->ecsInstanceId) {
            $res['EcsInstanceId'] = $this->ecsInstanceId;
        }
        if (null !== $this->elasticGateway) {
            $res['ElasticGateway'] = $this->elasticGateway;
        }
        if (null !== $this->elasticNodes) {
            $res['ElasticNodes'] = null !== $this->elasticNodes ? $this->elasticNodes->toMap() : null;
        }
        if (null !== $this->expireStatus) {
            $res['ExpireStatus'] = $this->expireStatus;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->gatewayClass) {
            $res['GatewayClass'] = $this->gatewayClass;
        }
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->gatewayRegionId) {
            $res['GatewayRegionId'] = $this->gatewayRegionId;
        }
        if (null !== $this->gatewayType) {
            $res['GatewayType'] = $this->gatewayType;
        }
        if (null !== $this->gatewayVersion) {
            $res['GatewayVersion'] = $this->gatewayVersion;
        }
        if (null !== $this->highAvailability) {
            $res['HighAvailability'] = $this->highAvailability;
        }
        if (null !== $this->innerIp) {
            $res['InnerIp'] = $this->innerIp;
        }
        if (null !== $this->innerIpv6Ip) {
            $res['InnerIpv6Ip'] = $this->innerIpv6Ip;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->isPostPaid) {
            $res['IsPostPaid'] = $this->isPostPaid;
        }
        if (null !== $this->isReleaseAfterExpiration) {
            $res['IsReleaseAfterExpiration'] = $this->isReleaseAfterExpiration;
        }
        if (null !== $this->lastErrorKey) {
            $res['LastErrorKey'] = $this->lastErrorKey;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->maxThroughput) {
            $res['MaxThroughput'] = $this->maxThroughput;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->publicNetworkBandwidth) {
            $res['PublicNetworkBandwidth'] = $this->publicNetworkBandwidth;
        }
        if (null !== $this->renewURL) {
            $res['RenewURL'] = $this->renewURL;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->storageBundleId) {
            $res['StorageBundleId'] = $this->storageBundleId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->untrustedEnvInstanceType) {
            $res['UntrustedEnvInstanceType'] = $this->untrustedEnvInstanceType;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return gateway
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActivatedTime'])) {
            $model->activatedTime = $map['ActivatedTime'];
        }
        if (isset($map['BuyURL'])) {
            $model->buyURL = $map['BuyURL'];
        }
        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['CommonBuyInstanceId'])) {
            $model->commonBuyInstanceId = $map['CommonBuyInstanceId'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['DataLoadInterval'])) {
            $model->dataLoadInterval = $map['DataLoadInterval'];
        }
        if (isset($map['DataLoadType'])) {
            $model->dataLoadType = $map['DataLoadType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EcsInstanceId'])) {
            $model->ecsInstanceId = $map['EcsInstanceId'];
        }
        if (isset($map['ElasticGateway'])) {
            $model->elasticGateway = $map['ElasticGateway'];
        }
        if (isset($map['ElasticNodes'])) {
            $model->elasticNodes = elasticNodes::fromMap($map['ElasticNodes']);
        }
        if (isset($map['ExpireStatus'])) {
            $model->expireStatus = $map['ExpireStatus'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['GatewayClass'])) {
            $model->gatewayClass = $map['GatewayClass'];
        }
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['GatewayRegionId'])) {
            $model->gatewayRegionId = $map['GatewayRegionId'];
        }
        if (isset($map['GatewayType'])) {
            $model->gatewayType = $map['GatewayType'];
        }
        if (isset($map['GatewayVersion'])) {
            $model->gatewayVersion = $map['GatewayVersion'];
        }
        if (isset($map['HighAvailability'])) {
            $model->highAvailability = $map['HighAvailability'];
        }
        if (isset($map['InnerIp'])) {
            $model->innerIp = $map['InnerIp'];
        }
        if (isset($map['InnerIpv6Ip'])) {
            $model->innerIpv6Ip = $map['InnerIpv6Ip'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['IsPostPaid'])) {
            $model->isPostPaid = $map['IsPostPaid'];
        }
        if (isset($map['IsReleaseAfterExpiration'])) {
            $model->isReleaseAfterExpiration = $map['IsReleaseAfterExpiration'];
        }
        if (isset($map['LastErrorKey'])) {
            $model->lastErrorKey = $map['LastErrorKey'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['MaxThroughput'])) {
            $model->maxThroughput = $map['MaxThroughput'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PublicNetworkBandwidth'])) {
            $model->publicNetworkBandwidth = $map['PublicNetworkBandwidth'];
        }
        if (isset($map['RenewURL'])) {
            $model->renewURL = $map['RenewURL'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StorageBundleId'])) {
            $model->storageBundleId = $map['StorageBundleId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UntrustedEnvInstanceType'])) {
            $model->untrustedEnvInstanceType = $map['UntrustedEnvInstanceType'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}

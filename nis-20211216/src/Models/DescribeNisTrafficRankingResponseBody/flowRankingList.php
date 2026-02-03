<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models\DescribeNisTrafficRankingResponseBody;

use AlibabaCloud\Dara\Model;

class flowRankingList extends Model
{
    /**
     * @var string
     */
    public $bindingResourceId;

    /**
     * @var string
     */
    public $bindingResourceType;

    /**
     * @var float
     */
    public $bytes;

    /**
     * @var float
     */
    public $bytesRate;

    /**
     * @var string
     */
    public $clientAsn;

    /**
     * @var string
     */
    public $clientCity;

    /**
     * @var string
     */
    public $clientCountry;

    /**
     * @var string
     */
    public $clientIsp;

    /**
     * @var string
     */
    public $clientProvince;

    /**
     * @var string
     */
    public $destinationIp;

    /**
     * @var string
     */
    public $destinationPort;

    /**
     * @var string
     */
    public $destinationRegionNo;

    /**
     * @var string
     */
    public $direction;

    /**
     * @var string
     */
    public $dscp;

    /**
     * @var string
     */
    public $ecsId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $networkInterfaceId;

    /**
     * @var float
     */
    public $packets;

    /**
     * @var float
     */
    public $packetsLostBlackhole;

    /**
     * @var float
     */
    public $packetsLostNoRoute;

    /**
     * @var float
     */
    public $packetsLostTTLExpired;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $publicIpAddress;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var float
     */
    public $roundTripTime;

    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $sourcePort;

    /**
     * @var string
     */
    public $sourceRegionNo;

    /**
     * @var string
     */
    public $trafficPath;

    /**
     * @var string
     */
    public $transitRouterAttachmentId;

    /**
     * @var string
     */
    public $transitRouterDestinationAccountId;

    /**
     * @var string
     */
    public $transitRouterDestinationAvailableZone;

    /**
     * @var string
     */
    public $transitRouterDestinationNetworkInterface;

    /**
     * @var string
     */
    public $transitRouterDestinationResourceId;

    /**
     * @var string
     */
    public $transitRouterDestinationVSwitchId;

    /**
     * @var string
     */
    public $transitRouterId;

    /**
     * @var string
     */
    public $transitRouterPairAttachmentId;

    /**
     * @var string
     */
    public $transitRouterSourceAccountId;

    /**
     * @var string
     */
    public $transitRouterSourceAvailableZone;

    /**
     * @var string
     */
    public $transitRouterSourceNetworkInterface;

    /**
     * @var string
     */
    public $transitRouterSourceResourceId;

    /**
     * @var string
     */
    public $transitRouterSourceVSwitchId;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'bindingResourceId' => 'BindingResourceId',
        'bindingResourceType' => 'BindingResourceType',
        'bytes' => 'Bytes',
        'bytesRate' => 'BytesRate',
        'clientAsn' => 'ClientAsn',
        'clientCity' => 'ClientCity',
        'clientCountry' => 'ClientCountry',
        'clientIsp' => 'ClientIsp',
        'clientProvince' => 'ClientProvince',
        'destinationIp' => 'DestinationIp',
        'destinationPort' => 'DestinationPort',
        'destinationRegionNo' => 'DestinationRegionNo',
        'direction' => 'Direction',
        'dscp' => 'Dscp',
        'ecsId' => 'EcsId',
        'instanceId' => 'InstanceId',
        'networkInterfaceId' => 'NetworkInterfaceId',
        'packets' => 'Packets',
        'packetsLostBlackhole' => 'PacketsLostBlackhole',
        'packetsLostNoRoute' => 'PacketsLostNoRoute',
        'packetsLostTTLExpired' => 'PacketsLostTTLExpired',
        'protocol' => 'Protocol',
        'publicIpAddress' => 'PublicIpAddress',
        'regionId' => 'RegionId',
        'roundTripTime' => 'RoundTripTime',
        'sourceIp' => 'SourceIp',
        'sourcePort' => 'SourcePort',
        'sourceRegionNo' => 'SourceRegionNo',
        'trafficPath' => 'TrafficPath',
        'transitRouterAttachmentId' => 'TransitRouterAttachmentId',
        'transitRouterDestinationAccountId' => 'TransitRouterDestinationAccountId',
        'transitRouterDestinationAvailableZone' => 'TransitRouterDestinationAvailableZone',
        'transitRouterDestinationNetworkInterface' => 'TransitRouterDestinationNetworkInterface',
        'transitRouterDestinationResourceId' => 'TransitRouterDestinationResourceId',
        'transitRouterDestinationVSwitchId' => 'TransitRouterDestinationVSwitchId',
        'transitRouterId' => 'TransitRouterId',
        'transitRouterPairAttachmentId' => 'TransitRouterPairAttachmentId',
        'transitRouterSourceAccountId' => 'TransitRouterSourceAccountId',
        'transitRouterSourceAvailableZone' => 'TransitRouterSourceAvailableZone',
        'transitRouterSourceNetworkInterface' => 'TransitRouterSourceNetworkInterface',
        'transitRouterSourceResourceId' => 'TransitRouterSourceResourceId',
        'transitRouterSourceVSwitchId' => 'TransitRouterSourceVSwitchId',
        'vSwitchId' => 'VSwitchId',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bindingResourceId) {
            $res['BindingResourceId'] = $this->bindingResourceId;
        }

        if (null !== $this->bindingResourceType) {
            $res['BindingResourceType'] = $this->bindingResourceType;
        }

        if (null !== $this->bytes) {
            $res['Bytes'] = $this->bytes;
        }

        if (null !== $this->bytesRate) {
            $res['BytesRate'] = $this->bytesRate;
        }

        if (null !== $this->clientAsn) {
            $res['ClientAsn'] = $this->clientAsn;
        }

        if (null !== $this->clientCity) {
            $res['ClientCity'] = $this->clientCity;
        }

        if (null !== $this->clientCountry) {
            $res['ClientCountry'] = $this->clientCountry;
        }

        if (null !== $this->clientIsp) {
            $res['ClientIsp'] = $this->clientIsp;
        }

        if (null !== $this->clientProvince) {
            $res['ClientProvince'] = $this->clientProvince;
        }

        if (null !== $this->destinationIp) {
            $res['DestinationIp'] = $this->destinationIp;
        }

        if (null !== $this->destinationPort) {
            $res['DestinationPort'] = $this->destinationPort;
        }

        if (null !== $this->destinationRegionNo) {
            $res['DestinationRegionNo'] = $this->destinationRegionNo;
        }

        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }

        if (null !== $this->dscp) {
            $res['Dscp'] = $this->dscp;
        }

        if (null !== $this->ecsId) {
            $res['EcsId'] = $this->ecsId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->networkInterfaceId) {
            $res['NetworkInterfaceId'] = $this->networkInterfaceId;
        }

        if (null !== $this->packets) {
            $res['Packets'] = $this->packets;
        }

        if (null !== $this->packetsLostBlackhole) {
            $res['PacketsLostBlackhole'] = $this->packetsLostBlackhole;
        }

        if (null !== $this->packetsLostNoRoute) {
            $res['PacketsLostNoRoute'] = $this->packetsLostNoRoute;
        }

        if (null !== $this->packetsLostTTLExpired) {
            $res['PacketsLostTTLExpired'] = $this->packetsLostTTLExpired;
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        if (null !== $this->publicIpAddress) {
            $res['PublicIpAddress'] = $this->publicIpAddress;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->roundTripTime) {
            $res['RoundTripTime'] = $this->roundTripTime;
        }

        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        if (null !== $this->sourcePort) {
            $res['SourcePort'] = $this->sourcePort;
        }

        if (null !== $this->sourceRegionNo) {
            $res['SourceRegionNo'] = $this->sourceRegionNo;
        }

        if (null !== $this->trafficPath) {
            $res['TrafficPath'] = $this->trafficPath;
        }

        if (null !== $this->transitRouterAttachmentId) {
            $res['TransitRouterAttachmentId'] = $this->transitRouterAttachmentId;
        }

        if (null !== $this->transitRouterDestinationAccountId) {
            $res['TransitRouterDestinationAccountId'] = $this->transitRouterDestinationAccountId;
        }

        if (null !== $this->transitRouterDestinationAvailableZone) {
            $res['TransitRouterDestinationAvailableZone'] = $this->transitRouterDestinationAvailableZone;
        }

        if (null !== $this->transitRouterDestinationNetworkInterface) {
            $res['TransitRouterDestinationNetworkInterface'] = $this->transitRouterDestinationNetworkInterface;
        }

        if (null !== $this->transitRouterDestinationResourceId) {
            $res['TransitRouterDestinationResourceId'] = $this->transitRouterDestinationResourceId;
        }

        if (null !== $this->transitRouterDestinationVSwitchId) {
            $res['TransitRouterDestinationVSwitchId'] = $this->transitRouterDestinationVSwitchId;
        }

        if (null !== $this->transitRouterId) {
            $res['TransitRouterId'] = $this->transitRouterId;
        }

        if (null !== $this->transitRouterPairAttachmentId) {
            $res['TransitRouterPairAttachmentId'] = $this->transitRouterPairAttachmentId;
        }

        if (null !== $this->transitRouterSourceAccountId) {
            $res['TransitRouterSourceAccountId'] = $this->transitRouterSourceAccountId;
        }

        if (null !== $this->transitRouterSourceAvailableZone) {
            $res['TransitRouterSourceAvailableZone'] = $this->transitRouterSourceAvailableZone;
        }

        if (null !== $this->transitRouterSourceNetworkInterface) {
            $res['TransitRouterSourceNetworkInterface'] = $this->transitRouterSourceNetworkInterface;
        }

        if (null !== $this->transitRouterSourceResourceId) {
            $res['TransitRouterSourceResourceId'] = $this->transitRouterSourceResourceId;
        }

        if (null !== $this->transitRouterSourceVSwitchId) {
            $res['TransitRouterSourceVSwitchId'] = $this->transitRouterSourceVSwitchId;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
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
        if (isset($map['BindingResourceId'])) {
            $model->bindingResourceId = $map['BindingResourceId'];
        }

        if (isset($map['BindingResourceType'])) {
            $model->bindingResourceType = $map['BindingResourceType'];
        }

        if (isset($map['Bytes'])) {
            $model->bytes = $map['Bytes'];
        }

        if (isset($map['BytesRate'])) {
            $model->bytesRate = $map['BytesRate'];
        }

        if (isset($map['ClientAsn'])) {
            $model->clientAsn = $map['ClientAsn'];
        }

        if (isset($map['ClientCity'])) {
            $model->clientCity = $map['ClientCity'];
        }

        if (isset($map['ClientCountry'])) {
            $model->clientCountry = $map['ClientCountry'];
        }

        if (isset($map['ClientIsp'])) {
            $model->clientIsp = $map['ClientIsp'];
        }

        if (isset($map['ClientProvince'])) {
            $model->clientProvince = $map['ClientProvince'];
        }

        if (isset($map['DestinationIp'])) {
            $model->destinationIp = $map['DestinationIp'];
        }

        if (isset($map['DestinationPort'])) {
            $model->destinationPort = $map['DestinationPort'];
        }

        if (isset($map['DestinationRegionNo'])) {
            $model->destinationRegionNo = $map['DestinationRegionNo'];
        }

        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }

        if (isset($map['Dscp'])) {
            $model->dscp = $map['Dscp'];
        }

        if (isset($map['EcsId'])) {
            $model->ecsId = $map['EcsId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['NetworkInterfaceId'])) {
            $model->networkInterfaceId = $map['NetworkInterfaceId'];
        }

        if (isset($map['Packets'])) {
            $model->packets = $map['Packets'];
        }

        if (isset($map['PacketsLostBlackhole'])) {
            $model->packetsLostBlackhole = $map['PacketsLostBlackhole'];
        }

        if (isset($map['PacketsLostNoRoute'])) {
            $model->packetsLostNoRoute = $map['PacketsLostNoRoute'];
        }

        if (isset($map['PacketsLostTTLExpired'])) {
            $model->packetsLostTTLExpired = $map['PacketsLostTTLExpired'];
        }

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        if (isset($map['PublicIpAddress'])) {
            $model->publicIpAddress = $map['PublicIpAddress'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RoundTripTime'])) {
            $model->roundTripTime = $map['RoundTripTime'];
        }

        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        if (isset($map['SourcePort'])) {
            $model->sourcePort = $map['SourcePort'];
        }

        if (isset($map['SourceRegionNo'])) {
            $model->sourceRegionNo = $map['SourceRegionNo'];
        }

        if (isset($map['TrafficPath'])) {
            $model->trafficPath = $map['TrafficPath'];
        }

        if (isset($map['TransitRouterAttachmentId'])) {
            $model->transitRouterAttachmentId = $map['TransitRouterAttachmentId'];
        }

        if (isset($map['TransitRouterDestinationAccountId'])) {
            $model->transitRouterDestinationAccountId = $map['TransitRouterDestinationAccountId'];
        }

        if (isset($map['TransitRouterDestinationAvailableZone'])) {
            $model->transitRouterDestinationAvailableZone = $map['TransitRouterDestinationAvailableZone'];
        }

        if (isset($map['TransitRouterDestinationNetworkInterface'])) {
            $model->transitRouterDestinationNetworkInterface = $map['TransitRouterDestinationNetworkInterface'];
        }

        if (isset($map['TransitRouterDestinationResourceId'])) {
            $model->transitRouterDestinationResourceId = $map['TransitRouterDestinationResourceId'];
        }

        if (isset($map['TransitRouterDestinationVSwitchId'])) {
            $model->transitRouterDestinationVSwitchId = $map['TransitRouterDestinationVSwitchId'];
        }

        if (isset($map['TransitRouterId'])) {
            $model->transitRouterId = $map['TransitRouterId'];
        }

        if (isset($map['TransitRouterPairAttachmentId'])) {
            $model->transitRouterPairAttachmentId = $map['TransitRouterPairAttachmentId'];
        }

        if (isset($map['TransitRouterSourceAccountId'])) {
            $model->transitRouterSourceAccountId = $map['TransitRouterSourceAccountId'];
        }

        if (isset($map['TransitRouterSourceAvailableZone'])) {
            $model->transitRouterSourceAvailableZone = $map['TransitRouterSourceAvailableZone'];
        }

        if (isset($map['TransitRouterSourceNetworkInterface'])) {
            $model->transitRouterSourceNetworkInterface = $map['TransitRouterSourceNetworkInterface'];
        }

        if (isset($map['TransitRouterSourceResourceId'])) {
            $model->transitRouterSourceResourceId = $map['TransitRouterSourceResourceId'];
        }

        if (isset($map['TransitRouterSourceVSwitchId'])) {
            $model->transitRouterSourceVSwitchId = $map['TransitRouterSourceVSwitchId'];
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models\GetNisNetworkRankingResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var float
     */
    public $activeSessionCount;

    /**
     * @var string
     */
    public $asn;

    /**
     * @var string
     */
    public $attachmentId;

    /**
     * @var string
     */
    public $bandwidthPackageId;

    /**
     * @var float
     */
    public $byteCount;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $country;

    /**
     * @var string
     */
    public $destinationIp;

    /**
     * @var string
     */
    public $destinationIsp;

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
    public $destinationZone;

    /**
     * @var string
     */
    public $IP;

    /**
     * @var float
     */
    public $inBps;

    /**
     * @var float
     */
    public $inPps;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $isp;

    /**
     * @var float
     */
    public $newSessionPerSecond;

    /**
     * @var float
     */
    public $outBps;

    /**
     * @var float
     */
    public $outPps;

    /**
     * @var float
     */
    public $packetCount;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $province;

    /**
     * @var float
     */
    public $RTT;

    /**
     * @var string
     */
    public $regionNo;

    /**
     * @var float
     */
    public $retransmitRate;

    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $sourceIsp;

    /**
     * @var string
     */
    public $sourcePort;

    /**
     * @var string
     */
    public $sourceZone;

    /**
     * @var string
     */
    public $vbrId;
    protected $_name = [
        'activeSessionCount' => 'ActiveSessionCount',
        'asn' => 'Asn',
        'attachmentId' => 'AttachmentId',
        'bandwidthPackageId' => 'BandwidthPackageId',
        'byteCount' => 'ByteCount',
        'city' => 'City',
        'country' => 'Country',
        'destinationIp' => 'DestinationIp',
        'destinationIsp' => 'DestinationIsp',
        'destinationPort' => 'DestinationPort',
        'destinationRegionNo' => 'DestinationRegionNo',
        'destinationZone' => 'DestinationZone',
        'IP' => 'IP',
        'inBps' => 'InBps',
        'inPps' => 'InPps',
        'instanceId' => 'InstanceId',
        'isp' => 'Isp',
        'newSessionPerSecond' => 'NewSessionPerSecond',
        'outBps' => 'OutBps',
        'outPps' => 'OutPps',
        'packetCount' => 'PacketCount',
        'protocol' => 'Protocol',
        'province' => 'Province',
        'RTT' => 'RTT',
        'regionNo' => 'RegionNo',
        'retransmitRate' => 'RetransmitRate',
        'sourceIp' => 'SourceIp',
        'sourceIsp' => 'SourceIsp',
        'sourcePort' => 'SourcePort',
        'sourceZone' => 'SourceZone',
        'vbrId' => 'VbrId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activeSessionCount) {
            $res['ActiveSessionCount'] = $this->activeSessionCount;
        }

        if (null !== $this->asn) {
            $res['Asn'] = $this->asn;
        }

        if (null !== $this->attachmentId) {
            $res['AttachmentId'] = $this->attachmentId;
        }

        if (null !== $this->bandwidthPackageId) {
            $res['BandwidthPackageId'] = $this->bandwidthPackageId;
        }

        if (null !== $this->byteCount) {
            $res['ByteCount'] = $this->byteCount;
        }

        if (null !== $this->city) {
            $res['City'] = $this->city;
        }

        if (null !== $this->country) {
            $res['Country'] = $this->country;
        }

        if (null !== $this->destinationIp) {
            $res['DestinationIp'] = $this->destinationIp;
        }

        if (null !== $this->destinationIsp) {
            $res['DestinationIsp'] = $this->destinationIsp;
        }

        if (null !== $this->destinationPort) {
            $res['DestinationPort'] = $this->destinationPort;
        }

        if (null !== $this->destinationRegionNo) {
            $res['DestinationRegionNo'] = $this->destinationRegionNo;
        }

        if (null !== $this->destinationZone) {
            $res['DestinationZone'] = $this->destinationZone;
        }

        if (null !== $this->IP) {
            $res['IP'] = $this->IP;
        }

        if (null !== $this->inBps) {
            $res['InBps'] = $this->inBps;
        }

        if (null !== $this->inPps) {
            $res['InPps'] = $this->inPps;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
        }

        if (null !== $this->newSessionPerSecond) {
            $res['NewSessionPerSecond'] = $this->newSessionPerSecond;
        }

        if (null !== $this->outBps) {
            $res['OutBps'] = $this->outBps;
        }

        if (null !== $this->outPps) {
            $res['OutPps'] = $this->outPps;
        }

        if (null !== $this->packetCount) {
            $res['PacketCount'] = $this->packetCount;
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }

        if (null !== $this->RTT) {
            $res['RTT'] = $this->RTT;
        }

        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }

        if (null !== $this->retransmitRate) {
            $res['RetransmitRate'] = $this->retransmitRate;
        }

        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        if (null !== $this->sourceIsp) {
            $res['SourceIsp'] = $this->sourceIsp;
        }

        if (null !== $this->sourcePort) {
            $res['SourcePort'] = $this->sourcePort;
        }

        if (null !== $this->sourceZone) {
            $res['SourceZone'] = $this->sourceZone;
        }

        if (null !== $this->vbrId) {
            $res['VbrId'] = $this->vbrId;
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
        if (isset($map['ActiveSessionCount'])) {
            $model->activeSessionCount = $map['ActiveSessionCount'];
        }

        if (isset($map['Asn'])) {
            $model->asn = $map['Asn'];
        }

        if (isset($map['AttachmentId'])) {
            $model->attachmentId = $map['AttachmentId'];
        }

        if (isset($map['BandwidthPackageId'])) {
            $model->bandwidthPackageId = $map['BandwidthPackageId'];
        }

        if (isset($map['ByteCount'])) {
            $model->byteCount = $map['ByteCount'];
        }

        if (isset($map['City'])) {
            $model->city = $map['City'];
        }

        if (isset($map['Country'])) {
            $model->country = $map['Country'];
        }

        if (isset($map['DestinationIp'])) {
            $model->destinationIp = $map['DestinationIp'];
        }

        if (isset($map['DestinationIsp'])) {
            $model->destinationIsp = $map['DestinationIsp'];
        }

        if (isset($map['DestinationPort'])) {
            $model->destinationPort = $map['DestinationPort'];
        }

        if (isset($map['DestinationRegionNo'])) {
            $model->destinationRegionNo = $map['DestinationRegionNo'];
        }

        if (isset($map['DestinationZone'])) {
            $model->destinationZone = $map['DestinationZone'];
        }

        if (isset($map['IP'])) {
            $model->IP = $map['IP'];
        }

        if (isset($map['InBps'])) {
            $model->inBps = $map['InBps'];
        }

        if (isset($map['InPps'])) {
            $model->inPps = $map['InPps'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
        }

        if (isset($map['NewSessionPerSecond'])) {
            $model->newSessionPerSecond = $map['NewSessionPerSecond'];
        }

        if (isset($map['OutBps'])) {
            $model->outBps = $map['OutBps'];
        }

        if (isset($map['OutPps'])) {
            $model->outPps = $map['OutPps'];
        }

        if (isset($map['PacketCount'])) {
            $model->packetCount = $map['PacketCount'];
        }

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }

        if (isset($map['RTT'])) {
            $model->RTT = $map['RTT'];
        }

        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }

        if (isset($map['RetransmitRate'])) {
            $model->retransmitRate = $map['RetransmitRate'];
        }

        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        if (isset($map['SourceIsp'])) {
            $model->sourceIsp = $map['SourceIsp'];
        }

        if (isset($map['SourcePort'])) {
            $model->sourcePort = $map['SourcePort'];
        }

        if (isset($map['SourceZone'])) {
            $model->sourceZone = $map['SourceZone'];
        }

        if (isset($map['VbrId'])) {
            $model->vbrId = $map['VbrId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models\GetInternetTupleResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $accessRegion;

    /**
     * @var string
     */
    public $beginTime;

    /**
     * @var float
     */
    public $byteCount;

    /**
     * @var string
     */
    public $cloudCity;

    /**
     * @var string
     */
    public $cloudCountry;

    /**
     * @var string
     */
    public $cloudIp;

    /**
     * @var string
     */
    public $cloudIsp;

    /**
     * @var string
     */
    public $cloudPort;

    /**
     * @var string
     */
    public $cloudProduct;

    /**
     * @var string
     */
    public $cloudProvince;

    /**
     * @var string
     */
    public $direction;

    /**
     * @var float
     */
    public $inByteCount;

    /**
     * @var float
     */
    public $inOutOrderCount;

    /**
     * @var float
     */
    public $inPacketCount;

    /**
     * @var float
     */
    public $inRetranCount;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $otherCity;

    /**
     * @var string
     */
    public $otherCountry;

    /**
     * @var string
     */
    public $otherIp;

    /**
     * @var string
     */
    public $otherIsp;

    /**
     * @var string
     */
    public $otherPort;

    /**
     * @var string
     */
    public $otherProduct;

    /**
     * @var string
     */
    public $otherProvince;

    /**
     * @var float
     */
    public $outByteCount;

    /**
     * @var float
     */
    public $outOrderCount;

    /**
     * @var float
     */
    public $outOutOrderCount;

    /**
     * @var float
     */
    public $outPacketCount;

    /**
     * @var float
     */
    public $outRetranCount;

    /**
     * @var float
     */
    public $packetCount;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var float
     */
    public $retransmitRate;

    /**
     * @var float
     */
    public $rtt;
    protected $_name = [
        'accessRegion' => 'AccessRegion',
        'beginTime' => 'BeginTime',
        'byteCount' => 'ByteCount',
        'cloudCity' => 'CloudCity',
        'cloudCountry' => 'CloudCountry',
        'cloudIp' => 'CloudIp',
        'cloudIsp' => 'CloudIsp',
        'cloudPort' => 'CloudPort',
        'cloudProduct' => 'CloudProduct',
        'cloudProvince' => 'CloudProvince',
        'direction' => 'Direction',
        'inByteCount' => 'InByteCount',
        'inOutOrderCount' => 'InOutOrderCount',
        'inPacketCount' => 'InPacketCount',
        'inRetranCount' => 'InRetranCount',
        'instanceId' => 'InstanceId',
        'otherCity' => 'OtherCity',
        'otherCountry' => 'OtherCountry',
        'otherIp' => 'OtherIp',
        'otherIsp' => 'OtherIsp',
        'otherPort' => 'OtherPort',
        'otherProduct' => 'OtherProduct',
        'otherProvince' => 'OtherProvince',
        'outByteCount' => 'OutByteCount',
        'outOrderCount' => 'OutOrderCount',
        'outOutOrderCount' => 'OutOutOrderCount',
        'outPacketCount' => 'OutPacketCount',
        'outRetranCount' => 'OutRetranCount',
        'packetCount' => 'PacketCount',
        'protocol' => 'Protocol',
        'retransmitRate' => 'RetransmitRate',
        'rtt' => 'Rtt',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessRegion) {
            $res['AccessRegion'] = $this->accessRegion;
        }

        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }

        if (null !== $this->byteCount) {
            $res['ByteCount'] = $this->byteCount;
        }

        if (null !== $this->cloudCity) {
            $res['CloudCity'] = $this->cloudCity;
        }

        if (null !== $this->cloudCountry) {
            $res['CloudCountry'] = $this->cloudCountry;
        }

        if (null !== $this->cloudIp) {
            $res['CloudIp'] = $this->cloudIp;
        }

        if (null !== $this->cloudIsp) {
            $res['CloudIsp'] = $this->cloudIsp;
        }

        if (null !== $this->cloudPort) {
            $res['CloudPort'] = $this->cloudPort;
        }

        if (null !== $this->cloudProduct) {
            $res['CloudProduct'] = $this->cloudProduct;
        }

        if (null !== $this->cloudProvince) {
            $res['CloudProvince'] = $this->cloudProvince;
        }

        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }

        if (null !== $this->inByteCount) {
            $res['InByteCount'] = $this->inByteCount;
        }

        if (null !== $this->inOutOrderCount) {
            $res['InOutOrderCount'] = $this->inOutOrderCount;
        }

        if (null !== $this->inPacketCount) {
            $res['InPacketCount'] = $this->inPacketCount;
        }

        if (null !== $this->inRetranCount) {
            $res['InRetranCount'] = $this->inRetranCount;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->otherCity) {
            $res['OtherCity'] = $this->otherCity;
        }

        if (null !== $this->otherCountry) {
            $res['OtherCountry'] = $this->otherCountry;
        }

        if (null !== $this->otherIp) {
            $res['OtherIp'] = $this->otherIp;
        }

        if (null !== $this->otherIsp) {
            $res['OtherIsp'] = $this->otherIsp;
        }

        if (null !== $this->otherPort) {
            $res['OtherPort'] = $this->otherPort;
        }

        if (null !== $this->otherProduct) {
            $res['OtherProduct'] = $this->otherProduct;
        }

        if (null !== $this->otherProvince) {
            $res['OtherProvince'] = $this->otherProvince;
        }

        if (null !== $this->outByteCount) {
            $res['OutByteCount'] = $this->outByteCount;
        }

        if (null !== $this->outOrderCount) {
            $res['OutOrderCount'] = $this->outOrderCount;
        }

        if (null !== $this->outOutOrderCount) {
            $res['OutOutOrderCount'] = $this->outOutOrderCount;
        }

        if (null !== $this->outPacketCount) {
            $res['OutPacketCount'] = $this->outPacketCount;
        }

        if (null !== $this->outRetranCount) {
            $res['OutRetranCount'] = $this->outRetranCount;
        }

        if (null !== $this->packetCount) {
            $res['PacketCount'] = $this->packetCount;
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        if (null !== $this->retransmitRate) {
            $res['RetransmitRate'] = $this->retransmitRate;
        }

        if (null !== $this->rtt) {
            $res['Rtt'] = $this->rtt;
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
        if (isset($map['AccessRegion'])) {
            $model->accessRegion = $map['AccessRegion'];
        }

        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }

        if (isset($map['ByteCount'])) {
            $model->byteCount = $map['ByteCount'];
        }

        if (isset($map['CloudCity'])) {
            $model->cloudCity = $map['CloudCity'];
        }

        if (isset($map['CloudCountry'])) {
            $model->cloudCountry = $map['CloudCountry'];
        }

        if (isset($map['CloudIp'])) {
            $model->cloudIp = $map['CloudIp'];
        }

        if (isset($map['CloudIsp'])) {
            $model->cloudIsp = $map['CloudIsp'];
        }

        if (isset($map['CloudPort'])) {
            $model->cloudPort = $map['CloudPort'];
        }

        if (isset($map['CloudProduct'])) {
            $model->cloudProduct = $map['CloudProduct'];
        }

        if (isset($map['CloudProvince'])) {
            $model->cloudProvince = $map['CloudProvince'];
        }

        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }

        if (isset($map['InByteCount'])) {
            $model->inByteCount = $map['InByteCount'];
        }

        if (isset($map['InOutOrderCount'])) {
            $model->inOutOrderCount = $map['InOutOrderCount'];
        }

        if (isset($map['InPacketCount'])) {
            $model->inPacketCount = $map['InPacketCount'];
        }

        if (isset($map['InRetranCount'])) {
            $model->inRetranCount = $map['InRetranCount'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['OtherCity'])) {
            $model->otherCity = $map['OtherCity'];
        }

        if (isset($map['OtherCountry'])) {
            $model->otherCountry = $map['OtherCountry'];
        }

        if (isset($map['OtherIp'])) {
            $model->otherIp = $map['OtherIp'];
        }

        if (isset($map['OtherIsp'])) {
            $model->otherIsp = $map['OtherIsp'];
        }

        if (isset($map['OtherPort'])) {
            $model->otherPort = $map['OtherPort'];
        }

        if (isset($map['OtherProduct'])) {
            $model->otherProduct = $map['OtherProduct'];
        }

        if (isset($map['OtherProvince'])) {
            $model->otherProvince = $map['OtherProvince'];
        }

        if (isset($map['OutByteCount'])) {
            $model->outByteCount = $map['OutByteCount'];
        }

        if (isset($map['OutOrderCount'])) {
            $model->outOrderCount = $map['OutOrderCount'];
        }

        if (isset($map['OutOutOrderCount'])) {
            $model->outOutOrderCount = $map['OutOutOrderCount'];
        }

        if (isset($map['OutPacketCount'])) {
            $model->outPacketCount = $map['OutPacketCount'];
        }

        if (isset($map['OutRetranCount'])) {
            $model->outRetranCount = $map['OutRetranCount'];
        }

        if (isset($map['PacketCount'])) {
            $model->packetCount = $map['PacketCount'];
        }

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        if (isset($map['RetransmitRate'])) {
            $model->retransmitRate = $map['RetransmitRate'];
        }

        if (isset($map['Rtt'])) {
            $model->rtt = $map['Rtt'];
        }

        return $model;
    }
}

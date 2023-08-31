<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models\GetInternetTupleResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The access point of Alibaba Cloud.
     *
     * > This parameter is valid only when the value of **InstanceId** is the instance ID of an Anycast elastic IP address (EIP).
     * @example cn-hongkong-pop
     *
     * @var string
     */
    public $accessRegion;

    /**
     * @description The beginning of the time range that you queried. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1684373600099
     *
     * @var string
     */
    public $beginTime;

    /**
     * @description The traffic volume. Unit: bytes.
     *
     * @example 88
     *
     * @var float
     */
    public $byteCount;

    /**
     * @description The local city.
     *
     * @example Nanjing
     *
     * @var string
     */
    public $cloudCity;

    /**
     * @description The local country or region.
     *
     * @example China
     *
     * @var string
     */
    public $cloudCountry;

    /**
     * @description The local IP address.
     *
     * @example 112.74.XX.XX
     *
     * @var string
     */
    public $cloudIp;

    /**
     * @description The local ISP.
     *
     * @example China Mobile
     *
     * @var string
     */
    public $cloudIsp;

    /**
     * @description The local port.
     *
     * @example 443
     *
     * @var string
     */
    public $cloudPort;

    /**
     * @description The product code of the instance to which the local IP address belongs.
     *
     * @example EIP
     *
     * @var string
     */
    public $cloudProduct;

    /**
     * @description The local province.
     *
     * @example Jiangsu
     *
     * @var string
     */
    public $cloudProvince;

    /**
     * @description The direction of the Internet traffic. Valid values:
     *
     * - **in**: inbound
     * - **out**: outbound
     * @example in
     *
     * @var string
     */
    public $direction;

    /**
     * @description The inbound traffic volume. Unit: bytes.
     *
     * @example 88
     *
     * @var float
     */
    public $inByteCount;

    /**
     * @description The number of inbound disordered packets.
     *
     * @example 2
     *
     * @var float
     */
    public $inOutOrderCount;

    /**
     * @description The number of inbound packets.
     *
     * @example 33
     *
     * @var float
     */
    public $inPacketCount;

    /**
     * @description The number of inbound repeated packets.
     *
     * @example 0
     *
     * @var float
     */
    public $inRetranCount;

    /**
     * @description The instance ID to which the local IP address belongs.
     *
     * @example eip-sample*
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The remote city. In most cases, this parameter is empty if the value of **OtherCountry** is not China.
     *
     * @example Austin
     *
     * @var string
     */
    public $otherCity;

    /**
     * @description The remote country or region.
     *
     * @example United States
     *
     * @var string
     */
    public $otherCountry;

    /**
     * @description The remote IP address.
     *
     * @example 122.112.XX.XX
     *
     * @var string
     */
    public $otherIp;

    /**
     * @description The remote ISP.
     *
     * @example amazon.com
     *
     * @var string
     */
    public $otherIsp;

    /**
     * @description The remote port.
     *
     * @example 40002
     *
     * @var string
     */
    public $otherPort;

    /**
     * @description The product code of the instance to which the remote IP address belongs. If the IP address is not in the cloud, this parameter is empty.
     *
     * @example ECS
     *
     * @var string
     */
    public $otherProduct;

    /**
     * @description The remote province. In most cases, this parameter is empty if the value of **OtherCountry** is not China.
     *
     * @example Texas
     *
     * @var string
     */
    public $otherProvince;

    /**
     * @description The outbound traffic volume. Unit: bytes.
     *
     * @example 66
     *
     * @var float
     */
    public $outByteCount;

    /**
     * @description The number of disordered packets.
     *
     * @example 1
     *
     * @var float
     */
    public $outOrderCount;

    /**
     * @description The number of outbound disordered packets.
     *
     * @example 1
     *
     * @var float
     */
    public $outOutOrderCount;

    /**
     * @description The number of outbound packets.
     *
     * @example 22
     *
     * @var float
     */
    public $outPacketCount;

    /**
     * @description The number of outbound repeated packets.
     *
     * @example 1
     *
     * @var float
     */
    public $outRetranCount;

    /**
     * @description The number of packets.
     *
     * @example 66
     *
     * @var float
     */
    public $packetCount;

    /**
     * @description The protocol number.
     *
     * @example 6
     *
     * @var string
     */
    public $protocol;

    /**
     * @description The number of repeated packets.
     *
     * @example 0
     *
     * @var float
     */
    public $retranCount;

    /**
     * @description The round-trip time (RTT). Unit: milliseconds.
     *
     * @example 10000
     *
     * @var float
     */
    public $rtt;
    protected $_name = [
        'accessRegion'     => 'AccessRegion',
        'beginTime'        => 'BeginTime',
        'byteCount'        => 'ByteCount',
        'cloudCity'        => 'CloudCity',
        'cloudCountry'     => 'CloudCountry',
        'cloudIp'          => 'CloudIp',
        'cloudIsp'         => 'CloudIsp',
        'cloudPort'        => 'CloudPort',
        'cloudProduct'     => 'CloudProduct',
        'cloudProvince'    => 'CloudProvince',
        'direction'        => 'Direction',
        'inByteCount'      => 'InByteCount',
        'inOutOrderCount'  => 'InOutOrderCount',
        'inPacketCount'    => 'InPacketCount',
        'inRetranCount'    => 'InRetranCount',
        'instanceId'       => 'InstanceId',
        'otherCity'        => 'OtherCity',
        'otherCountry'     => 'OtherCountry',
        'otherIp'          => 'OtherIp',
        'otherIsp'         => 'OtherIsp',
        'otherPort'        => 'OtherPort',
        'otherProduct'     => 'OtherProduct',
        'otherProvince'    => 'OtherProvince',
        'outByteCount'     => 'OutByteCount',
        'outOrderCount'    => 'OutOrderCount',
        'outOutOrderCount' => 'OutOutOrderCount',
        'outPacketCount'   => 'OutPacketCount',
        'outRetranCount'   => 'OutRetranCount',
        'packetCount'      => 'PacketCount',
        'protocol'         => 'Protocol',
        'retranCount'      => 'RetranCount',
        'rtt'              => 'Rtt',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->retranCount) {
            $res['RetranCount'] = $this->retranCount;
        }
        if (null !== $this->rtt) {
            $res['Rtt'] = $this->rtt;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
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
        if (isset($map['RetranCount'])) {
            $model->retranCount = $map['RetranCount'];
        }
        if (isset($map['Rtt'])) {
            $model->rtt = $map['Rtt'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DescribeRiskEventPayloadResponseBody extends Model
{
    /**
     * @description The destination IP address of the intrusion event.
     *
     * @example 203.0.113.1
     *
     * @var string
     */
    public $dstIP;

    /**
     * @description The destination port of the intrusion event.
     *
     * @example 8080
     *
     * @var int
     */
    public $dstPort;

    /**
     * @description The destination VPC ID of the intrusion event.
     *
     * @example vpc-bp10w5nb30r4jzfyc****
     *
     * @var string
     */
    public $dstVpcId;

    /**
     * @description The attack payload of the intrusion event.
     *
     * @example 302902010004067075626c6963a01c0204036a5f43020100020100300e300c06082b060102010101000500
     *
     * @var string
     */
    public $payload;

    /**
     * @description The length of the attack payload of the intrusion event.
     *
     * @example 457
     *
     * @var int
     */
    public $payloadLen;

    /**
     * @description The protocol type of intrusion event. Valid values:
     *
     *   **TCP**
     *   **UDP**
     *
     * @example TCP
     *
     * @var string
     */
    public $proto;

    /**
     * @description The HTTP X-Real-IP field.
     *
     * @example 203.0.113.3
     *
     * @var string
     */
    public $realIp;

    /**
     * @description The request ID.
     *
     * @example 68055BA4-D8BD-5611-AC49-C651E619A12E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The source IP address of the intrusion event.
     *
     * @example 203.0.113.2
     *
     * @var string
     */
    public $srcIP;

    /**
     * @description The source port of the intrusion event.
     *
     * @example 54360
     *
     * @var int
     */
    public $srcPort;

    /**
     * @description The source VPC ID of the intrusion event.
     *
     * @example vpc-t4nlt09olhpazpoeg****
     *
     * @var string
     */
    public $srcVpcId;

    /**
     * @description The HTTP X-Forwarded-For field.
     *
     * @example 203.0.113.4
     *
     * @var string
     */
    public $XForwardFor;
    protected $_name = [
        'dstIP'       => 'DstIP',
        'dstPort'     => 'DstPort',
        'dstVpcId'    => 'DstVpcId',
        'payload'     => 'Payload',
        'payloadLen'  => 'PayloadLen',
        'proto'       => 'Proto',
        'realIp'      => 'RealIp',
        'requestId'   => 'RequestId',
        'srcIP'       => 'SrcIP',
        'srcPort'     => 'SrcPort',
        'srcVpcId'    => 'SrcVpcId',
        'XForwardFor' => 'XForwardFor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dstIP) {
            $res['DstIP'] = $this->dstIP;
        }
        if (null !== $this->dstPort) {
            $res['DstPort'] = $this->dstPort;
        }
        if (null !== $this->dstVpcId) {
            $res['DstVpcId'] = $this->dstVpcId;
        }
        if (null !== $this->payload) {
            $res['Payload'] = $this->payload;
        }
        if (null !== $this->payloadLen) {
            $res['PayloadLen'] = $this->payloadLen;
        }
        if (null !== $this->proto) {
            $res['Proto'] = $this->proto;
        }
        if (null !== $this->realIp) {
            $res['RealIp'] = $this->realIp;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->srcIP) {
            $res['SrcIP'] = $this->srcIP;
        }
        if (null !== $this->srcPort) {
            $res['SrcPort'] = $this->srcPort;
        }
        if (null !== $this->srcVpcId) {
            $res['SrcVpcId'] = $this->srcVpcId;
        }
        if (null !== $this->XForwardFor) {
            $res['XForwardFor'] = $this->XForwardFor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRiskEventPayloadResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DstIP'])) {
            $model->dstIP = $map['DstIP'];
        }
        if (isset($map['DstPort'])) {
            $model->dstPort = $map['DstPort'];
        }
        if (isset($map['DstVpcId'])) {
            $model->dstVpcId = $map['DstVpcId'];
        }
        if (isset($map['Payload'])) {
            $model->payload = $map['Payload'];
        }
        if (isset($map['PayloadLen'])) {
            $model->payloadLen = $map['PayloadLen'];
        }
        if (isset($map['Proto'])) {
            $model->proto = $map['Proto'];
        }
        if (isset($map['RealIp'])) {
            $model->realIp = $map['RealIp'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SrcIP'])) {
            $model->srcIP = $map['SrcIP'];
        }
        if (isset($map['SrcPort'])) {
            $model->srcPort = $map['SrcPort'];
        }
        if (isset($map['SrcVpcId'])) {
            $model->srcVpcId = $map['SrcVpcId'];
        }
        if (isset($map['XForwardFor'])) {
            $model->XForwardFor = $map['XForwardFor'];
        }

        return $model;
    }
}

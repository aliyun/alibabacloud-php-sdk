<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DescribeRiskEventPayloadResponseBody extends Model
{
    /**
     * @var string
     */
    public $dstIP;

    /**
     * @var int
     */
    public $dstPort;

    /**
     * @var string
     */
    public $dstVpcId;

    /**
     * @var int
     */
    public $hitContentType;

    /**
     * @var int
     */
    public $hitTo;

    /**
     * @var string
     */
    public $parsedContent;

    /**
     * @var string
     */
    public $payload;

    /**
     * @var int
     */
    public $payloadLen;

    /**
     * @var string
     */
    public $proto;

    /**
     * @var string
     */
    public $realIp;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $srcIP;

    /**
     * @var int
     */
    public $srcPort;

    /**
     * @var string
     */
    public $srcVpcId;

    /**
     * @var string
     */
    public $XForwardFor;
    protected $_name = [
        'dstIP' => 'DstIP',
        'dstPort' => 'DstPort',
        'dstVpcId' => 'DstVpcId',
        'hitContentType' => 'HitContentType',
        'hitTo' => 'HitTo',
        'parsedContent' => 'ParsedContent',
        'payload' => 'Payload',
        'payloadLen' => 'PayloadLen',
        'proto' => 'Proto',
        'realIp' => 'RealIp',
        'requestId' => 'RequestId',
        'srcIP' => 'SrcIP',
        'srcPort' => 'SrcPort',
        'srcVpcId' => 'SrcVpcId',
        'XForwardFor' => 'XForwardFor',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->hitContentType) {
            $res['HitContentType'] = $this->hitContentType;
        }

        if (null !== $this->hitTo) {
            $res['HitTo'] = $this->hitTo;
        }

        if (null !== $this->parsedContent) {
            $res['ParsedContent'] = $this->parsedContent;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['HitContentType'])) {
            $model->hitContentType = $map['HitContentType'];
        }

        if (isset($map['HitTo'])) {
            $model->hitTo = $map['HitTo'];
        }

        if (isset($map['ParsedContent'])) {
            $model->parsedContent = $map['ParsedContent'];
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

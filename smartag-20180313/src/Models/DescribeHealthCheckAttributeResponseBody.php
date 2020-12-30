<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Tea\Model;

class DescribeHealthCheckAttributeResponseBody extends Model
{
    /**
     * @var int
     */
    public $srcPort;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $srcIpAddr;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $failCountThreshold;

    /**
     * @var int
     */
    public $dstPort;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $probeCount;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $probeTimeout;

    /**
     * @var string
     */
    public $hcInstanceId;

    /**
     * @var int
     */
    public $rttThreshold;

    /**
     * @var int
     */
    public $probeInterval;

    /**
     * @var string
     */
    public $smartAGId;

    /**
     * @var int
     */
    public $rttFailThreshold;

    /**
     * @var string
     */
    public $dstIpAddr;
    protected $_name = [
        'srcPort'            => 'SrcPort',
        'description'        => 'Description',
        'requestId'          => 'RequestId',
        'srcIpAddr'          => 'SrcIpAddr',
        'createTime'         => 'CreateTime',
        'failCountThreshold' => 'FailCountThreshold',
        'dstPort'            => 'DstPort',
        'name'               => 'Name',
        'probeCount'         => 'ProbeCount',
        'type'               => 'Type',
        'probeTimeout'       => 'ProbeTimeout',
        'hcInstanceId'       => 'HcInstanceId',
        'rttThreshold'       => 'RttThreshold',
        'probeInterval'      => 'ProbeInterval',
        'smartAGId'          => 'SmartAGId',
        'rttFailThreshold'   => 'RttFailThreshold',
        'dstIpAddr'          => 'DstIpAddr',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->srcPort) {
            $res['SrcPort'] = $this->srcPort;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->srcIpAddr) {
            $res['SrcIpAddr'] = $this->srcIpAddr;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->failCountThreshold) {
            $res['FailCountThreshold'] = $this->failCountThreshold;
        }
        if (null !== $this->dstPort) {
            $res['DstPort'] = $this->dstPort;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->probeCount) {
            $res['ProbeCount'] = $this->probeCount;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->probeTimeout) {
            $res['ProbeTimeout'] = $this->probeTimeout;
        }
        if (null !== $this->hcInstanceId) {
            $res['HcInstanceId'] = $this->hcInstanceId;
        }
        if (null !== $this->rttThreshold) {
            $res['RttThreshold'] = $this->rttThreshold;
        }
        if (null !== $this->probeInterval) {
            $res['ProbeInterval'] = $this->probeInterval;
        }
        if (null !== $this->smartAGId) {
            $res['SmartAGId'] = $this->smartAGId;
        }
        if (null !== $this->rttFailThreshold) {
            $res['RttFailThreshold'] = $this->rttFailThreshold;
        }
        if (null !== $this->dstIpAddr) {
            $res['DstIpAddr'] = $this->dstIpAddr;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHealthCheckAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SrcPort'])) {
            $model->srcPort = $map['SrcPort'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SrcIpAddr'])) {
            $model->srcIpAddr = $map['SrcIpAddr'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['FailCountThreshold'])) {
            $model->failCountThreshold = $map['FailCountThreshold'];
        }
        if (isset($map['DstPort'])) {
            $model->dstPort = $map['DstPort'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ProbeCount'])) {
            $model->probeCount = $map['ProbeCount'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['ProbeTimeout'])) {
            $model->probeTimeout = $map['ProbeTimeout'];
        }
        if (isset($map['HcInstanceId'])) {
            $model->hcInstanceId = $map['HcInstanceId'];
        }
        if (isset($map['RttThreshold'])) {
            $model->rttThreshold = $map['RttThreshold'];
        }
        if (isset($map['ProbeInterval'])) {
            $model->probeInterval = $map['ProbeInterval'];
        }
        if (isset($map['SmartAGId'])) {
            $model->smartAGId = $map['SmartAGId'];
        }
        if (isset($map['RttFailThreshold'])) {
            $model->rttFailThreshold = $map['RttFailThreshold'];
        }
        if (isset($map['DstIpAddr'])) {
            $model->dstIpAddr = $map['DstIpAddr'];
        }

        return $model;
    }
}

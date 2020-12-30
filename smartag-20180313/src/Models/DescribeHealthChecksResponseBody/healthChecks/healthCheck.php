<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeHealthChecksResponseBody\healthChecks;

use AlibabaCloud\Tea\Model;

class healthCheck extends Model
{
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
    public $status;

    /**
     * @var string
     */
    public $dstIpAddr;

    /**
     * @var int
     */
    public $relationCount;

    /**
     * @var int
     */
    public $rttFailThreshold;

    /**
     * @var string
     */
    public $smartAGId;

    /**
     * @var int
     */
    public $dstPort;

    /**
     * @var int
     */
    public $failCountThreshold;

    /**
     * @var int
     */
    public $rttThreshold;

    /**
     * @var int
     */
    public $srcPort;

    /**
     * @var int
     */
    public $probeCount;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $srcIpAddr;

    /**
     * @var int
     */
    public $probeInterval;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $hcInstanceId;
    protected $_name = [
        'type'               => 'Type',
        'probeTimeout'       => 'ProbeTimeout',
        'status'             => 'Status',
        'dstIpAddr'          => 'DstIpAddr',
        'relationCount'      => 'RelationCount',
        'rttFailThreshold'   => 'RttFailThreshold',
        'smartAGId'          => 'SmartAGId',
        'dstPort'            => 'DstPort',
        'failCountThreshold' => 'FailCountThreshold',
        'rttThreshold'       => 'RttThreshold',
        'srcPort'            => 'SrcPort',
        'probeCount'         => 'ProbeCount',
        'description'        => 'Description',
        'srcIpAddr'          => 'SrcIpAddr',
        'probeInterval'      => 'ProbeInterval',
        'name'               => 'Name',
        'hcInstanceId'       => 'HcInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->probeTimeout) {
            $res['ProbeTimeout'] = $this->probeTimeout;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->dstIpAddr) {
            $res['DstIpAddr'] = $this->dstIpAddr;
        }
        if (null !== $this->relationCount) {
            $res['RelationCount'] = $this->relationCount;
        }
        if (null !== $this->rttFailThreshold) {
            $res['RttFailThreshold'] = $this->rttFailThreshold;
        }
        if (null !== $this->smartAGId) {
            $res['SmartAGId'] = $this->smartAGId;
        }
        if (null !== $this->dstPort) {
            $res['DstPort'] = $this->dstPort;
        }
        if (null !== $this->failCountThreshold) {
            $res['FailCountThreshold'] = $this->failCountThreshold;
        }
        if (null !== $this->rttThreshold) {
            $res['RttThreshold'] = $this->rttThreshold;
        }
        if (null !== $this->srcPort) {
            $res['SrcPort'] = $this->srcPort;
        }
        if (null !== $this->probeCount) {
            $res['ProbeCount'] = $this->probeCount;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->srcIpAddr) {
            $res['SrcIpAddr'] = $this->srcIpAddr;
        }
        if (null !== $this->probeInterval) {
            $res['ProbeInterval'] = $this->probeInterval;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->hcInstanceId) {
            $res['HcInstanceId'] = $this->hcInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return healthCheck
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['ProbeTimeout'])) {
            $model->probeTimeout = $map['ProbeTimeout'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['DstIpAddr'])) {
            $model->dstIpAddr = $map['DstIpAddr'];
        }
        if (isset($map['RelationCount'])) {
            $model->relationCount = $map['RelationCount'];
        }
        if (isset($map['RttFailThreshold'])) {
            $model->rttFailThreshold = $map['RttFailThreshold'];
        }
        if (isset($map['SmartAGId'])) {
            $model->smartAGId = $map['SmartAGId'];
        }
        if (isset($map['DstPort'])) {
            $model->dstPort = $map['DstPort'];
        }
        if (isset($map['FailCountThreshold'])) {
            $model->failCountThreshold = $map['FailCountThreshold'];
        }
        if (isset($map['RttThreshold'])) {
            $model->rttThreshold = $map['RttThreshold'];
        }
        if (isset($map['SrcPort'])) {
            $model->srcPort = $map['SrcPort'];
        }
        if (isset($map['ProbeCount'])) {
            $model->probeCount = $map['ProbeCount'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['SrcIpAddr'])) {
            $model->srcIpAddr = $map['SrcIpAddr'];
        }
        if (isset($map['ProbeInterval'])) {
            $model->probeInterval = $map['ProbeInterval'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['HcInstanceId'])) {
            $model->hcInstanceId = $map['HcInstanceId'];
        }

        return $model;
    }
}

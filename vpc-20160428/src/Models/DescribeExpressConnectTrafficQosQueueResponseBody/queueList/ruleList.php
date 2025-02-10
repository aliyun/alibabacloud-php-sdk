<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeExpressConnectTrafficQosQueueResponseBody\queueList;

use AlibabaCloud\Dara\Model;

class ruleList extends Model
{
    /**
     * @var string
     */
    public $dstCidr;
    /**
     * @var string
     */
    public $dstIPv6Cidr;
    /**
     * @var string
     */
    public $dstPortRange;
    /**
     * @var int
     */
    public $matchDscp;
    /**
     * @var int
     */
    public $priority;
    /**
     * @var string
     */
    public $protocol;
    /**
     * @var string
     */
    public $qosId;
    /**
     * @var string
     */
    public $queueId;
    /**
     * @var int
     */
    public $remarkingDscp;
    /**
     * @var string
     */
    public $ruleDescription;
    /**
     * @var string
     */
    public $ruleId;
    /**
     * @var string
     */
    public $ruleName;
    /**
     * @var string
     */
    public $srcCidr;
    /**
     * @var string
     */
    public $srcIPv6Cidr;
    /**
     * @var string
     */
    public $srcPortRange;
    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'dstCidr'         => 'DstCidr',
        'dstIPv6Cidr'     => 'DstIPv6Cidr',
        'dstPortRange'    => 'DstPortRange',
        'matchDscp'       => 'MatchDscp',
        'priority'        => 'Priority',
        'protocol'        => 'Protocol',
        'qosId'           => 'QosId',
        'queueId'         => 'QueueId',
        'remarkingDscp'   => 'RemarkingDscp',
        'ruleDescription' => 'RuleDescription',
        'ruleId'          => 'RuleId',
        'ruleName'        => 'RuleName',
        'srcCidr'         => 'SrcCidr',
        'srcIPv6Cidr'     => 'SrcIPv6Cidr',
        'srcPortRange'    => 'SrcPortRange',
        'status'          => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dstCidr) {
            $res['DstCidr'] = $this->dstCidr;
        }

        if (null !== $this->dstIPv6Cidr) {
            $res['DstIPv6Cidr'] = $this->dstIPv6Cidr;
        }

        if (null !== $this->dstPortRange) {
            $res['DstPortRange'] = $this->dstPortRange;
        }

        if (null !== $this->matchDscp) {
            $res['MatchDscp'] = $this->matchDscp;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        if (null !== $this->qosId) {
            $res['QosId'] = $this->qosId;
        }

        if (null !== $this->queueId) {
            $res['QueueId'] = $this->queueId;
        }

        if (null !== $this->remarkingDscp) {
            $res['RemarkingDscp'] = $this->remarkingDscp;
        }

        if (null !== $this->ruleDescription) {
            $res['RuleDescription'] = $this->ruleDescription;
        }

        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        if (null !== $this->srcCidr) {
            $res['SrcCidr'] = $this->srcCidr;
        }

        if (null !== $this->srcIPv6Cidr) {
            $res['SrcIPv6Cidr'] = $this->srcIPv6Cidr;
        }

        if (null !== $this->srcPortRange) {
            $res['SrcPortRange'] = $this->srcPortRange;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['DstCidr'])) {
            $model->dstCidr = $map['DstCidr'];
        }

        if (isset($map['DstIPv6Cidr'])) {
            $model->dstIPv6Cidr = $map['DstIPv6Cidr'];
        }

        if (isset($map['DstPortRange'])) {
            $model->dstPortRange = $map['DstPortRange'];
        }

        if (isset($map['MatchDscp'])) {
            $model->matchDscp = $map['MatchDscp'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        if (isset($map['QosId'])) {
            $model->qosId = $map['QosId'];
        }

        if (isset($map['QueueId'])) {
            $model->queueId = $map['QueueId'];
        }

        if (isset($map['RemarkingDscp'])) {
            $model->remarkingDscp = $map['RemarkingDscp'];
        }

        if (isset($map['RuleDescription'])) {
            $model->ruleDescription = $map['RuleDescription'];
        }

        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        if (isset($map['SrcCidr'])) {
            $model->srcCidr = $map['SrcCidr'];
        }

        if (isset($map['SrcIPv6Cidr'])) {
            $model->srcIPv6Cidr = $map['SrcIPv6Cidr'];
        }

        if (isset($map['SrcPortRange'])) {
            $model->srcPortRange = $map['SrcPortRange'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

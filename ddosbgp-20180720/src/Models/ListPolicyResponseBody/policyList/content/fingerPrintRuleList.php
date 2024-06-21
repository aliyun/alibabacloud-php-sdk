<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ListPolicyResponseBody\policyList\content;

use AlibabaCloud\Tea\Model;

class fingerPrintRuleList extends Model
{
    /**
     * @example 65535
     *
     * @var int
     */
    public $dstPortEnd;

    /**
     * @example 0
     *
     * @var int
     */
    public $dstPortStart;

    /**
     * @example 2c0b09cd-a565-4481-9acb-418b********
     *
     * @var string
     */
    public $id;

    /**
     * @example drop
     *
     * @var string
     */
    public $matchAction;

    /**
     * @example 1500
     *
     * @var int
     */
    public $maxPktLen;

    /**
     * @example 1
     *
     * @var int
     */
    public $minPktLen;

    /**
     * @example 0
     *
     * @var int
     */
    public $offset;

    /**
     * @example abcd
     *
     * @var string
     */
    public $payloadBytes;

    /**
     * @example udp
     *
     * @var string
     */
    public $protocol;

    /**
     * @example 1000
     *
     * @var int
     */
    public $rateValue;

    /**
     * @example 1
     *
     * @var int
     */
    public $seqNo;

    /**
     * @example 65535
     *
     * @var int
     */
    public $srcPortEnd;

    /**
     * @example 0
     *
     * @var int
     */
    public $srcPortStart;
    protected $_name = [
        'dstPortEnd'   => 'DstPortEnd',
        'dstPortStart' => 'DstPortStart',
        'id'           => 'Id',
        'matchAction'  => 'MatchAction',
        'maxPktLen'    => 'MaxPktLen',
        'minPktLen'    => 'MinPktLen',
        'offset'       => 'Offset',
        'payloadBytes' => 'PayloadBytes',
        'protocol'     => 'Protocol',
        'rateValue'    => 'RateValue',
        'seqNo'        => 'SeqNo',
        'srcPortEnd'   => 'SrcPortEnd',
        'srcPortStart' => 'SrcPortStart',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dstPortEnd) {
            $res['DstPortEnd'] = $this->dstPortEnd;
        }
        if (null !== $this->dstPortStart) {
            $res['DstPortStart'] = $this->dstPortStart;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->matchAction) {
            $res['MatchAction'] = $this->matchAction;
        }
        if (null !== $this->maxPktLen) {
            $res['MaxPktLen'] = $this->maxPktLen;
        }
        if (null !== $this->minPktLen) {
            $res['MinPktLen'] = $this->minPktLen;
        }
        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
        }
        if (null !== $this->payloadBytes) {
            $res['PayloadBytes'] = $this->payloadBytes;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->rateValue) {
            $res['RateValue'] = $this->rateValue;
        }
        if (null !== $this->seqNo) {
            $res['SeqNo'] = $this->seqNo;
        }
        if (null !== $this->srcPortEnd) {
            $res['SrcPortEnd'] = $this->srcPortEnd;
        }
        if (null !== $this->srcPortStart) {
            $res['SrcPortStart'] = $this->srcPortStart;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fingerPrintRuleList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DstPortEnd'])) {
            $model->dstPortEnd = $map['DstPortEnd'];
        }
        if (isset($map['DstPortStart'])) {
            $model->dstPortStart = $map['DstPortStart'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['MatchAction'])) {
            $model->matchAction = $map['MatchAction'];
        }
        if (isset($map['MaxPktLen'])) {
            $model->maxPktLen = $map['MaxPktLen'];
        }
        if (isset($map['MinPktLen'])) {
            $model->minPktLen = $map['MinPktLen'];
        }
        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }
        if (isset($map['PayloadBytes'])) {
            $model->payloadBytes = $map['PayloadBytes'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['RateValue'])) {
            $model->rateValue = $map['RateValue'];
        }
        if (isset($map['SeqNo'])) {
            $model->seqNo = $map['SeqNo'];
        }
        if (isset($map['SrcPortEnd'])) {
            $model->srcPortEnd = $map['SrcPortEnd'];
        }
        if (isset($map['SrcPortStart'])) {
            $model->srcPortStart = $map['SrcPortStart'];
        }

        return $model;
    }
}

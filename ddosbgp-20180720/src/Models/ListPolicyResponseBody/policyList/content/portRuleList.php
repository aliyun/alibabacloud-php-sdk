<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ListPolicyResponseBody\policyList\content;

use AlibabaCloud\Tea\Model;

class portRuleList extends Model
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
     * @example 8f3c3062-6c20-425d-8405-2bd1********
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
     * @example udp
     *
     * @var string
     */
    public $protocol;

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
        'protocol'     => 'Protocol',
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
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
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
     * @return portRuleList
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
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ModifyPolicyRequest\content;

use AlibabaCloud\Tea\Model;

class portRuleList extends Model
{
    /**
     * @description The end of the destination port range. Valid values: **0** to **65535**.
     *
     * This parameter is required.
     * @example 65535
     *
     * @var int
     */
    public $dstPortEnd;

    /**
     * @description The start of the destination port range. Valid values: **0** to **65535**.
     *
     * This parameter is required.
     * @example 0
     *
     * @var int
     */
    public $dstPortStart;

    /**
     * @description The ID of the rule.
     *
     * @example c52c2fa6-fdac-40c4-8753-be7c*********
     *
     * @var string
     */
    public $id;

    /**
     * @description The action triggered if the rule is matched. Valid values:
     *
     *   **drop**: The traffic is discarded.
     *
     * This parameter is required.
     * @example drop
     *
     * @var string
     */
    public $matchAction;

    /**
     * @description The type of the protocol. Valid values:
     *
     *   **tcp**
     *   **udp**
     *
     * This parameter is required.
     * @example tcp
     *
     * @var string
     */
    public $protocol;

    /**
     * @description The sequence number that indicates the order for the rule to take effect. The value is an integer.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $seqNo;

    /**
     * @description The end of the source port range. Valid values: **0** to **65535**.
     *
     * This parameter is required.
     * @example 65535
     *
     * @var int
     */
    public $srcPortEnd;

    /**
     * @description The start of the source port range. Valid values: **0** to **65535**.
     *
     * This parameter is required.
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

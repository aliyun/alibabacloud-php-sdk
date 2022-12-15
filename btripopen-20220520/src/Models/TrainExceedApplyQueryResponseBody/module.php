<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainExceedApplyQueryResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainExceedApplyQueryResponseBody\module\applyIntentionInfoDO;
use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @example apply1
     *
     * @var int
     */
    public $applyId;

    /**
     * @var applyIntentionInfoDO
     */
    public $applyIntentionInfoDO;

    /**
     * @var string
     */
    public $btripCause;

    /**
     * @example corp1
     *
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $exceedReason;

    /**
     * @example 32
     *
     * @var int
     */
    public $exceedType;

    /**
     * @example 10000
     *
     * @var string
     */
    public $originStandard;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @example 2022-02-24T09:55Z
     *
     * @var string
     */
    public $submitTime;

    /**
     * @example 0001A1100000007EX08O
     *
     * @var string
     */
    public $thirdpartApplyId;

    /**
     * @example testcorp1
     *
     * @var string
     */
    public $thirdpartCorpId;

    /**
     * @example user1
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'applyId'              => 'apply_id',
        'applyIntentionInfoDO' => 'apply_intention_info_d_o',
        'btripCause'           => 'btrip_cause',
        'corpId'               => 'corp_id',
        'exceedReason'         => 'exceed_reason',
        'exceedType'           => 'exceed_type',
        'originStandard'       => 'origin_standard',
        'status'               => 'status',
        'submitTime'           => 'submit_time',
        'thirdpartApplyId'     => 'thirdpart_apply_id',
        'thirdpartCorpId'      => 'thirdpart_corp_id',
        'userId'               => 'user_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyId) {
            $res['apply_id'] = $this->applyId;
        }
        if (null !== $this->applyIntentionInfoDO) {
            $res['apply_intention_info_d_o'] = null !== $this->applyIntentionInfoDO ? $this->applyIntentionInfoDO->toMap() : null;
        }
        if (null !== $this->btripCause) {
            $res['btrip_cause'] = $this->btripCause;
        }
        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }
        if (null !== $this->exceedReason) {
            $res['exceed_reason'] = $this->exceedReason;
        }
        if (null !== $this->exceedType) {
            $res['exceed_type'] = $this->exceedType;
        }
        if (null !== $this->originStandard) {
            $res['origin_standard'] = $this->originStandard;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->submitTime) {
            $res['submit_time'] = $this->submitTime;
        }
        if (null !== $this->thirdpartApplyId) {
            $res['thirdpart_apply_id'] = $this->thirdpartApplyId;
        }
        if (null !== $this->thirdpartCorpId) {
            $res['thirdpart_corp_id'] = $this->thirdpartCorpId;
        }
        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['apply_id'])) {
            $model->applyId = $map['apply_id'];
        }
        if (isset($map['apply_intention_info_d_o'])) {
            $model->applyIntentionInfoDO = applyIntentionInfoDO::fromMap($map['apply_intention_info_d_o']);
        }
        if (isset($map['btrip_cause'])) {
            $model->btripCause = $map['btrip_cause'];
        }
        if (isset($map['corp_id'])) {
            $model->corpId = $map['corp_id'];
        }
        if (isset($map['exceed_reason'])) {
            $model->exceedReason = $map['exceed_reason'];
        }
        if (isset($map['exceed_type'])) {
            $model->exceedType = $map['exceed_type'];
        }
        if (isset($map['origin_standard'])) {
            $model->originStandard = $map['origin_standard'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['submit_time'])) {
            $model->submitTime = $map['submit_time'];
        }
        if (isset($map['thirdpart_apply_id'])) {
            $model->thirdpartApplyId = $map['thirdpart_apply_id'];
        }
        if (isset($map['thirdpart_corp_id'])) {
            $model->thirdpartCorpId = $map['thirdpart_corp_id'];
        }
        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        return $model;
    }
}

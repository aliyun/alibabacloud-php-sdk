<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelExceedApplyQueryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelExceedApplyQueryResponseBody\module\applyIntentionInfoDo;

class module extends Model
{
    /**
     * @var int
     */
    public $applyId;

    /**
     * @var applyIntentionInfoDo
     */
    public $applyIntentionInfoDo;

    /**
     * @var string
     */
    public $btripCause;

    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $exceedReason;

    /**
     * @var int
     */
    public $exceedType;

    /**
     * @var string
     */
    public $originStandard;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $submitTime;

    /**
     * @var string
     */
    public $thirdpartApplyId;

    /**
     * @var string
     */
    public $thirdpartCorpId;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'applyId' => 'apply_id',
        'applyIntentionInfoDo' => 'apply_intention_info_do',
        'btripCause' => 'btrip_cause',
        'corpId' => 'corp_id',
        'exceedReason' => 'exceed_reason',
        'exceedType' => 'exceed_type',
        'originStandard' => 'origin_standard',
        'status' => 'status',
        'submitTime' => 'submit_time',
        'thirdpartApplyId' => 'thirdpart_apply_id',
        'thirdpartCorpId' => 'thirdpart_corp_id',
        'userId' => 'user_id',
        'userName' => 'user_name',
    ];

    public function validate()
    {
        if (null !== $this->applyIntentionInfoDo) {
            $this->applyIntentionInfoDo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applyId) {
            $res['apply_id'] = $this->applyId;
        }

        if (null !== $this->applyIntentionInfoDo) {
            $res['apply_intention_info_do'] = null !== $this->applyIntentionInfoDo ? $this->applyIntentionInfoDo->toArray($noStream) : $this->applyIntentionInfoDo;
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

        if (null !== $this->userName) {
            $res['user_name'] = $this->userName;
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
        if (isset($map['apply_id'])) {
            $model->applyId = $map['apply_id'];
        }

        if (isset($map['apply_intention_info_do'])) {
            $model->applyIntentionInfoDo = applyIntentionInfoDo::fromMap($map['apply_intention_info_do']);
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

        if (isset($map['user_name'])) {
            $model->userName = $map['user_name'];
        }

        return $model;
    }
}

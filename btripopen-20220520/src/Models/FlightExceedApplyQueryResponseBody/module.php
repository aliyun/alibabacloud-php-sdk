<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightExceedApplyQueryResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightExceedApplyQueryResponseBody\module\applyIntentionInfoDo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightExceedApplyQueryResponseBody\module\applyIntentionInfoDoList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightExceedApplyQueryResponseBody\module\applyRecommendFlights;
use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @example 1231
     *
     * @var int
     */
    public $applyId;

    /**
     * @var applyIntentionInfoDo
     */
    public $applyIntentionInfoDo;

    /**
     * @var applyIntentionInfoDoList[]
     */
    public $applyIntentionInfoDoList;

    /**
     * @var applyRecommendFlights
     */
    public $applyRecommendFlights;

    /**
     * @var string
     */
    public $btripCause;

    /**
     * @example 123
     *
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $exceedReason;

    /**
     * @example 1
     *
     * @var int
     */
    public $exceedType;

    /**
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
     * @example 2022-01-12T16:47Z
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
     * @example test_corp
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
        'applyId'                  => 'apply_id',
        'applyIntentionInfoDo'     => 'apply_intention_info_do',
        'applyIntentionInfoDoList' => 'apply_intention_info_do_list',
        'applyRecommendFlights'    => 'apply_recommend_flights',
        'btripCause'               => 'btrip_cause',
        'corpId'                   => 'corp_id',
        'exceedReason'             => 'exceed_reason',
        'exceedType'               => 'exceed_type',
        'originStandard'           => 'origin_standard',
        'status'                   => 'status',
        'submitTime'               => 'submit_time',
        'thirdpartApplyId'         => 'thirdpart_apply_id',
        'thirdpartCorpId'          => 'thirdpart_corp_id',
        'userId'                   => 'user_id',
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
        if (null !== $this->applyIntentionInfoDo) {
            $res['apply_intention_info_do'] = null !== $this->applyIntentionInfoDo ? $this->applyIntentionInfoDo->toMap() : null;
        }
        if (null !== $this->applyIntentionInfoDoList) {
            $res['apply_intention_info_do_list'] = [];
            if (null !== $this->applyIntentionInfoDoList && \is_array($this->applyIntentionInfoDoList)) {
                $n = 0;
                foreach ($this->applyIntentionInfoDoList as $item) {
                    $res['apply_intention_info_do_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->applyRecommendFlights) {
            $res['apply_recommend_flights'] = null !== $this->applyRecommendFlights ? $this->applyRecommendFlights->toMap() : null;
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
        if (isset($map['apply_intention_info_do'])) {
            $model->applyIntentionInfoDo = applyIntentionInfoDo::fromMap($map['apply_intention_info_do']);
        }
        if (isset($map['apply_intention_info_do_list'])) {
            if (!empty($map['apply_intention_info_do_list'])) {
                $model->applyIntentionInfoDoList = [];
                $n                               = 0;
                foreach ($map['apply_intention_info_do_list'] as $item) {
                    $model->applyIntentionInfoDoList[$n++] = null !== $item ? applyIntentionInfoDoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['apply_recommend_flights'])) {
            $model->applyRecommendFlights = applyRecommendFlights::fromMap($map['apply_recommend_flights']);
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

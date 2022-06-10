<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\NluResponseBody\messages\dsNluInfo;

use AlibabaCloud\SDK\Chatbot\V20220408\Models\NluResponseBody\messages\dsNluInfo\intentList\slotList;
use AlibabaCloud\Tea\Model;

class intentList extends Model
{
    /**
     * @description 意图id
     *
     * @var int
     */
    public $intentId;

    /**
     * @description 匹配详情（匹配过程）
     *
     * @var string
     */
    public $matchDetail;

    /**
     * @description 匹配类型，其枚举值含义如下：  Similarity：query与意图通过意图话术相似度匹配 Lgf：query与意图通过LGF匹配 Classify：query与意图通过模型训练匹配 FewShotLearning：query与意图通过系统内置fewshot模型匹配 BuildIn： query与系统内置意图匹配
     *
     * @var string
     */
    public $matchType;

    /**
     * @description 意图名称
     *
     * @var string
     */
    public $name;

    /**
     * @description 分数
     *
     * @var float
     */
    public $score;

    /**
     * @description 命中意图的槽位列表
     *
     * @var slotList[]
     */
    public $slotList;
    protected $_name = [
        'intentId'    => 'IntentId',
        'matchDetail' => 'MatchDetail',
        'matchType'   => 'MatchType',
        'name'        => 'Name',
        'score'       => 'Score',
        'slotList'    => 'SlotList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->intentId) {
            $res['IntentId'] = $this->intentId;
        }
        if (null !== $this->matchDetail) {
            $res['MatchDetail'] = $this->matchDetail;
        }
        if (null !== $this->matchType) {
            $res['MatchType'] = $this->matchType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->slotList) {
            $res['SlotList'] = [];
            if (null !== $this->slotList && \is_array($this->slotList)) {
                $n = 0;
                foreach ($this->slotList as $item) {
                    $res['SlotList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return intentList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IntentId'])) {
            $model->intentId = $map['IntentId'];
        }
        if (isset($map['MatchDetail'])) {
            $model->matchDetail = $map['MatchDetail'];
        }
        if (isset($map['MatchType'])) {
            $model->matchType = $map['MatchType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['SlotList'])) {
            if (!empty($map['SlotList'])) {
                $model->slotList = [];
                $n               = 0;
                foreach ($map['SlotList'] as $item) {
                    $model->slotList[$n++] = null !== $item ? slotList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

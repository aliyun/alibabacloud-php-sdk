<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\NluResponseBody\messages\dsNluInfo;

use AlibabaCloud\SDK\Chatbot\V20220408\Models\NluResponseBody\messages\dsNluInfo\intentList\slotList;
use AlibabaCloud\Tea\Model;

class intentList extends Model
{
    /**
     * @example 724387
     *
     * @var int
     */
    public $intentId;

    /**
     * @example classifierType=Fewshot,from=Fewshot,content=[我要查北京的天气, 帮我查北京的天气, 北京天气怎么样, 北京今天下雨吗, 北京今天多少度]
     *
     * @var string
     */
    public $matchDetail;

    /**
     * @example FewShotLearning
     *
     * @var string
     */
    public $matchType;

    /**
     * @example 查天气意图
     *
     * @var string
     */
    public $name;

    /**
     * @example 0.995
     *
     * @var float
     */
    public $score;

    /**
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

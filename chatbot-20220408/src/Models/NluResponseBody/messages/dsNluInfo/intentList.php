<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\NluResponseBody\messages\dsNluInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\NluResponseBody\messages\dsNluInfo\intentList\slotList;

class intentList extends Model
{
    /**
     * @var int
     */
    public $intentId;

    /**
     * @var string
     */
    public $matchDetail;

    /**
     * @var string
     */
    public $matchType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var float
     */
    public $score;

    /**
     * @var slotList[]
     */
    public $slotList;
    protected $_name = [
        'intentId' => 'IntentId',
        'matchDetail' => 'MatchDetail',
        'matchType' => 'MatchType',
        'name' => 'Name',
        'score' => 'Score',
        'slotList' => 'SlotList',
    ];

    public function validate()
    {
        if (\is_array($this->slotList)) {
            Model::validateArray($this->slotList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->slotList)) {
                $res['SlotList'] = [];
                $n1 = 0;
                foreach ($this->slotList as $item1) {
                    $res['SlotList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
                $n1 = 0;
                foreach ($map['SlotList'] as $item1) {
                    $model->slotList[$n1] = slotList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

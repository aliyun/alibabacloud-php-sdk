<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\TestRuleV4ResponseBody\data\hitRuleReviewInfoList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\TestRuleV4ResponseBody\data\hitRuleReviewInfoList\conditionHitInfoList\keyWords;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\TestRuleV4ResponseBody\data\hitRuleReviewInfoList\conditionHitInfoList\phrase;

class conditionHitInfoList extends Model
{
    /**
     * @var string[]
     */
    public $cid;

    /**
     * @var keyWords[]
     */
    public $keyWords;

    /**
     * @var phrase
     */
    public $phrase;
    protected $_name = [
        'cid' => 'Cid',
        'keyWords' => 'KeyWords',
        'phrase' => 'Phrase',
    ];

    public function validate()
    {
        if (\is_array($this->cid)) {
            Model::validateArray($this->cid);
        }
        if (\is_array($this->keyWords)) {
            Model::validateArray($this->keyWords);
        }
        if (null !== $this->phrase) {
            $this->phrase->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cid) {
            if (\is_array($this->cid)) {
                $res['Cid'] = [];
                $n1 = 0;
                foreach ($this->cid as $item1) {
                    $res['Cid'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->keyWords) {
            if (\is_array($this->keyWords)) {
                $res['KeyWords'] = [];
                $n1 = 0;
                foreach ($this->keyWords as $item1) {
                    $res['KeyWords'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->phrase) {
            $res['Phrase'] = null !== $this->phrase ? $this->phrase->toArray($noStream) : $this->phrase;
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
        if (isset($map['Cid'])) {
            if (!empty($map['Cid'])) {
                $model->cid = [];
                $n1 = 0;
                foreach ($map['Cid'] as $item1) {
                    $model->cid[$n1++] = $item1;
                }
            }
        }

        if (isset($map['KeyWords'])) {
            if (!empty($map['KeyWords'])) {
                $model->keyWords = [];
                $n1 = 0;
                foreach ($map['KeyWords'] as $item1) {
                    $model->keyWords[$n1++] = keyWords::fromMap($item1);
                }
            }
        }

        if (isset($map['Phrase'])) {
            $model->phrase = phrase::fromMap($map['Phrase']);
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\TestRuleV4ResponseBody\data\hitRuleReviewInfoList;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\TestRuleV4ResponseBody\data\hitRuleReviewInfoList\conditionHitInfoList\keyWords;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\TestRuleV4ResponseBody\data\hitRuleReviewInfoList\conditionHitInfoList\phrase;
use AlibabaCloud\Tea\Model;

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
        'cid'      => 'Cid',
        'keyWords' => 'KeyWords',
        'phrase'   => 'Phrase',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cid) {
            $res['Cid'] = $this->cid;
        }
        if (null !== $this->keyWords) {
            $res['KeyWords'] = [];
            if (null !== $this->keyWords && \is_array($this->keyWords)) {
                $n = 0;
                foreach ($this->keyWords as $item) {
                    $res['KeyWords'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->phrase) {
            $res['Phrase'] = null !== $this->phrase ? $this->phrase->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return conditionHitInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cid'])) {
            if (!empty($map['Cid'])) {
                $model->cid = $map['Cid'];
            }
        }
        if (isset($map['KeyWords'])) {
            if (!empty($map['KeyWords'])) {
                $model->keyWords = [];
                $n               = 0;
                foreach ($map['KeyWords'] as $item) {
                    $model->keyWords[$n++] = null !== $item ? keyWords::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Phrase'])) {
            $model->phrase = phrase::fromMap($map['Phrase']);
        }

        return $model;
    }
}

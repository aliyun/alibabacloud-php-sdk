<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\TestRuleResponseBody\data\hitRuleReviewInfoList\hitRuleReviewInfo\conditionHitInfoList;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\TestRuleResponseBody\data\hitRuleReviewInfoList\hitRuleReviewInfo\conditionHitInfoList\conditionHitInfo\cid;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\TestRuleResponseBody\data\hitRuleReviewInfoList\hitRuleReviewInfo\conditionHitInfoList\conditionHitInfo\keyWords;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\TestRuleResponseBody\data\hitRuleReviewInfoList\hitRuleReviewInfo\conditionHitInfoList\conditionHitInfo\phrase;
use AlibabaCloud\Tea\Model;

class conditionHitInfo extends Model
{
    /**
     * @var phrase
     */
    public $phrase;

    /**
     * @var keyWords
     */
    public $keyWords;

    /**
     * @var cid
     */
    public $cid;
    protected $_name = [
        'phrase'   => 'Phrase',
        'keyWords' => 'KeyWords',
        'cid'      => 'Cid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->phrase) {
            $res['Phrase'] = null !== $this->phrase ? $this->phrase->toMap() : null;
        }
        if (null !== $this->keyWords) {
            $res['KeyWords'] = null !== $this->keyWords ? $this->keyWords->toMap() : null;
        }
        if (null !== $this->cid) {
            $res['Cid'] = null !== $this->cid ? $this->cid->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return conditionHitInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Phrase'])) {
            $model->phrase = phrase::fromMap($map['Phrase']);
        }
        if (isset($map['KeyWords'])) {
            $model->keyWords = keyWords::fromMap($map['KeyWords']);
        }
        if (isset($map['Cid'])) {
            $model->cid = cid::fromMap($map['Cid']);
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ReviewSingleResultByIdResponseBody\data\hitRuleReviewInfoList\hitRuleReviewInfo\conditionHitInfoList;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ReviewSingleResultByIdResponseBody\data\hitRuleReviewInfoList\hitRuleReviewInfo\conditionHitInfoList\conditionHitInfo\cid;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ReviewSingleResultByIdResponseBody\data\hitRuleReviewInfoList\hitRuleReviewInfo\conditionHitInfoList\conditionHitInfo\keyWords;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ReviewSingleResultByIdResponseBody\data\hitRuleReviewInfoList\hitRuleReviewInfo\conditionHitInfoList\conditionHitInfo\phrase;
use AlibabaCloud\Tea\Model;

class conditionHitInfo extends Model
{
    /**
     * @var cid
     */
    public $cid;

    /**
     * @var keyWords
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
            $res['Cid'] = null !== $this->cid ? $this->cid->toMap() : null;
        }
        if (null !== $this->keyWords) {
            $res['KeyWords'] = null !== $this->keyWords ? $this->keyWords->toMap() : null;
        }
        if (null !== $this->phrase) {
            $res['Phrase'] = null !== $this->phrase ? $this->phrase->toMap() : null;
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
        if (isset($map['Cid'])) {
            $model->cid = cid::fromMap($map['Cid']);
        }
        if (isset($map['KeyWords'])) {
            $model->keyWords = keyWords::fromMap($map['KeyWords']);
        }
        if (isset($map['Phrase'])) {
            $model->phrase = phrase::fromMap($map['Phrase']);
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ReviewSingleResultByIdResponseBody\data;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ReviewSingleResultByIdResponseBody\data\hitRuleReviewInfoList\hitRuleReviewInfo;
use AlibabaCloud\Tea\Model;

class hitRuleReviewInfoList extends Model
{
    /**
     * @var hitRuleReviewInfo[]
     */
    public $hitRuleReviewInfo;
    protected $_name = [
        'hitRuleReviewInfo' => 'HitRuleReviewInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hitRuleReviewInfo) {
            $res['HitRuleReviewInfo'] = [];
            if (null !== $this->hitRuleReviewInfo && \is_array($this->hitRuleReviewInfo)) {
                $n = 0;
                foreach ($this->hitRuleReviewInfo as $item) {
                    $res['HitRuleReviewInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hitRuleReviewInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HitRuleReviewInfo'])) {
            if (!empty($map['HitRuleReviewInfo'])) {
                $model->hitRuleReviewInfo = [];
                $n                        = 0;
                foreach ($map['HitRuleReviewInfo'] as $item) {
                    $model->hitRuleReviewInfo[$n++] = null !== $item ? hitRuleReviewInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

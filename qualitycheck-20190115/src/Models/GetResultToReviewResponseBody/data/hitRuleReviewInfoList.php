<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\hitRuleReviewInfoList\hitRuleReviewInfo;

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
        if (\is_array($this->hitRuleReviewInfo)) {
            Model::validateArray($this->hitRuleReviewInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hitRuleReviewInfo) {
            if (\is_array($this->hitRuleReviewInfo)) {
                $res['HitRuleReviewInfo'] = [];
                $n1                       = 0;
                foreach ($this->hitRuleReviewInfo as $item1) {
                    $res['HitRuleReviewInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['HitRuleReviewInfo'])) {
            if (!empty($map['HitRuleReviewInfo'])) {
                $model->hitRuleReviewInfo = [];
                $n1                       = 0;
                foreach ($map['HitRuleReviewInfo'] as $item1) {
                    $model->hitRuleReviewInfo[$n1++] = hitRuleReviewInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

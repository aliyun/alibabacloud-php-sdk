<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\reviewHistoryList\reviewHistory;

use AlibabaCloud\Tea\Model;

class reviewRightRule extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\reviewHistoryList\reviewHistory\reviewRightRule\reviewRightRule[]
     */
    public $reviewRightRule;
    protected $_name = [
        'reviewRightRule' => 'ReviewRightRule',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reviewRightRule) {
            $res['ReviewRightRule'] = [];
            if (null !== $this->reviewRightRule && \is_array($this->reviewRightRule)) {
                $n = 0;
                foreach ($this->reviewRightRule as $item) {
                    $res['ReviewRightRule'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return reviewRightRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReviewRightRule'])) {
            if (!empty($map['ReviewRightRule'])) {
                $model->reviewRightRule = [];
                $n                      = 0;
                foreach ($map['ReviewRightRule'] as $item) {
                    $model->reviewRightRule[$n++] = null !== $item ? \AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\reviewHistoryList\reviewHistory\reviewRightRule\reviewRightRule::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

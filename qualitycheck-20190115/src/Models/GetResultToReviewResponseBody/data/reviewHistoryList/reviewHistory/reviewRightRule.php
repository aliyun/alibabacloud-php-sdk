<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\reviewHistoryList\reviewHistory;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\reviewHistoryList\reviewHistory\reviewRightRule\reviewRightRule;

class reviewRightRule extends Model
{
    /**
     * @var reviewRightRule[]
     */
    public $reviewRightRule;
    protected $_name = [
        'reviewRightRule' => 'ReviewRightRule',
    ];

    public function validate()
    {
        if (\is_array($this->reviewRightRule)) {
            Model::validateArray($this->reviewRightRule);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->reviewRightRule) {
            if (\is_array($this->reviewRightRule)) {
                $res['ReviewRightRule'] = [];
                $n1 = 0;
                foreach ($this->reviewRightRule as $item1) {
                    $res['ReviewRightRule'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ReviewRightRule'])) {
            if (!empty($map['ReviewRightRule'])) {
                $model->reviewRightRule = [];
                $n1 = 0;
                foreach ($map['ReviewRightRule'] as $item1) {
                    $model->reviewRightRule[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

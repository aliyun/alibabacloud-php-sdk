<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\reviewHistoryList\reviewHistory;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\reviewHistoryList\reviewHistory\reviewErrorRule\reviewErrorRule;

class reviewErrorRule extends Model
{
    /**
     * @var reviewErrorRule[]
     */
    public $reviewErrorRule;
    protected $_name = [
        'reviewErrorRule' => 'reviewErrorRule',
    ];

    public function validate()
    {
        if (\is_array($this->reviewErrorRule)) {
            Model::validateArray($this->reviewErrorRule);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->reviewErrorRule) {
            if (\is_array($this->reviewErrorRule)) {
                $res['reviewErrorRule'] = [];
                $n1 = 0;
                foreach ($this->reviewErrorRule as $item1) {
                    $res['reviewErrorRule'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['reviewErrorRule'])) {
            if (!empty($map['reviewErrorRule'])) {
                $model->reviewErrorRule = [];
                $n1 = 0;
                foreach ($map['reviewErrorRule'] as $item1) {
                    $model->reviewErrorRule[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

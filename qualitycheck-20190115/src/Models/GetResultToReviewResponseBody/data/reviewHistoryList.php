<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\reviewHistoryList\reviewHistory;

class reviewHistoryList extends Model
{
    /**
     * @var reviewHistory[]
     */
    public $reviewHistory;
    protected $_name = [
        'reviewHistory' => 'ReviewHistory',
    ];

    public function validate()
    {
        if (\is_array($this->reviewHistory)) {
            Model::validateArray($this->reviewHistory);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->reviewHistory) {
            if (\is_array($this->reviewHistory)) {
                $res['ReviewHistory'] = [];
                $n1 = 0;
                foreach ($this->reviewHistory as $item1) {
                    $res['ReviewHistory'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ReviewHistory'])) {
            if (!empty($map['ReviewHistory'])) {
                $model->reviewHistory = [];
                $n1 = 0;
                foreach ($map['ReviewHistory'] as $item1) {
                    $model->reviewHistory[$n1] = reviewHistory::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

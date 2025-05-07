<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\hitRuleReviewInfoList\hitRuleReviewInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\hitRuleReviewInfoList\hitRuleReviewInfo\complainHistories\complainHistories;

class complainHistories extends Model
{
    /**
     * @var complainHistories[]
     */
    public $complainHistories;
    protected $_name = [
        'complainHistories' => 'ComplainHistories',
    ];

    public function validate()
    {
        if (\is_array($this->complainHistories)) {
            Model::validateArray($this->complainHistories);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->complainHistories) {
            if (\is_array($this->complainHistories)) {
                $res['ComplainHistories'] = [];
                $n1 = 0;
                foreach ($this->complainHistories as $item1) {
                    $res['ComplainHistories'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ComplainHistories'])) {
            if (!empty($map['ComplainHistories'])) {
                $model->complainHistories = [];
                $n1 = 0;
                foreach ($map['ComplainHistories'] as $item1) {
                    $model->complainHistories[$n1++] = self::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

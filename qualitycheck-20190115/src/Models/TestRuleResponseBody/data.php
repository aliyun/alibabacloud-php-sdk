<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\TestRuleResponseBody;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\TestRuleResponseBody\data\hitRuleReviewInfoList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var hitRuleReviewInfoList
     */
    public $hitRuleReviewInfoList;

    /**
     * @var bool
     */
    public $poc;
    protected $_name = [
        'hitRuleReviewInfoList' => 'HitRuleReviewInfoList',
        'poc'                   => 'Poc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hitRuleReviewInfoList) {
            $res['HitRuleReviewInfoList'] = null !== $this->hitRuleReviewInfoList ? $this->hitRuleReviewInfoList->toMap() : null;
        }
        if (null !== $this->poc) {
            $res['Poc'] = $this->poc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HitRuleReviewInfoList'])) {
            $model->hitRuleReviewInfoList = hitRuleReviewInfoList::fromMap($map['HitRuleReviewInfoList']);
        }
        if (isset($map['Poc'])) {
            $model->poc = $map['Poc'];
        }

        return $model;
    }
}

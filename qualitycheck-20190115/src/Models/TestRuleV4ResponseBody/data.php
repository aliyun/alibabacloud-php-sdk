<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\TestRuleV4ResponseBody;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\TestRuleV4ResponseBody\data\hitRuleReviewInfoList;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\TestRuleV4ResponseBody\data\hitTaskFlowList;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\TestRuleV4ResponseBody\data\unhitRuleReviewInfoList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var hitRuleReviewInfoList[]
     */
    public $hitRuleReviewInfoList;

    /**
     * @var hitTaskFlowList[]
     */
    public $hitTaskFlowList;

    /**
     * @var unhitRuleReviewInfoList[]
     */
    public $unhitRuleReviewInfoList;
    protected $_name = [
        'hitRuleReviewInfoList'   => 'HitRuleReviewInfoList',
        'hitTaskFlowList'         => 'HitTaskFlowList',
        'unhitRuleReviewInfoList' => 'UnhitRuleReviewInfoList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hitRuleReviewInfoList) {
            $res['HitRuleReviewInfoList'] = [];
            if (null !== $this->hitRuleReviewInfoList && \is_array($this->hitRuleReviewInfoList)) {
                $n = 0;
                foreach ($this->hitRuleReviewInfoList as $item) {
                    $res['HitRuleReviewInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->hitTaskFlowList) {
            $res['HitTaskFlowList'] = [];
            if (null !== $this->hitTaskFlowList && \is_array($this->hitTaskFlowList)) {
                $n = 0;
                foreach ($this->hitTaskFlowList as $item) {
                    $res['HitTaskFlowList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->unhitRuleReviewInfoList) {
            $res['UnhitRuleReviewInfoList'] = [];
            if (null !== $this->unhitRuleReviewInfoList && \is_array($this->unhitRuleReviewInfoList)) {
                $n = 0;
                foreach ($this->unhitRuleReviewInfoList as $item) {
                    $res['UnhitRuleReviewInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
            if (!empty($map['HitRuleReviewInfoList'])) {
                $model->hitRuleReviewInfoList = [];
                $n                            = 0;
                foreach ($map['HitRuleReviewInfoList'] as $item) {
                    $model->hitRuleReviewInfoList[$n++] = null !== $item ? hitRuleReviewInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['HitTaskFlowList'])) {
            if (!empty($map['HitTaskFlowList'])) {
                $model->hitTaskFlowList = [];
                $n                      = 0;
                foreach ($map['HitTaskFlowList'] as $item) {
                    $model->hitTaskFlowList[$n++] = null !== $item ? hitTaskFlowList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UnhitRuleReviewInfoList'])) {
            if (!empty($map['UnhitRuleReviewInfoList'])) {
                $model->unhitRuleReviewInfoList = [];
                $n                              = 0;
                foreach ($map['UnhitRuleReviewInfoList'] as $item) {
                    $model->unhitRuleReviewInfoList[$n++] = null !== $item ? unhitRuleReviewInfoList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

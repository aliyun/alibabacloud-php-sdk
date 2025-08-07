<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\TestRuleV4ResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\TestRuleV4ResponseBody\data\hitRuleReviewInfoList;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\TestRuleV4ResponseBody\data\hitTaskFlowList;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\TestRuleV4ResponseBody\data\unhitRuleReviewInfoList;

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
        'hitRuleReviewInfoList' => 'HitRuleReviewInfoList',
        'hitTaskFlowList' => 'HitTaskFlowList',
        'unhitRuleReviewInfoList' => 'UnhitRuleReviewInfoList',
    ];

    public function validate()
    {
        if (\is_array($this->hitRuleReviewInfoList)) {
            Model::validateArray($this->hitRuleReviewInfoList);
        }
        if (\is_array($this->hitTaskFlowList)) {
            Model::validateArray($this->hitTaskFlowList);
        }
        if (\is_array($this->unhitRuleReviewInfoList)) {
            Model::validateArray($this->unhitRuleReviewInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hitRuleReviewInfoList) {
            if (\is_array($this->hitRuleReviewInfoList)) {
                $res['HitRuleReviewInfoList'] = [];
                $n1 = 0;
                foreach ($this->hitRuleReviewInfoList as $item1) {
                    $res['HitRuleReviewInfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->hitTaskFlowList) {
            if (\is_array($this->hitTaskFlowList)) {
                $res['HitTaskFlowList'] = [];
                $n1 = 0;
                foreach ($this->hitTaskFlowList as $item1) {
                    $res['HitTaskFlowList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->unhitRuleReviewInfoList) {
            if (\is_array($this->unhitRuleReviewInfoList)) {
                $res['UnhitRuleReviewInfoList'] = [];
                $n1 = 0;
                foreach ($this->unhitRuleReviewInfoList as $item1) {
                    $res['UnhitRuleReviewInfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['HitRuleReviewInfoList'])) {
            if (!empty($map['HitRuleReviewInfoList'])) {
                $model->hitRuleReviewInfoList = [];
                $n1 = 0;
                foreach ($map['HitRuleReviewInfoList'] as $item1) {
                    $model->hitRuleReviewInfoList[$n1] = hitRuleReviewInfoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['HitTaskFlowList'])) {
            if (!empty($map['HitTaskFlowList'])) {
                $model->hitTaskFlowList = [];
                $n1 = 0;
                foreach ($map['HitTaskFlowList'] as $item1) {
                    $model->hitTaskFlowList[$n1] = hitTaskFlowList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['UnhitRuleReviewInfoList'])) {
            if (!empty($map['UnhitRuleReviewInfoList'])) {
                $model->unhitRuleReviewInfoList = [];
                $n1 = 0;
                foreach ($map['UnhitRuleReviewInfoList'] as $item1) {
                    $model->unhitRuleReviewInfoList[$n1] = unhitRuleReviewInfoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

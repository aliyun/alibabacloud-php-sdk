<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListRecommendManagedRulesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\ListRecommendManagedRulesResponseBody\recommendedManagedRules\recommendedManagedRuleList;

class recommendedManagedRules extends Model
{
    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var recommendedManagedRuleList[]
     */
    public $recommendedManagedRuleList;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'recommendedManagedRuleList' => 'RecommendedManagedRuleList',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->recommendedManagedRuleList)) {
            Model::validateArray($this->recommendedManagedRuleList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->recommendedManagedRuleList) {
            if (\is_array($this->recommendedManagedRuleList)) {
                $res['RecommendedManagedRuleList'] = [];
                $n1 = 0;
                foreach ($this->recommendedManagedRuleList as $item1) {
                    $res['RecommendedManagedRuleList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RecommendedManagedRuleList'])) {
            if (!empty($map['RecommendedManagedRuleList'])) {
                $model->recommendedManagedRuleList = [];
                $n1 = 0;
                foreach ($map['RecommendedManagedRuleList'] as $item1) {
                    $model->recommendedManagedRuleList[$n1] = recommendedManagedRuleList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}

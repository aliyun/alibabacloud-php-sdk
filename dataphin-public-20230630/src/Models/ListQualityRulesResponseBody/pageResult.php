<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListQualityRulesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListQualityRulesResponseBody\pageResult\qualityRuleList;

class pageResult extends Model
{
    /**
     * @var qualityRuleList[]
     */
    public $qualityRuleList;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'qualityRuleList' => 'QualityRuleList',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->qualityRuleList)) {
            Model::validateArray($this->qualityRuleList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->qualityRuleList) {
            if (\is_array($this->qualityRuleList)) {
                $res['QualityRuleList'] = [];
                $n1 = 0;
                foreach ($this->qualityRuleList as $item1) {
                    $res['QualityRuleList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['QualityRuleList'])) {
            if (!empty($map['QualityRuleList'])) {
                $model->qualityRuleList = [];
                $n1 = 0;
                foreach ($map['QualityRuleList'] as $item1) {
                    $model->qualityRuleList[$n1] = qualityRuleList::fromMap($item1);
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

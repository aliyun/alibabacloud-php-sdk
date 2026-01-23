<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListQualityRuleTasksResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListQualityRuleTasksResponseBody\pageResult\qualityRuleTaskList;

class pageResult extends Model
{
    /**
     * @var qualityRuleTaskList[]
     */
    public $qualityRuleTaskList;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'qualityRuleTaskList' => 'QualityRuleTaskList',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->qualityRuleTaskList)) {
            Model::validateArray($this->qualityRuleTaskList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->qualityRuleTaskList) {
            if (\is_array($this->qualityRuleTaskList)) {
                $res['QualityRuleTaskList'] = [];
                $n1 = 0;
                foreach ($this->qualityRuleTaskList as $item1) {
                    $res['QualityRuleTaskList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['QualityRuleTaskList'])) {
            if (!empty($map['QualityRuleTaskList'])) {
                $model->qualityRuleTaskList = [];
                $n1 = 0;
                foreach ($map['QualityRuleTaskList'] as $item1) {
                    $model->qualityRuleTaskList[$n1] = qualityRuleTaskList::fromMap($item1);
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListConfigRulesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\ListConfigRulesResponseBody\configRules\configRuleList;

class configRules extends Model
{
    /**
     * @var configRuleList[]
     */
    public $configRuleList;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'configRuleList' => 'ConfigRuleList',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->configRuleList)) {
            Model::validateArray($this->configRuleList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configRuleList) {
            if (\is_array($this->configRuleList)) {
                $res['ConfigRuleList'] = [];
                $n1 = 0;
                foreach ($this->configRuleList as $item1) {
                    $res['ConfigRuleList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['ConfigRuleList'])) {
            if (!empty($map['ConfigRuleList'])) {
                $model->configRuleList = [];
                $n1 = 0;
                foreach ($map['ConfigRuleList'] as $item1) {
                    $model->configRuleList[$n1] = configRuleList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}

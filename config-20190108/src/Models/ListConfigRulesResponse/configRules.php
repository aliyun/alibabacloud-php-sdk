<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models\ListConfigRulesResponse;

use AlibabaCloud\SDK\Config\V20190108\Models\ListConfigRulesResponse\configRules\configRuleList;
use AlibabaCloud\Tea\Model;

class configRules extends Model
{
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

    /**
     * @var configRuleList[]
     */
    public $configRuleList;
    protected $_name = [
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'totalCount'     => 'TotalCount',
        'configRuleList' => 'ConfigRuleList',
    ];

    public function validate()
    {
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('configRuleList', $this->configRuleList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->configRuleList) {
            $res['ConfigRuleList'] = [];
            if (null !== $this->configRuleList && \is_array($this->configRuleList)) {
                $n = 0;
                foreach ($this->configRuleList as $item) {
                    $res['ConfigRuleList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['ConfigRuleList'])) {
            if (!empty($map['ConfigRuleList'])) {
                $model->configRuleList = [];
                $n                     = 0;
                foreach ($map['ConfigRuleList'] as $item) {
                    $model->configRuleList[$n++] = null !== $item ? configRuleList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

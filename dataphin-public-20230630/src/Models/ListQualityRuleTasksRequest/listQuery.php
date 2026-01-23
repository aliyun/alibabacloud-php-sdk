<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListQualityRuleTasksRequest;

use AlibabaCloud\Dara\Model;

class listQuery extends Model
{
    /**
     * @var string
     */
    public $bizDate;

    /**
     * @var string[]
     */
    public $catalogList;

    /**
     * @var string
     */
    public $keyword;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string[]
     */
    public $ruleStrengthList;

    /**
     * @var string[]
     */
    public $ruleTagList;

    /**
     * @var string[]
     */
    public $statusList;

    /**
     * @var string[]
     */
    public $validateResultList;

    /**
     * @var int
     */
    public $watchTaskId;
    protected $_name = [
        'bizDate' => 'BizDate',
        'catalogList' => 'CatalogList',
        'keyword' => 'Keyword',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'ruleStrengthList' => 'RuleStrengthList',
        'ruleTagList' => 'RuleTagList',
        'statusList' => 'StatusList',
        'validateResultList' => 'ValidateResultList',
        'watchTaskId' => 'WatchTaskId',
    ];

    public function validate()
    {
        if (\is_array($this->catalogList)) {
            Model::validateArray($this->catalogList);
        }
        if (\is_array($this->ruleStrengthList)) {
            Model::validateArray($this->ruleStrengthList);
        }
        if (\is_array($this->ruleTagList)) {
            Model::validateArray($this->ruleTagList);
        }
        if (\is_array($this->statusList)) {
            Model::validateArray($this->statusList);
        }
        if (\is_array($this->validateResultList)) {
            Model::validateArray($this->validateResultList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizDate) {
            $res['BizDate'] = $this->bizDate;
        }

        if (null !== $this->catalogList) {
            if (\is_array($this->catalogList)) {
                $res['CatalogList'] = [];
                $n1 = 0;
                foreach ($this->catalogList as $item1) {
                    $res['CatalogList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }

        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->ruleStrengthList) {
            if (\is_array($this->ruleStrengthList)) {
                $res['RuleStrengthList'] = [];
                $n1 = 0;
                foreach ($this->ruleStrengthList as $item1) {
                    $res['RuleStrengthList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ruleTagList) {
            if (\is_array($this->ruleTagList)) {
                $res['RuleTagList'] = [];
                $n1 = 0;
                foreach ($this->ruleTagList as $item1) {
                    $res['RuleTagList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->statusList) {
            if (\is_array($this->statusList)) {
                $res['StatusList'] = [];
                $n1 = 0;
                foreach ($this->statusList as $item1) {
                    $res['StatusList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->validateResultList) {
            if (\is_array($this->validateResultList)) {
                $res['ValidateResultList'] = [];
                $n1 = 0;
                foreach ($this->validateResultList as $item1) {
                    $res['ValidateResultList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->watchTaskId) {
            $res['WatchTaskId'] = $this->watchTaskId;
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
        if (isset($map['BizDate'])) {
            $model->bizDate = $map['BizDate'];
        }

        if (isset($map['CatalogList'])) {
            if (!empty($map['CatalogList'])) {
                $model->catalogList = [];
                $n1 = 0;
                foreach ($map['CatalogList'] as $item1) {
                    $model->catalogList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }

        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RuleStrengthList'])) {
            if (!empty($map['RuleStrengthList'])) {
                $model->ruleStrengthList = [];
                $n1 = 0;
                foreach ($map['RuleStrengthList'] as $item1) {
                    $model->ruleStrengthList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RuleTagList'])) {
            if (!empty($map['RuleTagList'])) {
                $model->ruleTagList = [];
                $n1 = 0;
                foreach ($map['RuleTagList'] as $item1) {
                    $model->ruleTagList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['StatusList'])) {
            if (!empty($map['StatusList'])) {
                $model->statusList = [];
                $n1 = 0;
                foreach ($map['StatusList'] as $item1) {
                    $model->statusList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ValidateResultList'])) {
            if (!empty($map['ValidateResultList'])) {
                $model->validateResultList = [];
                $n1 = 0;
                foreach ($map['ValidateResultList'] as $item1) {
                    $model->validateResultList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['WatchTaskId'])) {
            $model->watchTaskId = $map['WatchTaskId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListQualityRulesRequest;

use AlibabaCloud\Dara\Model;

class listQuery extends Model
{
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
    public $statusList;

    /**
     * @var int[]
     */
    public $templateIdList;

    /**
     * @var string[]
     */
    public $testRunTaskStatusList;

    /**
     * @var string[]
     */
    public $testRunTaskValidateResultList;

    /**
     * @var int
     */
    public $watchId;
    protected $_name = [
        'catalogList' => 'CatalogList',
        'keyword' => 'Keyword',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'ruleStrengthList' => 'RuleStrengthList',
        'statusList' => 'StatusList',
        'templateIdList' => 'TemplateIdList',
        'testRunTaskStatusList' => 'TestRunTaskStatusList',
        'testRunTaskValidateResultList' => 'TestRunTaskValidateResultList',
        'watchId' => 'WatchId',
    ];

    public function validate()
    {
        if (\is_array($this->catalogList)) {
            Model::validateArray($this->catalogList);
        }
        if (\is_array($this->ruleStrengthList)) {
            Model::validateArray($this->ruleStrengthList);
        }
        if (\is_array($this->statusList)) {
            Model::validateArray($this->statusList);
        }
        if (\is_array($this->templateIdList)) {
            Model::validateArray($this->templateIdList);
        }
        if (\is_array($this->testRunTaskStatusList)) {
            Model::validateArray($this->testRunTaskStatusList);
        }
        if (\is_array($this->testRunTaskValidateResultList)) {
            Model::validateArray($this->testRunTaskValidateResultList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->templateIdList) {
            if (\is_array($this->templateIdList)) {
                $res['TemplateIdList'] = [];
                $n1 = 0;
                foreach ($this->templateIdList as $item1) {
                    $res['TemplateIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->testRunTaskStatusList) {
            if (\is_array($this->testRunTaskStatusList)) {
                $res['TestRunTaskStatusList'] = [];
                $n1 = 0;
                foreach ($this->testRunTaskStatusList as $item1) {
                    $res['TestRunTaskStatusList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->testRunTaskValidateResultList) {
            if (\is_array($this->testRunTaskValidateResultList)) {
                $res['TestRunTaskValidateResultList'] = [];
                $n1 = 0;
                foreach ($this->testRunTaskValidateResultList as $item1) {
                    $res['TestRunTaskValidateResultList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->watchId) {
            $res['WatchId'] = $this->watchId;
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

        if (isset($map['TemplateIdList'])) {
            if (!empty($map['TemplateIdList'])) {
                $model->templateIdList = [];
                $n1 = 0;
                foreach ($map['TemplateIdList'] as $item1) {
                    $model->templateIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TestRunTaskStatusList'])) {
            if (!empty($map['TestRunTaskStatusList'])) {
                $model->testRunTaskStatusList = [];
                $n1 = 0;
                foreach ($map['TestRunTaskStatusList'] as $item1) {
                    $model->testRunTaskStatusList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TestRunTaskValidateResultList'])) {
            if (!empty($map['TestRunTaskValidateResultList'])) {
                $model->testRunTaskValidateResultList = [];
                $n1 = 0;
                foreach ($map['TestRunTaskValidateResultList'] as $item1) {
                    $model->testRunTaskValidateResultList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['WatchId'])) {
            $model->watchId = $map['WatchId'];
        }

        return $model;
    }
}

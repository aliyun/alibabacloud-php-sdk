<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceTemplateCriterionIssuesResponseBody\templateCriterionIssueList;

class GetServiceTemplateCriterionIssuesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $riskyTemplateCount;

    /**
     * @var templateCriterionIssueList[]
     */
    public $templateCriterionIssueList;

    /**
     * @var int
     */
    public $totalCriterionIssueCount;

    /**
     * @var int
     */
    public $totalMandatoryCriterionIssueCount;
    protected $_name = [
        'requestId' => 'RequestId',
        'riskyTemplateCount' => 'RiskyTemplateCount',
        'templateCriterionIssueList' => 'TemplateCriterionIssueList',
        'totalCriterionIssueCount' => 'TotalCriterionIssueCount',
        'totalMandatoryCriterionIssueCount' => 'TotalMandatoryCriterionIssueCount',
    ];

    public function validate()
    {
        if (\is_array($this->templateCriterionIssueList)) {
            Model::validateArray($this->templateCriterionIssueList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->riskyTemplateCount) {
            $res['RiskyTemplateCount'] = $this->riskyTemplateCount;
        }

        if (null !== $this->templateCriterionIssueList) {
            if (\is_array($this->templateCriterionIssueList)) {
                $res['TemplateCriterionIssueList'] = [];
                $n1 = 0;
                foreach ($this->templateCriterionIssueList as $item1) {
                    $res['TemplateCriterionIssueList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalCriterionIssueCount) {
            $res['TotalCriterionIssueCount'] = $this->totalCriterionIssueCount;
        }

        if (null !== $this->totalMandatoryCriterionIssueCount) {
            $res['TotalMandatoryCriterionIssueCount'] = $this->totalMandatoryCriterionIssueCount;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RiskyTemplateCount'])) {
            $model->riskyTemplateCount = $map['RiskyTemplateCount'];
        }

        if (isset($map['TemplateCriterionIssueList'])) {
            if (!empty($map['TemplateCriterionIssueList'])) {
                $model->templateCriterionIssueList = [];
                $n1 = 0;
                foreach ($map['TemplateCriterionIssueList'] as $item1) {
                    $model->templateCriterionIssueList[$n1] = templateCriterionIssueList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCriterionIssueCount'])) {
            $model->totalCriterionIssueCount = $map['TotalCriterionIssueCount'];
        }

        if (isset($map['TotalMandatoryCriterionIssueCount'])) {
            $model->totalMandatoryCriterionIssueCount = $map['TotalMandatoryCriterionIssueCount'];
        }

        return $model;
    }
}

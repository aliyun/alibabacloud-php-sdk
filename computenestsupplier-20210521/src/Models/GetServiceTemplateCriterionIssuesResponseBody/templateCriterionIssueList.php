<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceTemplateCriterionIssuesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceTemplateCriterionIssuesResponseBody\templateCriterionIssueList\criterionIssues;

class templateCriterionIssueList extends Model
{
    /**
     * @var criterionIssues[]
     */
    public $criterionIssues;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var int
     */
    public $templateUrl;

    /**
     * @var int
     */
    public $totalCriterionIssueCount;

    /**
     * @var int
     */
    public $totalMandatoryCriterionIssueCount;
    protected $_name = [
        'criterionIssues' => 'CriterionIssues',
        'templateName' => 'TemplateName',
        'templateUrl' => 'TemplateUrl',
        'totalCriterionIssueCount' => 'TotalCriterionIssueCount',
        'totalMandatoryCriterionIssueCount' => 'TotalMandatoryCriterionIssueCount',
    ];

    public function validate()
    {
        if (\is_array($this->criterionIssues)) {
            Model::validateArray($this->criterionIssues);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->criterionIssues) {
            if (\is_array($this->criterionIssues)) {
                $res['CriterionIssues'] = [];
                $n1 = 0;
                foreach ($this->criterionIssues as $item1) {
                    $res['CriterionIssues'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        if (null !== $this->templateUrl) {
            $res['TemplateUrl'] = $this->templateUrl;
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
        if (isset($map['CriterionIssues'])) {
            if (!empty($map['CriterionIssues'])) {
                $model->criterionIssues = [];
                $n1 = 0;
                foreach ($map['CriterionIssues'] as $item1) {
                    $model->criterionIssues[$n1] = criterionIssues::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        if (isset($map['TemplateUrl'])) {
            $model->templateUrl = $map['TemplateUrl'];
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

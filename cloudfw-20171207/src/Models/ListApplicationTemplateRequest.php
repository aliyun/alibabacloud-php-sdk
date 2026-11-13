<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class ListApplicationTemplateRequest extends Model
{
    /**
     * @var string[]
     */
    public $applicationTemplateIds;

    /**
     * @var string
     */
    public $applicationTemplateName;

    /**
     * @var string
     */
    public $builtInApplicationStatus;

    /**
     * @var string
     */
    public $customRuleStatus;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $templateStatus;

    /**
     * @var string
     */
    public $unknownAction;
    protected $_name = [
        'applicationTemplateIds' => 'ApplicationTemplateIds',
        'applicationTemplateName' => 'ApplicationTemplateName',
        'builtInApplicationStatus' => 'BuiltInApplicationStatus',
        'customRuleStatus' => 'CustomRuleStatus',
        'description' => 'Description',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'templateStatus' => 'TemplateStatus',
        'unknownAction' => 'UnknownAction',
    ];

    public function validate()
    {
        if (\is_array($this->applicationTemplateIds)) {
            Model::validateArray($this->applicationTemplateIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationTemplateIds) {
            if (\is_array($this->applicationTemplateIds)) {
                $res['ApplicationTemplateIds'] = [];
                $n1 = 0;
                foreach ($this->applicationTemplateIds as $item1) {
                    $res['ApplicationTemplateIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->applicationTemplateName) {
            $res['ApplicationTemplateName'] = $this->applicationTemplateName;
        }

        if (null !== $this->builtInApplicationStatus) {
            $res['BuiltInApplicationStatus'] = $this->builtInApplicationStatus;
        }

        if (null !== $this->customRuleStatus) {
            $res['CustomRuleStatus'] = $this->customRuleStatus;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->templateStatus) {
            $res['TemplateStatus'] = $this->templateStatus;
        }

        if (null !== $this->unknownAction) {
            $res['UnknownAction'] = $this->unknownAction;
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
        if (isset($map['ApplicationTemplateIds'])) {
            if (!empty($map['ApplicationTemplateIds'])) {
                $model->applicationTemplateIds = [];
                $n1 = 0;
                foreach ($map['ApplicationTemplateIds'] as $item1) {
                    $model->applicationTemplateIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ApplicationTemplateName'])) {
            $model->applicationTemplateName = $map['ApplicationTemplateName'];
        }

        if (isset($map['BuiltInApplicationStatus'])) {
            $model->builtInApplicationStatus = $map['BuiltInApplicationStatus'];
        }

        if (isset($map['CustomRuleStatus'])) {
            $model->customRuleStatus = $map['CustomRuleStatus'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['TemplateStatus'])) {
            $model->templateStatus = $map['TemplateStatus'];
        }

        if (isset($map['UnknownAction'])) {
            $model->unknownAction = $map['UnknownAction'];
        }

        return $model;
    }
}

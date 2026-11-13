<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\GetApplicationTemplateResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\GetApplicationTemplateResponseBody\applicationTemplate\builtInApplicationActions;

class applicationTemplate extends Model
{
    /**
     * @var string
     */
    public $applicationTemplateId;

    /**
     * @var string
     */
    public $applicationTemplateName;

    /**
     * @var builtInApplicationActions[]
     */
    public $builtInApplicationActions;

    /**
     * @var string
     */
    public $builtInApplicationStatus;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $customRuleStatus;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $templateStatus;

    /**
     * @var string
     */
    public $unknownAction;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'applicationTemplateId' => 'ApplicationTemplateId',
        'applicationTemplateName' => 'ApplicationTemplateName',
        'builtInApplicationActions' => 'BuiltInApplicationActions',
        'builtInApplicationStatus' => 'BuiltInApplicationStatus',
        'createTime' => 'CreateTime',
        'customRuleStatus' => 'CustomRuleStatus',
        'description' => 'Description',
        'templateStatus' => 'TemplateStatus',
        'unknownAction' => 'UnknownAction',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (\is_array($this->builtInApplicationActions)) {
            Model::validateArray($this->builtInApplicationActions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationTemplateId) {
            $res['ApplicationTemplateId'] = $this->applicationTemplateId;
        }

        if (null !== $this->applicationTemplateName) {
            $res['ApplicationTemplateName'] = $this->applicationTemplateName;
        }

        if (null !== $this->builtInApplicationActions) {
            if (\is_array($this->builtInApplicationActions)) {
                $res['BuiltInApplicationActions'] = [];
                $n1 = 0;
                foreach ($this->builtInApplicationActions as $item1) {
                    $res['BuiltInApplicationActions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->builtInApplicationStatus) {
            $res['BuiltInApplicationStatus'] = $this->builtInApplicationStatus;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->customRuleStatus) {
            $res['CustomRuleStatus'] = $this->customRuleStatus;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->templateStatus) {
            $res['TemplateStatus'] = $this->templateStatus;
        }

        if (null !== $this->unknownAction) {
            $res['UnknownAction'] = $this->unknownAction;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['ApplicationTemplateId'])) {
            $model->applicationTemplateId = $map['ApplicationTemplateId'];
        }

        if (isset($map['ApplicationTemplateName'])) {
            $model->applicationTemplateName = $map['ApplicationTemplateName'];
        }

        if (isset($map['BuiltInApplicationActions'])) {
            if (!empty($map['BuiltInApplicationActions'])) {
                $model->builtInApplicationActions = [];
                $n1 = 0;
                foreach ($map['BuiltInApplicationActions'] as $item1) {
                    $model->builtInApplicationActions[$n1] = builtInApplicationActions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['BuiltInApplicationStatus'])) {
            $model->builtInApplicationStatus = $map['BuiltInApplicationStatus'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CustomRuleStatus'])) {
            $model->customRuleStatus = $map['CustomRuleStatus'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['TemplateStatus'])) {
            $model->templateStatus = $map['TemplateStatus'];
        }

        if (isset($map['UnknownAction'])) {
            $model->unknownAction = $map['UnknownAction'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}

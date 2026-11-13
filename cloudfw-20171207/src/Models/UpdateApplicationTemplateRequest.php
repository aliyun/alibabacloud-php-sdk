<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\UpdateApplicationTemplateRequest\addBuiltInApplicationCustomActions;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\UpdateApplicationTemplateRequest\removeBuiltInApplicationCustomActions;

class UpdateApplicationTemplateRequest extends Model
{
    /**
     * @var addBuiltInApplicationCustomActions[]
     */
    public $addBuiltInApplicationCustomActions;

    /**
     * @var string
     */
    public $applicationTemplateId;

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
     * @var removeBuiltInApplicationCustomActions[]
     */
    public $removeBuiltInApplicationCustomActions;

    /**
     * @var string
     */
    public $templateStatus;

    /**
     * @var string
     */
    public $unknownAction;
    protected $_name = [
        'addBuiltInApplicationCustomActions' => 'AddBuiltInApplicationCustomActions',
        'applicationTemplateId' => 'ApplicationTemplateId',
        'applicationTemplateName' => 'ApplicationTemplateName',
        'builtInApplicationStatus' => 'BuiltInApplicationStatus',
        'customRuleStatus' => 'CustomRuleStatus',
        'description' => 'Description',
        'removeBuiltInApplicationCustomActions' => 'RemoveBuiltInApplicationCustomActions',
        'templateStatus' => 'TemplateStatus',
        'unknownAction' => 'UnknownAction',
    ];

    public function validate()
    {
        if (\is_array($this->addBuiltInApplicationCustomActions)) {
            Model::validateArray($this->addBuiltInApplicationCustomActions);
        }
        if (\is_array($this->removeBuiltInApplicationCustomActions)) {
            Model::validateArray($this->removeBuiltInApplicationCustomActions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addBuiltInApplicationCustomActions) {
            if (\is_array($this->addBuiltInApplicationCustomActions)) {
                $res['AddBuiltInApplicationCustomActions'] = [];
                $n1 = 0;
                foreach ($this->addBuiltInApplicationCustomActions as $item1) {
                    $res['AddBuiltInApplicationCustomActions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->applicationTemplateId) {
            $res['ApplicationTemplateId'] = $this->applicationTemplateId;
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

        if (null !== $this->removeBuiltInApplicationCustomActions) {
            if (\is_array($this->removeBuiltInApplicationCustomActions)) {
                $res['RemoveBuiltInApplicationCustomActions'] = [];
                $n1 = 0;
                foreach ($this->removeBuiltInApplicationCustomActions as $item1) {
                    $res['RemoveBuiltInApplicationCustomActions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AddBuiltInApplicationCustomActions'])) {
            if (!empty($map['AddBuiltInApplicationCustomActions'])) {
                $model->addBuiltInApplicationCustomActions = [];
                $n1 = 0;
                foreach ($map['AddBuiltInApplicationCustomActions'] as $item1) {
                    $model->addBuiltInApplicationCustomActions[$n1] = addBuiltInApplicationCustomActions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ApplicationTemplateId'])) {
            $model->applicationTemplateId = $map['ApplicationTemplateId'];
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

        if (isset($map['RemoveBuiltInApplicationCustomActions'])) {
            if (!empty($map['RemoveBuiltInApplicationCustomActions'])) {
                $model->removeBuiltInApplicationCustomActions = [];
                $n1 = 0;
                foreach ($map['RemoveBuiltInApplicationCustomActions'] as $item1) {
                    $model->removeBuiltInApplicationCustomActions[$n1] = removeBuiltInApplicationCustomActions::fromMap($item1);
                    ++$n1;
                }
            }
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

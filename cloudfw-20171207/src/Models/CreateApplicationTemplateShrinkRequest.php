<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class CreateApplicationTemplateShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $addBuiltInApplicationCustomActionsShrink;

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
     * @var string
     */
    public $templateStatus;

    /**
     * @var string
     */
    public $unknownAction;
    protected $_name = [
        'addBuiltInApplicationCustomActionsShrink' => 'AddBuiltInApplicationCustomActions',
        'applicationTemplateName' => 'ApplicationTemplateName',
        'builtInApplicationStatus' => 'BuiltInApplicationStatus',
        'customRuleStatus' => 'CustomRuleStatus',
        'description' => 'Description',
        'templateStatus' => 'TemplateStatus',
        'unknownAction' => 'UnknownAction',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addBuiltInApplicationCustomActionsShrink) {
            $res['AddBuiltInApplicationCustomActions'] = $this->addBuiltInApplicationCustomActionsShrink;
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
            $model->addBuiltInApplicationCustomActionsShrink = $map['AddBuiltInApplicationCustomActions'];
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

        if (isset($map['TemplateStatus'])) {
            $model->templateStatus = $map['TemplateStatus'];
        }

        if (isset($map['UnknownAction'])) {
            $model->unknownAction = $map['UnknownAction'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class CreateAgentShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $callableAgentsShrink;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $metadataShrink;

    /**
     * @var string
     */
    public $modelShrink;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $skillsShrink;

    /**
     * @var string
     */
    public $systemPrompt;

    /**
     * @var string
     */
    public $toolsShrink;

    /**
     * @var string
     */
    public $visibility;

    /**
     * @var string
     */
    public $visibilityScopeShrink;
    protected $_name = [
        'callableAgentsShrink' => 'CallableAgents',
        'description' => 'Description',
        'displayName' => 'DisplayName',
        'metadataShrink' => 'Metadata',
        'modelShrink' => 'Model',
        'name' => 'Name',
        'skillsShrink' => 'Skills',
        'systemPrompt' => 'SystemPrompt',
        'toolsShrink' => 'Tools',
        'visibility' => 'Visibility',
        'visibilityScopeShrink' => 'VisibilityScope',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callableAgentsShrink) {
            $res['CallableAgents'] = $this->callableAgentsShrink;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->metadataShrink) {
            $res['Metadata'] = $this->metadataShrink;
        }

        if (null !== $this->modelShrink) {
            $res['Model'] = $this->modelShrink;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->skillsShrink) {
            $res['Skills'] = $this->skillsShrink;
        }

        if (null !== $this->systemPrompt) {
            $res['SystemPrompt'] = $this->systemPrompt;
        }

        if (null !== $this->toolsShrink) {
            $res['Tools'] = $this->toolsShrink;
        }

        if (null !== $this->visibility) {
            $res['Visibility'] = $this->visibility;
        }

        if (null !== $this->visibilityScopeShrink) {
            $res['VisibilityScope'] = $this->visibilityScopeShrink;
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
        if (isset($map['CallableAgents'])) {
            $model->callableAgentsShrink = $map['CallableAgents'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['Metadata'])) {
            $model->metadataShrink = $map['Metadata'];
        }

        if (isset($map['Model'])) {
            $model->modelShrink = $map['Model'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Skills'])) {
            $model->skillsShrink = $map['Skills'];
        }

        if (isset($map['SystemPrompt'])) {
            $model->systemPrompt = $map['SystemPrompt'];
        }

        if (isset($map['Tools'])) {
            $model->toolsShrink = $map['Tools'];
        }

        if (isset($map['Visibility'])) {
            $model->visibility = $map['Visibility'];
        }

        if (isset($map['VisibilityScope'])) {
            $model->visibilityScopeShrink = $map['VisibilityScope'];
        }

        return $model;
    }
}

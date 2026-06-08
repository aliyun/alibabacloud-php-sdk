<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class CreateSecurityStrategyShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $contentShrink;

    /**
     * @var string
     */
    public $controlDwScope;

    /**
     * @var string
     */
    public $controlModule;

    /**
     * @var string
     */
    public $controlSubModule;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $schemaName;

    /**
     * @var string
     */
    public $workspacesShrink;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'contentShrink' => 'Content',
        'controlDwScope' => 'ControlDwScope',
        'controlModule' => 'ControlModule',
        'controlSubModule' => 'ControlSubModule',
        'description' => 'Description',
        'name' => 'Name',
        'schemaName' => 'SchemaName',
        'workspacesShrink' => 'Workspaces',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->contentShrink) {
            $res['Content'] = $this->contentShrink;
        }

        if (null !== $this->controlDwScope) {
            $res['ControlDwScope'] = $this->controlDwScope;
        }

        if (null !== $this->controlModule) {
            $res['ControlModule'] = $this->controlModule;
        }

        if (null !== $this->controlSubModule) {
            $res['ControlSubModule'] = $this->controlSubModule;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->schemaName) {
            $res['SchemaName'] = $this->schemaName;
        }

        if (null !== $this->workspacesShrink) {
            $res['Workspaces'] = $this->workspacesShrink;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['Content'])) {
            $model->contentShrink = $map['Content'];
        }

        if (isset($map['ControlDwScope'])) {
            $model->controlDwScope = $map['ControlDwScope'];
        }

        if (isset($map['ControlModule'])) {
            $model->controlModule = $map['ControlModule'];
        }

        if (isset($map['ControlSubModule'])) {
            $model->controlSubModule = $map['ControlSubModule'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['SchemaName'])) {
            $model->schemaName = $map['SchemaName'];
        }

        if (isset($map['Workspaces'])) {
            $model->workspacesShrink = $map['Workspaces'];
        }

        return $model;
    }
}

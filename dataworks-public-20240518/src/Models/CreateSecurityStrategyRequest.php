<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateSecurityStrategyRequest\content;

class CreateSecurityStrategyRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var content
     */
    public $content;

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
     * @var int[]
     */
    public $workspaces;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'content' => 'Content',
        'controlDwScope' => 'ControlDwScope',
        'controlModule' => 'ControlModule',
        'controlSubModule' => 'ControlSubModule',
        'description' => 'Description',
        'name' => 'Name',
        'schemaName' => 'SchemaName',
        'workspaces' => 'Workspaces',
    ];

    public function validate()
    {
        if (null !== $this->content) {
            $this->content->validate();
        }
        if (\is_array($this->workspaces)) {
            Model::validateArray($this->workspaces);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->content) {
            $res['Content'] = null !== $this->content ? $this->content->toArray($noStream) : $this->content;
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

        if (null !== $this->workspaces) {
            if (\is_array($this->workspaces)) {
                $res['Workspaces'] = [];
                $n1 = 0;
                foreach ($this->workspaces as $item1) {
                    $res['Workspaces'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            $model->content = content::fromMap($map['Content']);
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
            if (!empty($map['Workspaces'])) {
                $model->workspaces = [];
                $n1 = 0;
                foreach ($map['Workspaces'] as $item1) {
                    $model->workspaces[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListSecurityStrategiesResponseBody\pagingInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListSecurityStrategiesResponseBody\pagingInfo\securityStrategies\content;

class securityStrategies extends Model
{
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
    public $createTime;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $originPolicyId;

    /**
     * @var string
     */
    public $schemaName;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $updater;

    /**
     * @var int[]
     */
    public $workspaces;
    protected $_name = [
        'content' => 'Content',
        'controlDwScope' => 'ControlDwScope',
        'controlModule' => 'ControlModule',
        'controlSubModule' => 'ControlSubModule',
        'createTime' => 'CreateTime',
        'creator' => 'Creator',
        'description' => 'Description',
        'enabled' => 'Enabled',
        'id' => 'Id',
        'name' => 'Name',
        'originPolicyId' => 'OriginPolicyId',
        'schemaName' => 'SchemaName',
        'updateTime' => 'UpdateTime',
        'updater' => 'Updater',
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

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->originPolicyId) {
            $res['OriginPolicyId'] = $this->originPolicyId;
        }

        if (null !== $this->schemaName) {
            $res['SchemaName'] = $this->schemaName;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        if (null !== $this->updater) {
            $res['Updater'] = $this->updater;
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

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OriginPolicyId'])) {
            $model->originPolicyId = $map['OriginPolicyId'];
        }

        if (isset($map['SchemaName'])) {
            $model->schemaName = $map['SchemaName'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        if (isset($map['Updater'])) {
            $model->updater = $map['Updater'];
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

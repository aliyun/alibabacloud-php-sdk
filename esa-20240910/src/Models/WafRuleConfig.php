<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\WafRuleConfig\actions;
use AlibabaCloud\SDK\ESA\V20240910\Models\WafRuleConfig\appPackage;
use AlibabaCloud\SDK\ESA\V20240910\Models\WafRuleConfig\appSdk;
use AlibabaCloud\SDK\ESA\V20240910\Models\WafRuleConfig\managedRulesets;
use AlibabaCloud\SDK\ESA\V20240910\Models\WafRuleConfig\rateLimit;
use AlibabaCloud\SDK\ESA\V20240910\Models\WafRuleConfig\securityLevel;

class WafRuleConfig extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var actions
     */
    public $actions;

    /**
     * @var appPackage
     */
    public $appPackage;

    /**
     * @var appSdk
     */
    public $appSdk;

    /**
     * @var string
     */
    public $expression;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $managedGroupId;

    /**
     * @var string
     */
    public $managedList;

    /**
     * @var managedRulesets[]
     */
    public $managedRulesets;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $notes;

    /**
     * @var rateLimit
     */
    public $rateLimit;

    /**
     * @var securityLevel
     */
    public $securityLevel;

    /**
     * @var string[]
     */
    public $sigchl;

    /**
     * @var string
     */
    public $status;

    /**
     * @var WafTimer
     */
    public $timer;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'action' => 'Action',
        'actions' => 'Actions',
        'appPackage' => 'AppPackage',
        'appSdk' => 'AppSdk',
        'expression' => 'Expression',
        'id' => 'Id',
        'managedGroupId' => 'ManagedGroupId',
        'managedList' => 'ManagedList',
        'managedRulesets' => 'ManagedRulesets',
        'name' => 'Name',
        'notes' => 'Notes',
        'rateLimit' => 'RateLimit',
        'securityLevel' => 'SecurityLevel',
        'sigchl' => 'Sigchl',
        'status' => 'Status',
        'timer' => 'Timer',
        'type' => 'Type',
        'value' => 'Value',
    ];

    public function validate()
    {
        if (null !== $this->actions) {
            $this->actions->validate();
        }
        if (null !== $this->appPackage) {
            $this->appPackage->validate();
        }
        if (null !== $this->appSdk) {
            $this->appSdk->validate();
        }
        if (\is_array($this->managedRulesets)) {
            Model::validateArray($this->managedRulesets);
        }
        if (null !== $this->rateLimit) {
            $this->rateLimit->validate();
        }
        if (null !== $this->securityLevel) {
            $this->securityLevel->validate();
        }
        if (\is_array($this->sigchl)) {
            Model::validateArray($this->sigchl);
        }
        if (null !== $this->timer) {
            $this->timer->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }

        if (null !== $this->actions) {
            $res['Actions'] = null !== $this->actions ? $this->actions->toArray($noStream) : $this->actions;
        }

        if (null !== $this->appPackage) {
            $res['AppPackage'] = null !== $this->appPackage ? $this->appPackage->toArray($noStream) : $this->appPackage;
        }

        if (null !== $this->appSdk) {
            $res['AppSdk'] = null !== $this->appSdk ? $this->appSdk->toArray($noStream) : $this->appSdk;
        }

        if (null !== $this->expression) {
            $res['Expression'] = $this->expression;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->managedGroupId) {
            $res['ManagedGroupId'] = $this->managedGroupId;
        }

        if (null !== $this->managedList) {
            $res['ManagedList'] = $this->managedList;
        }

        if (null !== $this->managedRulesets) {
            if (\is_array($this->managedRulesets)) {
                $res['ManagedRulesets'] = [];
                $n1 = 0;
                foreach ($this->managedRulesets as $item1) {
                    $res['ManagedRulesets'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->notes) {
            $res['Notes'] = $this->notes;
        }

        if (null !== $this->rateLimit) {
            $res['RateLimit'] = null !== $this->rateLimit ? $this->rateLimit->toArray($noStream) : $this->rateLimit;
        }

        if (null !== $this->securityLevel) {
            $res['SecurityLevel'] = null !== $this->securityLevel ? $this->securityLevel->toArray($noStream) : $this->securityLevel;
        }

        if (null !== $this->sigchl) {
            if (\is_array($this->sigchl)) {
                $res['Sigchl'] = [];
                $n1 = 0;
                foreach ($this->sigchl as $item1) {
                    $res['Sigchl'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->timer) {
            $res['Timer'] = null !== $this->timer ? $this->timer->toArray($noStream) : $this->timer;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->value) {
            $res['Value'] = $this->value;
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
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }

        if (isset($map['Actions'])) {
            $model->actions = actions::fromMap($map['Actions']);
        }

        if (isset($map['AppPackage'])) {
            $model->appPackage = appPackage::fromMap($map['AppPackage']);
        }

        if (isset($map['AppSdk'])) {
            $model->appSdk = appSdk::fromMap($map['AppSdk']);
        }

        if (isset($map['Expression'])) {
            $model->expression = $map['Expression'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['ManagedGroupId'])) {
            $model->managedGroupId = $map['ManagedGroupId'];
        }

        if (isset($map['ManagedList'])) {
            $model->managedList = $map['ManagedList'];
        }

        if (isset($map['ManagedRulesets'])) {
            if (!empty($map['ManagedRulesets'])) {
                $model->managedRulesets = [];
                $n1 = 0;
                foreach ($map['ManagedRulesets'] as $item1) {
                    $model->managedRulesets[$n1++] = managedRulesets::fromMap($item1);
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Notes'])) {
            $model->notes = $map['Notes'];
        }

        if (isset($map['RateLimit'])) {
            $model->rateLimit = rateLimit::fromMap($map['RateLimit']);
        }

        if (isset($map['SecurityLevel'])) {
            $model->securityLevel = securityLevel::fromMap($map['SecurityLevel']);
        }

        if (isset($map['Sigchl'])) {
            if (!empty($map['Sigchl'])) {
                $model->sigchl = [];
                $n1 = 0;
                foreach ($map['Sigchl'] as $item1) {
                    $model->sigchl[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Timer'])) {
            $model->timer = WafTimer::fromMap($map['Timer']);
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}

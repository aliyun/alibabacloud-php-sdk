<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\WafRuleConfig\actions;
use AlibabaCloud\SDK\ESA\V20240910\Models\WafRuleConfig\appPackage;
use AlibabaCloud\SDK\ESA\V20240910\Models\WafRuleConfig\appSdk;
use AlibabaCloud\SDK\ESA\V20240910\Models\WafRuleConfig\managedRulesets;
use AlibabaCloud\SDK\ESA\V20240910\Models\WafRuleConfig\rateLimit;
use AlibabaCloud\Tea\Model;

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
     * @var WafRuleMatch
     */
    public $match;

    /**
     * @var string
     */
    public $name;

    /**
     * @var rateLimit
     */
    public $rateLimit;

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
    protected $_name = [
        'action'          => 'Action',
        'actions'         => 'Actions',
        'appPackage'      => 'AppPackage',
        'appSdk'          => 'AppSdk',
        'expression'      => 'Expression',
        'id'              => 'Id',
        'managedGroupId'  => 'ManagedGroupId',
        'managedList'     => 'ManagedList',
        'managedRulesets' => 'ManagedRulesets',
        'match'           => 'Match',
        'name'            => 'Name',
        'rateLimit'       => 'RateLimit',
        'sigchl'          => 'Sigchl',
        'status'          => 'Status',
        'timer'           => 'Timer',
        'type'            => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->actions) {
            $res['Actions'] = null !== $this->actions ? $this->actions->toMap() : null;
        }
        if (null !== $this->appPackage) {
            $res['AppPackage'] = null !== $this->appPackage ? $this->appPackage->toMap() : null;
        }
        if (null !== $this->appSdk) {
            $res['AppSdk'] = null !== $this->appSdk ? $this->appSdk->toMap() : null;
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
            $res['ManagedRulesets'] = [];
            if (null !== $this->managedRulesets && \is_array($this->managedRulesets)) {
                $n = 0;
                foreach ($this->managedRulesets as $item) {
                    $res['ManagedRulesets'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->match) {
            $res['Match'] = null !== $this->match ? $this->match->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->rateLimit) {
            $res['RateLimit'] = null !== $this->rateLimit ? $this->rateLimit->toMap() : null;
        }
        if (null !== $this->sigchl) {
            $res['Sigchl'] = $this->sigchl;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->timer) {
            $res['Timer'] = null !== $this->timer ? $this->timer->toMap() : null;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return WafRuleConfig
     */
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
                $n                      = 0;
                foreach ($map['ManagedRulesets'] as $item) {
                    $model->managedRulesets[$n++] = null !== $item ? managedRulesets::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Match'])) {
            $model->match = WafRuleMatch::fromMap($map['Match']);
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RateLimit'])) {
            $model->rateLimit = rateLimit::fromMap($map['RateLimit']);
        }
        if (isset($map['Sigchl'])) {
            if (!empty($map['Sigchl'])) {
                $model->sigchl = $map['Sigchl'];
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

        return $model;
    }
}

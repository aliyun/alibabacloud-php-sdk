<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\FindBestMatchSecurityStrategyResponseBody\data\securityStrategy;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\FindBestMatchSecurityStrategyResponseBody\data\securityStrategy\content\controllers;

class content extends Model
{
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
     * @var controllers[]
     */
    public $controllers;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $displayNameEn;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $systemPolicyDisplayName;

    /**
     * @var string
     */
    public $systemPolicyName;
    protected $_name = [
        'controlDwScope' => 'ControlDwScope',
        'controlModule' => 'ControlModule',
        'controlSubModule' => 'ControlSubModule',
        'controllers' => 'Controllers',
        'displayName' => 'DisplayName',
        'displayNameEn' => 'DisplayNameEn',
        'name' => 'Name',
        'systemPolicyDisplayName' => 'SystemPolicyDisplayName',
        'systemPolicyName' => 'SystemPolicyName',
    ];

    public function validate()
    {
        if (\is_array($this->controllers)) {
            Model::validateArray($this->controllers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->controlDwScope) {
            $res['ControlDwScope'] = $this->controlDwScope;
        }

        if (null !== $this->controlModule) {
            $res['ControlModule'] = $this->controlModule;
        }

        if (null !== $this->controlSubModule) {
            $res['ControlSubModule'] = $this->controlSubModule;
        }

        if (null !== $this->controllers) {
            if (\is_array($this->controllers)) {
                $res['Controllers'] = [];
                $n1 = 0;
                foreach ($this->controllers as $item1) {
                    $res['Controllers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->displayNameEn) {
            $res['DisplayNameEn'] = $this->displayNameEn;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->systemPolicyDisplayName) {
            $res['SystemPolicyDisplayName'] = $this->systemPolicyDisplayName;
        }

        if (null !== $this->systemPolicyName) {
            $res['SystemPolicyName'] = $this->systemPolicyName;
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
        if (isset($map['ControlDwScope'])) {
            $model->controlDwScope = $map['ControlDwScope'];
        }

        if (isset($map['ControlModule'])) {
            $model->controlModule = $map['ControlModule'];
        }

        if (isset($map['ControlSubModule'])) {
            $model->controlSubModule = $map['ControlSubModule'];
        }

        if (isset($map['Controllers'])) {
            if (!empty($map['Controllers'])) {
                $model->controllers = [];
                $n1 = 0;
                foreach ($map['Controllers'] as $item1) {
                    $model->controllers[$n1] = controllers::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['DisplayNameEn'])) {
            $model->displayNameEn = $map['DisplayNameEn'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['SystemPolicyDisplayName'])) {
            $model->systemPolicyDisplayName = $map['SystemPolicyDisplayName'];
        }

        if (isset($map['SystemPolicyName'])) {
            $model->systemPolicyName = $map['SystemPolicyName'];
        }

        return $model;
    }
}

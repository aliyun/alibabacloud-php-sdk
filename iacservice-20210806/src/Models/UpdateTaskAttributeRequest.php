<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateTaskAttributeRequest\groupInfo;
use AlibabaCloud\Tea\Model;

class UpdateTaskAttributeRequest extends Model
{
    /**
     * @var bool
     */
    public $autoApply;

    /**
     * @var groupInfo
     */
    public $groupInfo;

    /**
     * @var string
     */
    public $moduleId;

    /**
     * @var string
     */
    public $moduleVersion;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $parameters;

    /**
     * @var string[]
     */
    public $protectionStrategy;

    /**
     * @var string
     */
    public $ramRole;

    /**
     * @var string
     */
    public $terraformVersion;

    /**
     * @var string
     */
    public $triggerStrategy;
    protected $_name = [
        'autoApply'          => 'autoApply',
        'groupInfo'          => 'groupInfo',
        'moduleId'           => 'moduleId',
        'moduleVersion'      => 'moduleVersion',
        'name'               => 'name',
        'parameters'         => 'parameters',
        'protectionStrategy' => 'protectionStrategy',
        'ramRole'            => 'ramRole',
        'terraformVersion'   => 'terraformVersion',
        'triggerStrategy'    => 'triggerStrategy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoApply) {
            $res['autoApply'] = $this->autoApply;
        }
        if (null !== $this->groupInfo) {
            $res['groupInfo'] = null !== $this->groupInfo ? $this->groupInfo->toMap() : null;
        }
        if (null !== $this->moduleId) {
            $res['moduleId'] = $this->moduleId;
        }
        if (null !== $this->moduleVersion) {
            $res['moduleVersion'] = $this->moduleVersion;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->parameters) {
            $res['parameters'] = $this->parameters;
        }
        if (null !== $this->protectionStrategy) {
            $res['protectionStrategy'] = $this->protectionStrategy;
        }
        if (null !== $this->ramRole) {
            $res['ramRole'] = $this->ramRole;
        }
        if (null !== $this->terraformVersion) {
            $res['terraformVersion'] = $this->terraformVersion;
        }
        if (null !== $this->triggerStrategy) {
            $res['triggerStrategy'] = $this->triggerStrategy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTaskAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['autoApply'])) {
            $model->autoApply = $map['autoApply'];
        }
        if (isset($map['groupInfo'])) {
            $model->groupInfo = groupInfo::fromMap($map['groupInfo']);
        }
        if (isset($map['moduleId'])) {
            $model->moduleId = $map['moduleId'];
        }
        if (isset($map['moduleVersion'])) {
            $model->moduleVersion = $map['moduleVersion'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['parameters'])) {
            $model->parameters = $map['parameters'];
        }
        if (isset($map['protectionStrategy'])) {
            if (!empty($map['protectionStrategy'])) {
                $model->protectionStrategy = $map['protectionStrategy'];
            }
        }
        if (isset($map['ramRole'])) {
            $model->ramRole = $map['ramRole'];
        }
        if (isset($map['terraformVersion'])) {
            $model->terraformVersion = $map['terraformVersion'];
        }
        if (isset($map['triggerStrategy'])) {
            $model->triggerStrategy = $map['triggerStrategy'];
        }

        return $model;
    }
}

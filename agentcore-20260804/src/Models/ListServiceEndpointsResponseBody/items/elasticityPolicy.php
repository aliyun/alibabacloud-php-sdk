<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\ListServiceEndpointsResponseBody\items;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListServiceEndpointsResponseBody\items\elasticityPolicy\dynamicPolicy;

class elasticityPolicy extends Model
{
    /**
     * @var dynamicPolicy
     */
    public $dynamicPolicy;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var int
     */
    public $maxSandboxCount;

    /**
     * @var int
     */
    public $minSandboxCount;
    protected $_name = [
        'dynamicPolicy' => 'dynamicPolicy',
        'enabled' => 'enabled',
        'maxSandboxCount' => 'maxSandboxCount',
        'minSandboxCount' => 'minSandboxCount',
    ];

    public function validate()
    {
        if (null !== $this->dynamicPolicy) {
            $this->dynamicPolicy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dynamicPolicy) {
            $res['dynamicPolicy'] = null !== $this->dynamicPolicy ? $this->dynamicPolicy->toArray($noStream) : $this->dynamicPolicy;
        }

        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }

        if (null !== $this->maxSandboxCount) {
            $res['maxSandboxCount'] = $this->maxSandboxCount;
        }

        if (null !== $this->minSandboxCount) {
            $res['minSandboxCount'] = $this->minSandboxCount;
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
        if (isset($map['dynamicPolicy'])) {
            $model->dynamicPolicy = dynamicPolicy::fromMap($map['dynamicPolicy']);
        }

        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        if (isset($map['maxSandboxCount'])) {
            $model->maxSandboxCount = $map['maxSandboxCount'];
        }

        if (isset($map['minSandboxCount'])) {
            $model->minSandboxCount = $map['minSandboxCount'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20140828\Models\DescribeLifecycleActionsResponseBody\lifecycleActions;

use AlibabaCloud\SDK\Ess\V20140828\Models\DescribeLifecycleActionsResponseBody\lifecycleActions\lifecycleAction\instanceIds;
use AlibabaCloud\Tea\Model;

class lifecycleAction extends Model
{
    /**
     * @var string
     */
    public $lifecycleHookId;

    /**
     * @var string
     */
    public $lifecycleActionToken;

    /**
     * @var string
     */
    public $lifecycleActionStatus;

    /**
     * @var string
     */
    public $lifecycleActionResult;

    /**
     * @var instanceIds
     */
    public $instanceIds;
    protected $_name = [
        'lifecycleHookId'       => 'LifecycleHookId',
        'lifecycleActionToken'  => 'LifecycleActionToken',
        'lifecycleActionStatus' => 'LifecycleActionStatus',
        'lifecycleActionResult' => 'LifecycleActionResult',
        'instanceIds'           => 'InstanceIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lifecycleHookId) {
            $res['LifecycleHookId'] = $this->lifecycleHookId;
        }
        if (null !== $this->lifecycleActionToken) {
            $res['LifecycleActionToken'] = $this->lifecycleActionToken;
        }
        if (null !== $this->lifecycleActionStatus) {
            $res['LifecycleActionStatus'] = $this->lifecycleActionStatus;
        }
        if (null !== $this->lifecycleActionResult) {
            $res['LifecycleActionResult'] = $this->lifecycleActionResult;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = null !== $this->instanceIds ? $this->instanceIds->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lifecycleAction
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LifecycleHookId'])) {
            $model->lifecycleHookId = $map['LifecycleHookId'];
        }
        if (isset($map['LifecycleActionToken'])) {
            $model->lifecycleActionToken = $map['LifecycleActionToken'];
        }
        if (isset($map['LifecycleActionStatus'])) {
            $model->lifecycleActionStatus = $map['LifecycleActionStatus'];
        }
        if (isset($map['LifecycleActionResult'])) {
            $model->lifecycleActionResult = $map['LifecycleActionResult'];
        }
        if (isset($map['InstanceIds'])) {
            $model->instanceIds = instanceIds::fromMap($map['InstanceIds']);
        }

        return $model;
    }
}

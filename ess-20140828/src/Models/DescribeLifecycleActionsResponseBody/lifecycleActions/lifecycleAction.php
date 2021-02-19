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
     * @var instanceIds
     */
    public $instanceIds;

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
    protected $_name = [
        'lifecycleHookId'       => 'LifecycleHookId',
        'instanceIds'           => 'InstanceIds',
        'lifecycleActionToken'  => 'LifecycleActionToken',
        'lifecycleActionStatus' => 'LifecycleActionStatus',
        'lifecycleActionResult' => 'LifecycleActionResult',
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
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = null !== $this->instanceIds ? $this->instanceIds->toMap() : null;
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
        if (isset($map['InstanceIds'])) {
            $model->instanceIds = instanceIds::fromMap($map['InstanceIds']);
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

        return $model;
    }
}

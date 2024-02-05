<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\LoginInstanceResponseBody\root;

use AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\LoginInstanceResponseBody\root\instanceLoginInfoList\instanceLoginView;
use AlibabaCloud\Tea\Model;

class instanceLoginInfoList extends Model
{
    /**
     * @example i-abc
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 134
     *
     * @var string
     */
    public $instanceLoginToken;

    /**
     * @var instanceLoginView
     */
    public $instanceLoginView;

    /**
     * @example true
     *
     * @var bool
     */
    public $loginSuccess;
    protected $_name = [
        'instanceId'         => 'InstanceId',
        'instanceLoginToken' => 'InstanceLoginToken',
        'instanceLoginView'  => 'InstanceLoginView',
        'loginSuccess'       => 'LoginSuccess',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceLoginToken) {
            $res['InstanceLoginToken'] = $this->instanceLoginToken;
        }
        if (null !== $this->instanceLoginView) {
            $res['InstanceLoginView'] = null !== $this->instanceLoginView ? $this->instanceLoginView->toMap() : null;
        }
        if (null !== $this->loginSuccess) {
            $res['LoginSuccess'] = $this->loginSuccess;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceLoginInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceLoginToken'])) {
            $model->instanceLoginToken = $map['InstanceLoginToken'];
        }
        if (isset($map['InstanceLoginView'])) {
            $model->instanceLoginView = instanceLoginView::fromMap($map['InstanceLoginView']);
        }
        if (isset($map['LoginSuccess'])) {
            $model->loginSuccess = $map['LoginSuccess'];
        }

        return $model;
    }
}

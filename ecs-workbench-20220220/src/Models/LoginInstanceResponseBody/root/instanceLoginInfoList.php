<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\LoginInstanceResponseBody\root;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\LoginInstanceResponseBody\root\instanceLoginInfoList\instanceLoginView;

class instanceLoginInfoList extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceLoginToken;

    /**
     * @var instanceLoginView
     */
    public $instanceLoginView;

    /**
     * @var bool
     */
    public $loginSuccess;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'instanceLoginToken' => 'InstanceLoginToken',
        'instanceLoginView' => 'InstanceLoginView',
        'loginSuccess' => 'LoginSuccess',
    ];

    public function validate()
    {
        if (null !== $this->instanceLoginView) {
            $this->instanceLoginView->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceLoginToken) {
            $res['InstanceLoginToken'] = $this->instanceLoginToken;
        }

        if (null !== $this->instanceLoginView) {
            $res['InstanceLoginView'] = null !== $this->instanceLoginView ? $this->instanceLoginView->toArray($noStream) : $this->instanceLoginView;
        }

        if (null !== $this->loginSuccess) {
            $res['LoginSuccess'] = $this->loginSuccess;
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

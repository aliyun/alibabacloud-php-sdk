<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class BindEcsSlbRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $slbId;

    /**
     * @var int
     */
    public $listenerPort;

    /**
     * @var string
     */
    public $VServerGroupId;

    /**
     * @var string
     */
    public $listenerProtocol;

    /**
     * @var string
     */
    public $deployGroupId;

    /**
     * @var string
     */
    public $VServerGroupName;

    /**
     * @var string
     */
    public $listenerHealthCheckUrl;

    /**
     * @var string
     */
    public $VForwardingUrlRule;
    protected $_name = [
        'appId'                  => 'AppId',
        'slbId'                  => 'SlbId',
        'listenerPort'           => 'ListenerPort',
        'VServerGroupId'         => 'VServerGroupId',
        'listenerProtocol'       => 'ListenerProtocol',
        'deployGroupId'          => 'DeployGroupId',
        'VServerGroupName'       => 'VServerGroupName',
        'listenerHealthCheckUrl' => 'ListenerHealthCheckUrl',
        'VForwardingUrlRule'     => 'VForwardingUrlRule',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->slbId) {
            $res['SlbId'] = $this->slbId;
        }
        if (null !== $this->listenerPort) {
            $res['ListenerPort'] = $this->listenerPort;
        }
        if (null !== $this->VServerGroupId) {
            $res['VServerGroupId'] = $this->VServerGroupId;
        }
        if (null !== $this->listenerProtocol) {
            $res['ListenerProtocol'] = $this->listenerProtocol;
        }
        if (null !== $this->deployGroupId) {
            $res['DeployGroupId'] = $this->deployGroupId;
        }
        if (null !== $this->VServerGroupName) {
            $res['VServerGroupName'] = $this->VServerGroupName;
        }
        if (null !== $this->listenerHealthCheckUrl) {
            $res['ListenerHealthCheckUrl'] = $this->listenerHealthCheckUrl;
        }
        if (null !== $this->VForwardingUrlRule) {
            $res['VForwardingUrlRule'] = $this->VForwardingUrlRule;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BindEcsSlbRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['SlbId'])) {
            $model->slbId = $map['SlbId'];
        }
        if (isset($map['ListenerPort'])) {
            $model->listenerPort = $map['ListenerPort'];
        }
        if (isset($map['VServerGroupId'])) {
            $model->VServerGroupId = $map['VServerGroupId'];
        }
        if (isset($map['ListenerProtocol'])) {
            $model->listenerProtocol = $map['ListenerProtocol'];
        }
        if (isset($map['DeployGroupId'])) {
            $model->deployGroupId = $map['DeployGroupId'];
        }
        if (isset($map['VServerGroupName'])) {
            $model->VServerGroupName = $map['VServerGroupName'];
        }
        if (isset($map['ListenerHealthCheckUrl'])) {
            $model->listenerHealthCheckUrl = $map['ListenerHealthCheckUrl'];
        }
        if (isset($map['VForwardingUrlRule'])) {
            $model->VForwardingUrlRule = $map['VForwardingUrlRule'];
        }

        return $model;
    }
}

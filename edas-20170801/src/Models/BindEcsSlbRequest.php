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
    public $deployGroupId;

    /**
     * @var string
     */
    public $listenerHealthCheckUrl;

    /**
     * @var int
     */
    public $listenerPort;

    /**
     * @var string
     */
    public $listenerProtocol;

    /**
     * @var string
     */
    public $slbId;

    /**
     * @var string
     */
    public $VForwardingUrlRule;

    /**
     * @var string
     */
    public $VServerGroupId;

    /**
     * @var string
     */
    public $VServerGroupName;
    protected $_name = [
        'appId'                  => 'AppId',
        'deployGroupId'          => 'DeployGroupId',
        'listenerHealthCheckUrl' => 'ListenerHealthCheckUrl',
        'listenerPort'           => 'ListenerPort',
        'listenerProtocol'       => 'ListenerProtocol',
        'slbId'                  => 'SlbId',
        'VForwardingUrlRule'     => 'VForwardingUrlRule',
        'VServerGroupId'         => 'VServerGroupId',
        'VServerGroupName'       => 'VServerGroupName',
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
        if (null !== $this->deployGroupId) {
            $res['DeployGroupId'] = $this->deployGroupId;
        }
        if (null !== $this->listenerHealthCheckUrl) {
            $res['ListenerHealthCheckUrl'] = $this->listenerHealthCheckUrl;
        }
        if (null !== $this->listenerPort) {
            $res['ListenerPort'] = $this->listenerPort;
        }
        if (null !== $this->listenerProtocol) {
            $res['ListenerProtocol'] = $this->listenerProtocol;
        }
        if (null !== $this->slbId) {
            $res['SlbId'] = $this->slbId;
        }
        if (null !== $this->VForwardingUrlRule) {
            $res['VForwardingUrlRule'] = $this->VForwardingUrlRule;
        }
        if (null !== $this->VServerGroupId) {
            $res['VServerGroupId'] = $this->VServerGroupId;
        }
        if (null !== $this->VServerGroupName) {
            $res['VServerGroupName'] = $this->VServerGroupName;
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
        if (isset($map['DeployGroupId'])) {
            $model->deployGroupId = $map['DeployGroupId'];
        }
        if (isset($map['ListenerHealthCheckUrl'])) {
            $model->listenerHealthCheckUrl = $map['ListenerHealthCheckUrl'];
        }
        if (isset($map['ListenerPort'])) {
            $model->listenerPort = $map['ListenerPort'];
        }
        if (isset($map['ListenerProtocol'])) {
            $model->listenerProtocol = $map['ListenerProtocol'];
        }
        if (isset($map['SlbId'])) {
            $model->slbId = $map['SlbId'];
        }
        if (isset($map['VForwardingUrlRule'])) {
            $model->VForwardingUrlRule = $map['VForwardingUrlRule'];
        }
        if (isset($map['VServerGroupId'])) {
            $model->VServerGroupId = $map['VServerGroupId'];
        }
        if (isset($map['VServerGroupName'])) {
            $model->VServerGroupName = $map['VServerGroupName'];
        }

        return $model;
    }
}

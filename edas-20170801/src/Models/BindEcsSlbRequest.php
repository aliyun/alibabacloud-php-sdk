<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class BindEcsSlbRequest extends Model
{
    /**
     * @description The ID of the application. You can query the application ID by calling the ListApplication operation. For more information, see [ListApplication](~~149390~~).
     *
     * @example 93fdd228-*****-ed2ae98de18d
     *
     * @var string
     */
    public $appId;

    /**
     * @description The ID of the instance group whose application you want to bind. You can call the ListDeployGroup operation to query the group ID. For more information, see [ListDeployGroup](~~62077~~).
     *
     * @example 577f4c50-16ee-43d8-****-****
     *
     * @var string
     */
    public $deployGroupId;

    /**
     * @description The health check URL.
     *
     * @example /_ehc.html
     *
     * @var string
     */
    public $listenerHealthCheckUrl;

    /**
     * @description The listener port for the SLB instance.
     *
     * @example 80
     *
     * @var int
     */
    public $listenerPort;

    /**
     * @description The listener protocol for the SLB instance.
     *
     * @example tcp
     *
     * @var string
     */
    public $listenerProtocol;

    /**
     * @description The ID of the SLB instance.
     *
     * @example lb-uf6j54m3a****cj01jx8
     *
     * @var string
     */
    public $slbId;

    /**
     * @description The forwarding rule of the SLB listener.
     *
     * @example example.com/forwarding
     *
     * @var string
     */
    public $VForwardingUrlRule;

    /**
     * @description The ID of the vServer group for the SLB instance.
     *
     * @example rsp-2ze****6l*****
     *
     * @var string
     */
    public $VServerGroupId;

    /**
     * @description The name of the vServer group.
     *
     * @example ****\/31405/internet-test-ack-test****\/default/clusterid
     *
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

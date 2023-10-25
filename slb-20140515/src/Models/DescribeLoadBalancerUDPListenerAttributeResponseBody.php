<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerUDPListenerAttributeResponseBody\tags;
use AlibabaCloud\Tea\Model;

class DescribeLoadBalancerUDPListenerAttributeResponseBody extends Model
{
    /**
     * @description The ID of the network ACL.
     *
     * @example 123943****
     *
     * @var string
     */
    public $aclId;

    /**
     * @description Indicates whether access control is enabled. Valid values: **on** and **off**. Default value: off.
     *
     * @example off
     *
     * @var string
     */
    public $aclStatus;

    /**
     * @description The type of the ACL. Valid values:
     *
     *   **white**: a whitelist. Only requests from the IP addresses or CIDR blocks in the network ACL are forwarded. Whitelists apply to scenarios in which you want to allow only specified IP addresses to access an application.
     *
     * Your service may be adversely affected if the whitelist is not properly configured. After a whitelist is configured, only requests from IP addresses that are added to the whitelist are forwarded by the listener. If you enable a whitelist but do not add an IP address to the ACL, the listener forwards all requests.
     *
     *   **black**: a blacklist. All requests from the IP addresses or CIDR blocks in the network ACL are blocked. Blacklists apply to scenarios in which you want to deny access from specific IP addresses or CIDR blocks to an application.
     *
     * If a blacklist is configured for a listener but no IP address is added to the blacklist, the listener forwards all requests.
     * @example white
     *
     * @var string
     */
    public $aclType;

    /**
     * @description The backend port used by the CLB instance.
     *
     * >  If the listener is associated with a vServer group, this parameter is not returned.
     * @example 90
     *
     * @var int
     */
    public $backendServerPort;

    /**
     * @description The maximum bandwidth of the listener. Unit: Mbit/s. Valid values:
     *
     *   **-1**: For a pay-by-data-transfer Internet-facing CLB instance, this parameter is set to -1. This indicates that the bandwidth of the listener is unlimited.
     *   **1** to **5120**: For a pay-by-bandwidth Internet-facing CLB instance, you can specify the maximum bandwidth of each listener. The sum of maximum bandwidth of all listeners cannot exceed the maximum bandwidth of the CLB instance.
     *
     * @example -1
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The description of the listener.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description Indicates whether the health check feature is enabled. Valid values:
     *
     *   **on**: yes
     *   **off**: no
     *
     * @example on
     *
     * @var string
     */
    public $healthCheck;

    /**
     * @description The port that is used for health checks. Valid values: **1** to **65535**. If this parameter is not set, the port specified by BackendServerPort is used for health checks.
     *
     * >  This parameter takes effect only when the **HealthCheck** parameter is set to **on**.
     * @example 8080
     *
     * @var int
     */
    public $healthCheckConnectPort;

    /**
     * @description The timeout period of a health check. If a backend Elastic Compute Service (ECS) instance does not return a health check response within the specified timeout period, the server fails the health check. Valid values: **1** to **300**. Unit: seconds.
     *
     * @example 100
     *
     * @var int
     */
    public $healthCheckConnectTimeout;

    /**
     * @description The response string for UDP listener health checks. The string is up to 64 characters in length, and can contain letters and digits.
     *
     * @example ok
     *
     * @var string
     */
    public $healthCheckExp;

    /**
     * @description The interval between two consecutive health checks. Valid values: **1** to **50**. Unit: seconds.
     *
     * @example 5
     *
     * @var int
     */
    public $healthCheckInterval;

    /**
     * @description The request string for UDP listener health checks. The string is up to 64 characters in length, and can contain letters and digits.
     *
     * @example hello
     *
     * @var string
     */
    public $healthCheckReq;

    /**
     * @description The healthy threshold. The number of times that an unhealthy backend server must consecutively pass health checks before it is declared healthy. In this case, the health status is changed from **fail** to **success**. Valid values: **2** to **10**.
     *
     * @example 4
     *
     * @var int
     */
    public $healthyThreshold;

    /**
     * @description The frontend port used by the CLB instance.
     *
     * @example 53
     *
     * @var int
     */
    public $listenerPort;

    /**
     * @description The ID of the CLB instance.
     *
     * @example lb-bp1rtfnodmywb43e*****
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @description The ID of the primary/secondary server group that is associated with the listener.
     *
     * @example rsp-0bfucw****
     *
     * @var string
     */
    public $masterSlaveServerGroupId;

    /**
     * @description Indicates whether the Proxy protocol is used to pass client IP addresses to backend servers. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example false
     *
     * @var bool
     */
    public $proxyProtocolV2Enabled;

    /**
     * @description The ID of the request.
     *
     * @example 365F4154-92F6-4AE4-92F8-7FF34B540710
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The scheduling algorithm. Valid values:
     *
     *   **wrr** (default): Backend servers with higher weights receive more requests than backend servers with lower weights.
     *   **rr**: Requests are distributed to backend servers in sequence.
     *
     * @example wrr
     *
     * @var string
     */
    public $scheduler;

    /**
     * @description The status of the listener. Valid values:
     *
     *   **running**
     *   **stopped**
     *
     * @example stopped
     *
     * @var string
     */
    public $status;

    /**
     * @description The tags.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description The unhealthy threshold. The number of times that a healthy backend server must consecutively fail health checks before it is declared unhealthy. In this case, the health status is changed from **success** to **fail**. Valid values: **2** to **10**.
     *
     * @example 4
     *
     * @var int
     */
    public $unhealthyThreshold;

    /**
     * @description The ID of the vServer group that is associated with the listener.
     *
     * @example rsp-cige6j****
     *
     * @var string
     */
    public $VServerGroupId;
    protected $_name = [
        'aclId'                     => 'AclId',
        'aclStatus'                 => 'AclStatus',
        'aclType'                   => 'AclType',
        'backendServerPort'         => 'BackendServerPort',
        'bandwidth'                 => 'Bandwidth',
        'description'               => 'Description',
        'healthCheck'               => 'HealthCheck',
        'healthCheckConnectPort'    => 'HealthCheckConnectPort',
        'healthCheckConnectTimeout' => 'HealthCheckConnectTimeout',
        'healthCheckExp'            => 'HealthCheckExp',
        'healthCheckInterval'       => 'HealthCheckInterval',
        'healthCheckReq'            => 'HealthCheckReq',
        'healthyThreshold'          => 'HealthyThreshold',
        'listenerPort'              => 'ListenerPort',
        'loadBalancerId'            => 'LoadBalancerId',
        'masterSlaveServerGroupId'  => 'MasterSlaveServerGroupId',
        'proxyProtocolV2Enabled'    => 'ProxyProtocolV2Enabled',
        'requestId'                 => 'RequestId',
        'scheduler'                 => 'Scheduler',
        'status'                    => 'Status',
        'tags'                      => 'Tags',
        'unhealthyThreshold'        => 'UnhealthyThreshold',
        'VServerGroupId'            => 'VServerGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclId) {
            $res['AclId'] = $this->aclId;
        }
        if (null !== $this->aclStatus) {
            $res['AclStatus'] = $this->aclStatus;
        }
        if (null !== $this->aclType) {
            $res['AclType'] = $this->aclType;
        }
        if (null !== $this->backendServerPort) {
            $res['BackendServerPort'] = $this->backendServerPort;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->healthCheck) {
            $res['HealthCheck'] = $this->healthCheck;
        }
        if (null !== $this->healthCheckConnectPort) {
            $res['HealthCheckConnectPort'] = $this->healthCheckConnectPort;
        }
        if (null !== $this->healthCheckConnectTimeout) {
            $res['HealthCheckConnectTimeout'] = $this->healthCheckConnectTimeout;
        }
        if (null !== $this->healthCheckExp) {
            $res['HealthCheckExp'] = $this->healthCheckExp;
        }
        if (null !== $this->healthCheckInterval) {
            $res['HealthCheckInterval'] = $this->healthCheckInterval;
        }
        if (null !== $this->healthCheckReq) {
            $res['HealthCheckReq'] = $this->healthCheckReq;
        }
        if (null !== $this->healthyThreshold) {
            $res['HealthyThreshold'] = $this->healthyThreshold;
        }
        if (null !== $this->listenerPort) {
            $res['ListenerPort'] = $this->listenerPort;
        }
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }
        if (null !== $this->masterSlaveServerGroupId) {
            $res['MasterSlaveServerGroupId'] = $this->masterSlaveServerGroupId;
        }
        if (null !== $this->proxyProtocolV2Enabled) {
            $res['ProxyProtocolV2Enabled'] = $this->proxyProtocolV2Enabled;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->scheduler) {
            $res['Scheduler'] = $this->scheduler;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->unhealthyThreshold) {
            $res['UnhealthyThreshold'] = $this->unhealthyThreshold;
        }
        if (null !== $this->VServerGroupId) {
            $res['VServerGroupId'] = $this->VServerGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLoadBalancerUDPListenerAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclId'])) {
            $model->aclId = $map['AclId'];
        }
        if (isset($map['AclStatus'])) {
            $model->aclStatus = $map['AclStatus'];
        }
        if (isset($map['AclType'])) {
            $model->aclType = $map['AclType'];
        }
        if (isset($map['BackendServerPort'])) {
            $model->backendServerPort = $map['BackendServerPort'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['HealthCheck'])) {
            $model->healthCheck = $map['HealthCheck'];
        }
        if (isset($map['HealthCheckConnectPort'])) {
            $model->healthCheckConnectPort = $map['HealthCheckConnectPort'];
        }
        if (isset($map['HealthCheckConnectTimeout'])) {
            $model->healthCheckConnectTimeout = $map['HealthCheckConnectTimeout'];
        }
        if (isset($map['HealthCheckExp'])) {
            $model->healthCheckExp = $map['HealthCheckExp'];
        }
        if (isset($map['HealthCheckInterval'])) {
            $model->healthCheckInterval = $map['HealthCheckInterval'];
        }
        if (isset($map['HealthCheckReq'])) {
            $model->healthCheckReq = $map['HealthCheckReq'];
        }
        if (isset($map['HealthyThreshold'])) {
            $model->healthyThreshold = $map['HealthyThreshold'];
        }
        if (isset($map['ListenerPort'])) {
            $model->listenerPort = $map['ListenerPort'];
        }
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }
        if (isset($map['MasterSlaveServerGroupId'])) {
            $model->masterSlaveServerGroupId = $map['MasterSlaveServerGroupId'];
        }
        if (isset($map['ProxyProtocolV2Enabled'])) {
            $model->proxyProtocolV2Enabled = $map['ProxyProtocolV2Enabled'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Scheduler'])) {
            $model->scheduler = $map['Scheduler'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['UnhealthyThreshold'])) {
            $model->unhealthyThreshold = $map['UnhealthyThreshold'];
        }
        if (isset($map['VServerGroupId'])) {
            $model->VServerGroupId = $map['VServerGroupId'];
        }

        return $model;
    }
}

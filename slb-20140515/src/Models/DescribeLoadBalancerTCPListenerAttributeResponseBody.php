<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerTCPListenerAttributeResponseBody\tags;
use AlibabaCloud\Tea\Model;

class DescribeLoadBalancerTCPListenerAttributeResponseBody extends Model
{
    /**
     * @description The ID of the network ACL that is associated with the listener.
     *
     * If **AclStatus** is set to **on**, this parameter is returned.
     * @example 12
     *
     * @var string
     */
    public $aclId;

    /**
     * @description Indicates whether access control is enabled. Valid values:
     *
     *   **on**: yes
     *   **off**: no
     *
     * @example off
     *
     * @var string
     */
    public $aclStatus;

    /**
     * @description The type of the ACL. Valid values:
     *
     *   **white**: a whitelist. Only requests from the IP addresses or CIDR blocks in the network ACL are forwarded. Whitelists apply to scenarios in which you want to allow only specific IP addresses to access an application.
     *
     * If you enable a whitelist but do not add an IP address to the ACL, the listener forwards all requests.
     *
     *   **black**: a blacklist. All requests from the IP addresses or CIDR blocks in the network ACL are rejected. Blacklists apply to scenarios in which you want to block access from specified IP addresses to an application.
     *
     * If a blacklist is configured for a listener but no IP address is added to the blacklist, the listener forwards all requests.
     *
     * >  If **AclStatus** is set to **on**, this parameter is returned.
     * @example white
     *
     * @var string
     */
    public $aclType;

    /**
     * @description The backend port used by the CLB instance.
     *
     * >  If the listener is associated with a vServer group, this parameter is not returned.
     * @example 443
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
     * @description Indicates whether connection draining is enabled. If **ConnectionDrain** is set to **on**, the parameter is returned. Valid values:
     *
     *   **on**: yes
     *   **off**: no
     *
     * @example off
     *
     * @var string
     */
    public $connectionDrain;

    /**
     * @description The timeout period of connection draining. If **ConnectionDrain** is set to **on**, the parameter is returned.
     *
     * Valid values: 10 to 900. Unit: seconds.
     * @example 300
     *
     * @var int
     */
    public $connectionDrainTimeout;

    /**
     * @description The description of the listener.
     *
     * @example TCP listener
     *
     * @var string
     */
    public $description;

    /**
     * @description The timeout period of a connection.
     *
     * @example 500
     *
     * @var int
     */
    public $establishedTimeout;

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
     * @example 8080
     *
     * @var int
     */
    public $healthCheckConnectPort;

    /**
     * @description The timeout period.
     *
     * @example 100
     *
     * @var int
     */
    public $healthCheckConnectTimeout;

    /**
     * @description The domain name that is used for health checks. Valid values:
     *
     *   **$\_ip**: the private IP addresses of backend servers. If you do not set the HealthCheckDomain parameter or set the parameter to $\_ip, the CLB instance uses the private IP address of each backend server for health checks.
     *   **domain**: The domain name is 1 to 80 characters in length, and can contain letters, digits, periods (.), and hyphens (-).
     *
     * @example www.domain.com
     *
     * @var string
     */
    public $healthCheckDomain;

    /**
     * @description The HTTP status code for a successful health check.
     *
     * @example http_2xx
     *
     * @var string
     */
    public $healthCheckHttpCode;

    /**
     * @description The interval between two consecutive health checks. Valid values: **1** to **50**. Unit: seconds.
     *
     * @example 5
     *
     * @var int
     */
    public $healthCheckInterval;

    /**
     * @description The health check method.
     *
     * @example tcp
     *
     * @var string
     */
    public $healthCheckMethod;

    /**
     * @description The health check method that is used by the TCP listener.
     *
     * Valid values: **tcp** and **http**.
     * @example tcp
     *
     * @var string
     */
    public $healthCheckType;

    /**
     * @description The URL that is used for health checks. The URL must be 1 to 80 characters in length, and can contain letters, digits, hyphens (-), forward slashes (/), periods (.), percent signs (%), question marks (?), number signs (#), and ampersands (&). The URL is not a single forward slash (/) but it starts with a forward slash (/).
     *
     * @example /test/index.html
     *
     * @var string
     */
    public $healthCheckURI;

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
     * @example 110
     *
     * @var int
     */
    public $listenerPort;

    /**
     * @description The ID of the CLB instance.
     *
     * @example lb-bp1ygod3yctvg1y****
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
     * @description The timeout period of session persistence.
     *
     * Valid values: **0** to **3600**. Unit: seconds. Default value: **0**. If the default value is used, the system disables session persistence.
     * @example 0
     *
     * @var int
     */
    public $persistenceTimeout;

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
     * @description The scheduling algorithm.
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
     * @description Indicates whether the SynProxy feature of CLB is enabled for protection.
     *
     * We recommend that you use the default value of this parameter. Valid values:
     *
     *   **enable**: yes
     *   **disable**: no
     *
     * @example enable
     *
     * @var string
     */
    public $synProxy;

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
     * @description The ID of the associated server group.
     *
     * @example rsp-cige6******8
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
        'connectionDrain'           => 'ConnectionDrain',
        'connectionDrainTimeout'    => 'ConnectionDrainTimeout',
        'description'               => 'Description',
        'establishedTimeout'        => 'EstablishedTimeout',
        'healthCheck'               => 'HealthCheck',
        'healthCheckConnectPort'    => 'HealthCheckConnectPort',
        'healthCheckConnectTimeout' => 'HealthCheckConnectTimeout',
        'healthCheckDomain'         => 'HealthCheckDomain',
        'healthCheckHttpCode'       => 'HealthCheckHttpCode',
        'healthCheckInterval'       => 'HealthCheckInterval',
        'healthCheckMethod'         => 'HealthCheckMethod',
        'healthCheckType'           => 'HealthCheckType',
        'healthCheckURI'            => 'HealthCheckURI',
        'healthyThreshold'          => 'HealthyThreshold',
        'listenerPort'              => 'ListenerPort',
        'loadBalancerId'            => 'LoadBalancerId',
        'masterSlaveServerGroupId'  => 'MasterSlaveServerGroupId',
        'persistenceTimeout'        => 'PersistenceTimeout',
        'proxyProtocolV2Enabled'    => 'ProxyProtocolV2Enabled',
        'requestId'                 => 'RequestId',
        'scheduler'                 => 'Scheduler',
        'status'                    => 'Status',
        'synProxy'                  => 'SynProxy',
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
        if (null !== $this->connectionDrain) {
            $res['ConnectionDrain'] = $this->connectionDrain;
        }
        if (null !== $this->connectionDrainTimeout) {
            $res['ConnectionDrainTimeout'] = $this->connectionDrainTimeout;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->establishedTimeout) {
            $res['EstablishedTimeout'] = $this->establishedTimeout;
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
        if (null !== $this->healthCheckDomain) {
            $res['HealthCheckDomain'] = $this->healthCheckDomain;
        }
        if (null !== $this->healthCheckHttpCode) {
            $res['HealthCheckHttpCode'] = $this->healthCheckHttpCode;
        }
        if (null !== $this->healthCheckInterval) {
            $res['HealthCheckInterval'] = $this->healthCheckInterval;
        }
        if (null !== $this->healthCheckMethod) {
            $res['HealthCheckMethod'] = $this->healthCheckMethod;
        }
        if (null !== $this->healthCheckType) {
            $res['HealthCheckType'] = $this->healthCheckType;
        }
        if (null !== $this->healthCheckURI) {
            $res['HealthCheckURI'] = $this->healthCheckURI;
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
        if (null !== $this->persistenceTimeout) {
            $res['PersistenceTimeout'] = $this->persistenceTimeout;
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
        if (null !== $this->synProxy) {
            $res['SynProxy'] = $this->synProxy;
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
     * @return DescribeLoadBalancerTCPListenerAttributeResponseBody
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
        if (isset($map['ConnectionDrain'])) {
            $model->connectionDrain = $map['ConnectionDrain'];
        }
        if (isset($map['ConnectionDrainTimeout'])) {
            $model->connectionDrainTimeout = $map['ConnectionDrainTimeout'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EstablishedTimeout'])) {
            $model->establishedTimeout = $map['EstablishedTimeout'];
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
        if (isset($map['HealthCheckDomain'])) {
            $model->healthCheckDomain = $map['HealthCheckDomain'];
        }
        if (isset($map['HealthCheckHttpCode'])) {
            $model->healthCheckHttpCode = $map['HealthCheckHttpCode'];
        }
        if (isset($map['HealthCheckInterval'])) {
            $model->healthCheckInterval = $map['HealthCheckInterval'];
        }
        if (isset($map['HealthCheckMethod'])) {
            $model->healthCheckMethod = $map['HealthCheckMethod'];
        }
        if (isset($map['HealthCheckType'])) {
            $model->healthCheckType = $map['HealthCheckType'];
        }
        if (isset($map['HealthCheckURI'])) {
            $model->healthCheckURI = $map['HealthCheckURI'];
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
        if (isset($map['PersistenceTimeout'])) {
            $model->persistenceTimeout = $map['PersistenceTimeout'];
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
        if (isset($map['SynProxy'])) {
            $model->synProxy = $map['SynProxy'];
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

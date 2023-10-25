<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\Tea\Model;

class SetLoadBalancerTCPListenerAttributeRequest extends Model
{
    /**
     * @description The ID of the network access control list (ACL) that is associated with the listener.
     *
     * If **AclStatus** is set to **on**, this parameter is required.
     * @example 12333
     *
     * @var string
     */
    public $aclId;

    /**
     * @description Specifies whether to enable access control. Valid values:
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
     * @description The type of the network ACL. Valid values:
     *
     *   **white**: a whitelist. Only requests from the IP addresses or CIDR blocks in the network ACL are forwarded. Whitelists apply to scenarios where you want to allow only specific IP addresses to access an application. Your service may be adversely affected if the allowlist is not properly configured. After a whitelist is configured, only requests from IP addresses that are added to the whitelist are forwarded by the listener.
     *
     * If you enable a whitelist but do not add an IP address to the ACL, the listener forwards all requests.
     *
     *   **black**: a blacklist. All requests from the IP addresses or CIDR blocks in the ACL are rejected. Blacklists apply to scenarios where you want to block access from specified IP addresses to an application.
     *
     * If a blacklist is configured for a listener but no IP address is added to the blacklist, the listener forwards all requests.
     *
     * >  If **AclStatus** is set to **on**, this parameter is required.
     * @example white
     *
     * @var string
     */
    public $aclType;

    /**
     * @description The maximum bandwidth of the listener. Unit: Mbit/s. Valid values: **-1** and **1** to **5120**.
     *
     *   **-1**: For a pay-by-data-transfer Internet-facing CLB instance, you can set this parameter to **-1**, which specifies unlimited bandwidth.
     *   **1** to **5120**: For a pay-by-bandwidth Internet-facing CLB instance, you can specify the maximum bandwidth of each listener. The sum of the maximum bandwidth values of all listeners cannot exceed the maximum bandwidth of the CLB instance.
     *
     * @example 43
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description Specifies whether to enable connection draining. Valid values:
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
     * @description The timeout period of connection draining. This parameter is required if **ConnectionDrain** is set to **on**. Unit: seconds.
     *
     * Valid values: **10** to **900**.
     * @example 300
     *
     * @var int
     */
    public $connectionDrainTimeout;

    /**
     * @description The name of the listener.
     *
     * The name must be 1 to 256 characters in length and can contain letters, digits, hyphens (-), forward slashes (/), periods (.), and underscores (\_).
     * @example tcp_80
     *
     * @var string
     */
    public $description;

    /**
     * @description The timeout period of a connection. Unit: seconds. Valid values: **10** to **900**.
     *
     * @example 500
     *
     * @var int
     */
    public $establishedTimeout;

    /**
     * @description The port that is used for health checks. Valid values: **1** to **65535**.
     *
     * If you do not set this parameter, the port specified by the **BackendServerPort** parameter is used.
     * @example 8080
     *
     * @var int
     */
    public $healthCheckConnectPort;

    /**
     * @description The timeout period of a health check.
     *
     * If a backend ECS instance does not return a health check response within the specified timeout period, the server fails the health check.
     *
     * Valid values: **1** to **300**. Unit: seconds.
     *
     * >  If the value of the **HealthCheckConnectTimeout** parameter is smaller than that of the **HealthCheckInterval** parameter, the timeout period specified by the **HCTimeout** parameter is ignored and the period of time specified by the **HealthCheckInterval** parameter is used as the timeout period.
     * @example 100
     *
     * @var int
     */
    public $healthCheckConnectTimeout;

    /**
     * @description The domain name that is used for health checks. You can set this parameter when the TCP listener requires HTTP health checks. If you do not set this parameter, TCP health checks are performed.
     *
     *   **$\_ip**: the private IP addresses of the backend servers.
     *
     * If you do not set the HealthCheckHost parameter or set the parameter to $SERVER_IP, the CLB instance uses the private IP addresses of backend servers for health checks.
     *
     *   **domain**: The domain name is 1 to 80 characters in length, and can contain letters, digits, periods (.), and hyphens (-).
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $healthCheckDomain;

    /**
     * @description The HTTP status code for a successful health check. Separate multiple HTTP status codes with commas (,).
     *
     * Valid values: **http\_2xx**, **http\_3xx**, **http\_4xx**, and **http\_5xx**.
     * @example http_2xx
     *
     * @var string
     */
    public $healthCheckHttpCode;

    /**
     * @description The interval between two consecutive health checks. Unit: seconds.
     *
     * Valid values: **1** to **50**.
     * @example 5
     *
     * @var int
     */
    public $healthCheckInterval;

    /**
     * @description Specifies whether to enable the health check feature. Valid values:
     *
     *   **on**: yes
     *   **off**: no
     *
     * @example on
     *
     * @var string
     */
    public $healthCheckSwitch;

    /**
     * @description The type of the health check. Valid values: **tcp** and **http**.
     *
     * @example tcp
     *
     * @var string
     */
    public $healthCheckType;

    /**
     * @description The URI that is used for health checks. The URI must be 1 to 80 characters in length, and can contain letters, digits, hyphens (-), forward slashes (/), periods (.), percent signs (%), question marks (?), number signs (#), and ampersands (&). The URI must start with a forward slash (/) but cannot be a single forward slash (/).
     *
     * If you do not set this parameter, TCP health checks are performed.
     * @example /test/index.html
     *
     * @var string
     */
    public $healthCheckURI;

    /**
     * @description The number of times that an unhealthy backend server must consecutively pass health checks before it is declared healthy. In this case, the health status is changed from **fail** to **success**.
     *
     * Valid values: **2** to **10**.
     * @example 4
     *
     * @var int
     */
    public $healthyThreshold;

    /**
     * @description The frontend port used by the CLB instance.
     *
     * Valid values: **1** to **65535**.
     * @example 80
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
     * @description Specifies whether to use a primary/secondary server group. Valid values:
     *
     *   **on**: yes
     *   **off**: no
     *
     * You cannot set both **VserverGroup** and **MasterSlaveServerGroup** to **on**.
     * @example on
     *
     * @var string
     */
    public $masterSlaveServerGroup;

    /**
     * @description The ID of the primary/secondary server group.
     *
     * >  You can set only one of the VServerGroupId and MasterSlaveServerGroupId parameters.
     * @example rsp-cige****
     *
     * @var string
     */
    public $masterSlaveServerGroupId;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The timeout period of session persistence. Valid values: **0** to **3600**. Unit: seconds.
     *
     * Default value: **0**. If the default value is used, the system disables session persistence.
     * @example 0
     *
     * @var int
     */
    public $persistenceTimeout;

    /**
     * @description Specifies whether to use the Proxy protocol to pass client IP addresses to backend servers. Valid values:
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
     * @description The region ID of the CLB instance.
     *
     * You can query the region ID from the [Regions and zones](~~40654~~) list or by calling the [DescribeRegions](~~DescribeRegions~~) operation.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The scheduling algorithm. Valid values:
     *
     *   **wrr**: Backend servers that have higher weights receive more requests than backend servers that have lower weights.
     *   **rr**: Requests are distributed to backend servers in sequence.
     *   **sch**: specifies consistent hashing that is based on source IP addresses. Requests from the same source IP address are distributed to the same backend server.
     *   **tch**: specifies consistent hashing that is based on four factors: source IP address, destination IP address, source port, and destination port. Requests that contain the same information based on the four factors are distributed to the same backend server.
     *
     * >
     *   Only high-performance CLB instances support the **sch** and **tch** algorithms.
     *   CLB does not support converting the **wrr** and **rr** algorithms to sch or tch. You cannot switch the hash algorithm from one to another.
     *
     * @example wrr
     *
     * @var string
     */
    public $scheduler;

    /**
     * @description Specifies whether to enable the SynProxy feature of CLB for protection. Valid values:
     *
     *   **enable**: yes
     *   **disable**: no
     *
     * We recommend that you use the default value of this parameter.
     * @example enable
     *
     * @var string
     */
    public $synProxy;

    /**
     * @description The number of times that a healthy backend server must consecutively fail health checks before it is declared unhealthy. In this case, the health status is changed from **success** to **fail**.
     *
     * Valid values: **2** to **10**.
     * @example 4
     *
     * @var int
     */
    public $unhealthyThreshold;

    /**
     * @description Specifies whether to use a vServer group. Valid values:
     *
     *   **on**: yes
     *   **off**: no
     *
     * >  You cannot set both **VserverGroup** and **MasterSlaveServerGroup** to **on**.
     * @example on
     *
     * @var string
     */
    public $VServerGroup;

    /**
     * @description The ID of the vServer group.
     *
     * @example rsp-cige6j5****
     *
     * @var string
     */
    public $VServerGroupId;
    protected $_name = [
        'aclId'                     => 'AclId',
        'aclStatus'                 => 'AclStatus',
        'aclType'                   => 'AclType',
        'bandwidth'                 => 'Bandwidth',
        'connectionDrain'           => 'ConnectionDrain',
        'connectionDrainTimeout'    => 'ConnectionDrainTimeout',
        'description'               => 'Description',
        'establishedTimeout'        => 'EstablishedTimeout',
        'healthCheckConnectPort'    => 'HealthCheckConnectPort',
        'healthCheckConnectTimeout' => 'HealthCheckConnectTimeout',
        'healthCheckDomain'         => 'HealthCheckDomain',
        'healthCheckHttpCode'       => 'HealthCheckHttpCode',
        'healthCheckInterval'       => 'HealthCheckInterval',
        'healthCheckSwitch'         => 'HealthCheckSwitch',
        'healthCheckType'           => 'HealthCheckType',
        'healthCheckURI'            => 'HealthCheckURI',
        'healthyThreshold'          => 'HealthyThreshold',
        'listenerPort'              => 'ListenerPort',
        'loadBalancerId'            => 'LoadBalancerId',
        'masterSlaveServerGroup'    => 'MasterSlaveServerGroup',
        'masterSlaveServerGroupId'  => 'MasterSlaveServerGroupId',
        'ownerAccount'              => 'OwnerAccount',
        'ownerId'                   => 'OwnerId',
        'persistenceTimeout'        => 'PersistenceTimeout',
        'proxyProtocolV2Enabled'    => 'ProxyProtocolV2Enabled',
        'regionId'                  => 'RegionId',
        'resourceOwnerAccount'      => 'ResourceOwnerAccount',
        'resourceOwnerId'           => 'ResourceOwnerId',
        'scheduler'                 => 'Scheduler',
        'synProxy'                  => 'SynProxy',
        'unhealthyThreshold'        => 'UnhealthyThreshold',
        'VServerGroup'              => 'VServerGroup',
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
        if (null !== $this->healthCheckSwitch) {
            $res['HealthCheckSwitch'] = $this->healthCheckSwitch;
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
        if (null !== $this->masterSlaveServerGroup) {
            $res['MasterSlaveServerGroup'] = $this->masterSlaveServerGroup;
        }
        if (null !== $this->masterSlaveServerGroupId) {
            $res['MasterSlaveServerGroupId'] = $this->masterSlaveServerGroupId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->persistenceTimeout) {
            $res['PersistenceTimeout'] = $this->persistenceTimeout;
        }
        if (null !== $this->proxyProtocolV2Enabled) {
            $res['ProxyProtocolV2Enabled'] = $this->proxyProtocolV2Enabled;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->scheduler) {
            $res['Scheduler'] = $this->scheduler;
        }
        if (null !== $this->synProxy) {
            $res['SynProxy'] = $this->synProxy;
        }
        if (null !== $this->unhealthyThreshold) {
            $res['UnhealthyThreshold'] = $this->unhealthyThreshold;
        }
        if (null !== $this->VServerGroup) {
            $res['VServerGroup'] = $this->VServerGroup;
        }
        if (null !== $this->VServerGroupId) {
            $res['VServerGroupId'] = $this->VServerGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetLoadBalancerTCPListenerAttributeRequest
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
        if (isset($map['HealthCheckSwitch'])) {
            $model->healthCheckSwitch = $map['HealthCheckSwitch'];
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
        if (isset($map['MasterSlaveServerGroup'])) {
            $model->masterSlaveServerGroup = $map['MasterSlaveServerGroup'];
        }
        if (isset($map['MasterSlaveServerGroupId'])) {
            $model->masterSlaveServerGroupId = $map['MasterSlaveServerGroupId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PersistenceTimeout'])) {
            $model->persistenceTimeout = $map['PersistenceTimeout'];
        }
        if (isset($map['ProxyProtocolV2Enabled'])) {
            $model->proxyProtocolV2Enabled = $map['ProxyProtocolV2Enabled'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['Scheduler'])) {
            $model->scheduler = $map['Scheduler'];
        }
        if (isset($map['SynProxy'])) {
            $model->synProxy = $map['SynProxy'];
        }
        if (isset($map['UnhealthyThreshold'])) {
            $model->unhealthyThreshold = $map['UnhealthyThreshold'];
        }
        if (isset($map['VServerGroup'])) {
            $model->VServerGroup = $map['VServerGroup'];
        }
        if (isset($map['VServerGroupId'])) {
            $model->VServerGroupId = $map['VServerGroupId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListEurekaInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The name of the application.
     *
     * @example CONTACTINFO
     *
     * @var string
     */
    public $app;

    /**
     * @description The timeout period of the instance.\
     * After the specified timeout period expires, the service is unavailable by default and is deleted.
     * @example 90
     *
     * @var int
     */
    public $durationInSecs;

    /**
     * @description The URL of the homepage.
     *
     * @example http://30.5.XX.XX:8091/
     *
     * @var string
     */
    public $homePageUrl;

    /**
     * @description The hostname.
     *
     * @example 30.5.XX.XX
     *
     * @var string
     */
    public $hostName;

    /**
     * @description The ID of the instance.
     *
     * @example L-PC1A6A28-****.hz.ali.com:contactinfo:8091
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The IP address.
     *
     * @example 30.5.XX.XX
     *
     * @var string
     */
    public $ipAddr;

    /**
     * @description The time when the instance was last modified.
     *
     * @example 20201009115543
     *
     * @var int
     */
    public $lastDirtyTimestamp;

    /**
     * @description The time when the instance heartbeat was last checked.
     *
     * @example 20201010071203
     *
     * @var int
     */
    public $lastUpdatedTimestamp;

    /**
     * @description The metadata.
     *
     * @example [string]
     *
     * @var mixed[]
     */
    public $metadata;

    /**
     * @description The service port number.
     *
     * @example 8091
     *
     * @var int
     */
    public $port;

    /**
     * @description The maximum interval between two heartbeat checks after a heartbeat check times out.\
     * Default value: 10.
     * @example 10
     *
     * @var int
     */
    public $renewalIntervalInSecs;

    /**
     * @description The security port.
     *
     * @example 443
     *
     * @var int
     */
    public $securePort;

    /**
     * @description The number of service providers. The value is in the following format: Number of healthy instances/Total number of instances.
     *
     * @example 1/1
     *
     * @var string
     */
    public $status;

    /**
     * @description The virtual IP address (VIP).
     *
     * @example contactinfo
     *
     * @var string
     */
    public $vipAddress;
    protected $_name = [
        'app'                   => 'App',
        'durationInSecs'        => 'DurationInSecs',
        'homePageUrl'           => 'HomePageUrl',
        'hostName'              => 'HostName',
        'instanceId'            => 'InstanceId',
        'ipAddr'                => 'IpAddr',
        'lastDirtyTimestamp'    => 'LastDirtyTimestamp',
        'lastUpdatedTimestamp'  => 'LastUpdatedTimestamp',
        'metadata'              => 'Metadata',
        'port'                  => 'Port',
        'renewalIntervalInSecs' => 'RenewalIntervalInSecs',
        'securePort'            => 'SecurePort',
        'status'                => 'Status',
        'vipAddress'            => 'VipAddress',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->app) {
            $res['App'] = $this->app;
        }
        if (null !== $this->durationInSecs) {
            $res['DurationInSecs'] = $this->durationInSecs;
        }
        if (null !== $this->homePageUrl) {
            $res['HomePageUrl'] = $this->homePageUrl;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ipAddr) {
            $res['IpAddr'] = $this->ipAddr;
        }
        if (null !== $this->lastDirtyTimestamp) {
            $res['LastDirtyTimestamp'] = $this->lastDirtyTimestamp;
        }
        if (null !== $this->lastUpdatedTimestamp) {
            $res['LastUpdatedTimestamp'] = $this->lastUpdatedTimestamp;
        }
        if (null !== $this->metadata) {
            $res['Metadata'] = $this->metadata;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->renewalIntervalInSecs) {
            $res['RenewalIntervalInSecs'] = $this->renewalIntervalInSecs;
        }
        if (null !== $this->securePort) {
            $res['SecurePort'] = $this->securePort;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->vipAddress) {
            $res['VipAddress'] = $this->vipAddress;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['App'])) {
            $model->app = $map['App'];
        }
        if (isset($map['DurationInSecs'])) {
            $model->durationInSecs = $map['DurationInSecs'];
        }
        if (isset($map['HomePageUrl'])) {
            $model->homePageUrl = $map['HomePageUrl'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IpAddr'])) {
            $model->ipAddr = $map['IpAddr'];
        }
        if (isset($map['LastDirtyTimestamp'])) {
            $model->lastDirtyTimestamp = $map['LastDirtyTimestamp'];
        }
        if (isset($map['LastUpdatedTimestamp'])) {
            $model->lastUpdatedTimestamp = $map['LastUpdatedTimestamp'];
        }
        if (isset($map['Metadata'])) {
            $model->metadata = $map['Metadata'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['RenewalIntervalInSecs'])) {
            $model->renewalIntervalInSecs = $map['RenewalIntervalInSecs'];
        }
        if (isset($map['SecurePort'])) {
            $model->securePort = $map['SecurePort'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VipAddress'])) {
            $model->vipAddress = $map['VipAddress'];
        }

        return $model;
    }
}

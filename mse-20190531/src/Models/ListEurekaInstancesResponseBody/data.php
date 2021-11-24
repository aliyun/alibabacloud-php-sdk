<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListEurekaInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $app;

    /**
     * @var int
     */
    public $durationInSecs;

    /**
     * @var string
     */
    public $homePageUrl;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $ipAddr;

    /**
     * @var int
     */
    public $lastDirtyTimestamp;

    /**
     * @var int
     */
    public $lastUpdatedTimestamp;

    /**
     * @var mixed[]
     */
    public $metadata;

    /**
     * @var int
     */
    public $port;

    /**
     * @var int
     */
    public $renewalIntervalInSecs;

    /**
     * @var int
     */
    public $securePort;

    /**
     * @var string
     */
    public $status;

    /**
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

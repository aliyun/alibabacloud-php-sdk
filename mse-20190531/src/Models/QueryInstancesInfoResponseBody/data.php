<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\QueryInstancesInfoResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $clientPort;
    /**
     * @var string
     */
    public $creationTimestamp;
    /**
     * @var string
     */
    public $healthStatus;
    /**
     * @var string
     */
    public $internetIp;
    /**
     * @var string
     */
    public $ip;
    /**
     * @var string
     */
    public $podName;
    /**
     * @var string
     */
    public $role;
    /**
     * @var string
     */
    public $singleTunnelVip;
    /**
     * @var string
     */
    public $zone;
    /**
     * @var bool
     */
    public $zoneDistributed;
    protected $_name = [
        'clientPort'        => 'ClientPort',
        'creationTimestamp' => 'CreationTimestamp',
        'healthStatus'      => 'HealthStatus',
        'internetIp'        => 'InternetIp',
        'ip'                => 'Ip',
        'podName'           => 'PodName',
        'role'              => 'Role',
        'singleTunnelVip'   => 'SingleTunnelVip',
        'zone'              => 'Zone',
        'zoneDistributed'   => 'ZoneDistributed',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientPort) {
            $res['ClientPort'] = $this->clientPort;
        }

        if (null !== $this->creationTimestamp) {
            $res['CreationTimestamp'] = $this->creationTimestamp;
        }

        if (null !== $this->healthStatus) {
            $res['HealthStatus'] = $this->healthStatus;
        }

        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }

        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }

        if (null !== $this->podName) {
            $res['PodName'] = $this->podName;
        }

        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }

        if (null !== $this->singleTunnelVip) {
            $res['SingleTunnelVip'] = $this->singleTunnelVip;
        }

        if (null !== $this->zone) {
            $res['Zone'] = $this->zone;
        }

        if (null !== $this->zoneDistributed) {
            $res['ZoneDistributed'] = $this->zoneDistributed;
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
        if (isset($map['ClientPort'])) {
            $model->clientPort = $map['ClientPort'];
        }

        if (isset($map['CreationTimestamp'])) {
            $model->creationTimestamp = $map['CreationTimestamp'];
        }

        if (isset($map['HealthStatus'])) {
            $model->healthStatus = $map['HealthStatus'];
        }

        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }

        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        if (isset($map['PodName'])) {
            $model->podName = $map['PodName'];
        }

        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }

        if (isset($map['SingleTunnelVip'])) {
            $model->singleTunnelVip = $map['SingleTunnelVip'];
        }

        if (isset($map['Zone'])) {
            $model->zone = $map['Zone'];
        }

        if (isset($map['ZoneDistributed'])) {
            $model->zoneDistributed = $map['ZoneDistributed'];
        }

        return $model;
    }
}

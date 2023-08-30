<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\QueryInstancesInfoResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The enabled port.
     *
     * @example 8848
     *
     * @var string
     */
    public $clientPort;

    /**
     * @description The creation time. The value of this parameter is a timestamp.
     *
     * @example 2022-12-15T02:02:15Z
     *
     * @var string
     */
    public $creationTimestamp;

    /**
     * @description A reserved parameter.
     *
     * @example null
     *
     * @var string
     */
    public $healthStatus;

    /**
     * @description The public IP address.
     *
     * @example 120.55.71.x
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description The IP address of the pod.
     *
     * @example 25.24.91.x
     *
     * @var string
     */
    public $ip;

    /**
     * @description The pod name.
     *
     * @example mse-xxxxx-xxxxx-reg-center-0-1
     *
     * @var string
     */
    public $podName;

    /**
     * @description A reserved parameter.
     *
     * @example null
     *
     * @var string
     */
    public $role;

    /**
     * @description The internal IP address.
     *
     * @example 172.16.66.x
     *
     * @var string
     */
    public $singleTunnelVip;

    /**
     * @description The zone.
     *
     * @example cn-hangzhou-k
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\QueryClusterInfoResponseBody\data;

use AlibabaCloud\Tea\Model;

class instanceModels extends Model
{
    /**
     * @description A reserved parameter.
     *
     * @example null
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
     * @description A reserved parameter.
     *
     * @example null
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description A reserved parameter.
     *
     * @example null
     *
     * @var string
     */
    public $ip;

    /**
     * @description A reserved parameter.
     *
     * @example null
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
     * @description A reserved parameter.
     *
     * @example null
     *
     * @var string
     */
    public $singleTunnelVip;

    /**
     * @description A reserved parameter.
     *
     * @example null
     *
     * @var string
     */
    public $zone;
    protected $_name = [
        'creationTimestamp' => 'CreationTimestamp',
        'healthStatus'      => 'HealthStatus',
        'internetIp'        => 'InternetIp',
        'ip'                => 'Ip',
        'podName'           => 'PodName',
        'role'              => 'Role',
        'singleTunnelVip'   => 'SingleTunnelVip',
        'zone'              => 'Zone',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceModels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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

        return $model;
    }
}

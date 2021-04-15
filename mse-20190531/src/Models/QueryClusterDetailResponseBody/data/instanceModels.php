<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\QueryClusterDetailResponseBody\data;

use AlibabaCloud\Tea\Model;

class instanceModels extends Model
{
    /**
     * @var string
     */
    public $podName;

    /**
     * @var string
     */
    public $singleTunnelVip;

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
    public $role;

    /**
     * @var string
     */
    public $healthStatus;
    protected $_name = [
        'podName'         => 'PodName',
        'singleTunnelVip' => 'SingleTunnelVip',
        'internetIp'      => 'InternetIp',
        'ip'              => 'Ip',
        'role'            => 'Role',
        'healthStatus'    => 'HealthStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->podName) {
            $res['PodName'] = $this->podName;
        }
        if (null !== $this->singleTunnelVip) {
            $res['SingleTunnelVip'] = $this->singleTunnelVip;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->healthStatus) {
            $res['HealthStatus'] = $this->healthStatus;
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
        if (isset($map['PodName'])) {
            $model->podName = $map['PodName'];
        }
        if (isset($map['SingleTunnelVip'])) {
            $model->singleTunnelVip = $map['SingleTunnelVip'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['HealthStatus'])) {
            $model->healthStatus = $map['HealthStatus'];
        }

        return $model;
    }
}

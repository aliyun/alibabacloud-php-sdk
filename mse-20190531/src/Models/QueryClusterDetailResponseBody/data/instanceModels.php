<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\QueryClusterDetailResponseBody\data;

use AlibabaCloud\Tea\Model;

class instanceModels extends Model
{
    /**
     * @description The timestamp when the node was created.
     *
     * @example 1578575377732
     *
     * @var string
     */
    public $creationTimestamp;

    /**
     * @description The health status of the node.
     *
     * @example Running
     *
     * @var string
     */
    public $healthStatus;

    /**
     * @description The public IP address.
     *
     * @example 47.98.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description The IP address of the node.
     *
     * @example 10.12.XX.XX
     *
     * @var string
     */
    public $ip;

    /**
     * @description The name of the pod.
     *
     * @example mse-7413****-159616656****-reg-center-0-0
     *
     * @var string
     */
    public $podName;

    /**
     * @description The role of the node.
     *
     * @example Peer
     *
     * @var string
     */
    public $role;

    /**
     * @description The single-thread IP address.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $singleTunnelVip;

    /**
     * @example cn-shanghai-f
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

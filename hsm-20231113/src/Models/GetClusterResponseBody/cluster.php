<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hsm\V20231113\Models\GetClusterResponseBody;

use AlibabaCloud\SDK\Hsm\V20231113\Models\GetClusterResponseBody\cluster\instances;
use AlibabaCloud\SDK\Hsm\V20231113\Models\GetClusterResponseBody\cluster\zones;
use AlibabaCloud\Tea\Model;

class cluster extends Model
{
    /**
     * @example -----BEGIN CERTIFICATE-----
     * BAYTAmNuMQswCQYDVQQIDAJ6ajELMAkGA1UEBwwCaHoxFjAUBgNVBAoMDUFsaWJh
     * YmEgQ2xvdWQxFDA****
     * -----END CERTIFICATE-----
     * @var string
     */
    public $clusterCertificate;

    /**
     * @example -----BEGIN CERTIFICATE REQUEST-----\\nMIIC5TCCAc0CAQAwgZ8xWTAJBgNVBAYTAlVTMAkGA1UECAwCQ0EwDQYDVQQKDAZD\\nYXZpdW0wDQYDVQQLDAZOM0ZJUFMwDgYDVQQHDAdTYW5Kb3NlMBMGA1UdEQwMMTk****
     * -----END CERTIFICATE REQUEST-----
     * @var string
     */
    public $clusterCsr;

    /**
     * @example cluster-p94y1dud9ts****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example cluster_polar_****
     *
     * @var string
     */
    public $clusterName;

    /**
     * @example ----BEGIN CERTIFICATE-----
     * BAgMAnpqMQswCQYDVQQHDAJoejEWMBQGA1UECgwNQWxpYmFiYSBDbG91ZDEUMBIG
     * A1UECwwLU2VjQ2xvdWRIc20wHhcNMjQwNzAzM****
     * -----END CERTIFICATE-----
     * @var string
     */
    public $clusterOwnerCertificate;

    /**
     * @example 1641275680000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example jnta
     *
     * @var string
     */
    public $deviceType;

    /**
     * @var instances[]
     */
    public $instances;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 2
     *
     * @var int
     */
    public $size;

    /**
     * @example NEW
     *
     * @var string
     */
    public $status;

    /**
     * @example vpc-8vbt0fjdm29hofvbo****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @example 130.176.XX.XX
     *
     * @var string
     */
    public $whitelist;

    /**
     * @var zones[]
     */
    public $zones;
    protected $_name = [
        'clusterCertificate'      => 'ClusterCertificate',
        'clusterCsr'              => 'ClusterCsr',
        'clusterId'               => 'ClusterId',
        'clusterName'             => 'ClusterName',
        'clusterOwnerCertificate' => 'ClusterOwnerCertificate',
        'createTime'              => 'CreateTime',
        'deviceType'              => 'DeviceType',
        'instances'               => 'Instances',
        'regionId'                => 'RegionId',
        'size'                    => 'Size',
        'status'                  => 'Status',
        'vpcId'                   => 'VpcId',
        'whitelist'               => 'Whitelist',
        'zones'                   => 'Zones',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterCertificate) {
            $res['ClusterCertificate'] = $this->clusterCertificate;
        }
        if (null !== $this->clusterCsr) {
            $res['ClusterCsr'] = $this->clusterCsr;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->clusterOwnerCertificate) {
            $res['ClusterOwnerCertificate'] = $this->clusterOwnerCertificate;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
        }
        if (null !== $this->instances) {
            $res['Instances'] = [];
            if (null !== $this->instances && \is_array($this->instances)) {
                $n = 0;
                foreach ($this->instances as $item) {
                    $res['Instances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->whitelist) {
            $res['Whitelist'] = $this->whitelist;
        }
        if (null !== $this->zones) {
            $res['Zones'] = [];
            if (null !== $this->zones && \is_array($this->zones)) {
                $n = 0;
                foreach ($this->zones as $item) {
                    $res['Zones'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cluster
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterCertificate'])) {
            $model->clusterCertificate = $map['ClusterCertificate'];
        }
        if (isset($map['ClusterCsr'])) {
            $model->clusterCsr = $map['ClusterCsr'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['ClusterOwnerCertificate'])) {
            $model->clusterOwnerCertificate = $map['ClusterOwnerCertificate'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
        }
        if (isset($map['Instances'])) {
            if (!empty($map['Instances'])) {
                $model->instances = [];
                $n                = 0;
                foreach ($map['Instances'] as $item) {
                    $model->instances[$n++] = null !== $item ? instances::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['Whitelist'])) {
            $model->whitelist = $map['Whitelist'];
        }
        if (isset($map['Zones'])) {
            if (!empty($map['Zones'])) {
                $model->zones = [];
                $n            = 0;
                foreach ($map['Zones'] as $item) {
                    $model->zones[$n++] = null !== $item ? zones::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

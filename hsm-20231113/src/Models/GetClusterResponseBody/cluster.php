<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hsm\V20231113\Models\GetClusterResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hsm\V20231113\Models\GetClusterResponseBody\cluster\instances;
use AlibabaCloud\SDK\Hsm\V20231113\Models\GetClusterResponseBody\cluster\zones;

class cluster extends Model
{
    /**
     * @var bool
     */
    public $certManaged;

    /**
     * @var string
     */
    public $clusterCertificate;

    /**
     * @var string
     */
    public $clusterCsr;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var int
     */
    public $clusterMode;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var string
     */
    public $clusterOwnerCertificate;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $deviceType;

    /**
     * @var string
     */
    public $entityCertExpireTime;

    /**
     * @var instances[]
     */
    public $instances;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $whitelist;

    /**
     * @var zones[]
     */
    public $zones;
    protected $_name = [
        'certManaged' => 'CertManaged',
        'clusterCertificate' => 'ClusterCertificate',
        'clusterCsr' => 'ClusterCsr',
        'clusterId' => 'ClusterId',
        'clusterMode' => 'ClusterMode',
        'clusterName' => 'ClusterName',
        'clusterOwnerCertificate' => 'ClusterOwnerCertificate',
        'createTime' => 'CreateTime',
        'deviceType' => 'DeviceType',
        'entityCertExpireTime' => 'EntityCertExpireTime',
        'instances' => 'Instances',
        'regionId' => 'RegionId',
        'size' => 'Size',
        'status' => 'Status',
        'vpcId' => 'VpcId',
        'whitelist' => 'Whitelist',
        'zones' => 'Zones',
    ];

    public function validate()
    {
        if (\is_array($this->instances)) {
            Model::validateArray($this->instances);
        }
        if (\is_array($this->zones)) {
            Model::validateArray($this->zones);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certManaged) {
            $res['CertManaged'] = $this->certManaged;
        }

        if (null !== $this->clusterCertificate) {
            $res['ClusterCertificate'] = $this->clusterCertificate;
        }

        if (null !== $this->clusterCsr) {
            $res['ClusterCsr'] = $this->clusterCsr;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->clusterMode) {
            $res['ClusterMode'] = $this->clusterMode;
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

        if (null !== $this->entityCertExpireTime) {
            $res['EntityCertExpireTime'] = $this->entityCertExpireTime;
        }

        if (null !== $this->instances) {
            if (\is_array($this->instances)) {
                $res['Instances'] = [];
                $n1 = 0;
                foreach ($this->instances as $item1) {
                    $res['Instances'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->zones)) {
                $res['Zones'] = [];
                $n1 = 0;
                foreach ($this->zones as $item1) {
                    $res['Zones'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['CertManaged'])) {
            $model->certManaged = $map['CertManaged'];
        }

        if (isset($map['ClusterCertificate'])) {
            $model->clusterCertificate = $map['ClusterCertificate'];
        }

        if (isset($map['ClusterCsr'])) {
            $model->clusterCsr = $map['ClusterCsr'];
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['ClusterMode'])) {
            $model->clusterMode = $map['ClusterMode'];
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

        if (isset($map['EntityCertExpireTime'])) {
            $model->entityCertExpireTime = $map['EntityCertExpireTime'];
        }

        if (isset($map['Instances'])) {
            if (!empty($map['Instances'])) {
                $model->instances = [];
                $n1 = 0;
                foreach ($map['Instances'] as $item1) {
                    $model->instances[$n1] = instances::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['Zones'] as $item1) {
                    $model->zones[$n1] = zones::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

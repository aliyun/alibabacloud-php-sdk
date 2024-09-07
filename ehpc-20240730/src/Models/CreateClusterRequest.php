<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\SDK\EHPC\V20240730\Models\CreateClusterRequest\additionalPackages;
use AlibabaCloud\SDK\EHPC\V20240730\Models\CreateClusterRequest\addons;
use AlibabaCloud\SDK\EHPC\V20240730\Models\CreateClusterRequest\clusterCredentials;
use AlibabaCloud\SDK\EHPC\V20240730\Models\CreateClusterRequest\clusterCustomConfiguration;
use AlibabaCloud\SDK\EHPC\V20240730\Models\CreateClusterRequest\manager;
use AlibabaCloud\SDK\EHPC\V20240730\Models\CreateClusterRequest\tags;
use AlibabaCloud\Tea\Model;

class CreateClusterRequest extends Model
{
    /**
     * @var additionalPackages[]
     */
    public $additionalPackages;

    /**
     * @var addons[]
     */
    public $addons;

    /**
     * @example 2.1.0
     *
     * @var string
     */
    public $clientVersion;

    /**
     * @example Standard
     *
     * @var string
     */
    public $clusterCategory;

    /**
     * @var clusterCredentials
     */
    public $clusterCredentials;

    /**
     * @var clusterCustomConfiguration
     */
    public $clusterCustomConfiguration;

    /**
     * @example slurm22.05.8-cluster-20240718
     *
     * @var string
     */
    public $clusterDescription;

    /**
     * @example Integrated
     *
     * @var string
     */
    public $clusterMode;

    /**
     * @example slurm22.05.8-cluster-20240718
     *
     * @var string
     */
    public $clusterName;

    /**
     * @example vsw-f8za5p0mwzgdu3wgx****
     *
     * @var string
     */
    public $clusterVSwitchId;

    /**
     * @example vpc-m5efjevmclc0xdmys****
     *
     * @var string
     */
    public $clusterVpcId;

    /**
     * @example false
     *
     * @var bool
     */
    public $deletionProtection;

    /**
     * @example false
     *
     * @var bool
     */
    public $isEnterpriseSecurityGroup;

    /**
     * @var manager
     */
    public $manager;

    /**
     * @example 10000
     *
     * @var int
     */
    public $maxCoreCount;

    /**
     * @example 500
     *
     * @var int
     */
    public $maxCount;

    /**
     * @var QueueTemplate[]
     */
    public $queues;

    /**
     * @example rg-acfmxazb4******
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example sg-bp13n61xsydodfyg****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @var SharedStorageTemplate[]
     */
    public $sharedStorages;

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'additionalPackages'         => 'AdditionalPackages',
        'addons'                     => 'Addons',
        'clientVersion'              => 'ClientVersion',
        'clusterCategory'            => 'ClusterCategory',
        'clusterCredentials'         => 'ClusterCredentials',
        'clusterCustomConfiguration' => 'ClusterCustomConfiguration',
        'clusterDescription'         => 'ClusterDescription',
        'clusterMode'                => 'ClusterMode',
        'clusterName'                => 'ClusterName',
        'clusterVSwitchId'           => 'ClusterVSwitchId',
        'clusterVpcId'               => 'ClusterVpcId',
        'deletionProtection'         => 'DeletionProtection',
        'isEnterpriseSecurityGroup'  => 'IsEnterpriseSecurityGroup',
        'manager'                    => 'Manager',
        'maxCoreCount'               => 'MaxCoreCount',
        'maxCount'                   => 'MaxCount',
        'queues'                     => 'Queues',
        'resourceGroupId'            => 'ResourceGroupId',
        'securityGroupId'            => 'SecurityGroupId',
        'sharedStorages'             => 'SharedStorages',
        'tags'                       => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->additionalPackages) {
            $res['AdditionalPackages'] = [];
            if (null !== $this->additionalPackages && \is_array($this->additionalPackages)) {
                $n = 0;
                foreach ($this->additionalPackages as $item) {
                    $res['AdditionalPackages'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->addons) {
            $res['Addons'] = [];
            if (null !== $this->addons && \is_array($this->addons)) {
                $n = 0;
                foreach ($this->addons as $item) {
                    $res['Addons'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->clientVersion) {
            $res['ClientVersion'] = $this->clientVersion;
        }
        if (null !== $this->clusterCategory) {
            $res['ClusterCategory'] = $this->clusterCategory;
        }
        if (null !== $this->clusterCredentials) {
            $res['ClusterCredentials'] = null !== $this->clusterCredentials ? $this->clusterCredentials->toMap() : null;
        }
        if (null !== $this->clusterCustomConfiguration) {
            $res['ClusterCustomConfiguration'] = null !== $this->clusterCustomConfiguration ? $this->clusterCustomConfiguration->toMap() : null;
        }
        if (null !== $this->clusterDescription) {
            $res['ClusterDescription'] = $this->clusterDescription;
        }
        if (null !== $this->clusterMode) {
            $res['ClusterMode'] = $this->clusterMode;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->clusterVSwitchId) {
            $res['ClusterVSwitchId'] = $this->clusterVSwitchId;
        }
        if (null !== $this->clusterVpcId) {
            $res['ClusterVpcId'] = $this->clusterVpcId;
        }
        if (null !== $this->deletionProtection) {
            $res['DeletionProtection'] = $this->deletionProtection;
        }
        if (null !== $this->isEnterpriseSecurityGroup) {
            $res['IsEnterpriseSecurityGroup'] = $this->isEnterpriseSecurityGroup;
        }
        if (null !== $this->manager) {
            $res['Manager'] = null !== $this->manager ? $this->manager->toMap() : null;
        }
        if (null !== $this->maxCoreCount) {
            $res['MaxCoreCount'] = $this->maxCoreCount;
        }
        if (null !== $this->maxCount) {
            $res['MaxCount'] = $this->maxCount;
        }
        if (null !== $this->queues) {
            $res['Queues'] = [];
            if (null !== $this->queues && \is_array($this->queues)) {
                $n = 0;
                foreach ($this->queues as $item) {
                    $res['Queues'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->sharedStorages) {
            $res['SharedStorages'] = [];
            if (null !== $this->sharedStorages && \is_array($this->sharedStorages)) {
                $n = 0;
                foreach ($this->sharedStorages as $item) {
                    $res['SharedStorages'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdditionalPackages'])) {
            if (!empty($map['AdditionalPackages'])) {
                $model->additionalPackages = [];
                $n                         = 0;
                foreach ($map['AdditionalPackages'] as $item) {
                    $model->additionalPackages[$n++] = null !== $item ? additionalPackages::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Addons'])) {
            if (!empty($map['Addons'])) {
                $model->addons = [];
                $n             = 0;
                foreach ($map['Addons'] as $item) {
                    $model->addons[$n++] = null !== $item ? addons::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ClientVersion'])) {
            $model->clientVersion = $map['ClientVersion'];
        }
        if (isset($map['ClusterCategory'])) {
            $model->clusterCategory = $map['ClusterCategory'];
        }
        if (isset($map['ClusterCredentials'])) {
            $model->clusterCredentials = clusterCredentials::fromMap($map['ClusterCredentials']);
        }
        if (isset($map['ClusterCustomConfiguration'])) {
            $model->clusterCustomConfiguration = clusterCustomConfiguration::fromMap($map['ClusterCustomConfiguration']);
        }
        if (isset($map['ClusterDescription'])) {
            $model->clusterDescription = $map['ClusterDescription'];
        }
        if (isset($map['ClusterMode'])) {
            $model->clusterMode = $map['ClusterMode'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['ClusterVSwitchId'])) {
            $model->clusterVSwitchId = $map['ClusterVSwitchId'];
        }
        if (isset($map['ClusterVpcId'])) {
            $model->clusterVpcId = $map['ClusterVpcId'];
        }
        if (isset($map['DeletionProtection'])) {
            $model->deletionProtection = $map['DeletionProtection'];
        }
        if (isset($map['IsEnterpriseSecurityGroup'])) {
            $model->isEnterpriseSecurityGroup = $map['IsEnterpriseSecurityGroup'];
        }
        if (isset($map['Manager'])) {
            $model->manager = manager::fromMap($map['Manager']);
        }
        if (isset($map['MaxCoreCount'])) {
            $model->maxCoreCount = $map['MaxCoreCount'];
        }
        if (isset($map['MaxCount'])) {
            $model->maxCount = $map['MaxCount'];
        }
        if (isset($map['Queues'])) {
            if (!empty($map['Queues'])) {
                $model->queues = [];
                $n             = 0;
                foreach ($map['Queues'] as $item) {
                    $model->queues[$n++] = null !== $item ? QueueTemplate::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['SharedStorages'])) {
            if (!empty($map['SharedStorages'])) {
                $model->sharedStorages = [];
                $n                     = 0;
                foreach ($map['SharedStorages'] as $item) {
                    $model->sharedStorages[$n++] = null !== $item ? SharedStorageTemplate::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

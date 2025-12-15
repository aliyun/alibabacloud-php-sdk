<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20240730\Models\CreateClusterRequest\additionalPackages;
use AlibabaCloud\SDK\EHPC\V20240730\Models\CreateClusterRequest\addons;
use AlibabaCloud\SDK\EHPC\V20240730\Models\CreateClusterRequest\clusterCredentials;
use AlibabaCloud\SDK\EHPC\V20240730\Models\CreateClusterRequest\clusterCustomConfiguration;
use AlibabaCloud\SDK\EHPC\V20240730\Models\CreateClusterRequest\manager;
use AlibabaCloud\SDK\EHPC\V20240730\Models\CreateClusterRequest\tags;

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
     * @var string
     */
    public $clientVersion;

    /**
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
     * @var string
     */
    public $clusterDescription;

    /**
     * @var string
     */
    public $clusterMode;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var string
     */
    public $clusterVSwitchId;

    /**
     * @var string
     */
    public $clusterVpcId;

    /**
     * @var bool
     */
    public $deletionProtection;

    /**
     * @var bool
     */
    public $isEnterpriseSecurityGroup;

    /**
     * @var manager
     */
    public $manager;

    /**
     * @var int
     */
    public $maxCoreCount;

    /**
     * @var int
     */
    public $maxCount;

    /**
     * @var QueueTemplate[]
     */
    public $queues;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
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
        'additionalPackages' => 'AdditionalPackages',
        'addons' => 'Addons',
        'clientVersion' => 'ClientVersion',
        'clusterCategory' => 'ClusterCategory',
        'clusterCredentials' => 'ClusterCredentials',
        'clusterCustomConfiguration' => 'ClusterCustomConfiguration',
        'clusterDescription' => 'ClusterDescription',
        'clusterMode' => 'ClusterMode',
        'clusterName' => 'ClusterName',
        'clusterVSwitchId' => 'ClusterVSwitchId',
        'clusterVpcId' => 'ClusterVpcId',
        'deletionProtection' => 'DeletionProtection',
        'isEnterpriseSecurityGroup' => 'IsEnterpriseSecurityGroup',
        'manager' => 'Manager',
        'maxCoreCount' => 'MaxCoreCount',
        'maxCount' => 'MaxCount',
        'queues' => 'Queues',
        'resourceGroupId' => 'ResourceGroupId',
        'securityGroupId' => 'SecurityGroupId',
        'sharedStorages' => 'SharedStorages',
        'tags' => 'Tags',
    ];

    public function validate()
    {
        if (\is_array($this->additionalPackages)) {
            Model::validateArray($this->additionalPackages);
        }
        if (\is_array($this->addons)) {
            Model::validateArray($this->addons);
        }
        if (null !== $this->clusterCredentials) {
            $this->clusterCredentials->validate();
        }
        if (null !== $this->clusterCustomConfiguration) {
            $this->clusterCustomConfiguration->validate();
        }
        if (null !== $this->manager) {
            $this->manager->validate();
        }
        if (\is_array($this->queues)) {
            Model::validateArray($this->queues);
        }
        if (\is_array($this->sharedStorages)) {
            Model::validateArray($this->sharedStorages);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->additionalPackages) {
            if (\is_array($this->additionalPackages)) {
                $res['AdditionalPackages'] = [];
                $n1 = 0;
                foreach ($this->additionalPackages as $item1) {
                    $res['AdditionalPackages'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->addons) {
            if (\is_array($this->addons)) {
                $res['Addons'] = [];
                $n1 = 0;
                foreach ($this->addons as $item1) {
                    $res['Addons'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            $res['ClusterCredentials'] = null !== $this->clusterCredentials ? $this->clusterCredentials->toArray($noStream) : $this->clusterCredentials;
        }

        if (null !== $this->clusterCustomConfiguration) {
            $res['ClusterCustomConfiguration'] = null !== $this->clusterCustomConfiguration ? $this->clusterCustomConfiguration->toArray($noStream) : $this->clusterCustomConfiguration;
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
            $res['Manager'] = null !== $this->manager ? $this->manager->toArray($noStream) : $this->manager;
        }

        if (null !== $this->maxCoreCount) {
            $res['MaxCoreCount'] = $this->maxCoreCount;
        }

        if (null !== $this->maxCount) {
            $res['MaxCount'] = $this->maxCount;
        }

        if (null !== $this->queues) {
            if (\is_array($this->queues)) {
                $res['Queues'] = [];
                $n1 = 0;
                foreach ($this->queues as $item1) {
                    $res['Queues'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->sharedStorages)) {
                $res['SharedStorages'] = [];
                $n1 = 0;
                foreach ($this->sharedStorages as $item1) {
                    $res['SharedStorages'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AdditionalPackages'])) {
            if (!empty($map['AdditionalPackages'])) {
                $model->additionalPackages = [];
                $n1 = 0;
                foreach ($map['AdditionalPackages'] as $item1) {
                    $model->additionalPackages[$n1] = additionalPackages::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Addons'])) {
            if (!empty($map['Addons'])) {
                $model->addons = [];
                $n1 = 0;
                foreach ($map['Addons'] as $item1) {
                    $model->addons[$n1] = addons::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['Queues'] as $item1) {
                    $model->queues[$n1] = QueueTemplate::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['SharedStorages'] as $item1) {
                    $model->sharedStorages[$n1] = SharedStorageTemplate::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

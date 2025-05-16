<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\ListClustersResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListClustersResponseBody\clusters\additionalPackages;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListClustersResponseBody\clusters\addons;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListClustersResponseBody\clusters\clusterCustomConfiguration;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListClustersResponseBody\clusters\manager;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListClustersResponseBody\clusters\nodes;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListClustersResponseBody\clusters\users;

class clusters extends Model
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
    public $clusterCategory;

    /**
     * @var string
     */
    public $clusterCreateTime;

    /**
     * @var string[]
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
    public $clusterId;

    /**
     * @var string
     */
    public $clusterMode;

    /**
     * @var string
     */
    public $clusterModifyTime;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var string
     */
    public $clusterStatus;

    /**
     * @var float
     */
    public $clusterUsedCoreTime;

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
     * @var string
     */
    public $ehpcVersion;

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
     * @var nodes
     */
    public $nodes;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var users
     */
    public $users;
    protected $_name = [
        'additionalPackages' => 'AdditionalPackages',
        'addons' => 'Addons',
        'clusterCategory' => 'ClusterCategory',
        'clusterCreateTime' => 'ClusterCreateTime',
        'clusterCredentials' => 'ClusterCredentials',
        'clusterCustomConfiguration' => 'ClusterCustomConfiguration',
        'clusterDescription' => 'ClusterDescription',
        'clusterId' => 'ClusterId',
        'clusterMode' => 'ClusterMode',
        'clusterModifyTime' => 'ClusterModifyTime',
        'clusterName' => 'ClusterName',
        'clusterStatus' => 'ClusterStatus',
        'clusterUsedCoreTime' => 'ClusterUsedCoreTime',
        'clusterVSwitchId' => 'ClusterVSwitchId',
        'clusterVpcId' => 'ClusterVpcId',
        'deletionProtection' => 'DeletionProtection',
        'ehpcVersion' => 'EhpcVersion',
        'manager' => 'Manager',
        'maxCoreCount' => 'MaxCoreCount',
        'maxCount' => 'MaxCount',
        'nodes' => 'Nodes',
        'resourceGroupId' => 'ResourceGroupId',
        'securityGroupId' => 'SecurityGroupId',
        'users' => 'Users',
    ];

    public function validate()
    {
        if (\is_array($this->additionalPackages)) {
            Model::validateArray($this->additionalPackages);
        }
        if (\is_array($this->addons)) {
            Model::validateArray($this->addons);
        }
        if (\is_array($this->clusterCredentials)) {
            Model::validateArray($this->clusterCredentials);
        }
        if (null !== $this->clusterCustomConfiguration) {
            $this->clusterCustomConfiguration->validate();
        }
        if (null !== $this->manager) {
            $this->manager->validate();
        }
        if (null !== $this->nodes) {
            $this->nodes->validate();
        }
        if (null !== $this->users) {
            $this->users->validate();
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
                    $res['AdditionalPackages'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->addons) {
            if (\is_array($this->addons)) {
                $res['Addons'] = [];
                $n1 = 0;
                foreach ($this->addons as $item1) {
                    $res['Addons'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->clusterCategory) {
            $res['ClusterCategory'] = $this->clusterCategory;
        }

        if (null !== $this->clusterCreateTime) {
            $res['ClusterCreateTime'] = $this->clusterCreateTime;
        }

        if (null !== $this->clusterCredentials) {
            if (\is_array($this->clusterCredentials)) {
                $res['ClusterCredentials'] = [];
                $n1 = 0;
                foreach ($this->clusterCredentials as $item1) {
                    $res['ClusterCredentials'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->clusterCustomConfiguration) {
            $res['ClusterCustomConfiguration'] = null !== $this->clusterCustomConfiguration ? $this->clusterCustomConfiguration->toArray($noStream) : $this->clusterCustomConfiguration;
        }

        if (null !== $this->clusterDescription) {
            $res['ClusterDescription'] = $this->clusterDescription;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->clusterMode) {
            $res['ClusterMode'] = $this->clusterMode;
        }

        if (null !== $this->clusterModifyTime) {
            $res['ClusterModifyTime'] = $this->clusterModifyTime;
        }

        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }

        if (null !== $this->clusterStatus) {
            $res['ClusterStatus'] = $this->clusterStatus;
        }

        if (null !== $this->clusterUsedCoreTime) {
            $res['ClusterUsedCoreTime'] = $this->clusterUsedCoreTime;
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

        if (null !== $this->ehpcVersion) {
            $res['EhpcVersion'] = $this->ehpcVersion;
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

        if (null !== $this->nodes) {
            $res['Nodes'] = null !== $this->nodes ? $this->nodes->toArray($noStream) : $this->nodes;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }

        if (null !== $this->users) {
            $res['Users'] = null !== $this->users ? $this->users->toArray($noStream) : $this->users;
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
                    $model->additionalPackages[$n1++] = additionalPackages::fromMap($item1);
                }
            }
        }

        if (isset($map['Addons'])) {
            if (!empty($map['Addons'])) {
                $model->addons = [];
                $n1 = 0;
                foreach ($map['Addons'] as $item1) {
                    $model->addons[$n1++] = addons::fromMap($item1);
                }
            }
        }

        if (isset($map['ClusterCategory'])) {
            $model->clusterCategory = $map['ClusterCategory'];
        }

        if (isset($map['ClusterCreateTime'])) {
            $model->clusterCreateTime = $map['ClusterCreateTime'];
        }

        if (isset($map['ClusterCredentials'])) {
            if (!empty($map['ClusterCredentials'])) {
                $model->clusterCredentials = [];
                $n1 = 0;
                foreach ($map['ClusterCredentials'] as $item1) {
                    $model->clusterCredentials[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ClusterCustomConfiguration'])) {
            $model->clusterCustomConfiguration = clusterCustomConfiguration::fromMap($map['ClusterCustomConfiguration']);
        }

        if (isset($map['ClusterDescription'])) {
            $model->clusterDescription = $map['ClusterDescription'];
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['ClusterMode'])) {
            $model->clusterMode = $map['ClusterMode'];
        }

        if (isset($map['ClusterModifyTime'])) {
            $model->clusterModifyTime = $map['ClusterModifyTime'];
        }

        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }

        if (isset($map['ClusterStatus'])) {
            $model->clusterStatus = $map['ClusterStatus'];
        }

        if (isset($map['ClusterUsedCoreTime'])) {
            $model->clusterUsedCoreTime = $map['ClusterUsedCoreTime'];
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

        if (isset($map['EhpcVersion'])) {
            $model->ehpcVersion = $map['EhpcVersion'];
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

        if (isset($map['Nodes'])) {
            $model->nodes = nodes::fromMap($map['Nodes']);
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }

        if (isset($map['Users'])) {
            $model->users = users::fromMap($map['Users']);
        }

        return $model;
    }
}

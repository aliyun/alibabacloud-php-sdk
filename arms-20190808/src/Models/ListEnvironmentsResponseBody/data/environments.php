<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvironmentsResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvironmentsResponseBody\data\environments\addons;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvironmentsResponseBody\data\environments\features;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvironmentsResponseBody\data\environments\tags;

class environments extends Model
{
    /**
     * @var addons[]
     */
    public $addons;

    /**
     * @var string
     */
    public $bindResourceId;

    /**
     * @var string
     */
    public $bindResourceProfile;

    /**
     * @var string
     */
    public $bindResourceType;

    /**
     * @var string
     */
    public $bindVpcCidr;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $createdUserId;

    /**
     * @var string
     */
    public $environmentId;

    /**
     * @var string
     */
    public $environmentName;

    /**
     * @var string
     */
    public $environmentType;

    /**
     * @var features[]
     */
    public $features;

    /**
     * @var string
     */
    public $feePackage;

    /**
     * @var string
     */
    public $grafanaDatasourceUid;

    /**
     * @var string
     */
    public $grafanaFolderTitle;

    /**
     * @var string
     */
    public $grafanaFolderUid;

    /**
     * @var string
     */
    public $latestReleaseCreateTime;

    /**
     * @var string
     */
    public $managedType;

    /**
     * @var int
     */
    public $prometheusId;

    /**
     * @var string
     */
    public $prometheusInstanceId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $releaseCount;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'addons' => 'Addons',
        'bindResourceId' => 'BindResourceId',
        'bindResourceProfile' => 'BindResourceProfile',
        'bindResourceType' => 'BindResourceType',
        'bindVpcCidr' => 'BindVpcCidr',
        'createTime' => 'CreateTime',
        'createdUserId' => 'CreatedUserId',
        'environmentId' => 'EnvironmentId',
        'environmentName' => 'EnvironmentName',
        'environmentType' => 'EnvironmentType',
        'features' => 'Features',
        'feePackage' => 'FeePackage',
        'grafanaDatasourceUid' => 'GrafanaDatasourceUid',
        'grafanaFolderTitle' => 'GrafanaFolderTitle',
        'grafanaFolderUid' => 'GrafanaFolderUid',
        'latestReleaseCreateTime' => 'LatestReleaseCreateTime',
        'managedType' => 'ManagedType',
        'prometheusId' => 'PrometheusId',
        'prometheusInstanceId' => 'PrometheusInstanceId',
        'regionId' => 'RegionId',
        'releaseCount' => 'ReleaseCount',
        'resourceGroupId' => 'ResourceGroupId',
        'tags' => 'Tags',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        if (\is_array($this->addons)) {
            Model::validateArray($this->addons);
        }
        if (\is_array($this->features)) {
            Model::validateArray($this->features);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->bindResourceId) {
            $res['BindResourceId'] = $this->bindResourceId;
        }

        if (null !== $this->bindResourceProfile) {
            $res['BindResourceProfile'] = $this->bindResourceProfile;
        }

        if (null !== $this->bindResourceType) {
            $res['BindResourceType'] = $this->bindResourceType;
        }

        if (null !== $this->bindVpcCidr) {
            $res['BindVpcCidr'] = $this->bindVpcCidr;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->createdUserId) {
            $res['CreatedUserId'] = $this->createdUserId;
        }

        if (null !== $this->environmentId) {
            $res['EnvironmentId'] = $this->environmentId;
        }

        if (null !== $this->environmentName) {
            $res['EnvironmentName'] = $this->environmentName;
        }

        if (null !== $this->environmentType) {
            $res['EnvironmentType'] = $this->environmentType;
        }

        if (null !== $this->features) {
            if (\is_array($this->features)) {
                $res['Features'] = [];
                $n1 = 0;
                foreach ($this->features as $item1) {
                    $res['Features'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->feePackage) {
            $res['FeePackage'] = $this->feePackage;
        }

        if (null !== $this->grafanaDatasourceUid) {
            $res['GrafanaDatasourceUid'] = $this->grafanaDatasourceUid;
        }

        if (null !== $this->grafanaFolderTitle) {
            $res['GrafanaFolderTitle'] = $this->grafanaFolderTitle;
        }

        if (null !== $this->grafanaFolderUid) {
            $res['GrafanaFolderUid'] = $this->grafanaFolderUid;
        }

        if (null !== $this->latestReleaseCreateTime) {
            $res['LatestReleaseCreateTime'] = $this->latestReleaseCreateTime;
        }

        if (null !== $this->managedType) {
            $res['ManagedType'] = $this->managedType;
        }

        if (null !== $this->prometheusId) {
            $res['PrometheusId'] = $this->prometheusId;
        }

        if (null !== $this->prometheusInstanceId) {
            $res['PrometheusInstanceId'] = $this->prometheusInstanceId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->releaseCount) {
            $res['ReleaseCount'] = $this->releaseCount;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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

        if (isset($map['BindResourceId'])) {
            $model->bindResourceId = $map['BindResourceId'];
        }

        if (isset($map['BindResourceProfile'])) {
            $model->bindResourceProfile = $map['BindResourceProfile'];
        }

        if (isset($map['BindResourceType'])) {
            $model->bindResourceType = $map['BindResourceType'];
        }

        if (isset($map['BindVpcCidr'])) {
            $model->bindVpcCidr = $map['BindVpcCidr'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CreatedUserId'])) {
            $model->createdUserId = $map['CreatedUserId'];
        }

        if (isset($map['EnvironmentId'])) {
            $model->environmentId = $map['EnvironmentId'];
        }

        if (isset($map['EnvironmentName'])) {
            $model->environmentName = $map['EnvironmentName'];
        }

        if (isset($map['EnvironmentType'])) {
            $model->environmentType = $map['EnvironmentType'];
        }

        if (isset($map['Features'])) {
            if (!empty($map['Features'])) {
                $model->features = [];
                $n1 = 0;
                foreach ($map['Features'] as $item1) {
                    $model->features[$n1] = features::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['FeePackage'])) {
            $model->feePackage = $map['FeePackage'];
        }

        if (isset($map['GrafanaDatasourceUid'])) {
            $model->grafanaDatasourceUid = $map['GrafanaDatasourceUid'];
        }

        if (isset($map['GrafanaFolderTitle'])) {
            $model->grafanaFolderTitle = $map['GrafanaFolderTitle'];
        }

        if (isset($map['GrafanaFolderUid'])) {
            $model->grafanaFolderUid = $map['GrafanaFolderUid'];
        }

        if (isset($map['LatestReleaseCreateTime'])) {
            $model->latestReleaseCreateTime = $map['LatestReleaseCreateTime'];
        }

        if (isset($map['ManagedType'])) {
            $model->managedType = $map['ManagedType'];
        }

        if (isset($map['PrometheusId'])) {
            $model->prometheusId = $map['PrometheusId'];
        }

        if (isset($map['PrometheusInstanceId'])) {
            $model->prometheusInstanceId = $map['PrometheusInstanceId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ReleaseCount'])) {
            $model->releaseCount = $map['ReleaseCount'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
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

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}

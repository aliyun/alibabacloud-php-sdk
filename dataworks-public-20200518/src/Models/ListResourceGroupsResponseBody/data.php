<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListResourceGroupsResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListResourceGroupsResponseBody\data\tags;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The category of the resource group. Valid values:
     *
     *   default: shared resource group
     *   single: exclusive resource group
     *
     * @example default
     *
     * @var string
     */
    public $bizExtKey;

    /**
     * @description The name of the cluster. This parameter is returned only if the type of the resource group is MaxCompute or PAI.
     *
     * @example AY18G
     *
     * @var string
     */
    public $cluster;

    /**
     * @description The time when the cluster was created. Example: Jul 9, 2018 02:43:37 PM.
     *
     * @example Jul 9, 2018 2:43:37 PM
     *
     * @var string
     */
    public $createTime;

    /**
     * @description Indicates whether the UID of an Alibaba Cloud account is used for access. Valid values:
     *
     *   true: The MaxCompute compute engine uses the UID of the Alibaba Cloud account as the display name of the account for access.
     *
     *   false: The MaxCompute compute engine uses the name of the Alibaba Cloud account as the display name of the account for access.
     *
     * The remaining values are useless. This parameter is returned only if the type of the resource group is MaxCompute.
     * @example false
     *
     * @var bool
     */
    public $enableKp;

    /**
     * @description The ID of the resource group.
     *
     * @example 1234567
     *
     * @var int
     */
    public $id;

    /**
     * @description The identifier of the resource group.
     *
     * @example e1815577-2f4e-4c5e-b29****
     *
     * @var string
     */
    public $identifier;

    /**
     * @description Indicates whether the resource group is the default resource group. Valid values:
     *
     *   true: The resource group is the default resource group.
     *   false: The resource group is not the default resource group.
     *
     * @example true
     *
     * @var bool
     */
    public $isDefault;

    /**
     * @description The mode of the resource group. Valid values:
     *
     *   ISOLATE: exclusive resource group that adopts the subscription billing method
     *   SHARE: shared resource group that adopts the pay-as-you-go billing method
     *   DEVELOP: resource group for developers
     *
     * @example SHARE
     *
     * @var string
     */
    public $mode;

    /**
     * @description The name of the resource group.
     *
     * @example abc
     *
     * @var string
     */
    public $name;

    /**
     * @description The type of the resource group. Valid values:
     *
     *   0: DataWorks
     *   2: MaxCompute
     *   3: PAI
     *   4: Data Integration
     *   7: scheduling
     *   9: DataService Studio
     *
     * @example 3
     *
     * @var string
     */
    public $resourceGroupType;

    /**
     * @description The ID of your Alibaba Cloud resource group.
     *
     * @example rg-acfmzbn7pti3zfa
     *
     * @var string
     */
    public $resourceManagerResourceGroupId;

    /**
     * @description The sequence number of the resource group. Created resource groups are sorted in ascending order by sequence number.
     *
     * @example 300
     *
     * @var int
     */
    public $sequence;

    /**
     * @description The details of the resource group. The content enclosed in braces {} is the details of the resource group.
     *
     * @example {}
     *
     * @var mixed[]
     */
    public $specs;

    /**
     * @description The status of the resource group. Valid values:
     *
     *   0: The resource group is running or in service.
     *   1: The resource group has expired and is frozen.
     *   2: The resource group is released or destroyed.
     *   3: The resource group is being created or started.
     *   4: The resource group fails to be created or started.
     *   5: The resource group is being scaled out or upgraded.
     *   6: The resource group fails to be scaled out or upgraded.
     *   7: The resource group is being released or destroyed.
     *   8: The resource group fails to be released or destroyed.
     *   9: The operation performed on the resource group times out. All operations may time out. This value is temporarily available only for DataService Studio.
     *
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @description The tags.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The ID of the tenant.
     *
     * @example 1234567
     *
     * @var int
     */
    public $tenantId;

    /**
     * @description The time when the resource group was last updated.
     *
     * @example Jul 9, 2018 2:43:37 PM
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'bizExtKey'                      => 'BizExtKey',
        'cluster'                        => 'Cluster',
        'createTime'                     => 'CreateTime',
        'enableKp'                       => 'EnableKp',
        'id'                             => 'Id',
        'identifier'                     => 'Identifier',
        'isDefault'                      => 'IsDefault',
        'mode'                           => 'Mode',
        'name'                           => 'Name',
        'resourceGroupType'              => 'ResourceGroupType',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
        'sequence'                       => 'Sequence',
        'specs'                          => 'Specs',
        'status'                         => 'Status',
        'tags'                           => 'Tags',
        'tenantId'                       => 'TenantId',
        'updateTime'                     => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizExtKey) {
            $res['BizExtKey'] = $this->bizExtKey;
        }
        if (null !== $this->cluster) {
            $res['Cluster'] = $this->cluster;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->enableKp) {
            $res['EnableKp'] = $this->enableKp;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->identifier) {
            $res['Identifier'] = $this->identifier;
        }
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->resourceGroupType) {
            $res['ResourceGroupType'] = $this->resourceGroupType;
        }
        if (null !== $this->resourceManagerResourceGroupId) {
            $res['ResourceManagerResourceGroupId'] = $this->resourceManagerResourceGroupId;
        }
        if (null !== $this->sequence) {
            $res['Sequence'] = $this->sequence;
        }
        if (null !== $this->specs) {
            $res['Specs'] = $this->specs;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['BizExtKey'])) {
            $model->bizExtKey = $map['BizExtKey'];
        }
        if (isset($map['Cluster'])) {
            $model->cluster = $map['Cluster'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EnableKp'])) {
            $model->enableKp = $map['EnableKp'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Identifier'])) {
            $model->identifier = $map['Identifier'];
        }
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ResourceGroupType'])) {
            $model->resourceGroupType = $map['ResourceGroupType'];
        }
        if (isset($map['ResourceManagerResourceGroupId'])) {
            $model->resourceManagerResourceGroupId = $map['ResourceManagerResourceGroupId'];
        }
        if (isset($map['Sequence'])) {
            $model->sequence = $map['Sequence'];
        }
        if (isset($map['Specs'])) {
            $model->specs = $map['Specs'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}

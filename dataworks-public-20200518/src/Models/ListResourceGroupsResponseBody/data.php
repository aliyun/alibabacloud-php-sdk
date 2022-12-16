<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListResourceGroupsResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListResourceGroupsResponseBody\data\tags;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example default
     *
     * @var string
     */
    public $bizExtKey;

    /**
     * @example AY18G
     *
     * @var string
     */
    public $cluster;

    /**
     * @example Jul 9, 2018 2:43:37 PM
     *
     * @var string
     */
    public $createTime;

    /**
     * @example false
     *
     * @var bool
     */
    public $enableKp;

    /**
     * @example 1234567
     *
     * @var int
     */
    public $id;

    /**
     * @example e1815577-2f4e-4c5e-b29****
     *
     * @var string
     */
    public $identifier;

    /**
     * @example true
     *
     * @var bool
     */
    public $isDefault;

    /**
     * @example SHARE
     *
     * @var string
     */
    public $mode;

    /**
     * @example abc
     *
     * @var string
     */
    public $name;

    /**
     * @example 3
     *
     * @var string
     */
    public $resourceGroupType;

    /**
     * @example rg-acfmzbn7pti3zfa
     *
     * @var string
     */
    public $resourceManagerResourceGroupId;

    /**
     * @example 300
     *
     * @var int
     */
    public $sequence;

    /**
     * @example {}
     *
     * @var mixed[]
     */
    public $specs;

    /**
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @example 1234567
     *
     * @var int
     */
    public $tenantId;

    /**
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

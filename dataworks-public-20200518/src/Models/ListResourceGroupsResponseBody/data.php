<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListResourceGroupsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListResourceGroupsResponseBody\data\tags;

class data extends Model
{
    /**
     * @var string
     */
    public $bizExtKey;
    /**
     * @var string
     */
    public $cluster;
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var bool
     */
    public $enableKp;
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $identifier;
    /**
     * @var bool
     */
    public $isDefault;
    /**
     * @var string
     */
    public $mode;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $resourceGroupType;
    /**
     * @var string
     */
    public $resourceManagerResourceGroupId;
    /**
     * @var int
     */
    public $sequence;
    /**
     * @var mixed[]
     */
    public $specs;
    /**
     * @var int
     */
    public $status;
    /**
     * @var tags[]
     */
    public $tags;
    /**
     * @var int
     */
    public $tenantId;
    /**
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
        if (\is_array($this->specs)) {
            Model::validateArray($this->specs);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->specs)) {
                $res['Specs'] = [];
                foreach ($this->specs as $key1 => $value1) {
                    $res['Specs'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1          = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
            if (!empty($map['Specs'])) {
                $model->specs = [];
                foreach ($map['Specs'] as $key1 => $value1) {
                    $model->specs[$key1] = $value1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1          = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
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

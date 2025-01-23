<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamScopesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamScopesResponseBody\ipamScopes\tags;

class ipamScopes extends Model
{
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var string
     */
    public $ipamId;
    /**
     * @var string
     */
    public $ipamScopeDescription;
    /**
     * @var string
     */
    public $ipamScopeId;
    /**
     * @var string
     */
    public $ipamScopeName;
    /**
     * @var string
     */
    public $ipamScopeType;
    /**
     * @var bool
     */
    public $isDefault;
    /**
     * @var int
     */
    public $ownerId;
    /**
     * @var int
     */
    public $poolCount;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var string
     */
    public $status;
    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'createTime'           => 'CreateTime',
        'ipamId'               => 'IpamId',
        'ipamScopeDescription' => 'IpamScopeDescription',
        'ipamScopeId'          => 'IpamScopeId',
        'ipamScopeName'        => 'IpamScopeName',
        'ipamScopeType'        => 'IpamScopeType',
        'isDefault'            => 'IsDefault',
        'ownerId'              => 'OwnerId',
        'poolCount'            => 'PoolCount',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'status'               => 'Status',
        'tags'                 => 'Tags',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->ipamId) {
            $res['IpamId'] = $this->ipamId;
        }

        if (null !== $this->ipamScopeDescription) {
            $res['IpamScopeDescription'] = $this->ipamScopeDescription;
        }

        if (null !== $this->ipamScopeId) {
            $res['IpamScopeId'] = $this->ipamScopeId;
        }

        if (null !== $this->ipamScopeName) {
            $res['IpamScopeName'] = $this->ipamScopeName;
        }

        if (null !== $this->ipamScopeType) {
            $res['IpamScopeType'] = $this->ipamScopeType;
        }

        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->poolCount) {
            $res['PoolCount'] = $this->poolCount;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['IpamId'])) {
            $model->ipamId = $map['IpamId'];
        }

        if (isset($map['IpamScopeDescription'])) {
            $model->ipamScopeDescription = $map['IpamScopeDescription'];
        }

        if (isset($map['IpamScopeId'])) {
            $model->ipamScopeId = $map['IpamScopeId'];
        }

        if (isset($map['IpamScopeName'])) {
            $model->ipamScopeName = $map['IpamScopeName'];
        }

        if (isset($map['IpamScopeType'])) {
            $model->ipamScopeType = $map['IpamScopeType'];
        }

        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['PoolCount'])) {
            $model->poolCount = $map['PoolCount'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
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

        return $model;
    }
}

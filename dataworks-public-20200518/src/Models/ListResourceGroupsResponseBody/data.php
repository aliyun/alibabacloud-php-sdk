<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListResourceGroupsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var bool
     */
    public $isDefault;

    /**
     * @var string
     */
    public $cluster;

    /**
     * @var bool
     */
    public $enableKp;

    /**
     * @var string
     */
    public $resourceGroupType;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $identifier;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $bizExtKey;

    /**
     * @var int
     */
    public $sequence;

    /**
     * @var mixed[]
     */
    public $specs;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $tenantId;
    protected $_name = [
        'status'            => 'Status',
        'updateTime'        => 'UpdateTime',
        'isDefault'         => 'IsDefault',
        'cluster'           => 'Cluster',
        'enableKp'          => 'EnableKp',
        'resourceGroupType' => 'ResourceGroupType',
        'createTime'        => 'CreateTime',
        'identifier'        => 'Identifier',
        'mode'              => 'Mode',
        'bizExtKey'         => 'BizExtKey',
        'sequence'          => 'Sequence',
        'specs'             => 'Specs',
        'name'              => 'Name',
        'id'                => 'Id',
        'tenantId'          => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }
        if (null !== $this->cluster) {
            $res['Cluster'] = $this->cluster;
        }
        if (null !== $this->enableKp) {
            $res['EnableKp'] = $this->enableKp;
        }
        if (null !== $this->resourceGroupType) {
            $res['ResourceGroupType'] = $this->resourceGroupType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->identifier) {
            $res['Identifier'] = $this->identifier;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->bizExtKey) {
            $res['BizExtKey'] = $this->bizExtKey;
        }
        if (null !== $this->sequence) {
            $res['Sequence'] = $this->sequence;
        }
        if (null !== $this->specs) {
            $res['Specs'] = $this->specs;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }
        if (isset($map['Cluster'])) {
            $model->cluster = $map['Cluster'];
        }
        if (isset($map['EnableKp'])) {
            $model->enableKp = $map['EnableKp'];
        }
        if (isset($map['ResourceGroupType'])) {
            $model->resourceGroupType = $map['ResourceGroupType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Identifier'])) {
            $model->identifier = $map['Identifier'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['BizExtKey'])) {
            $model->bizExtKey = $map['BizExtKey'];
        }
        if (isset($map['Sequence'])) {
            $model->sequence = $map['Sequence'];
        }
        if (isset($map['Specs'])) {
            $model->specs = $map['Specs'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}

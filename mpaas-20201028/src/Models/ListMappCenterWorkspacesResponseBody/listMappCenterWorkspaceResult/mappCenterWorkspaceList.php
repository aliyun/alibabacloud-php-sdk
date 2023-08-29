<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMappCenterWorkspacesResponseBody\listMappCenterWorkspaceResult;

use AlibabaCloud\Tea\Model;

class mappCenterWorkspaceList extends Model
{
    /**
     * @var string
     */
    public $compatibleId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $uid;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $workspaceId;

    /**
     * @var string
     */
    public $zones;
    protected $_name = [
        'compatibleId' => 'CompatibleId',
        'createTime'   => 'CreateTime',
        'displayName'  => 'DisplayName',
        'id'           => 'Id',
        'region'       => 'Region',
        'status'       => 'Status',
        'tenantId'     => 'TenantId',
        'type'         => 'Type',
        'uid'          => 'Uid',
        'updateTime'   => 'UpdateTime',
        'workspaceId'  => 'WorkspaceId',
        'zones'        => 'Zones',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->compatibleId) {
            $res['CompatibleId'] = $this->compatibleId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }
        if (null !== $this->zones) {
            $res['Zones'] = $this->zones;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mappCenterWorkspaceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompatibleId'])) {
            $model->compatibleId = $map['CompatibleId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }
        if (isset($map['Zones'])) {
            $model->zones = $map['Zones'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListTenantRolesResponseBody;

use AlibabaCloud\Dara\Model;

class roleList extends Model
{
    /**
     * @var string
     */
    public $authJson;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $modifier;

    /**
     * @var string
     */
    public $roleDesc;

    /**
     * @var string
     */
    public $roleKey;

    /**
     * @var string
     */
    public $roleName;

    /**
     * @var string
     */
    public $roleType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $tenantId;

    /**
     * @var string
     */
    public $tenantType;
    protected $_name = [
        'authJson' => 'AuthJson',
        'creator' => 'Creator',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'modifier' => 'Modifier',
        'roleDesc' => 'RoleDesc',
        'roleKey' => 'RoleKey',
        'roleName' => 'RoleName',
        'roleType' => 'RoleType',
        'status' => 'Status',
        'tenantId' => 'TenantId',
        'tenantType' => 'TenantType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authJson) {
            $res['AuthJson'] = $this->authJson;
        }

        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->modifier) {
            $res['Modifier'] = $this->modifier;
        }

        if (null !== $this->roleDesc) {
            $res['RoleDesc'] = $this->roleDesc;
        }

        if (null !== $this->roleKey) {
            $res['RoleKey'] = $this->roleKey;
        }

        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }

        if (null !== $this->roleType) {
            $res['RoleType'] = $this->roleType;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        if (null !== $this->tenantType) {
            $res['TenantType'] = $this->tenantType;
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
        if (isset($map['AuthJson'])) {
            $model->authJson = $map['AuthJson'];
        }

        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['Modifier'])) {
            $model->modifier = $map['Modifier'];
        }

        if (isset($map['RoleDesc'])) {
            $model->roleDesc = $map['RoleDesc'];
        }

        if (isset($map['RoleKey'])) {
            $model->roleKey = $map['RoleKey'];
        }

        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }

        if (isset($map['RoleType'])) {
            $model->roleType = $map['RoleType'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        if (isset($map['TenantType'])) {
            $model->tenantType = $map['TenantType'];
        }

        return $model;
    }
}

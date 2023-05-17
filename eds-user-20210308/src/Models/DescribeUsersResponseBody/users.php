<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeUsersResponseBody;

use AlibabaCloud\Tea\Model;

class users extends Model
{
    /**
     * @example username@example.com
     *
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $endUserId;

    /**
     * @var int
     */
    public $id;

    /**
     * @example true
     *
     * @var bool
     */
    public $isTenantManager;

    /**
     * @example org-4mdgc1cocc59z****
     *
     * @var string
     */
    public $orgId;

    /**
     * @example Normal
     *
     * @var string
     */
    public $ownerType;

    /**
     * @example 1381111****
     *
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $remark;

    /**
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @example 41fd1254d8f7****
     *
     * @var string
     */
    public $wyId;
    protected $_name = [
        'email'           => 'Email',
        'endUserId'       => 'EndUserId',
        'id'              => 'Id',
        'isTenantManager' => 'IsTenantManager',
        'orgId'           => 'OrgId',
        'ownerType'       => 'OwnerType',
        'phone'           => 'Phone',
        'remark'          => 'Remark',
        'status'          => 'Status',
        'wyId'            => 'WyId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->isTenantManager) {
            $res['IsTenantManager'] = $this->isTenantManager;
        }
        if (null !== $this->orgId) {
            $res['OrgId'] = $this->orgId;
        }
        if (null !== $this->ownerType) {
            $res['OwnerType'] = $this->ownerType;
        }
        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->wyId) {
            $res['WyId'] = $this->wyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return users
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IsTenantManager'])) {
            $model->isTenantManager = $map['IsTenantManager'];
        }
        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }
        if (isset($map['OwnerType'])) {
            $model->ownerType = $map['OwnerType'];
        }
        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['WyId'])) {
            $model->wyId = $map['WyId'];
        }

        return $model;
    }
}

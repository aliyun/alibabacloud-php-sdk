<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetSubAccountInfoResponseBody;

use AlibabaCloud\Tea\Model;

class authorization extends Model
{
    /**
     * @var string
     */
    public $roleIdData;

    /**
     * @var bool
     */
    public $ramOperation;

    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var string
     */
    public $edasId;

    /**
     * @var bool
     */
    public $isRamDel;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $adminEdasId;

    /**
     * @var int
     */
    public $resGroupId;

    /**
     * @var bool
     */
    public $isRamSlave;

    /**
     * @var string
     */
    public $adminUserId;

    /**
     * @var string
     */
    public $subUserKp;

    /**
     * @var string
     */
    public $appIdData;

    /**
     * @var string
     */
    public $resGroupIdData;

    /**
     * @var bool
     */
    public $sts;

    /**
     * @var bool
     */
    public $delegateAdmin;
    protected $_name = [
        'roleIdData'     => 'RoleIdData',
        'ramOperation'   => 'RamOperation',
        'updateTime'     => 'UpdateTime',
        'edasId'         => 'EdasId',
        'isRamDel'       => 'IsRamDel',
        'createTime'     => 'CreateTime',
        'userId'         => 'UserId',
        'adminEdasId'    => 'AdminEdasId',
        'resGroupId'     => 'ResGroupId',
        'isRamSlave'     => 'IsRamSlave',
        'adminUserId'    => 'AdminUserId',
        'subUserKp'      => 'SubUserKp',
        'appIdData'      => 'AppIdData',
        'resGroupIdData' => 'ResGroupIdData',
        'sts'            => 'Sts',
        'delegateAdmin'  => 'DelegateAdmin',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->roleIdData) {
            $res['RoleIdData'] = $this->roleIdData;
        }
        if (null !== $this->ramOperation) {
            $res['RamOperation'] = $this->ramOperation;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->edasId) {
            $res['EdasId'] = $this->edasId;
        }
        if (null !== $this->isRamDel) {
            $res['IsRamDel'] = $this->isRamDel;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->adminEdasId) {
            $res['AdminEdasId'] = $this->adminEdasId;
        }
        if (null !== $this->resGroupId) {
            $res['ResGroupId'] = $this->resGroupId;
        }
        if (null !== $this->isRamSlave) {
            $res['IsRamSlave'] = $this->isRamSlave;
        }
        if (null !== $this->adminUserId) {
            $res['AdminUserId'] = $this->adminUserId;
        }
        if (null !== $this->subUserKp) {
            $res['SubUserKp'] = $this->subUserKp;
        }
        if (null !== $this->appIdData) {
            $res['AppIdData'] = $this->appIdData;
        }
        if (null !== $this->resGroupIdData) {
            $res['ResGroupIdData'] = $this->resGroupIdData;
        }
        if (null !== $this->sts) {
            $res['Sts'] = $this->sts;
        }
        if (null !== $this->delegateAdmin) {
            $res['DelegateAdmin'] = $this->delegateAdmin;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return authorization
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RoleIdData'])) {
            $model->roleIdData = $map['RoleIdData'];
        }
        if (isset($map['RamOperation'])) {
            $model->ramOperation = $map['RamOperation'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['EdasId'])) {
            $model->edasId = $map['EdasId'];
        }
        if (isset($map['IsRamDel'])) {
            $model->isRamDel = $map['IsRamDel'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['AdminEdasId'])) {
            $model->adminEdasId = $map['AdminEdasId'];
        }
        if (isset($map['ResGroupId'])) {
            $model->resGroupId = $map['ResGroupId'];
        }
        if (isset($map['IsRamSlave'])) {
            $model->isRamSlave = $map['IsRamSlave'];
        }
        if (isset($map['AdminUserId'])) {
            $model->adminUserId = $map['AdminUserId'];
        }
        if (isset($map['SubUserKp'])) {
            $model->subUserKp = $map['SubUserKp'];
        }
        if (isset($map['AppIdData'])) {
            $model->appIdData = $map['AppIdData'];
        }
        if (isset($map['ResGroupIdData'])) {
            $model->resGroupIdData = $map['ResGroupIdData'];
        }
        if (isset($map['Sts'])) {
            $model->sts = $map['Sts'];
        }
        if (isset($map['DelegateAdmin'])) {
            $model->delegateAdmin = $map['DelegateAdmin'];
        }

        return $model;
    }
}

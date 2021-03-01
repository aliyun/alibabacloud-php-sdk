<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListSubAccountResponseBody\subAccountList;

use AlibabaCloud\Tea\Model;

class subAccount extends Model
{
    /**
     * @var string
     */
    public $subEdasId;

    /**
     * @var string
     */
    public $subUserId;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $adminUserId;

    /**
     * @var string
     */
    public $adminUserKp;

    /**
     * @var string
     */
    public $adminEdasId;

    /**
     * @var string
     */
    public $subUserKp;

    /**
     * @var string
     */
    public $phone;
    protected $_name = [
        'subEdasId'   => 'SubEdasId',
        'subUserId'   => 'SubUserId',
        'email'       => 'Email',
        'adminUserId' => 'AdminUserId',
        'adminUserKp' => 'AdminUserKp',
        'adminEdasId' => 'AdminEdasId',
        'subUserKp'   => 'SubUserKp',
        'phone'       => 'Phone',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->subEdasId) {
            $res['SubEdasId'] = $this->subEdasId;
        }
        if (null !== $this->subUserId) {
            $res['SubUserId'] = $this->subUserId;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->adminUserId) {
            $res['AdminUserId'] = $this->adminUserId;
        }
        if (null !== $this->adminUserKp) {
            $res['AdminUserKp'] = $this->adminUserKp;
        }
        if (null !== $this->adminEdasId) {
            $res['AdminEdasId'] = $this->adminEdasId;
        }
        if (null !== $this->subUserKp) {
            $res['SubUserKp'] = $this->subUserKp;
        }
        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subAccount
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SubEdasId'])) {
            $model->subEdasId = $map['SubEdasId'];
        }
        if (isset($map['SubUserId'])) {
            $model->subUserId = $map['SubUserId'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['AdminUserId'])) {
            $model->adminUserId = $map['AdminUserId'];
        }
        if (isset($map['AdminUserKp'])) {
            $model->adminUserKp = $map['AdminUserKp'];
        }
        if (isset($map['AdminEdasId'])) {
            $model->adminEdasId = $map['AdminEdasId'];
        }
        if (isset($map['SubUserKp'])) {
            $model->subUserKp = $map['SubUserKp'];
        }
        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }

        return $model;
    }
}

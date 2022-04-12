<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListSubAccountResponseBody\subAccountList;

use AlibabaCloud\Tea\Model;

class subAccount extends Model
{
    /**
     * @var string
     */
    public $adminEdasId;

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
    public $email;

    /**
     * @var string
     */
    public $phone;

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
    public $subUserKp;
    protected $_name = [
        'adminEdasId' => 'AdminEdasId',
        'adminUserId' => 'AdminUserId',
        'adminUserKp' => 'AdminUserKp',
        'email'       => 'Email',
        'phone'       => 'Phone',
        'subEdasId'   => 'SubEdasId',
        'subUserId'   => 'SubUserId',
        'subUserKp'   => 'SubUserKp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adminEdasId) {
            $res['AdminEdasId'] = $this->adminEdasId;
        }
        if (null !== $this->adminUserId) {
            $res['AdminUserId'] = $this->adminUserId;
        }
        if (null !== $this->adminUserKp) {
            $res['AdminUserKp'] = $this->adminUserKp;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }
        if (null !== $this->subEdasId) {
            $res['SubEdasId'] = $this->subEdasId;
        }
        if (null !== $this->subUserId) {
            $res['SubUserId'] = $this->subUserId;
        }
        if (null !== $this->subUserKp) {
            $res['SubUserKp'] = $this->subUserKp;
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
        if (isset($map['AdminEdasId'])) {
            $model->adminEdasId = $map['AdminEdasId'];
        }
        if (isset($map['AdminUserId'])) {
            $model->adminUserId = $map['AdminUserId'];
        }
        if (isset($map['AdminUserKp'])) {
            $model->adminUserKp = $map['AdminUserKp'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }
        if (isset($map['SubEdasId'])) {
            $model->subEdasId = $map['SubEdasId'];
        }
        if (isset($map['SubUserId'])) {
            $model->subUserId = $map['SubUserId'];
        }
        if (isset($map['SubUserKp'])) {
            $model->subUserKp = $map['SubUserKp'];
        }

        return $model;
    }
}

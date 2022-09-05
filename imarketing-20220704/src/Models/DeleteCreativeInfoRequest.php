<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imarketing\V20220704\Models;

use AlibabaCloud\Tea\Model;

class DeleteCreativeInfoRequest extends Model
{
    /**
     * @var string
     */
    public $accountNo;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $mainId;

    /**
     * @var string
     */
    public $updateUser;
    protected $_name = [
        'accountNo'  => 'AccountNo',
        'bizId'      => 'BizId',
        'id'         => 'Id',
        'mainId'     => 'MainId',
        'updateUser' => 'UpdateUser',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountNo) {
            $res['AccountNo'] = $this->accountNo;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->mainId) {
            $res['MainId'] = $this->mainId;
        }
        if (null !== $this->updateUser) {
            $res['UpdateUser'] = $this->updateUser;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteCreativeInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountNo'])) {
            $model->accountNo = $map['AccountNo'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['MainId'])) {
            $model->mainId = $map['MainId'];
        }
        if (isset($map['UpdateUser'])) {
            $model->updateUser = $map['UpdateUser'];
        }

        return $model;
    }
}

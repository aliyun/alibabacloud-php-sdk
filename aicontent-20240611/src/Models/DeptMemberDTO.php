<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class DeptMemberDTO extends Model
{
    /**
     * @var string
     */
    public $allowedModels;

    /**
     * @var string
     */
    public $authConfig;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $keyCount;

    /**
     * @var string
     */
    public $loginName;

    /**
     * @var float
     */
    public $monthlyBalance;

    /**
     * @var string
     */
    public $name;

    /**
     * @var float
     */
    public $permanentBalance;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $roleCode;

    /**
     * @var string
     */
    public $roleName;
    protected $_name = [
        'allowedModels' => 'allowedModels',
        'authConfig' => 'authConfig',
        'gmtCreate' => 'gmtCreate',
        'id' => 'id',
        'keyCount' => 'keyCount',
        'loginName' => 'loginName',
        'monthlyBalance' => 'monthlyBalance',
        'name' => 'name',
        'permanentBalance' => 'permanentBalance',
        'phone' => 'phone',
        'roleCode' => 'roleCode',
        'roleName' => 'roleName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowedModels) {
            $res['allowedModels'] = $this->allowedModels;
        }

        if (null !== $this->authConfig) {
            $res['authConfig'] = $this->authConfig;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->keyCount) {
            $res['keyCount'] = $this->keyCount;
        }

        if (null !== $this->loginName) {
            $res['loginName'] = $this->loginName;
        }

        if (null !== $this->monthlyBalance) {
            $res['monthlyBalance'] = $this->monthlyBalance;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->permanentBalance) {
            $res['permanentBalance'] = $this->permanentBalance;
        }

        if (null !== $this->phone) {
            $res['phone'] = $this->phone;
        }

        if (null !== $this->roleCode) {
            $res['roleCode'] = $this->roleCode;
        }

        if (null !== $this->roleName) {
            $res['roleName'] = $this->roleName;
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
        if (isset($map['allowedModels'])) {
            $model->allowedModels = $map['allowedModels'];
        }

        if (isset($map['authConfig'])) {
            $model->authConfig = $map['authConfig'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['keyCount'])) {
            $model->keyCount = $map['keyCount'];
        }

        if (isset($map['loginName'])) {
            $model->loginName = $map['loginName'];
        }

        if (isset($map['monthlyBalance'])) {
            $model->monthlyBalance = $map['monthlyBalance'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['permanentBalance'])) {
            $model->permanentBalance = $map['permanentBalance'];
        }

        if (isset($map['phone'])) {
            $model->phone = $map['phone'];
        }

        if (isset($map['roleCode'])) {
            $model->roleCode = $map['roleCode'];
        }

        if (isset($map['roleName'])) {
            $model->roleName = $map['roleName'];
        }

        return $model;
    }
}

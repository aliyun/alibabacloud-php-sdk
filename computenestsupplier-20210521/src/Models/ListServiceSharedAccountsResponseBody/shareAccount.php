<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceSharedAccountsResponseBody;

use AlibabaCloud\Dara\Model;

class shareAccount extends Model
{
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var string
     */
    public $logo;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $permission;
    /**
     * @var string
     */
    public $serviceId;
    /**
     * @var string
     */
    public $updateTime;
    /**
     * @var string
     */
    public $userAliUid;
    protected $_name = [
        'createTime' => 'CreateTime',
        'logo'       => 'Logo',
        'name'       => 'Name',
        'permission' => 'Permission',
        'serviceId'  => 'ServiceId',
        'updateTime' => 'UpdateTime',
        'userAliUid' => 'UserAliUid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->logo) {
            $res['Logo'] = $this->logo;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->permission) {
            $res['Permission'] = $this->permission;
        }

        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        if (null !== $this->userAliUid) {
            $res['UserAliUid'] = $this->userAliUid;
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

        if (isset($map['Logo'])) {
            $model->logo = $map['Logo'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Permission'])) {
            $model->permission = $map['Permission'];
        }

        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        if (isset($map['UserAliUid'])) {
            $model->userAliUid = $map['UserAliUid'];
        }

        return $model;
    }
}

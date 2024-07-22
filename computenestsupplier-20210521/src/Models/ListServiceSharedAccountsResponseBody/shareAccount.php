<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceSharedAccountsResponseBody;

use AlibabaCloud\Tea\Model;

class shareAccount extends Model
{
    /**
     * @example 2021-12-28T02:47:46.000
     *
     * @var string
     */
    public $createTime;

    /**
     * @example logo
     *
     * @var string
     */
    public $logo;

    /**
     * @example name
     *
     * @var string
     */
    public $name;

    /**
     * @example Deployable
     *
     * @var string
     */
    public $permission;

    /**
     * @example service-e10349089de34exxxxxx
     *
     * @var string
     */
    public $serviceId;

    /**
     * @example 2023-02-13T02:16:03.756Z
     *
     * @var string
     */
    public $updateTime;

    /**
     * @example 127383705xxxxxx
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return shareAccount
     */
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

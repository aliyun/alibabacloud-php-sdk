<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListUsersResponseBody\userList;

use AlibabaCloud\Tea\Model;

class user extends Model
{
    /**
     * @var string
     */
    public $linuxStatus;

    /**
     * @var string
     */
    public $k8sStatus;

    /**
     * @var string
     */
    public $knoxStatus;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $kerberosStatus;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'linuxStatus'    => 'LinuxStatus',
        'k8sStatus'      => 'K8sStatus',
        'knoxStatus'     => 'KnoxStatus',
        'groupName'      => 'GroupName',
        'userId'         => 'UserId',
        'kerberosStatus' => 'KerberosStatus',
        'userName'       => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->linuxStatus) {
            $res['LinuxStatus'] = $this->linuxStatus;
        }
        if (null !== $this->k8sStatus) {
            $res['K8sStatus'] = $this->k8sStatus;
        }
        if (null !== $this->knoxStatus) {
            $res['KnoxStatus'] = $this->knoxStatus;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->kerberosStatus) {
            $res['KerberosStatus'] = $this->kerberosStatus;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return user
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LinuxStatus'])) {
            $model->linuxStatus = $map['LinuxStatus'];
        }
        if (isset($map['K8sStatus'])) {
            $model->k8sStatus = $map['K8sStatus'];
        }
        if (isset($map['KnoxStatus'])) {
            $model->knoxStatus = $map['KnoxStatus'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['KerberosStatus'])) {
            $model->kerberosStatus = $map['KerberosStatus'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}

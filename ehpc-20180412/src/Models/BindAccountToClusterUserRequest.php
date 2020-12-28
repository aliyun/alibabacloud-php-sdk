<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class BindAccountToClusterUserRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $userPwd;

    /**
     * @var string
     */
    public $accountUid;

    /**
     * @var string
     */
    public $accountName;
    protected $_name = [
        'clusterId'   => 'ClusterId',
        'userName'    => 'UserName',
        'userPwd'     => 'UserPwd',
        'accountUid'  => 'AccountUid',
        'accountName' => 'AccountName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->userPwd) {
            $res['UserPwd'] = $this->userPwd;
        }
        if (null !== $this->accountUid) {
            $res['AccountUid'] = $this->accountUid;
        }
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BindAccountToClusterUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['UserPwd'])) {
            $model->userPwd = $map['UserPwd'];
        }
        if (isset($map['AccountUid'])) {
            $model->accountUid = $map['AccountUid'];
        }
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }

        return $model;
    }
}

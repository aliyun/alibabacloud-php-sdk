<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20230630\Models\GetAccountByIdResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example ******
     *
     * @var string
     */
    public $email;

    /**
     * @example 1700189358000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example 1700209499000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @example 5035op97******************a63994
     *
     * @var string
     */
    public $identityId;

    /**
     * @example 1700209499000
     *
     * @var int
     */
    public $lastLoginTime;

    /**
     * @example 18*******20
     *
     * @var string
     */
    public $loginName;

    /**
     * @example 18*******20
     *
     * @var string
     */
    public $nickName;

    /**
     * @example 18*******20
     *
     * @var string
     */
    public $phone;
    protected $_name = [
        'email'         => 'Email',
        'gmtCreate'     => 'GmtCreate',
        'gmtModified'   => 'GmtModified',
        'identityId'    => 'IdentityId',
        'lastLoginTime' => 'LastLoginTime',
        'loginName'     => 'LoginName',
        'nickName'      => 'NickName',
        'phone'         => 'Phone',
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
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->identityId) {
            $res['IdentityId'] = $this->identityId;
        }
        if (null !== $this->lastLoginTime) {
            $res['LastLoginTime'] = $this->lastLoginTime;
        }
        if (null !== $this->loginName) {
            $res['LoginName'] = $this->loginName;
        }
        if (null !== $this->nickName) {
            $res['NickName'] = $this->nickName;
        }
        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['IdentityId'])) {
            $model->identityId = $map['IdentityId'];
        }
        if (isset($map['LastLoginTime'])) {
            $model->lastLoginTime = $map['LastLoginTime'];
        }
        if (isset($map['LoginName'])) {
            $model->loginName = $map['LoginName'];
        }
        if (isset($map['NickName'])) {
            $model->nickName = $map['NickName'];
        }
        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }

        return $model;
    }
}

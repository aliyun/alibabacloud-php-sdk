<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\ListUsersResponseBody;

use AlibabaCloud\Tea\Model;

class users extends Model
{
    /**
     * @description The creation time.
     *
     * @example 1509338726362
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The remarks.
     *
     * @example 添加test用户
     *
     * @var string
     */
    public $description;

    /**
     * @description The Base64-encoded content of the keytab file.
     *
     * @example DBEDASDF==
     *
     * @var string
     */
    public $keytabHex;

    /**
     * @description The Lightweight Directory Access Protocol (LDAP) link.
     *
     * @example ldap://master-1-1.c-c6ce2d16d118****.cn-hangzhou.emr.aliyuncs.com:10389
     *
     * @var string
     */
    public $ldapUrl;

    /**
     * @description The user ID.
     *
     * @example 125046002175****
     *
     * @var string
     */
    public $userId;

    /**
     * @description The username.
     *
     * @example yun****
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'keytabHex' => 'KeytabHex',
        'ldapUrl' => 'LdapUrl',
        'userId' => 'UserId',
        'userName' => 'UserName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->keytabHex) {
            $res['KeytabHex'] = $this->keytabHex;
        }
        if (null !== $this->ldapUrl) {
            $res['LdapUrl'] = $this->ldapUrl;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return users
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['KeytabHex'])) {
            $model->keytabHex = $map['KeytabHex'];
        }
        if (isset($map['LdapUrl'])) {
            $model->ldapUrl = $map['LdapUrl'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}

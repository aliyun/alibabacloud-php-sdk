<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListTenantMembersResponseBody\pageResult;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListTenantMembersResponseBody\pageResult\userList\userGroupList;
use AlibabaCloud\Tea\Model;

class userList extends Model
{
    /**
     * @example zhangsan
     *
     * @var string
     */
    public $accountName;

    /**
     * @example dd123123
     *
     * @var string
     */
    public $dingNumber;

    /**
     * @example zhangsan
     *
     * @var string
     */
    public $displayName;

    /**
     * @example zhangsan
     *
     * @var string
     */
    public $displayNameWithoutStatus;

    /**
     * @example true
     *
     * @var string
     */
    public $enableWhiteIp;

    /**
     * @example 1730000000000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example 1730000000000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @example 132321
     *
     * @var string
     */
    public $id;

    /**
     * @example 123@aliyun.com
     *
     * @var string
     */
    public $mail;

    /**
     * @example 13888888888
     *
     * @var string
     */
    public $mobilePhone;

    /**
     * @example zhangsan
     *
     * @var string
     */
    public $name;

    /**
     * @example susan
     *
     * @var string
     */
    public $nickName;

    /**
     * @var string
     */
    public $realName;

    /**
     * @var string[]
     */
    public $roleList;

    /**
     * @example 213213232422222
     *
     * @var string
     */
    public $sourceId;

    /**
     * @example aliyun
     *
     * @var string
     */
    public $sourceType;

    /**
     * @var userGroupList[]
     */
    public $userGroupList;

    /**
     * @example 0.0.0.0/0
     *
     * @var string
     */
    public $whiteIp;
    protected $_name = [
        'accountName'              => 'AccountName',
        'dingNumber'               => 'DingNumber',
        'displayName'              => 'DisplayName',
        'displayNameWithoutStatus' => 'DisplayNameWithoutStatus',
        'enableWhiteIp'            => 'EnableWhiteIp',
        'gmtCreate'                => 'GmtCreate',
        'gmtModified'              => 'GmtModified',
        'id'                       => 'Id',
        'mail'                     => 'Mail',
        'mobilePhone'              => 'MobilePhone',
        'name'                     => 'Name',
        'nickName'                 => 'NickName',
        'realName'                 => 'RealName',
        'roleList'                 => 'RoleList',
        'sourceId'                 => 'SourceId',
        'sourceType'               => 'SourceType',
        'userGroupList'            => 'UserGroupList',
        'whiteIp'                  => 'WhiteIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->dingNumber) {
            $res['DingNumber'] = $this->dingNumber;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->displayNameWithoutStatus) {
            $res['DisplayNameWithoutStatus'] = $this->displayNameWithoutStatus;
        }
        if (null !== $this->enableWhiteIp) {
            $res['EnableWhiteIp'] = $this->enableWhiteIp;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->mail) {
            $res['Mail'] = $this->mail;
        }
        if (null !== $this->mobilePhone) {
            $res['MobilePhone'] = $this->mobilePhone;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nickName) {
            $res['NickName'] = $this->nickName;
        }
        if (null !== $this->realName) {
            $res['RealName'] = $this->realName;
        }
        if (null !== $this->roleList) {
            $res['RoleList'] = $this->roleList;
        }
        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->userGroupList) {
            $res['UserGroupList'] = [];
            if (null !== $this->userGroupList && \is_array($this->userGroupList)) {
                $n = 0;
                foreach ($this->userGroupList as $item) {
                    $res['UserGroupList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->whiteIp) {
            $res['WhiteIp'] = $this->whiteIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['DingNumber'])) {
            $model->dingNumber = $map['DingNumber'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['DisplayNameWithoutStatus'])) {
            $model->displayNameWithoutStatus = $map['DisplayNameWithoutStatus'];
        }
        if (isset($map['EnableWhiteIp'])) {
            $model->enableWhiteIp = $map['EnableWhiteIp'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Mail'])) {
            $model->mail = $map['Mail'];
        }
        if (isset($map['MobilePhone'])) {
            $model->mobilePhone = $map['MobilePhone'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NickName'])) {
            $model->nickName = $map['NickName'];
        }
        if (isset($map['RealName'])) {
            $model->realName = $map['RealName'];
        }
        if (isset($map['RoleList'])) {
            if (!empty($map['RoleList'])) {
                $model->roleList = $map['RoleList'];
            }
        }
        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['UserGroupList'])) {
            if (!empty($map['UserGroupList'])) {
                $model->userGroupList = [];
                $n                    = 0;
                foreach ($map['UserGroupList'] as $item) {
                    $model->userGroupList[$n++] = null !== $item ? userGroupList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['WhiteIp'])) {
            $model->whiteIp = $map['WhiteIp'];
        }

        return $model;
    }
}

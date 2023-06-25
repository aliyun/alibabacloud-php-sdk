<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListProjectMembersResponseBody;

use AlibabaCloud\SDK\Devops\V20210625\Models\ListProjectMembersResponseBody\members\division;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListProjectMembersResponseBody\members\organizationUserInfo;
use AlibabaCloud\Tea\Model;

class members extends Model
{
    /**
     * @example null
     *
     * @var string
     */
    public $account;

    /**
     * @example https://xxxxxx.png
     *
     * @var string
     */
    public $avatar;

    /**
     * @example null
     *
     * @var string
     */
    public $dingTalkId;

    /**
     * @example 名称
     *
     * @var string
     */
    public $displayName;

    /**
     * @example mingcheng
     *
     * @var string
     */
    public $displayNickName;

    /**
     * @example 名称
     *
     * @var string
     */
    public $displayRealName;

    /**
     * @var division
     */
    public $division;

    /**
     * @example accountsxxxx@mail.com
     *
     * @var string
     */
    public $email;

    /**
     * @example null
     *
     * @var string
     */
    public $gender;

    /**
     * @example 19xxxx31947xxxx
     *
     * @var string
     */
    public $identifier;

    /**
     * @example 135xxxxxxxxx
     *
     * @var string
     */
    public $mobile;

    /**
     * @example name
     *
     * @var string
     */
    public $nameEn;

    /**
     * @example 昵称
     *
     * @var string
     */
    public $nickName;

    /**
     * @example nicheng
     *
     * @var string
     */
    public $nickNamePinyin;

    /**
     * @var organizationUserInfo
     */
    public $organizationUserInfo;

    /**
     * @example xxx
     *
     * @var string
     */
    public $realName;

    /**
     * @example xxx
     *
     * @var string
     */
    public $realNamePinyin;

    /**
     * @description 角色名称
     *
     * @var string
     */
    public $roleName;

    /**
     * @example User
     *
     * @var string
     */
    public $stamp;

    /**
     * @example null
     *
     * @var string
     */
    public $tbRoleId;
    protected $_name = [
        'account'              => 'account',
        'avatar'               => 'avatar',
        'dingTalkId'           => 'dingTalkId',
        'displayName'          => 'displayName',
        'displayNickName'      => 'displayNickName',
        'displayRealName'      => 'displayRealName',
        'division'             => 'division',
        'email'                => 'email',
        'gender'               => 'gender',
        'identifier'           => 'identifier',
        'mobile'               => 'mobile',
        'nameEn'               => 'nameEn',
        'nickName'             => 'nickName',
        'nickNamePinyin'       => 'nickNamePinyin',
        'organizationUserInfo' => 'organizationUserInfo',
        'realName'             => 'realName',
        'realNamePinyin'       => 'realNamePinyin',
        'roleName'             => 'roleName',
        'stamp'                => 'stamp',
        'tbRoleId'             => 'tbRoleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->account) {
            $res['account'] = $this->account;
        }
        if (null !== $this->avatar) {
            $res['avatar'] = $this->avatar;
        }
        if (null !== $this->dingTalkId) {
            $res['dingTalkId'] = $this->dingTalkId;
        }
        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }
        if (null !== $this->displayNickName) {
            $res['displayNickName'] = $this->displayNickName;
        }
        if (null !== $this->displayRealName) {
            $res['displayRealName'] = $this->displayRealName;
        }
        if (null !== $this->division) {
            $res['division'] = null !== $this->division ? $this->division->toMap() : null;
        }
        if (null !== $this->email) {
            $res['email'] = $this->email;
        }
        if (null !== $this->gender) {
            $res['gender'] = $this->gender;
        }
        if (null !== $this->identifier) {
            $res['identifier'] = $this->identifier;
        }
        if (null !== $this->mobile) {
            $res['mobile'] = $this->mobile;
        }
        if (null !== $this->nameEn) {
            $res['nameEn'] = $this->nameEn;
        }
        if (null !== $this->nickName) {
            $res['nickName'] = $this->nickName;
        }
        if (null !== $this->nickNamePinyin) {
            $res['nickNamePinyin'] = $this->nickNamePinyin;
        }
        if (null !== $this->organizationUserInfo) {
            $res['organizationUserInfo'] = null !== $this->organizationUserInfo ? $this->organizationUserInfo->toMap() : null;
        }
        if (null !== $this->realName) {
            $res['realName'] = $this->realName;
        }
        if (null !== $this->realNamePinyin) {
            $res['realNamePinyin'] = $this->realNamePinyin;
        }
        if (null !== $this->roleName) {
            $res['roleName'] = $this->roleName;
        }
        if (null !== $this->stamp) {
            $res['stamp'] = $this->stamp;
        }
        if (null !== $this->tbRoleId) {
            $res['tbRoleId'] = $this->tbRoleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return members
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['account'])) {
            $model->account = $map['account'];
        }
        if (isset($map['avatar'])) {
            $model->avatar = $map['avatar'];
        }
        if (isset($map['dingTalkId'])) {
            $model->dingTalkId = $map['dingTalkId'];
        }
        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }
        if (isset($map['displayNickName'])) {
            $model->displayNickName = $map['displayNickName'];
        }
        if (isset($map['displayRealName'])) {
            $model->displayRealName = $map['displayRealName'];
        }
        if (isset($map['division'])) {
            $model->division = division::fromMap($map['division']);
        }
        if (isset($map['email'])) {
            $model->email = $map['email'];
        }
        if (isset($map['gender'])) {
            $model->gender = $map['gender'];
        }
        if (isset($map['identifier'])) {
            $model->identifier = $map['identifier'];
        }
        if (isset($map['mobile'])) {
            $model->mobile = $map['mobile'];
        }
        if (isset($map['nameEn'])) {
            $model->nameEn = $map['nameEn'];
        }
        if (isset($map['nickName'])) {
            $model->nickName = $map['nickName'];
        }
        if (isset($map['nickNamePinyin'])) {
            $model->nickNamePinyin = $map['nickNamePinyin'];
        }
        if (isset($map['organizationUserInfo'])) {
            $model->organizationUserInfo = organizationUserInfo::fromMap($map['organizationUserInfo']);
        }
        if (isset($map['realName'])) {
            $model->realName = $map['realName'];
        }
        if (isset($map['realNamePinyin'])) {
            $model->realNamePinyin = $map['realNamePinyin'];
        }
        if (isset($map['roleName'])) {
            $model->roleName = $map['roleName'];
        }
        if (isset($map['stamp'])) {
            $model->stamp = $map['stamp'];
        }
        if (isset($map['tbRoleId'])) {
            $model->tbRoleId = $map['tbRoleId'];
        }

        return $model;
    }
}

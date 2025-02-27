<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\CreateWorkitemEstimateResponseBody\workitemTimeEstimate;

use AlibabaCloud\Dara\Model;

class recordUser extends Model
{
    /**
     * @var string
     */
    public $account;
    /**
     * @var string
     */
    public $avatar;
    /**
     * @var string
     */
    public $dingTalkId;
    /**
     * @var string
     */
    public $displayName;
    /**
     * @var string
     */
    public $displayNickName;
    /**
     * @var string
     */
    public $displayRealName;
    /**
     * @var string
     */
    public $email;
    /**
     * @var string
     */
    public $gender;
    /**
     * @var string
     */
    public $identifier;
    /**
     * @var bool
     */
    public $isDisabled;
    /**
     * @var string
     */
    public $mobile;
    /**
     * @var string
     */
    public $nameEn;
    /**
     * @var string
     */
    public $nickName;
    /**
     * @var string
     */
    public $nickNamePinyin;
    /**
     * @var string
     */
    public $realName;
    /**
     * @var string
     */
    public $realNamePinyin;
    /**
     * @var string
     */
    public $stamp;
    /**
     * @var string
     */
    public $tbRoleId;
    protected $_name = [
        'account'         => 'account',
        'avatar'          => 'avatar',
        'dingTalkId'      => 'dingTalkId',
        'displayName'     => 'displayName',
        'displayNickName' => 'displayNickName',
        'displayRealName' => 'displayRealName',
        'email'           => 'email',
        'gender'          => 'gender',
        'identifier'      => 'identifier',
        'isDisabled'      => 'isDisabled',
        'mobile'          => 'mobile',
        'nameEn'          => 'nameEn',
        'nickName'        => 'nickName',
        'nickNamePinyin'  => 'nickNamePinyin',
        'realName'        => 'realName',
        'realNamePinyin'  => 'realNamePinyin',
        'stamp'           => 'stamp',
        'tbRoleId'        => 'tbRoleId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->email) {
            $res['email'] = $this->email;
        }

        if (null !== $this->gender) {
            $res['gender'] = $this->gender;
        }

        if (null !== $this->identifier) {
            $res['identifier'] = $this->identifier;
        }

        if (null !== $this->isDisabled) {
            $res['isDisabled'] = $this->isDisabled;
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

        if (null !== $this->realName) {
            $res['realName'] = $this->realName;
        }

        if (null !== $this->realNamePinyin) {
            $res['realNamePinyin'] = $this->realNamePinyin;
        }

        if (null !== $this->stamp) {
            $res['stamp'] = $this->stamp;
        }

        if (null !== $this->tbRoleId) {
            $res['tbRoleId'] = $this->tbRoleId;
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

        if (isset($map['email'])) {
            $model->email = $map['email'];
        }

        if (isset($map['gender'])) {
            $model->gender = $map['gender'];
        }

        if (isset($map['identifier'])) {
            $model->identifier = $map['identifier'];
        }

        if (isset($map['isDisabled'])) {
            $model->isDisabled = $map['isDisabled'];
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

        if (isset($map['realName'])) {
            $model->realName = $map['realName'];
        }

        if (isset($map['realNamePinyin'])) {
            $model->realNamePinyin = $map['realNamePinyin'];
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

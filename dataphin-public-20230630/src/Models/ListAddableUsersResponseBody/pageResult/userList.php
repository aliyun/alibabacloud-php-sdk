<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListAddableUsersResponseBody\pageResult;

use AlibabaCloud\Tea\Model;

class userList extends Model
{
    /**
     * @example 123@xx.com
     *
     * @var string
     */
    public $accountName;

    /**
     * @example 123@dingding
     *
     * @var string
     */
    public $dingNumber;

    /**
     * @example xx
     *
     * @var string
     */
    public $displayName;

    /**
     * @example xx
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
     * @example xx
     *
     * @var string
     */
    public $feiShuRobot;

    /**
     * @example 1717343597000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example 1717343597000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @example 123231
     *
     * @var string
     */
    public $id;

    /**
     * @example 123@xx.com
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
     * @example xx
     *
     * @var string
     */
    public $name;

    /**
     * @example xx
     *
     * @var string
     */
    public $nickName;

    /**
     * @example 231313
     *
     * @var string
     */
    public $parentId;

    /**
     * @example xx
     *
     * @var string
     */
    public $realName;

    /**
     * @example 123@xx.com
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
     * @example xx
     *
     * @var string
     */
    public $weChatRobot;

    /**
     * @example *
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
        'feiShuRobot'              => 'FeiShuRobot',
        'gmtCreate'                => 'GmtCreate',
        'gmtModified'              => 'GmtModified',
        'id'                       => 'Id',
        'mail'                     => 'Mail',
        'mobilePhone'              => 'MobilePhone',
        'name'                     => 'Name',
        'nickName'                 => 'NickName',
        'parentId'                 => 'ParentId',
        'realName'                 => 'RealName',
        'sourceId'                 => 'SourceId',
        'sourceType'               => 'SourceType',
        'weChatRobot'              => 'WeChatRobot',
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
        if (null !== $this->feiShuRobot) {
            $res['FeiShuRobot'] = $this->feiShuRobot;
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
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }
        if (null !== $this->realName) {
            $res['RealName'] = $this->realName;
        }
        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->weChatRobot) {
            $res['WeChatRobot'] = $this->weChatRobot;
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
        if (isset($map['FeiShuRobot'])) {
            $model->feiShuRobot = $map['FeiShuRobot'];
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
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }
        if (isset($map['RealName'])) {
            $model->realName = $map['RealName'];
        }
        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['WeChatRobot'])) {
            $model->weChatRobot = $map['WeChatRobot'];
        }
        if (isset($map['WhiteIp'])) {
            $model->whiteIp = $map['WhiteIp'];
        }

        return $model;
    }
}

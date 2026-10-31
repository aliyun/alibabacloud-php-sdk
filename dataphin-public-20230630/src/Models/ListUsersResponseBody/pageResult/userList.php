<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListUsersResponseBody\pageResult;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListUsersResponseBody\pageResult\userList\deptList;

class userList extends Model
{
    /**
     * @var string
     */
    public $accountName;

    /**
     * @var bool
     */
    public $deleted;

    /**
     * @var deptList[]
     */
    public $deptList;

    /**
     * @var string
     */
    public $dingNumber;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $displayNameWithoutStatus;

    /**
     * @var bool
     */
    public $enableWhiteIp;

    /**
     * @var string
     */
    public $feiShuRobot;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $mail;

    /**
     * @var string
     */
    public $mobilePhone;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nickName;

    /**
     * @var string
     */
    public $parentId;

    /**
     * @var string
     */
    public $realName;

    /**
     * @var string
     */
    public $sourceId;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $weChatRobot;

    /**
     * @var string
     */
    public $whiteIp;
    protected $_name = [
        'accountName' => 'AccountName',
        'deleted' => 'Deleted',
        'deptList' => 'DeptList',
        'dingNumber' => 'DingNumber',
        'displayName' => 'DisplayName',
        'displayNameWithoutStatus' => 'DisplayNameWithoutStatus',
        'enableWhiteIp' => 'EnableWhiteIp',
        'feiShuRobot' => 'FeiShuRobot',
        'gmtCreateTime' => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'id' => 'Id',
        'mail' => 'Mail',
        'mobilePhone' => 'MobilePhone',
        'name' => 'Name',
        'nickName' => 'NickName',
        'parentId' => 'ParentId',
        'realName' => 'RealName',
        'sourceId' => 'SourceId',
        'sourceType' => 'SourceType',
        'weChatRobot' => 'WeChatRobot',
        'whiteIp' => 'WhiteIp',
    ];

    public function validate()
    {
        if (\is_array($this->deptList)) {
            Model::validateArray($this->deptList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }

        if (null !== $this->deleted) {
            $res['Deleted'] = $this->deleted;
        }

        if (null !== $this->deptList) {
            if (\is_array($this->deptList)) {
                $res['DeptList'] = [];
                $n1 = 0;
                foreach ($this->deptList as $item1) {
                    $res['DeptList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }

        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }

        if (isset($map['Deleted'])) {
            $model->deleted = $map['Deleted'];
        }

        if (isset($map['DeptList'])) {
            if (!empty($map['DeptList'])) {
                $model->deptList = [];
                $n1 = 0;
                foreach ($map['DeptList'] as $item1) {
                    $model->deptList[$n1] = deptList::fromMap($item1);
                    ++$n1;
                }
            }
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

        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }

        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
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

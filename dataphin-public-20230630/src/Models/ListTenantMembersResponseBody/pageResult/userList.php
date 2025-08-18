<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListTenantMembersResponseBody\pageResult;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListTenantMembersResponseBody\pageResult\userList\userGroupList;

class userList extends Model
{
    /**
     * @var string
     */
    public $accountName;

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
     * @var string
     */
    public $enableWhiteIp;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtModified;

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
    public $realName;

    /**
     * @var string[]
     */
    public $roleList;

    /**
     * @var string
     */
    public $sourceId;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var userGroupList[]
     */
    public $userGroupList;

    /**
     * @var string
     */
    public $whiteIp;
    protected $_name = [
        'accountName' => 'AccountName',
        'dingNumber' => 'DingNumber',
        'displayName' => 'DisplayName',
        'displayNameWithoutStatus' => 'DisplayNameWithoutStatus',
        'enableWhiteIp' => 'EnableWhiteIp',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'mail' => 'Mail',
        'mobilePhone' => 'MobilePhone',
        'name' => 'Name',
        'nickName' => 'NickName',
        'realName' => 'RealName',
        'roleList' => 'RoleList',
        'sourceId' => 'SourceId',
        'sourceType' => 'SourceType',
        'userGroupList' => 'UserGroupList',
        'whiteIp' => 'WhiteIp',
    ];

    public function validate()
    {
        if (\is_array($this->roleList)) {
            Model::validateArray($this->roleList);
        }
        if (\is_array($this->userGroupList)) {
            Model::validateArray($this->userGroupList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->roleList)) {
                $res['RoleList'] = [];
                $n1 = 0;
                foreach ($this->roleList as $item1) {
                    $res['RoleList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        if (null !== $this->userGroupList) {
            if (\is_array($this->userGroupList)) {
                $res['UserGroupList'] = [];
                $n1 = 0;
                foreach ($this->userGroupList as $item1) {
                    $res['UserGroupList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
                $model->roleList = [];
                $n1 = 0;
                foreach ($map['RoleList'] as $item1) {
                    $model->roleList[$n1] = $item1;
                    ++$n1;
                }
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
                $n1 = 0;
                foreach ($map['UserGroupList'] as $item1) {
                    $model->userGroupList[$n1] = userGroupList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['WhiteIp'])) {
            $model->whiteIp = $map['WhiteIp'];
        }

        return $model;
    }
}

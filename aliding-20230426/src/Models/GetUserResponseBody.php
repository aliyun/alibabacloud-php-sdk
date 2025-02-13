<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetUserResponseBody\deptOrderList;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetUserResponseBody\leaderInDept;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetUserResponseBody\roleList;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetUserResponseBody\unionEmpExt;

class GetUserResponseBody extends Model
{
    /**
     * @var bool
     */
    public $active;
    /**
     * @var bool
     */
    public $admin;
    /**
     * @var string
     */
    public $avatar;
    /**
     * @var bool
     */
    public $boss;
    /**
     * @var int[]
     */
    public $deptIdList;
    /**
     * @var deptOrderList[]
     */
    public $deptOrderList;
    /**
     * @var string
     */
    public $email;
    /**
     * @var bool
     */
    public $exclusiveAccount;
    /**
     * @var string
     */
    public $exclusiveAccountCorpId;
    /**
     * @var string
     */
    public $exclusiveAccountCorpName;
    /**
     * @var string
     */
    public $exclusiveAccountType;
    /**
     * @var string
     */
    public $extension;
    /**
     * @var bool
     */
    public $hideMobile;
    /**
     * @var int
     */
    public $hiredDate;
    /**
     * @var string
     */
    public $jobNumber;
    /**
     * @var leaderInDept[]
     */
    public $leaderInDept;
    /**
     * @var string
     */
    public $loginId;
    /**
     * @var string
     */
    public $managerUserid;
    /**
     * @var string
     */
    public $mobile;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $nickname;
    /**
     * @var string
     */
    public $orgEmail;
    /**
     * @var bool
     */
    public $realAuthed;
    /**
     * @var string
     */
    public $remark;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var roleList[]
     */
    public $roleList;
    /**
     * @var bool
     */
    public $senior;
    /**
     * @var string
     */
    public $stateCode;
    /**
     * @var string
     */
    public $telephone;
    /**
     * @var string
     */
    public $title;
    /**
     * @var unionEmpExt
     */
    public $unionEmpExt;
    /**
     * @var string
     */
    public $unionid;
    /**
     * @var string
     */
    public $userid;
    /**
     * @var string
     */
    public $workPlace;
    protected $_name = [
        'active'                   => 'active',
        'admin'                    => 'admin',
        'avatar'                   => 'avatar',
        'boss'                     => 'boss',
        'deptIdList'               => 'deptIdList',
        'deptOrderList'            => 'deptOrderList',
        'email'                    => 'email',
        'exclusiveAccount'         => 'exclusiveAccount',
        'exclusiveAccountCorpId'   => 'exclusiveAccountCorpId',
        'exclusiveAccountCorpName' => 'exclusiveAccountCorpName',
        'exclusiveAccountType'     => 'exclusiveAccountType',
        'extension'                => 'extension',
        'hideMobile'               => 'hideMobile',
        'hiredDate'                => 'hiredDate',
        'jobNumber'                => 'jobNumber',
        'leaderInDept'             => 'leaderInDept',
        'loginId'                  => 'loginId',
        'managerUserid'            => 'managerUserid',
        'mobile'                   => 'mobile',
        'name'                     => 'name',
        'nickname'                 => 'nickname',
        'orgEmail'                 => 'orgEmail',
        'realAuthed'               => 'realAuthed',
        'remark'                   => 'remark',
        'requestId'                => 'requestId',
        'roleList'                 => 'roleList',
        'senior'                   => 'senior',
        'stateCode'                => 'stateCode',
        'telephone'                => 'telephone',
        'title'                    => 'title',
        'unionEmpExt'              => 'unionEmpExt',
        'unionid'                  => 'unionid',
        'userid'                   => 'userid',
        'workPlace'                => 'workPlace',
    ];

    public function validate()
    {
        if (\is_array($this->deptIdList)) {
            Model::validateArray($this->deptIdList);
        }
        if (\is_array($this->deptOrderList)) {
            Model::validateArray($this->deptOrderList);
        }
        if (\is_array($this->leaderInDept)) {
            Model::validateArray($this->leaderInDept);
        }
        if (\is_array($this->roleList)) {
            Model::validateArray($this->roleList);
        }
        if (null !== $this->unionEmpExt) {
            $this->unionEmpExt->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->active) {
            $res['active'] = $this->active;
        }

        if (null !== $this->admin) {
            $res['admin'] = $this->admin;
        }

        if (null !== $this->avatar) {
            $res['avatar'] = $this->avatar;
        }

        if (null !== $this->boss) {
            $res['boss'] = $this->boss;
        }

        if (null !== $this->deptIdList) {
            if (\is_array($this->deptIdList)) {
                $res['deptIdList'] = [];
                $n1                = 0;
                foreach ($this->deptIdList as $item1) {
                    $res['deptIdList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->deptOrderList) {
            if (\is_array($this->deptOrderList)) {
                $res['deptOrderList'] = [];
                $n1                   = 0;
                foreach ($this->deptOrderList as $item1) {
                    $res['deptOrderList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->email) {
            $res['email'] = $this->email;
        }

        if (null !== $this->exclusiveAccount) {
            $res['exclusiveAccount'] = $this->exclusiveAccount;
        }

        if (null !== $this->exclusiveAccountCorpId) {
            $res['exclusiveAccountCorpId'] = $this->exclusiveAccountCorpId;
        }

        if (null !== $this->exclusiveAccountCorpName) {
            $res['exclusiveAccountCorpName'] = $this->exclusiveAccountCorpName;
        }

        if (null !== $this->exclusiveAccountType) {
            $res['exclusiveAccountType'] = $this->exclusiveAccountType;
        }

        if (null !== $this->extension) {
            $res['extension'] = $this->extension;
        }

        if (null !== $this->hideMobile) {
            $res['hideMobile'] = $this->hideMobile;
        }

        if (null !== $this->hiredDate) {
            $res['hiredDate'] = $this->hiredDate;
        }

        if (null !== $this->jobNumber) {
            $res['jobNumber'] = $this->jobNumber;
        }

        if (null !== $this->leaderInDept) {
            if (\is_array($this->leaderInDept)) {
                $res['leaderInDept'] = [];
                $n1                  = 0;
                foreach ($this->leaderInDept as $item1) {
                    $res['leaderInDept'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->loginId) {
            $res['loginId'] = $this->loginId;
        }

        if (null !== $this->managerUserid) {
            $res['managerUserid'] = $this->managerUserid;
        }

        if (null !== $this->mobile) {
            $res['mobile'] = $this->mobile;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->nickname) {
            $res['nickname'] = $this->nickname;
        }

        if (null !== $this->orgEmail) {
            $res['orgEmail'] = $this->orgEmail;
        }

        if (null !== $this->realAuthed) {
            $res['realAuthed'] = $this->realAuthed;
        }

        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->roleList) {
            if (\is_array($this->roleList)) {
                $res['roleList'] = [];
                $n1              = 0;
                foreach ($this->roleList as $item1) {
                    $res['roleList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->senior) {
            $res['senior'] = $this->senior;
        }

        if (null !== $this->stateCode) {
            $res['stateCode'] = $this->stateCode;
        }

        if (null !== $this->telephone) {
            $res['telephone'] = $this->telephone;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        if (null !== $this->unionEmpExt) {
            $res['unionEmpExt'] = null !== $this->unionEmpExt ? $this->unionEmpExt->toArray($noStream) : $this->unionEmpExt;
        }

        if (null !== $this->unionid) {
            $res['unionid'] = $this->unionid;
        }

        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }

        if (null !== $this->workPlace) {
            $res['workPlace'] = $this->workPlace;
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
        if (isset($map['active'])) {
            $model->active = $map['active'];
        }

        if (isset($map['admin'])) {
            $model->admin = $map['admin'];
        }

        if (isset($map['avatar'])) {
            $model->avatar = $map['avatar'];
        }

        if (isset($map['boss'])) {
            $model->boss = $map['boss'];
        }

        if (isset($map['deptIdList'])) {
            if (!empty($map['deptIdList'])) {
                $model->deptIdList = [];
                $n1                = 0;
                foreach ($map['deptIdList'] as $item1) {
                    $model->deptIdList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['deptOrderList'])) {
            if (!empty($map['deptOrderList'])) {
                $model->deptOrderList = [];
                $n1                   = 0;
                foreach ($map['deptOrderList'] as $item1) {
                    $model->deptOrderList[$n1++] = deptOrderList::fromMap($item1);
                }
            }
        }

        if (isset($map['email'])) {
            $model->email = $map['email'];
        }

        if (isset($map['exclusiveAccount'])) {
            $model->exclusiveAccount = $map['exclusiveAccount'];
        }

        if (isset($map['exclusiveAccountCorpId'])) {
            $model->exclusiveAccountCorpId = $map['exclusiveAccountCorpId'];
        }

        if (isset($map['exclusiveAccountCorpName'])) {
            $model->exclusiveAccountCorpName = $map['exclusiveAccountCorpName'];
        }

        if (isset($map['exclusiveAccountType'])) {
            $model->exclusiveAccountType = $map['exclusiveAccountType'];
        }

        if (isset($map['extension'])) {
            $model->extension = $map['extension'];
        }

        if (isset($map['hideMobile'])) {
            $model->hideMobile = $map['hideMobile'];
        }

        if (isset($map['hiredDate'])) {
            $model->hiredDate = $map['hiredDate'];
        }

        if (isset($map['jobNumber'])) {
            $model->jobNumber = $map['jobNumber'];
        }

        if (isset($map['leaderInDept'])) {
            if (!empty($map['leaderInDept'])) {
                $model->leaderInDept = [];
                $n1                  = 0;
                foreach ($map['leaderInDept'] as $item1) {
                    $model->leaderInDept[$n1++] = leaderInDept::fromMap($item1);
                }
            }
        }

        if (isset($map['loginId'])) {
            $model->loginId = $map['loginId'];
        }

        if (isset($map['managerUserid'])) {
            $model->managerUserid = $map['managerUserid'];
        }

        if (isset($map['mobile'])) {
            $model->mobile = $map['mobile'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['nickname'])) {
            $model->nickname = $map['nickname'];
        }

        if (isset($map['orgEmail'])) {
            $model->orgEmail = $map['orgEmail'];
        }

        if (isset($map['realAuthed'])) {
            $model->realAuthed = $map['realAuthed'];
        }

        if (isset($map['remark'])) {
            $model->remark = $map['remark'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['roleList'])) {
            if (!empty($map['roleList'])) {
                $model->roleList = [];
                $n1              = 0;
                foreach ($map['roleList'] as $item1) {
                    $model->roleList[$n1++] = roleList::fromMap($item1);
                }
            }
        }

        if (isset($map['senior'])) {
            $model->senior = $map['senior'];
        }

        if (isset($map['stateCode'])) {
            $model->stateCode = $map['stateCode'];
        }

        if (isset($map['telephone'])) {
            $model->telephone = $map['telephone'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        if (isset($map['unionEmpExt'])) {
            $model->unionEmpExt = unionEmpExt::fromMap($map['unionEmpExt']);
        }

        if (isset($map['unionid'])) {
            $model->unionid = $map['unionid'];
        }

        if (isset($map['userid'])) {
            $model->userid = $map['userid'];
        }

        if (isset($map['workPlace'])) {
            $model->workPlace = $map['workPlace'];
        }

        return $model;
    }
}

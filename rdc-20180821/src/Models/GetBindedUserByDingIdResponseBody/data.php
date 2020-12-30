<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rdc\V20180821\Models\GetBindedUserByDingIdResponseBody;

use AlibabaCloud\SDK\Rdc\V20180821\Models\GetBindedUserByDingIdResponseBody\data\aliyunUser;
use AlibabaCloud\SDK\Rdc\V20180821\Models\GetBindedUserByDingIdResponseBody\data\dingtalkUser;
use AlibabaCloud\SDK\Rdc\V20180821\Models\GetBindedUserByDingIdResponseBody\data\userProfileDTO;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $uuid;

    /**
     * @var string
     */
    public $guid;

    /**
     * @var dingtalkUser
     */
    public $dingtalkUser;

    /**
     * @var userProfileDTO
     */
    public $userProfileDTO;

    /**
     * @var string
     */
    public $nickName;

    /**
     * @var string
     */
    public $mainAccountType;

    /**
     * @var aliyunUser
     */
    public $aliyunUser;

    /**
     * @var bool
     */
    public $isValid;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'uuid'            => 'Uuid',
        'guid'            => 'Guid',
        'dingtalkUser'    => 'DingtalkUser',
        'userProfileDTO'  => 'UserProfileDTO',
        'nickName'        => 'NickName',
        'mainAccountType' => 'MainAccountType',
        'aliyunUser'      => 'AliyunUser',
        'isValid'         => 'IsValid',
        'id'              => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->guid) {
            $res['Guid'] = $this->guid;
        }
        if (null !== $this->dingtalkUser) {
            $res['DingtalkUser'] = null !== $this->dingtalkUser ? $this->dingtalkUser->toMap() : null;
        }
        if (null !== $this->userProfileDTO) {
            $res['UserProfileDTO'] = null !== $this->userProfileDTO ? $this->userProfileDTO->toMap() : null;
        }
        if (null !== $this->nickName) {
            $res['NickName'] = $this->nickName;
        }
        if (null !== $this->mainAccountType) {
            $res['MainAccountType'] = $this->mainAccountType;
        }
        if (null !== $this->aliyunUser) {
            $res['AliyunUser'] = null !== $this->aliyunUser ? $this->aliyunUser->toMap() : null;
        }
        if (null !== $this->isValid) {
            $res['IsValid'] = $this->isValid;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['Guid'])) {
            $model->guid = $map['Guid'];
        }
        if (isset($map['DingtalkUser'])) {
            $model->dingtalkUser = dingtalkUser::fromMap($map['DingtalkUser']);
        }
        if (isset($map['UserProfileDTO'])) {
            $model->userProfileDTO = userProfileDTO::fromMap($map['UserProfileDTO']);
        }
        if (isset($map['NickName'])) {
            $model->nickName = $map['NickName'];
        }
        if (isset($map['MainAccountType'])) {
            $model->mainAccountType = $map['MainAccountType'];
        }
        if (isset($map['AliyunUser'])) {
            $model->aliyunUser = aliyunUser::fromMap($map['AliyunUser']);
        }
        if (isset($map['IsValid'])) {
            $model->isValid = $map['IsValid'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}

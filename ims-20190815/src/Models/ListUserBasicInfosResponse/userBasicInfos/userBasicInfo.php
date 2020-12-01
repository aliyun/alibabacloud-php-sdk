<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\ListUserBasicInfosResponse\userBasicInfos;

use AlibabaCloud\Tea\Model;

class userBasicInfo extends Model
{
    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userPrincipalName;

    /**
     * @var string
     */
    public $displayName;
    protected $_name = [
        'userId'            => 'UserId',
        'userPrincipalName' => 'UserPrincipalName',
        'displayName'       => 'DisplayName',
    ];

    public function validate()
    {
        Model::validateRequired('userId', $this->userId, true);
        Model::validateRequired('userPrincipalName', $this->userPrincipalName, true);
        Model::validateRequired('displayName', $this->displayName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userPrincipalName) {
            $res['UserPrincipalName'] = $this->userPrincipalName;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userBasicInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserPrincipalName'])) {
            $model->userPrincipalName = $map['UserPrincipalName'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        return $model;
    }
}

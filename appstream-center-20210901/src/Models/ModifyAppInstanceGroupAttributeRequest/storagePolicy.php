<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyAppInstanceGroupAttributeRequest;

use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyAppInstanceGroupAttributeRequest\storagePolicy\userProfile;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyAppInstanceGroupAttributeRequest\storagePolicy\userProfileFollow;
use AlibabaCloud\Tea\Model;

class storagePolicy extends Model
{
    /**
     * @description The storage types.
     *
     * @var string[]
     */
    public $storageTypeList;

    /**
     * @description The configurations of user data roaming.
     *
     * @var userProfile
     */
    public $userProfile;

    /**
     * @var userProfileFollow
     */
    public $userProfileFollow;
    protected $_name = [
        'storageTypeList' => 'StorageTypeList',
        'userProfile' => 'UserProfile',
        'userProfileFollow' => 'UserProfileFollow',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->storageTypeList) {
            $res['StorageTypeList'] = $this->storageTypeList;
        }
        if (null !== $this->userProfile) {
            $res['UserProfile'] = null !== $this->userProfile ? $this->userProfile->toMap() : null;
        }
        if (null !== $this->userProfileFollow) {
            $res['UserProfileFollow'] = null !== $this->userProfileFollow ? $this->userProfileFollow->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return storagePolicy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StorageTypeList'])) {
            if (!empty($map['StorageTypeList'])) {
                $model->storageTypeList = $map['StorageTypeList'];
            }
        }
        if (isset($map['UserProfile'])) {
            $model->userProfile = userProfile::fromMap($map['UserProfile']);
        }
        if (isset($map['UserProfileFollow'])) {
            $model->userProfileFollow = userProfileFollow::fromMap($map['UserProfileFollow']);
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyAppInstanceGroupAttributeRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyAppInstanceGroupAttributeRequest\storagePolicy\userProfile;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyAppInstanceGroupAttributeRequest\storagePolicy\userProfileFollow;

class storagePolicy extends Model
{
    /**
     * @var string[]
     */
    public $storageTypeList;

    /**
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

    public function validate()
    {
        if (\is_array($this->storageTypeList)) {
            Model::validateArray($this->storageTypeList);
        }
        if (null !== $this->userProfile) {
            $this->userProfile->validate();
        }
        if (null !== $this->userProfileFollow) {
            $this->userProfileFollow->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->storageTypeList) {
            if (\is_array($this->storageTypeList)) {
                $res['StorageTypeList'] = [];
                $n1 = 0;
                foreach ($this->storageTypeList as $item1) {
                    $res['StorageTypeList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->userProfile) {
            $res['UserProfile'] = null !== $this->userProfile ? $this->userProfile->toArray($noStream) : $this->userProfile;
        }

        if (null !== $this->userProfileFollow) {
            $res['UserProfileFollow'] = null !== $this->userProfileFollow ? $this->userProfileFollow->toArray($noStream) : $this->userProfileFollow;
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
        if (isset($map['StorageTypeList'])) {
            if (!empty($map['StorageTypeList'])) {
                $model->storageTypeList = [];
                $n1 = 0;
                foreach ($map['StorageTypeList'] as $item1) {
                    $model->storageTypeList[$n1++] = $item1;
                }
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

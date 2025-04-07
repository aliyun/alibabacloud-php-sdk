<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateAppInstanceGroupRequest;

use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateAppInstanceGroupRequest\storagePolicy\userProfile;
use AlibabaCloud\Tea\Model;

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
    protected $_name = [
        'storageTypeList' => 'StorageTypeList',
        'userProfile' => 'UserProfile',
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

        return $model;
    }
}

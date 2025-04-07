<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateAppInstanceGroupRequest\storagePolicy;

use AlibabaCloud\Tea\Model;

class userProfile extends Model
{
    /**
     * @var string
     */
    public $remoteStoragePath;

    /**
     * @var string
     */
    public $remoteStorageType;

    /**
     * @var bool
     */
    public $userProfileSwitch;
    protected $_name = [
        'remoteStoragePath' => 'RemoteStoragePath',
        'remoteStorageType' => 'RemoteStorageType',
        'userProfileSwitch' => 'UserProfileSwitch',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->remoteStoragePath) {
            $res['RemoteStoragePath'] = $this->remoteStoragePath;
        }
        if (null !== $this->remoteStorageType) {
            $res['RemoteStorageType'] = $this->remoteStorageType;
        }
        if (null !== $this->userProfileSwitch) {
            $res['UserProfileSwitch'] = $this->userProfileSwitch;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userProfile
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RemoteStoragePath'])) {
            $model->remoteStoragePath = $map['RemoteStoragePath'];
        }
        if (isset($map['RemoteStorageType'])) {
            $model->remoteStorageType = $map['RemoteStorageType'];
        }
        if (isset($map['UserProfileSwitch'])) {
            $model->userProfileSwitch = $map['UserProfileSwitch'];
        }

        return $model;
    }
}

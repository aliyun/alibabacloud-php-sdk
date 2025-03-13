<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyAppInstanceGroupAttributeRequest\storagePolicy;

use AlibabaCloud\Tea\Model;

class userProfile extends Model
{
    /**
     * @description The ID of the File Storage NAS (NAS) file system used to store user data.
     *
     * @example 06ae94****
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description Specifies whether user data roaming is enabled.
     *
     * Valid values:
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var bool
     */
    public $userProfileSwitch;
    protected $_name = [
        'fileSystemId'      => 'FileSystemId',
        'userProfileSwitch' => 'UserProfileSwitch',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
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
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['UserProfileSwitch'])) {
            $model->userProfileSwitch = $map['UserProfileSwitch'];
        }

        return $model;
    }
}

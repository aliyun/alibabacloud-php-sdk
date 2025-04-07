<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyAppInstanceGroupAttributeRequest\storagePolicy;

use AlibabaCloud\Tea\Model;

class userProfileFollow extends Model
{
    /**
     * @var string
     */
    public $fileSystemId;

    /**
     * @var bool
     */
    public $profileFollowSwitch;
    protected $_name = [
        'fileSystemId' => 'FileSystemId',
        'profileFollowSwitch' => 'ProfileFollowSwitch',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->profileFollowSwitch) {
            $res['ProfileFollowSwitch'] = $this->profileFollowSwitch;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userProfileFollow
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['ProfileFollowSwitch'])) {
            $model->profileFollowSwitch = $map['ProfileFollowSwitch'];
        }

        return $model;
    }
}

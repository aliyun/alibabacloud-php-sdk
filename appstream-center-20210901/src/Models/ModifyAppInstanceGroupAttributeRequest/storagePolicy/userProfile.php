<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyAppInstanceGroupAttributeRequest\storagePolicy;

use AlibabaCloud\Dara\Model;

class userProfile extends Model
{
    /**
     * @var string
     */
    public $fileSystemId;

    /**
     * @var bool
     */
    public $userProfileSwitch;
    protected $_name = [
        'fileSystemId' => 'FileSystemId',
        'userProfileSwitch' => 'UserProfileSwitch',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

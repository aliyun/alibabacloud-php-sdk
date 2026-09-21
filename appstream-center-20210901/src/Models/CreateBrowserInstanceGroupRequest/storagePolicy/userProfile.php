<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateBrowserInstanceGroupRequest\storagePolicy;

use AlibabaCloud\Dara\Model;

class userProfile extends Model
{
    /**
     * @var int
     */
    public $userProfileSize;

    /**
     * @var bool
     */
    public $userProfileSwitch;
    protected $_name = [
        'userProfileSize' => 'UserProfileSize',
        'userProfileSwitch' => 'UserProfileSwitch',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->userProfileSize) {
            $res['UserProfileSize'] = $this->userProfileSize;
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
        if (isset($map['UserProfileSize'])) {
            $model->userProfileSize = $map['UserProfileSize'];
        }

        if (isset($map['UserProfileSwitch'])) {
            $model->userProfileSwitch = $map['UserProfileSwitch'];
        }

        return $model;
    }
}

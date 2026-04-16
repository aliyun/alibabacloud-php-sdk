<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyBrowserInstanceGroupRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyBrowserInstanceGroupRequest\storagePolicy\userProfile;

class storagePolicy extends Model
{
    /**
     * @var userProfile
     */
    public $userProfile;
    protected $_name = [
        'userProfile' => 'UserProfile',
    ];

    public function validate()
    {
        if (null !== $this->userProfile) {
            $this->userProfile->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->userProfile) {
            $res['UserProfile'] = null !== $this->userProfile ? $this->userProfile->toArray($noStream) : $this->userProfile;
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
        if (isset($map['UserProfile'])) {
            $model->userProfile = userProfile::fromMap($map['UserProfile']);
        }

        return $model;
    }
}

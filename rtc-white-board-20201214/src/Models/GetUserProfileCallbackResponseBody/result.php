<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtcwhiteboard\V20201214\Models\GetUserProfileCallbackResponseBody;

use AlibabaCloud\SDK\Rtcwhiteboard\V20201214\Models\GetUserProfileCallbackResponseBody\result\userProfileList;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var userProfileList[]
     */
    public $userProfileList;
    protected $_name = [
        'userProfileList' => 'UserProfileList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userProfileList) {
            $res['UserProfileList'] = [];
            if (null !== $this->userProfileList && \is_array($this->userProfileList)) {
                $n = 0;
                foreach ($this->userProfileList as $item) {
                    $res['UserProfileList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserProfileList'])) {
            if (!empty($map['UserProfileList'])) {
                $model->userProfileList = [];
                $n                      = 0;
                foreach ($map['UserProfileList'] as $item) {
                    $model->userProfileList[$n++] = null !== $item ? userProfileList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

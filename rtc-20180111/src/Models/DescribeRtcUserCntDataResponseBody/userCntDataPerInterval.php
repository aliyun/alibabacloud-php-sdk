<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcUserCntDataResponseBody;

use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcUserCntDataResponseBody\userCntDataPerInterval\userCntModule;
use AlibabaCloud\Tea\Model;

class userCntDataPerInterval extends Model
{
    /**
     * @var userCntModule[]
     */
    public $userCntModule;
    protected $_name = [
        'userCntModule' => 'UserCntModule',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userCntModule) {
            $res['UserCntModule'] = [];
            if (null !== $this->userCntModule && \is_array($this->userCntModule)) {
                $n = 0;
                foreach ($this->userCntModule as $item) {
                    $res['UserCntModule'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userCntDataPerInterval
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserCntModule'])) {
            if (!empty($map['UserCntModule'])) {
                $model->userCntModule = [];
                $n                    = 0;
                foreach ($map['UserCntModule'] as $item) {
                    $model->userCntModule[$n++] = null !== $item ? userCntModule::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

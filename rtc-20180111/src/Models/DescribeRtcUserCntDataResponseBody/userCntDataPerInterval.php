<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcUserCntDataResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcUserCntDataResponseBody\userCntDataPerInterval\userCntModule;

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
        if (\is_array($this->userCntModule)) {
            Model::validateArray($this->userCntModule);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->userCntModule) {
            if (\is_array($this->userCntModule)) {
                $res['UserCntModule'] = [];
                $n1 = 0;
                foreach ($this->userCntModule as $item1) {
                    $res['UserCntModule'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['UserCntModule'])) {
            if (!empty($map['UserCntModule'])) {
                $model->userCntModule = [];
                $n1 = 0;
                foreach ($map['UserCntModule'] as $item1) {
                    $model->userCntModule[$n1++] = userCntModule::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

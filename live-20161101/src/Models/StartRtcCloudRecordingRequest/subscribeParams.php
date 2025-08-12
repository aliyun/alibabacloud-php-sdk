<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\StartRtcCloudRecordingRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\StartRtcCloudRecordingRequest\subscribeParams\subscribeUserIdList;

class subscribeParams extends Model
{
    /**
     * @var subscribeUserIdList[]
     */
    public $subscribeUserIdList;
    protected $_name = [
        'subscribeUserIdList' => 'SubscribeUserIdList',
    ];

    public function validate()
    {
        if (\is_array($this->subscribeUserIdList)) {
            Model::validateArray($this->subscribeUserIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->subscribeUserIdList) {
            if (\is_array($this->subscribeUserIdList)) {
                $res['SubscribeUserIdList'] = [];
                $n1 = 0;
                foreach ($this->subscribeUserIdList as $item1) {
                    $res['SubscribeUserIdList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['SubscribeUserIdList'])) {
            if (!empty($map['SubscribeUserIdList'])) {
                $model->subscribeUserIdList = [];
                $n1 = 0;
                foreach ($map['SubscribeUserIdList'] as $item1) {
                    $model->subscribeUserIdList[$n1] = subscribeUserIdList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

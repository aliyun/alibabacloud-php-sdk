<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\StartRtcCloudRecordingRequest;

use AlibabaCloud\SDK\Live\V20161101\Models\StartRtcCloudRecordingRequest\subscribeParams\subscribeUserIdList;
use AlibabaCloud\Tea\Model;

class subscribeParams extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var subscribeUserIdList[]
     */
    public $subscribeUserIdList;
    protected $_name = [
        'subscribeUserIdList' => 'SubscribeUserIdList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->subscribeUserIdList) {
            $res['SubscribeUserIdList'] = [];
            if (null !== $this->subscribeUserIdList && \is_array($this->subscribeUserIdList)) {
                $n = 0;
                foreach ($this->subscribeUserIdList as $item) {
                    $res['SubscribeUserIdList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subscribeParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SubscribeUserIdList'])) {
            if (!empty($map['SubscribeUserIdList'])) {
                $model->subscribeUserIdList = [];
                $n = 0;
                foreach ($map['SubscribeUserIdList'] as $item) {
                    $model->subscribeUserIdList[$n++] = null !== $item ? subscribeUserIdList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

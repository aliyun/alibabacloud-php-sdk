<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\ListSubscribeDeviceResponseBody;

use AlibabaCloud\SDK\Vcs\V20200515\Models\ListSubscribeDeviceResponseBody\data\subscribeList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var subscribeList[]
     */
    public $subscribeList;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'subscribeList' => 'SubscribeList',
        'totalCount'    => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->subscribeList) {
            $res['SubscribeList'] = [];
            if (null !== $this->subscribeList && \is_array($this->subscribeList)) {
                $n = 0;
                foreach ($this->subscribeList as $item) {
                    $res['SubscribeList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SubscribeList'])) {
            if (!empty($map['SubscribeList'])) {
                $model->subscribeList = [];
                $n                    = 0;
                foreach ($map['SubscribeList'] as $item) {
                    $model->subscribeList[$n++] = null !== $item ? subscribeList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}

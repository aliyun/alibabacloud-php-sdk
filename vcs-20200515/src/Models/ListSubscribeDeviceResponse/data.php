<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\ListSubscribeDeviceResponse;

use AlibabaCloud\SDK\Vcs\V20200515\Models\ListSubscribeDeviceResponse\data\subscribeList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var subscribeList[]
     */
    public $subscribeList;
    protected $_name = [
        'totalCount'    => 'TotalCount',
        'subscribeList' => 'SubscribeList',
    ];

    public function validate()
    {
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('subscribeList', $this->subscribeList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->subscribeList) {
            $res['SubscribeList'] = [];
            if (null !== $this->subscribeList && \is_array($this->subscribeList)) {
                $n = 0;
                foreach ($this->subscribeList as $item) {
                    $res['SubscribeList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['SubscribeList'])) {
            if (!empty($map['SubscribeList'])) {
                $model->subscribeList = [];
                $n                    = 0;
                foreach ($map['SubscribeList'] as $item) {
                    $model->subscribeList[$n++] = null !== $item ? subscribeList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

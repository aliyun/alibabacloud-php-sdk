<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsGroupListResponseBody;

use AlibabaCloud\SDK\Ons\V20190214\Models\OnsGroupListResponseBody\data\subscribeInfoDo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var subscribeInfoDo[]
     */
    public $subscribeInfoDo;
    protected $_name = [
        'subscribeInfoDo' => 'SubscribeInfoDo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->subscribeInfoDo) {
            $res['SubscribeInfoDo'] = [];
            if (null !== $this->subscribeInfoDo && \is_array($this->subscribeInfoDo)) {
                $n = 0;
                foreach ($this->subscribeInfoDo as $item) {
                    $res['SubscribeInfoDo'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['SubscribeInfoDo'])) {
            if (!empty($map['SubscribeInfoDo'])) {
                $model->subscribeInfoDo = [];
                $n                      = 0;
                foreach ($map['SubscribeInfoDo'] as $item) {
                    $model->subscribeInfoDo[$n++] = null !== $item ? subscribeInfoDo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

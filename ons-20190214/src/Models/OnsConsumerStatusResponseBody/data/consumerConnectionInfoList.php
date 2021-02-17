<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusResponseBody\data;

use AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusResponseBody\data\consumerConnectionInfoList\consumerConnectionInfoDo;
use AlibabaCloud\Tea\Model;

class consumerConnectionInfoList extends Model
{
    /**
     * @var consumerConnectionInfoDo[]
     */
    public $consumerConnectionInfoDo;
    protected $_name = [
        'consumerConnectionInfoDo' => 'ConsumerConnectionInfoDo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consumerConnectionInfoDo) {
            $res['ConsumerConnectionInfoDo'] = [];
            if (null !== $this->consumerConnectionInfoDo && \is_array($this->consumerConnectionInfoDo)) {
                $n = 0;
                foreach ($this->consumerConnectionInfoDo as $item) {
                    $res['ConsumerConnectionInfoDo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return consumerConnectionInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConsumerConnectionInfoDo'])) {
            if (!empty($map['ConsumerConnectionInfoDo'])) {
                $model->consumerConnectionInfoDo = [];
                $n                               = 0;
                foreach ($map['ConsumerConnectionInfoDo'] as $item) {
                    $model->consumerConnectionInfoDo[$n++] = null !== $item ? consumerConnectionInfoDo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

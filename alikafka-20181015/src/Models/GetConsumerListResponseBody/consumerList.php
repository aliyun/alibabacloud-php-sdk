<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20181015\Models\GetConsumerListResponseBody;

use AlibabaCloud\SDK\Alikafka\V20181015\Models\GetConsumerListResponseBody\consumerList\consumerVO;
use AlibabaCloud\Tea\Model;

class consumerList extends Model
{
    /**
     * @var consumerVO[]
     */
    public $consumerVO;
    protected $_name = [
        'consumerVO' => 'ConsumerVO',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consumerVO) {
            $res['ConsumerVO'] = [];
            if (null !== $this->consumerVO && \is_array($this->consumerVO)) {
                $n = 0;
                foreach ($this->consumerVO as $item) {
                    $res['ConsumerVO'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return consumerList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConsumerVO'])) {
            if (!empty($map['ConsumerVO'])) {
                $model->consumerVO = [];
                $n                 = 0;
                foreach ($map['ConsumerVO'] as $item) {
                    $model->consumerVO[$n++] = null !== $item ? consumerVO::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

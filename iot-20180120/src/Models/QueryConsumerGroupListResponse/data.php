<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryConsumerGroupListResponse;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryConsumerGroupListResponse\data\consumerGroupDTO;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var consumerGroupDTO[]
     */
    public $consumerGroupDTO;
    protected $_name = [
        'consumerGroupDTO' => 'ConsumerGroupDTO',
    ];

    public function validate()
    {
        Model::validateRequired('consumerGroupDTO', $this->consumerGroupDTO, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consumerGroupDTO) {
            $res['ConsumerGroupDTO'] = [];
            if (null !== $this->consumerGroupDTO && \is_array($this->consumerGroupDTO)) {
                $n = 0;
                foreach ($this->consumerGroupDTO as $item) {
                    $res['ConsumerGroupDTO'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['ConsumerGroupDTO'])) {
            if (!empty($map['ConsumerGroupDTO'])) {
                $model->consumerGroupDTO = [];
                $n                       = 0;
                foreach ($map['ConsumerGroupDTO'] as $item) {
                    $model->consumerGroupDTO[$n++] = null !== $item ? consumerGroupDTO::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

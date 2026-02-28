<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryConsumerGroupListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryConsumerGroupListResponseBody\data\consumerGroupDTO;

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
        if (\is_array($this->consumerGroupDTO)) {
            Model::validateArray($this->consumerGroupDTO);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->consumerGroupDTO) {
            if (\is_array($this->consumerGroupDTO)) {
                $res['ConsumerGroupDTO'] = [];
                $n1 = 0;
                foreach ($this->consumerGroupDTO as $item1) {
                    $res['ConsumerGroupDTO'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ConsumerGroupDTO'])) {
            if (!empty($map['ConsumerGroupDTO'])) {
                $model->consumerGroupDTO = [];
                $n1 = 0;
                foreach ($map['ConsumerGroupDTO'] as $item1) {
                    $model->consumerGroupDTO[$n1] = consumerGroupDTO::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetConsumerListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetConsumerListResponseBody\consumerList\consumerVO;

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
        if (\is_array($this->consumerVO)) {
            Model::validateArray($this->consumerVO);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->consumerVO) {
            if (\is_array($this->consumerVO)) {
                $res['ConsumerVO'] = [];
                $n1 = 0;
                foreach ($this->consumerVO as $item1) {
                    $res['ConsumerVO'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ConsumerVO'])) {
            if (!empty($map['ConsumerVO'])) {
                $model->consumerVO = [];
                $n1 = 0;
                foreach ($map['ConsumerVO'] as $item1) {
                    $model->consumerVO[$n1++] = consumerVO::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class BatchAddConsumerGroupConsumersRequest extends Model
{
    /**
     * @var string[]
     */
    public $consumerIds;
    protected $_name = [
        'consumerIds' => 'consumerIds',
    ];

    public function validate()
    {
        if (\is_array($this->consumerIds)) {
            Model::validateArray($this->consumerIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->consumerIds) {
            if (\is_array($this->consumerIds)) {
                $res['consumerIds'] = [];
                $n1 = 0;
                foreach ($this->consumerIds as $item1) {
                    $res['consumerIds'][$n1] = $item1;
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
        if (isset($map['consumerIds'])) {
            if (!empty($map['consumerIds'])) {
                $model->consumerIds = [];
                $n1 = 0;
                foreach ($map['consumerIds'] as $item1) {
                    $model->consumerIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

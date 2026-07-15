<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\BatchAddConsumerGroupConsumersResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $failedConsumerIds;

    /**
     * @var string[]
     */
    public $skippedConsumerIds;

    /**
     * @var string[]
     */
    public $successConsumerIds;
    protected $_name = [
        'failedConsumerIds' => 'failedConsumerIds',
        'skippedConsumerIds' => 'skippedConsumerIds',
        'successConsumerIds' => 'successConsumerIds',
    ];

    public function validate()
    {
        if (\is_array($this->failedConsumerIds)) {
            Model::validateArray($this->failedConsumerIds);
        }
        if (\is_array($this->skippedConsumerIds)) {
            Model::validateArray($this->skippedConsumerIds);
        }
        if (\is_array($this->successConsumerIds)) {
            Model::validateArray($this->successConsumerIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failedConsumerIds) {
            if (\is_array($this->failedConsumerIds)) {
                $res['failedConsumerIds'] = [];
                $n1 = 0;
                foreach ($this->failedConsumerIds as $item1) {
                    $res['failedConsumerIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->skippedConsumerIds) {
            if (\is_array($this->skippedConsumerIds)) {
                $res['skippedConsumerIds'] = [];
                $n1 = 0;
                foreach ($this->skippedConsumerIds as $item1) {
                    $res['skippedConsumerIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->successConsumerIds) {
            if (\is_array($this->successConsumerIds)) {
                $res['successConsumerIds'] = [];
                $n1 = 0;
                foreach ($this->successConsumerIds as $item1) {
                    $res['successConsumerIds'][$n1] = $item1;
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
        if (isset($map['failedConsumerIds'])) {
            if (!empty($map['failedConsumerIds'])) {
                $model->failedConsumerIds = [];
                $n1 = 0;
                foreach ($map['failedConsumerIds'] as $item1) {
                    $model->failedConsumerIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['skippedConsumerIds'])) {
            if (!empty($map['skippedConsumerIds'])) {
                $model->skippedConsumerIds = [];
                $n1 = 0;
                foreach ($map['skippedConsumerIds'] as $item1) {
                    $model->skippedConsumerIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['successConsumerIds'])) {
            if (!empty($map['successConsumerIds'])) {
                $model->successConsumerIds = [];
                $n1 = 0;
                foreach ($map['successConsumerIds'] as $item1) {
                    $model->successConsumerIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

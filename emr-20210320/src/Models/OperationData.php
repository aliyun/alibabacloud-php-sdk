<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;

class OperationData extends Model
{
    /**
     * @var int
     */
    public $actualDeliveredAmounts;

    /**
     * @var string[]
     */
    public $failedRefundInstanceIds;

    /**
     * @var int
     */
    public $toBeDeliveredAmounts;
    protected $_name = [
        'actualDeliveredAmounts' => 'actualDeliveredAmounts',
        'failedRefundInstanceIds' => 'failedRefundInstanceIds',
        'toBeDeliveredAmounts' => 'toBeDeliveredAmounts',
    ];

    public function validate()
    {
        if (\is_array($this->failedRefundInstanceIds)) {
            Model::validateArray($this->failedRefundInstanceIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actualDeliveredAmounts) {
            $res['actualDeliveredAmounts'] = $this->actualDeliveredAmounts;
        }

        if (null !== $this->failedRefundInstanceIds) {
            if (\is_array($this->failedRefundInstanceIds)) {
                $res['failedRefundInstanceIds'] = [];
                $n1 = 0;
                foreach ($this->failedRefundInstanceIds as $item1) {
                    $res['failedRefundInstanceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->toBeDeliveredAmounts) {
            $res['toBeDeliveredAmounts'] = $this->toBeDeliveredAmounts;
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
        if (isset($map['actualDeliveredAmounts'])) {
            $model->actualDeliveredAmounts = $map['actualDeliveredAmounts'];
        }

        if (isset($map['failedRefundInstanceIds'])) {
            if (!empty($map['failedRefundInstanceIds'])) {
                $model->failedRefundInstanceIds = [];
                $n1 = 0;
                foreach ($map['failedRefundInstanceIds'] as $item1) {
                    $model->failedRefundInstanceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['toBeDeliveredAmounts'])) {
            $model->toBeDeliveredAmounts = $map['toBeDeliveredAmounts'];
        }

        return $model;
    }
}

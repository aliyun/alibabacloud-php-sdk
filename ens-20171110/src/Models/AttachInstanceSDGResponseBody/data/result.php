<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\AttachInstanceSDGResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\AttachInstanceSDGResponseBody\data\result\failedItems;

class result extends Model
{
    /**
     * @var int
     */
    public $failedCount;

    /**
     * @var failedItems[]
     */
    public $failedItems;

    /**
     * @var int
     */
    public $successCount;
    protected $_name = [
        'failedCount' => 'FailedCount',
        'failedItems' => 'FailedItems',
        'successCount' => 'SuccessCount',
    ];

    public function validate()
    {
        if (\is_array($this->failedItems)) {
            Model::validateArray($this->failedItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failedCount) {
            $res['FailedCount'] = $this->failedCount;
        }

        if (null !== $this->failedItems) {
            if (\is_array($this->failedItems)) {
                $res['FailedItems'] = [];
                $n1 = 0;
                foreach ($this->failedItems as $item1) {
                    $res['FailedItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->successCount) {
            $res['SuccessCount'] = $this->successCount;
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
        if (isset($map['FailedCount'])) {
            $model->failedCount = $map['FailedCount'];
        }

        if (isset($map['FailedItems'])) {
            if (!empty($map['FailedItems'])) {
                $model->failedItems = [];
                $n1 = 0;
                foreach ($map['FailedItems'] as $item1) {
                    $model->failedItems[$n1] = failedItems::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SuccessCount'])) {
            $model->successCount = $map['SuccessCount'];
        }

        return $model;
    }
}

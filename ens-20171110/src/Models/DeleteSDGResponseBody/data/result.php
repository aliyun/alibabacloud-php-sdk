<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DeleteSDGResponseBody\data;

use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteSDGResponseBody\data\result\failedItems;
use AlibabaCloud\Tea\Model;

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
        'failedCount'  => 'FailedCount',
        'failedItems'  => 'FailedItems',
        'successCount' => 'SuccessCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failedCount) {
            $res['FailedCount'] = $this->failedCount;
        }
        if (null !== $this->failedItems) {
            $res['FailedItems'] = [];
            if (null !== $this->failedItems && \is_array($this->failedItems)) {
                $n = 0;
                foreach ($this->failedItems as $item) {
                    $res['FailedItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->successCount) {
            $res['SuccessCount'] = $this->successCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailedCount'])) {
            $model->failedCount = $map['FailedCount'];
        }
        if (isset($map['FailedItems'])) {
            if (!empty($map['FailedItems'])) {
                $model->failedItems = [];
                $n                  = 0;
                foreach ($map['FailedItems'] as $item) {
                    $model->failedItems[$n++] = null !== $item ? failedItems::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SuccessCount'])) {
            $model->successCount = $map['SuccessCount'];
        }

        return $model;
    }
}

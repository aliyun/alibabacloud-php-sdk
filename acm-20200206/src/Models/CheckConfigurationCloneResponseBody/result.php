<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Acm\V20200206\Models\CheckConfigurationCloneResponseBody;

use AlibabaCloud\SDK\Acm\V20200206\Models\CheckConfigurationCloneResponseBody\result\successItems;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var bool
     */
    public $success;

    /**
     * @var successItems[]
     */
    public $successItems;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'success'      => 'Success',
        'successItems' => 'SuccessItems',
        'totalCount'   => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->successItems) {
            $res['SuccessItems'] = [];
            if (null !== $this->successItems && \is_array($this->successItems)) {
                $n = 0;
                foreach ($this->successItems as $item) {
                    $res['SuccessItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['SuccessItems'])) {
            if (!empty($map['SuccessItems'])) {
                $model->successItems = [];
                $n                   = 0;
                foreach ($map['SuccessItems'] as $item) {
                    $model->successItems[$n++] = null !== $item ? successItems::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}

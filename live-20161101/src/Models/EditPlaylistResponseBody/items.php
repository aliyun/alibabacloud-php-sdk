<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\EditPlaylistResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\EditPlaylistResponseBody\items\failedItems;
use AlibabaCloud\SDK\Live\V20161101\Models\EditPlaylistResponseBody\items\successItems;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var failedItems[]
     */
    public $failedItems;

    /**
     * @var successItems[]
     */
    public $successItems;
    protected $_name = [
        'failedItems'  => 'FailedItems',
        'successItems' => 'SuccessItems',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failedItems) {
            $res['FailedItems'] = [];
            if (null !== $this->failedItems && \is_array($this->failedItems)) {
                $n = 0;
                foreach ($this->failedItems as $item) {
                    $res['FailedItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailedItems'])) {
            if (!empty($map['FailedItems'])) {
                $model->failedItems = [];
                $n                  = 0;
                foreach ($map['FailedItems'] as $item) {
                    $model->failedItems[$n++] = null !== $item ? failedItems::fromMap($item) : $item;
                }
            }
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

        return $model;
    }
}

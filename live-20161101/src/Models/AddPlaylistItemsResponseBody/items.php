<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\AddPlaylistItemsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\AddPlaylistItemsResponseBody\items\failedItems;
use AlibabaCloud\SDK\Live\V20161101\Models\AddPlaylistItemsResponseBody\items\successItems;

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
        'failedItems' => 'FailedItems',
        'successItems' => 'SuccessItems',
    ];

    public function validate()
    {
        if (\is_array($this->failedItems)) {
            Model::validateArray($this->failedItems);
        }
        if (\is_array($this->successItems)) {
            Model::validateArray($this->successItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->successItems) {
            if (\is_array($this->successItems)) {
                $res['SuccessItems'] = [];
                $n1 = 0;
                foreach ($this->successItems as $item1) {
                    $res['SuccessItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['SuccessItems'])) {
            if (!empty($map['SuccessItems'])) {
                $model->successItems = [];
                $n1 = 0;
                foreach ($map['SuccessItems'] as $item1) {
                    $model->successItems[$n1] = successItems::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

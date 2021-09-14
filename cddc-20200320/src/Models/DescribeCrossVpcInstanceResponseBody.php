<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models;

use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeCrossVpcInstanceResponseBody\items;
use AlibabaCloud\Tea\Model;

class DescribeCrossVpcInstanceResponseBody extends Model
{
    /**
     * @var bool
     */
    public $hasDelInProcessTask;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $hasCreateInProcessTask;

    /**
     * @var items[]
     */
    public $items;
    protected $_name = [
        'hasDelInProcessTask'    => 'HasDelInProcessTask',
        'requestId'              => 'RequestId',
        'hasCreateInProcessTask' => 'HasCreateInProcessTask',
        'items'                  => 'Items',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hasDelInProcessTask) {
            $res['HasDelInProcessTask'] = $this->hasDelInProcessTask;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->hasCreateInProcessTask) {
            $res['HasCreateInProcessTask'] = $this->hasCreateInProcessTask;
        }
        if (null !== $this->items) {
            $res['Items'] = [];
            if (null !== $this->items && \is_array($this->items)) {
                $n = 0;
                foreach ($this->items as $item) {
                    $res['Items'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCrossVpcInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HasDelInProcessTask'])) {
            $model->hasDelInProcessTask = $map['HasDelInProcessTask'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['HasCreateInProcessTask'])) {
            $model->hasCreateInProcessTask = $map['HasCreateInProcessTask'];
        }
        if (isset($map['Items'])) {
            if (!empty($map['Items'])) {
                $model->items = [];
                $n            = 0;
                foreach ($map['Items'] as $item) {
                    $model->items[$n++] = null !== $item ? items::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

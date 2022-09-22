<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\CreateFileSystemRequest\orderDetails;
use AlibabaCloud\Tea\Model;

class CreateFileSystemRequest extends Model
{
    /**
     * @var orderDetails[]
     */
    public $orderDetails;
    protected $_name = [
        'orderDetails' => 'OrderDetails',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orderDetails) {
            $res['OrderDetails'] = [];
            if (null !== $this->orderDetails && \is_array($this->orderDetails)) {
                $n = 0;
                foreach ($this->orderDetails as $item) {
                    $res['OrderDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFileSystemRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrderDetails'])) {
            if (!empty($map['OrderDetails'])) {
                $model->orderDetails = [];
                $n                   = 0;
                foreach ($map['OrderDetails'] as $item) {
                    $model->orderDetails[$n++] = null !== $item ? orderDetails::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

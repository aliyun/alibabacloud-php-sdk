<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateFileSystemRequest\orderDetails;

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
        if (\is_array($this->orderDetails)) {
            Model::validateArray($this->orderDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->orderDetails) {
            if (\is_array($this->orderDetails)) {
                $res['OrderDetails'] = [];
                $n1 = 0;
                foreach ($this->orderDetails as $item1) {
                    $res['OrderDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['OrderDetails'])) {
            if (!empty($map['OrderDetails'])) {
                $model->orderDetails = [];
                $n1 = 0;
                foreach ($map['OrderDetails'] as $item1) {
                    $model->orderDetails[$n1] = orderDetails::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

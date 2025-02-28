<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCurrentModifyOrderResponseBody\modifyOrder;

class DescribeCurrentModifyOrderResponseBody extends Model
{
    /**
     * @var modifyOrder[]
     */
    public $modifyOrder;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'modifyOrder' => 'ModifyOrder',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->modifyOrder)) {
            Model::validateArray($this->modifyOrder);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->modifyOrder) {
            if (\is_array($this->modifyOrder)) {
                $res['ModifyOrder'] = [];
                $n1                 = 0;
                foreach ($this->modifyOrder as $item1) {
                    $res['ModifyOrder'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ModifyOrder'])) {
            if (!empty($map['ModifyOrder'])) {
                $model->modifyOrder = [];
                $n1                 = 0;
                foreach ($map['ModifyOrder'] as $item1) {
                    $model->modifyOrder[$n1++] = modifyOrder::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

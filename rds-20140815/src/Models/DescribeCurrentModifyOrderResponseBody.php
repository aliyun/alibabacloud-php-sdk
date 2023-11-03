<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCurrentModifyOrderResponseBody\modifyOrder;
use AlibabaCloud\Tea\Model;

class DescribeCurrentModifyOrderResponseBody extends Model
{
    /**
     * @description The specification change order.
     *
     * @var modifyOrder[]
     */
    public $modifyOrder;

    /**
     * @description The request ID.
     *
     * @example C87415BE-F5AB-55A4-A60E-A0A329EAF2A4
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'modifyOrder' => 'ModifyOrder',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->modifyOrder) {
            $res['ModifyOrder'] = [];
            if (null !== $this->modifyOrder && \is_array($this->modifyOrder)) {
                $n = 0;
                foreach ($this->modifyOrder as $item) {
                    $res['ModifyOrder'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCurrentModifyOrderResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModifyOrder'])) {
            if (!empty($map['ModifyOrder'])) {
                $model->modifyOrder = [];
                $n                  = 0;
                foreach ($map['ModifyOrder'] as $item) {
                    $model->modifyOrder[$n++] = null !== $item ? modifyOrder::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class LogisticsOrderListResult extends Model
{
    /**
     * @var LogisticsOrderResult[]
     */
    public $logisticsOrderList;

    /**
     * @example 3239281273464326823
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'logisticsOrderList' => 'logisticsOrderList',
        'requestId'          => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logisticsOrderList) {
            $res['logisticsOrderList'] = [];
            if (null !== $this->logisticsOrderList && \is_array($this->logisticsOrderList)) {
                $n = 0;
                foreach ($this->logisticsOrderList as $item) {
                    $res['logisticsOrderList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return LogisticsOrderListResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['logisticsOrderList'])) {
            if (!empty($map['logisticsOrderList'])) {
                $model->logisticsOrderList = [];
                $n                         = 0;
                foreach ($map['logisticsOrderList'] as $item) {
                    $model->logisticsOrderList[$n++] = null !== $item ? LogisticsOrderResult::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}

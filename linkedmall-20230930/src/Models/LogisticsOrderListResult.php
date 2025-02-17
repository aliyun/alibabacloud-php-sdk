<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Dara\Model;

class LogisticsOrderListResult extends Model
{
    /**
     * @var LogisticsOrderResult[]
     */
    public $logisticsOrderList;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'logisticsOrderList' => 'logisticsOrderList',
        'requestId'          => 'requestId',
    ];

    public function validate()
    {
        if (\is_array($this->logisticsOrderList)) {
            Model::validateArray($this->logisticsOrderList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logisticsOrderList) {
            if (\is_array($this->logisticsOrderList)) {
                $res['logisticsOrderList'] = [];
                $n1                        = 0;
                foreach ($this->logisticsOrderList as $item1) {
                    $res['logisticsOrderList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['logisticsOrderList'])) {
            if (!empty($map['logisticsOrderList'])) {
                $model->logisticsOrderList = [];
                $n1                        = 0;
                foreach ($map['logisticsOrderList'] as $item1) {
                    $model->logisticsOrderList[$n1++] = LogisticsOrderResult::fromMap($item1);
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}

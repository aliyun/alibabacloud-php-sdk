<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\CheckCommodityStatusResponseBody\commodities;

class CheckCommodityStatusResponseBody extends Model
{
    /**
     * @var commodities[]
     */
    public $commodities;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'commodities' => 'commodities',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (\is_array($this->commodities)) {
            Model::validateArray($this->commodities);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commodities) {
            if (\is_array($this->commodities)) {
                $res['commodities'] = [];
                $n1 = 0;
                foreach ($this->commodities as $item1) {
                    $res['commodities'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['commodities'])) {
            if (!empty($map['commodities'])) {
                $model->commodities = [];
                $n1 = 0;
                foreach ($map['commodities'] as $item1) {
                    $model->commodities[$n1] = commodities::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}

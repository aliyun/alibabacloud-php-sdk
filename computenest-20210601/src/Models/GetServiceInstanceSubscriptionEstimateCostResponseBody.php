<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceInstanceSubscriptionEstimateCostResponseBody\resourcePrices;

class GetServiceInstanceSubscriptionEstimateCostResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var resourcePrices[]
     */
    public $resourcePrices;
    protected $_name = [
        'requestId' => 'RequestId',
        'resourcePrices' => 'ResourcePrices',
    ];

    public function validate()
    {
        if (\is_array($this->resourcePrices)) {
            Model::validateArray($this->resourcePrices);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourcePrices) {
            if (\is_array($this->resourcePrices)) {
                $res['ResourcePrices'] = [];
                $n1 = 0;
                foreach ($this->resourcePrices as $item1) {
                    $res['ResourcePrices'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResourcePrices'])) {
            if (!empty($map['ResourcePrices'])) {
                $model->resourcePrices = [];
                $n1 = 0;
                foreach ($map['ResourcePrices'] as $item1) {
                    $model->resourcePrices[$n1] = resourcePrices::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

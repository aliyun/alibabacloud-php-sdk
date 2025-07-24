<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models;

use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceInstanceSubscriptionEstimateCostResponseBody\resourcePrices;
use AlibabaCloud\Tea\Model;

class GetServiceInstanceSubscriptionEstimateCostResponseBody extends Model
{
    /**
     * @description Request ID.
     *
     * @example 464C8CB6-A548-5206-B83C-D32A8E43EC21
     *
     * @var string
     */
    public $requestId;

    /**
     * @description List of resource price information.
     *
     * @var resourcePrices[]
     */
    public $resourcePrices;
    protected $_name = [
        'requestId' => 'RequestId',
        'resourcePrices' => 'ResourcePrices',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourcePrices) {
            $res['ResourcePrices'] = [];
            if (null !== $this->resourcePrices && \is_array($this->resourcePrices)) {
                $n = 0;
                foreach ($this->resourcePrices as $item) {
                    $res['ResourcePrices'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetServiceInstanceSubscriptionEstimateCostResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourcePrices'])) {
            if (!empty($map['ResourcePrices'])) {
                $model->resourcePrices = [];
                $n = 0;
                foreach ($map['ResourcePrices'] as $item) {
                    $model->resourcePrices[$n++] = null !== $item ? resourcePrices::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

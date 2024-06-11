<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\SDK\Edsaic\V20230930\Models\CheckResourceStockResponseBody\resourceStockModels;
use AlibabaCloud\Tea\Model;

class CheckResourceStockResponseBody extends Model
{
    /**
     * @example 805D8FB6-512A-531C-9E4D-2A807D3C****
     *
     * @var string
     */
    public $requestId;

    /**
     * @var resourceStockModels[]
     */
    public $resourceStockModels;
    protected $_name = [
        'requestId'           => 'RequestId',
        'resourceStockModels' => 'ResourceStockModels',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceStockModels) {
            $res['ResourceStockModels'] = [];
            if (null !== $this->resourceStockModels && \is_array($this->resourceStockModels)) {
                $n = 0;
                foreach ($this->resourceStockModels as $item) {
                    $res['ResourceStockModels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckResourceStockResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceStockModels'])) {
            if (!empty($map['ResourceStockModels'])) {
                $model->resourceStockModels = [];
                $n                          = 0;
                foreach ($map['ResourceStockModels'] as $item) {
                    $model->resourceStockModels[$n++] = null !== $item ? resourceStockModels::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CheckResourceStockResponseBody\resourceStockModels;

class CheckResourceStockResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var resourceStockModels[]
     */
    public $resourceStockModels;
    protected $_name = [
        'requestId' => 'RequestId',
        'resourceStockModels' => 'ResourceStockModels',
    ];

    public function validate()
    {
        if (\is_array($this->resourceStockModels)) {
            Model::validateArray($this->resourceStockModels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceStockModels) {
            if (\is_array($this->resourceStockModels)) {
                $res['ResourceStockModels'] = [];
                $n1 = 0;
                foreach ($this->resourceStockModels as $item1) {
                    $res['ResourceStockModels'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['ResourceStockModels'])) {
            if (!empty($map['ResourceStockModels'])) {
                $model->resourceStockModels = [];
                $n1 = 0;
                foreach ($map['ResourceStockModels'] as $item1) {
                    $model->resourceStockModels[$n1++] = resourceStockModels::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

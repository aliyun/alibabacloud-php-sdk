<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetResourceGroupResourceCountsResponseBody\resourceCounts;

class GetResourceGroupResourceCountsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var resourceCounts[]
     */
    public $resourceCounts;
    protected $_name = [
        'requestId' => 'RequestId',
        'resourceCounts' => 'ResourceCounts',
    ];

    public function validate()
    {
        if (\is_array($this->resourceCounts)) {
            Model::validateArray($this->resourceCounts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceCounts) {
            if (\is_array($this->resourceCounts)) {
                $res['ResourceCounts'] = [];
                $n1 = 0;
                foreach ($this->resourceCounts as $item1) {
                    $res['ResourceCounts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['ResourceCounts'])) {
            if (!empty($map['ResourceCounts'])) {
                $model->resourceCounts = [];
                $n1 = 0;
                foreach ($map['ResourceCounts'] as $item1) {
                    $model->resourceCounts[$n1] = resourceCounts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

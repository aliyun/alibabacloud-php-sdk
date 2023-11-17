<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeComponentAssetsResponseBody\componentAssets;
use AlibabaCloud\Tea\Model;

class DescribeComponentAssetsResponseBody extends Model
{
    /**
     * @var componentAssets[]
     */
    public $componentAssets;

    /**
     * @example BFEFB76D-DD0E-5529-BD57-0DAC10B9B30F
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'componentAssets' => 'ComponentAssets',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->componentAssets) {
            $res['ComponentAssets'] = [];
            if (null !== $this->componentAssets && \is_array($this->componentAssets)) {
                $n = 0;
                foreach ($this->componentAssets as $item) {
                    $res['ComponentAssets'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeComponentAssetsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComponentAssets'])) {
            if (!empty($map['ComponentAssets'])) {
                $model->componentAssets = [];
                $n                      = 0;
                foreach ($map['ComponentAssets'] as $item) {
                    $model->componentAssets[$n++] = null !== $item ? componentAssets::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

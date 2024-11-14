<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeUserAssetResponseBody\assets;
use AlibabaCloud\Tea\Model;

class DescribeUserAssetResponseBody extends Model
{
    /**
     * @description The API statistics.
     *
     * @var assets[]
     */
    public $assets;

    /**
     * @description The request ID.
     *
     * @example C1823E96-EF4B-5BD2-9E02-1D18****3ED8
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'assets'    => 'Assets',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assets) {
            $res['Assets'] = [];
            if (null !== $this->assets && \is_array($this->assets)) {
                $n = 0;
                foreach ($this->assets as $item) {
                    $res['Assets'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeUserAssetResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Assets'])) {
            if (!empty($map['Assets'])) {
                $model->assets = [];
                $n             = 0;
                foreach ($map['Assets'] as $item) {
                    $model->assets[$n++] = null !== $item ? assets::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

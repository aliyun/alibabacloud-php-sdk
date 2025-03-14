<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeWhiteListAssetResponseBody\assets;
use AlibabaCloud\Tea\Model;

class DescribeWhiteListAssetResponseBody extends Model
{
    /**
     * @description The information about the servers.
     *
     * @var assets[]
     */
    public $assets;

    /**
     * @description The request ID.
     *
     * @example A3D7C47D-3F11-57BB-90E8-E5C20C61****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'assets' => 'Assets',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

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
     * @return DescribeWhiteListAssetResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Assets'])) {
            if (!empty($map['Assets'])) {
                $model->assets = [];
                $n = 0;
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

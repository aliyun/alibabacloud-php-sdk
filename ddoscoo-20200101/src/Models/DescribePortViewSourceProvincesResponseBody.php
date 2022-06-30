<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribePortViewSourceProvincesResponseBody\sourceProvinces;
use AlibabaCloud\Tea\Model;

class DescribePortViewSourceProvincesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var sourceProvinces[]
     */
    public $sourceProvinces;
    protected $_name = [
        'requestId'       => 'RequestId',
        'sourceProvinces' => 'SourceProvinces',
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
        if (null !== $this->sourceProvinces) {
            $res['SourceProvinces'] = [];
            if (null !== $this->sourceProvinces && \is_array($this->sourceProvinces)) {
                $n = 0;
                foreach ($this->sourceProvinces as $item) {
                    $res['SourceProvinces'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePortViewSourceProvincesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SourceProvinces'])) {
            if (!empty($map['SourceProvinces'])) {
                $model->sourceProvinces = [];
                $n                      = 0;
                foreach ($map['SourceProvinces'] as $item) {
                    $model->sourceProvinces[$n++] = null !== $item ? sourceProvinces::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

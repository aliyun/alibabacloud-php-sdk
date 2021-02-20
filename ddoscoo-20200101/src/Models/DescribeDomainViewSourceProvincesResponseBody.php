<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainViewSourceProvincesResponseBody\sourceProvinces;
use AlibabaCloud\Tea\Model;

class DescribeDomainViewSourceProvincesResponseBody extends Model
{
    /**
     * @var sourceProvinces[]
     */
    public $sourceProvinces;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'sourceProvinces' => 'SourceProvinces',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceProvinces) {
            $res['SourceProvinces'] = [];
            if (null !== $this->sourceProvinces && \is_array($this->sourceProvinces)) {
                $n = 0;
                foreach ($this->sourceProvinces as $item) {
                    $res['SourceProvinces'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeDomainViewSourceProvincesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceProvinces'])) {
            if (!empty($map['SourceProvinces'])) {
                $model->sourceProvinces = [];
                $n                      = 0;
                foreach ($map['SourceProvinces'] as $item) {
                    $model->sourceProvinces[$n++] = null !== $item ? sourceProvinces::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

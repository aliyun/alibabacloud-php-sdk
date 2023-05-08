<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeVersionsResponseBody\versionInfo;
use AlibabaCloud\Tea\Model;

class DescribeVersionsResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example BD65C0AD-D3C6-48D3-8D93-38D2015C****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The available ASM versions.
     *
     * @var versionInfo[]
     */
    public $versionInfo;
    protected $_name = [
        'requestId'   => 'RequestId',
        'versionInfo' => 'VersionInfo',
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
        if (null !== $this->versionInfo) {
            $res['VersionInfo'] = [];
            if (null !== $this->versionInfo && \is_array($this->versionInfo)) {
                $n = 0;
                foreach ($this->versionInfo as $item) {
                    $res['VersionInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVersionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VersionInfo'])) {
            if (!empty($map['VersionInfo'])) {
                $model->versionInfo = [];
                $n                  = 0;
                foreach ($map['VersionInfo'] as $item) {
                    $model->versionInfo[$n++] = null !== $item ? versionInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

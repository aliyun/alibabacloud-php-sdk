<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeNamespaceScopeSidecarConfigResponseBody\configPatches;
use AlibabaCloud\Tea\Model;

class DescribeNamespaceScopeSidecarConfigResponseBody extends Model
{
    /**
     * @description The namespace-level sidecar proxy configurations.
     *
     * @var configPatches
     */
    public $configPatches;

    /**
     * @description The request ID.
     *
     * @example 31d3a0f0-07ed-4f6e-9004-1804498c****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'configPatches' => 'ConfigPatches',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configPatches) {
            $res['ConfigPatches'] = null !== $this->configPatches ? $this->configPatches->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeNamespaceScopeSidecarConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigPatches'])) {
            $model->configPatches = configPatches::fromMap($map['ConfigPatches']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeNamespaceScopeSidecarConfigResponseBody\configPatches;
use AlibabaCloud\Tea\Model;

class DescribeNamespaceScopeSidecarConfigResponseBody extends Model
{
    /**
     * @var configPatches
     */
    public $configPatches;

    /**
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

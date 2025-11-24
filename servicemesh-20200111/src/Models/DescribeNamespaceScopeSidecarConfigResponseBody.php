<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeNamespaceScopeSidecarConfigResponseBody\configPatches;

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
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->configPatches) {
            $this->configPatches->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configPatches) {
            $res['ConfigPatches'] = null !== $this->configPatches ? $this->configPatches->toArray($noStream) : $this->configPatches;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ConfigPatches'])) {
            $model->configPatches = configPatches::fromMap($map['ConfigPatches']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

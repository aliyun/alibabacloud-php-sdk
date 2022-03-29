<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceManagedResourceResponseBody\managedResource;
use AlibabaCloud\Tea\Model;

class DescribeServiceManagedResourceResponseBody extends Model
{
    /**
     * @var managedResource
     */
    public $managedResource;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'managedResource' => 'ManagedResource',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->managedResource) {
            $res['ManagedResource'] = null !== $this->managedResource ? $this->managedResource->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeServiceManagedResourceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ManagedResource'])) {
            $model->managedResource = managedResource::fromMap($map['ManagedResource']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

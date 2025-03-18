<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DescribeInstanceAttributeResponseBody\instanceAttribute;
use AlibabaCloud\Tea\Model;

class DescribeInstanceAttributeResponseBody extends Model
{
    /**
     * @description The attribute information about the bastion host.
     *
     * @var instanceAttribute
     */
    public $instanceAttribute;

    /**
     * @description The ID of the request.
     *
     * @example 082FAB35-6AB9-4FD5-8750-D36673548E76
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceAttribute' => 'InstanceAttribute',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceAttribute) {
            $res['InstanceAttribute'] = null !== $this->instanceAttribute ? $this->instanceAttribute->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceAttribute'])) {
            $model->instanceAttribute = instanceAttribute::fromMap($map['InstanceAttribute']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

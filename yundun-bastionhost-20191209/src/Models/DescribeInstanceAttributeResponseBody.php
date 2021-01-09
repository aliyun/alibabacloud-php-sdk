<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DescribeInstanceAttributeResponseBody\instanceAttribute;
use AlibabaCloud\Tea\Model;

class DescribeInstanceAttributeResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var instanceAttribute
     */
    public $instanceAttribute;
    protected $_name = [
        'requestId'         => 'RequestId',
        'instanceAttribute' => 'InstanceAttribute',
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
        if (null !== $this->instanceAttribute) {
            $res['InstanceAttribute'] = null !== $this->instanceAttribute ? $this->instanceAttribute->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['InstanceAttribute'])) {
            $model->instanceAttribute = instanceAttribute::fromMap($map['InstanceAttribute']);
        }

        return $model;
    }
}

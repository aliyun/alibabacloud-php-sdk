<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DescribeInstanceAttributeResponseBody\instanceAttribute;

class DescribeInstanceAttributeResponseBody extends Model
{
    /**
     * @var instanceAttribute
     */
    public $instanceAttribute;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceAttribute' => 'InstanceAttribute',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->instanceAttribute) {
            $this->instanceAttribute->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceAttribute) {
            $res['InstanceAttribute'] = null !== $this->instanceAttribute ? $this->instanceAttribute->toArray($noStream) : $this->instanceAttribute;
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
        if (isset($map['InstanceAttribute'])) {
            $model->instanceAttribute = instanceAttribute::fromMap($map['InstanceAttribute']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

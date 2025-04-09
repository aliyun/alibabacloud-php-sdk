<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCInstanceTypesResponseBody\instanceTypes;

class DescribeRCInstanceTypesResponseBody extends Model
{
    /**
     * @var instanceTypes
     */
    public $instanceTypes;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceTypes' => 'InstanceTypes',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->instanceTypes) {
            $this->instanceTypes->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceTypes) {
            $res['InstanceTypes'] = null !== $this->instanceTypes ? $this->instanceTypes->toArray($noStream) : $this->instanceTypes;
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
        if (isset($map['InstanceTypes'])) {
            $model->instanceTypes = instanceTypes::fromMap($map['InstanceTypes']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

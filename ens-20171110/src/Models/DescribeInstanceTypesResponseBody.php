<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstanceTypesResponseBody\instanceTypes;
use AlibabaCloud\Tea\Model;

class DescribeInstanceTypesResponseBody extends Model
{
    /**
     * @var int
     */
    public $code;

    /**
     * @var instanceTypes
     */
    public $instanceTypes;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'          => 'Code',
        'instanceTypes' => 'InstanceTypes',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->instanceTypes) {
            $res['InstanceTypes'] = null !== $this->instanceTypes ? $this->instanceTypes->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceTypesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['InstanceTypes'])) {
            $model->instanceTypes = instanceTypes::fromMap($map['InstanceTypes']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

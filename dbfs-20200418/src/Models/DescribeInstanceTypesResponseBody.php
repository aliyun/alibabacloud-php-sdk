<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DBFS\V20200418\Models;

use AlibabaCloud\SDK\DBFS\V20200418\Models\DescribeInstanceTypesResponseBody\instanceTypes;
use AlibabaCloud\Tea\Model;

class DescribeInstanceTypesResponseBody extends Model
{
    /**
     * @var instanceTypes[]
     */
    public $instanceTypes;

    /**
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceTypes' => 'InstanceTypes',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceTypes) {
            $res['InstanceTypes'] = [];
            if (null !== $this->instanceTypes && \is_array($this->instanceTypes)) {
                $n = 0;
                foreach ($this->instanceTypes as $item) {
                    $res['InstanceTypes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['InstanceTypes'])) {
            if (!empty($map['InstanceTypes'])) {
                $model->instanceTypes = [];
                $n                    = 0;
                foreach ($map['InstanceTypes'] as $item) {
                    $model->instanceTypes[$n++] = null !== $item ? instanceTypes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

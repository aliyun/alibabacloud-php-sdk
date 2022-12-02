<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class DescribeInstanceTenantModesResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $instanceModes;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceModes' => 'InstanceModes',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceModes) {
            $res['InstanceModes'] = $this->instanceModes;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceTenantModesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceModes'])) {
            if (!empty($map['InstanceModes'])) {
                $model->instanceModes = $map['InstanceModes'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

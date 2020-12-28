<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class DescribeDeploymentSetSupportedInstanceTypeFamilyResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $instanceTypeFamilies;
    protected $_name = [
        'requestId'            => 'RequestId',
        'instanceTypeFamilies' => 'InstanceTypeFamilies',
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
        if (null !== $this->instanceTypeFamilies) {
            $res['InstanceTypeFamilies'] = $this->instanceTypeFamilies;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDeploymentSetSupportedInstanceTypeFamilyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['InstanceTypeFamilies'])) {
            $model->instanceTypeFamilies = $map['InstanceTypeFamilies'];
        }

        return $model;
    }
}

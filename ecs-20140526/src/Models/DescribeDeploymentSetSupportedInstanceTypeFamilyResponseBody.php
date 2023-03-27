<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class DescribeDeploymentSetSupportedInstanceTypeFamilyResponseBody extends Model
{
    /**
     * @description The instance families that support deployment sets.
     *
     * @example ecs.i2g,ecs.i1,ecs.i2ne,ecs.i2gne
     *
     * @var string
     */
    public $instanceTypeFamilies;

    /**
     * @description The ID of the request.
     *
     * @example 473469C7-AA6F-4DC5-B7DB-A3DC7DE1C52E
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceTypeFamilies' => 'InstanceTypeFamilies',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceTypeFamilies) {
            $res['InstanceTypeFamilies'] = $this->instanceTypeFamilies;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['InstanceTypeFamilies'])) {
            $model->instanceTypeFamilies = $map['InstanceTypeFamilies'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

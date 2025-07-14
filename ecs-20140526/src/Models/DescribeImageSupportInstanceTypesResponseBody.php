<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImageSupportInstanceTypesResponseBody\instanceTypes;
use AlibabaCloud\Tea\Model;

class DescribeImageSupportInstanceTypesResponseBody extends Model
{
    /**
     * @description The key of filter N. Only the image ID can be used to filter instance types. Valid values:
     *
     *   imagId: image ID
     *   filter: image ID
     *
     * @example m-o6w3gy99qf89rkga****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description {
     * "RequestId": "CF661E2D-4AFE-4BCD-959A-A65E14416B44",
     * "RegionId": "cn-hangzhou",
     * "ImageId": "ubuntu_16_0402_64_20G_alibase_20180409.vhd",
     * "InstanceTypes": {
     * "InstanceType": [{
     * "InstanceTypeId": "ecs.t1.xsmall",
     * "CpuCoreCount": 1,
     * "MemorySize": 0.5,
     * "InstanceTypeFamily": "ecs.t1"
     * },
     * {
     * "InstanceTypeId": "ecs.t1.small",
     * "CpuCoreCount": 1,
     * "MemorySize": 1,
     * "InstanceTypeFamily": "ecs.t1"
     * }]
     * }
     * }
     *
     * @var instanceTypes
     */
    public $instanceTypes;

    /**
     * @description {
     * "RequestId": "CF661E2D-4AFE-4BCD-959A-A65E14416B44",
     * "RegionId": "cn-hangzhou",
     * "ImageId": "ubuntu_16_0402_64_20G_alibase_20180409.vhd",
     * "InstanceTypes": {
     * "InstanceType": [{
     * "InstanceTypeId": "ecs.t1.xsmall",
     * "CpuCoreCount": 1,
     * "MemorySize": 0.5,
     * "InstanceTypeFamily": "ecs.t1"
     * },
     * {
     * "InstanceTypeId": "ecs.t1.small",
     * "CpuCoreCount": 1,
     * "MemorySize": 1,
     * "InstanceTypeFamily": "ecs.t1"
     * }]
     * }
     * }
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the request.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'imageId' => 'ImageId',
        'instanceTypes' => 'InstanceTypes',
        'regionId' => 'RegionId',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->instanceTypes) {
            $res['InstanceTypes'] = null !== $this->instanceTypes ? $this->instanceTypes->toMap() : null;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeImageSupportInstanceTypesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['InstanceTypes'])) {
            $model->instanceTypes = instanceTypes::fromMap($map['InstanceTypes']);
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

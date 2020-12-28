<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImageSupportInstanceTypesResponseBody\instanceTypes;
use AlibabaCloud\Tea\Model;

class DescribeImageSupportInstanceTypesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var instanceTypes[]
     */
    public $instanceTypes;
    protected $_name = [
        'requestId'     => 'RequestId',
        'imageId'       => 'ImageId',
        'regionId'      => 'RegionId',
        'instanceTypes' => 'InstanceTypes',
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
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->instanceTypes) {
            $res['InstanceTypes'] = [];
            if (null !== $this->instanceTypes && \is_array($this->instanceTypes)) {
                $n = 0;
                foreach ($this->instanceTypes as $item) {
                    $res['InstanceTypes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['InstanceTypes'])) {
            if (!empty($map['InstanceTypes'])) {
                $model->instanceTypes = [];
                $n                    = 0;
                foreach ($map['InstanceTypes'] as $item) {
                    $model->instanceTypes[$n++] = null !== $item ? instanceTypes::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

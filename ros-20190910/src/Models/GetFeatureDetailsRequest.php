<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class GetFeatureDetailsRequest extends Model
{
    /**
     * @description The one or more features that you want to query. Valid values:
     *
     *   Terraform: the Terraform hosting feature.
     *   ResourceCleaner: the resource cleaner feature. You can use ALIYUN::ROS::ResourceCleaner to create a resource cleaner.
     *   TemplateScratch: the scenario feature.
     *   All: all features that are supported by ROS.
     *
     * @example Terraform
     *
     * @var string
     */
    public $feature;

    /**
     * @description The region ID of the stack. You can call the [DescribeRegions](~~131035~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'feature'  => 'Feature',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->feature) {
            $res['Feature'] = $this->feature;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetFeatureDetailsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Feature'])) {
            $model->feature = $map['Feature'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}

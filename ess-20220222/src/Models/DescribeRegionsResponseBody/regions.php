<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeRegionsResponseBody;

use AlibabaCloud\Tea\Model;

class regions extends Model
{
    /**
     * @description Indicates whether the region supports scaling groups of the classic network type. Valid values:
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var bool
     */
    public $classicUnavailable;

    /**
     * @description The name of the region.
     *
     * @example China (Beijing)
     *
     * @var string
     */
    public $localName;

    /**
     * @description The endpoint of the region.
     *
     * @example ess.aliyuncs.com
     *
     * @var string
     */
    public $regionEndpoint;

    /**
     * @description The ID of the region.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Indicates whether the region supports scaling groups of the virtual private cloud (VPC) type. Valid values:
     *
     *   true: The region does not support scaling groups of the VPC type.
     *   false: The region supports scaling groups of the VPC type.
     *
     * @example false
     *
     * @var bool
     */
    public $vpcUnavailable;
    protected $_name = [
        'classicUnavailable' => 'ClassicUnavailable',
        'localName'          => 'LocalName',
        'regionEndpoint'     => 'RegionEndpoint',
        'regionId'           => 'RegionId',
        'vpcUnavailable'     => 'VpcUnavailable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->classicUnavailable) {
            $res['ClassicUnavailable'] = $this->classicUnavailable;
        }
        if (null !== $this->localName) {
            $res['LocalName'] = $this->localName;
        }
        if (null !== $this->regionEndpoint) {
            $res['RegionEndpoint'] = $this->regionEndpoint;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->vpcUnavailable) {
            $res['VpcUnavailable'] = $this->vpcUnavailable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return regions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClassicUnavailable'])) {
            $model->classicUnavailable = $map['ClassicUnavailable'];
        }
        if (isset($map['LocalName'])) {
            $model->localName = $map['LocalName'];
        }
        if (isset($map['RegionEndpoint'])) {
            $model->regionEndpoint = $map['RegionEndpoint'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['VpcUnavailable'])) {
            $model->vpcUnavailable = $map['VpcUnavailable'];
        }

        return $model;
    }
}

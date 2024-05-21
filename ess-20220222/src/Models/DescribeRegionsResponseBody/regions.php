<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeRegionsResponseBody;

use AlibabaCloud\Tea\Model;

class regions extends Model
{
    /**
     * @description Indicates whether the current region supports scaling groups that reside in the classic network. Valid values:
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
     * @description The region name.
     *
     * @example China (Beijing)
     *
     * @var string
     */
    public $localName;

    /**
     * @description The region endpoint.
     *
     * @example ess.aliyuncs.com
     *
     * @var string
     */
    public $regionEndpoint;

    /**
     * @description The region ID.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Indicates whether the current region supports scaling groups that reside in virtual private clouds (VPCs). Valid values:
     *
     *   true
     *   false
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

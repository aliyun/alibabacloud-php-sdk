<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Tea\Model;

class DescribeIpSetRequest extends Model
{
    /**
     * @description The ID of the acceleration region.
     *
     * This parameter is required.
     * @example ips-bp11ilwqjdkjeg9r7****
     *
     * @var string
     */
    public $ipSetId;

    /**
     * @description The ID of the region where the Global Accelerator (GA) instance is deployed. Set the value to **cn-hangzhou**.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'ipSetId'  => 'IpSetId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipSetId) {
            $res['IpSetId'] = $this->ipSetId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeIpSetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpSetId'])) {
            $model->ipSetId = $map['IpSetId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}

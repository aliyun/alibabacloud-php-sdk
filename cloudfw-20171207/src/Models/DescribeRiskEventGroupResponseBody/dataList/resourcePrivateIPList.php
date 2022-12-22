<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeRiskEventGroupResponseBody\dataList;

use AlibabaCloud\Tea\Model;

class resourcePrivateIPList extends Model
{
    /**
     * @description The ID of the region to which the private IP address belongs.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionNo;

    /**
     * @description The ID of the instance that uses the private IP address.
     *
     * @example i-wz92jf4scg2zb74p****
     *
     * @var string
     */
    public $resourceInstanceId;

    /**
     * @description The name of the instance that uses the private IP address.
     *
     * @example LD-shenzhen-zy****
     *
     * @var string
     */
    public $resourceInstanceName;

    /**
     * @description The private IP address.
     *
     * @example 10.255.XX.XX
     *
     * @var string
     */
    public $resourcePrivateIP;
    protected $_name = [
        'regionNo'             => 'RegionNo',
        'resourceInstanceId'   => 'ResourceInstanceId',
        'resourceInstanceName' => 'ResourceInstanceName',
        'resourcePrivateIP'    => 'ResourcePrivateIP',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }
        if (null !== $this->resourceInstanceId) {
            $res['ResourceInstanceId'] = $this->resourceInstanceId;
        }
        if (null !== $this->resourceInstanceName) {
            $res['ResourceInstanceName'] = $this->resourceInstanceName;
        }
        if (null !== $this->resourcePrivateIP) {
            $res['ResourcePrivateIP'] = $this->resourcePrivateIP;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourcePrivateIPList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }
        if (isset($map['ResourceInstanceId'])) {
            $model->resourceInstanceId = $map['ResourceInstanceId'];
        }
        if (isset($map['ResourceInstanceName'])) {
            $model->resourceInstanceName = $map['ResourceInstanceName'];
        }
        if (isset($map['ResourcePrivateIP'])) {
            $model->resourcePrivateIP = $map['ResourcePrivateIP'];
        }

        return $model;
    }
}

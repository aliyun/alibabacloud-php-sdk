<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eipanycast\V20200309\Models\ListAnycastEipAddressesResponseBody\anycastList;

use AlibabaCloud\Tea\Model;

class anycastEipBindInfoList extends Model
{
    /**
     * @description The ID of the cloud resource with which the Anycast EIP is associated.
     *
     * @example lb-2zebb08phyczzawe****
     *
     * @var string
     */
    public $bindInstanceId;

    /**
     * @description The ID of the region where the cloud resource is deployed.
     *
     * @example us-west-1
     *
     * @var string
     */
    public $bindInstanceRegionId;

    /**
     * @description The type of cloud resource with which the Anycast EIP is associated.
     *
     *   **SlbInstance**: an internal-facing Classic Load Balancer (CLB) instance deployed in a virtual private cloud (VPC). CLB is formerly known as Server Load Balancer (SLB).
     *   **NetworkInterface**: an elastic network interface (ENI).
     *
     * @example SlbInstance
     *
     * @var string
     */
    public $bindInstanceType;

    /**
     * @description The time when the Anycast EIP was associated.
     *
     * @example 2022-04-23T01:37:38Z
     *
     * @var string
     */
    public $bindTime;
    protected $_name = [
        'bindInstanceId'       => 'BindInstanceId',
        'bindInstanceRegionId' => 'BindInstanceRegionId',
        'bindInstanceType'     => 'BindInstanceType',
        'bindTime'             => 'BindTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindInstanceId) {
            $res['BindInstanceId'] = $this->bindInstanceId;
        }
        if (null !== $this->bindInstanceRegionId) {
            $res['BindInstanceRegionId'] = $this->bindInstanceRegionId;
        }
        if (null !== $this->bindInstanceType) {
            $res['BindInstanceType'] = $this->bindInstanceType;
        }
        if (null !== $this->bindTime) {
            $res['BindTime'] = $this->bindTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return anycastEipBindInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BindInstanceId'])) {
            $model->bindInstanceId = $map['BindInstanceId'];
        }
        if (isset($map['BindInstanceRegionId'])) {
            $model->bindInstanceRegionId = $map['BindInstanceRegionId'];
        }
        if (isset($map['BindInstanceType'])) {
            $model->bindInstanceType = $map['BindInstanceType'];
        }
        if (isset($map['BindTime'])) {
            $model->bindTime = $map['BindTime'];
        }

        return $model;
    }
}

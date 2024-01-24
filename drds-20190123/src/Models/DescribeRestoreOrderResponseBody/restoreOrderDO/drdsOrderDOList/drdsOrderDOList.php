<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRestoreOrderResponseBody\restoreOrderDO\drdsOrderDOList;

use AlibabaCloud\Tea\Model;

class drdsOrderDOList extends Model
{
    /**
     * @description The ID of the zone for which to query resources.
     *
     * @example cn-hangzhou-e
     *
     * @var string
     */
    public $azoneId;

    /**
     * @description The instance type of the instance.
     *
     * @example 4C8G * 2
     *
     * @var string
     */
    public $instSpec;

    /**
     * @description The network type. Valid values:
     *
     *   **Classic **: Classic Network
     *   **vpc**: VPC
     *
     * @example vpc
     *
     * @var string
     */
    public $network;

    /**
     * @description The region ID of the instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the vSwitch in the VPC.
     *
     * @example vsw-*******************
     *
     * @var string
     */
    public $VSwtichId;

    /**
     * @description The ID of the VPC network.
     *
     * @example vpc-*******************
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'azoneId'   => 'AzoneId',
        'instSpec'  => 'InstSpec',
        'network'   => 'Network',
        'regionId'  => 'RegionId',
        'VSwtichId' => 'VSwtichId',
        'vpcId'     => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->azoneId) {
            $res['AzoneId'] = $this->azoneId;
        }
        if (null !== $this->instSpec) {
            $res['InstSpec'] = $this->instSpec;
        }
        if (null !== $this->network) {
            $res['Network'] = $this->network;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->VSwtichId) {
            $res['VSwtichId'] = $this->VSwtichId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return drdsOrderDOList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AzoneId'])) {
            $model->azoneId = $map['AzoneId'];
        }
        if (isset($map['InstSpec'])) {
            $model->instSpec = $map['InstSpec'];
        }
        if (isset($map['Network'])) {
            $model->network = $map['Network'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['VSwtichId'])) {
            $model->VSwtichId = $map['VSwtichId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}

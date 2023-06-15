<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeVSwitchesResponseBody;

use AlibabaCloud\Tea\Model;

class vSwitchs extends Model
{
    /**
     * @description 交换机中可用的IP地址数量。
     *
     * @example 1
     *
     * @var string
     */
    public $availableIpAddressCount;

    /**
     * @description The CIDR blocks of the vSwitches.
     *
     * @example 172.16.0.0/24
     *
     * @var string
     */
    public $cidrBlock;

    /**
     * @description The descriptions of the vSwitches.
     *
     * @example VSwitchDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description Indicates whether the vSwitch is the default vSwitch. Valid values:
     *
     *   **true**: The vSwitch is the default vSwitch.
     *   **false**: The vSwitch is not the default vSwitch.
     *
     * @example true
     *
     * @var bool
     */
    public $isDefault;

    /**
     * @description The ID of the zone to which the vSwitches belong.
     *
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $izNo;

    /**
     * @description The status of a vSwitch. Valid values:
     *
     *   **Pending**: The vSwitch is being configured.
     *   **Available**: The vSwitch is available.
     *
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the vSwitch.
     *
     * @example vsw-bp1pnaz94xc**********
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The name of the vSwitch.
     *
     * @example test
     *
     * @var string
     */
    public $vSwitchName;
    protected $_name = [
        'availableIpAddressCount' => 'AvailableIpAddressCount',
        'cidrBlock'               => 'CidrBlock',
        'description'             => 'Description',
        'isDefault'               => 'IsDefault',
        'izNo'                    => 'IzNo',
        'status'                  => 'Status',
        'vSwitchId'               => 'VSwitchId',
        'vSwitchName'             => 'VSwitchName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableIpAddressCount) {
            $res['AvailableIpAddressCount'] = $this->availableIpAddressCount;
        }
        if (null !== $this->cidrBlock) {
            $res['CidrBlock'] = $this->cidrBlock;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }
        if (null !== $this->izNo) {
            $res['IzNo'] = $this->izNo;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vSwitchName) {
            $res['VSwitchName'] = $this->vSwitchName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vSwitchs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableIpAddressCount'])) {
            $model->availableIpAddressCount = $map['AvailableIpAddressCount'];
        }
        if (isset($map['CidrBlock'])) {
            $model->cidrBlock = $map['CidrBlock'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }
        if (isset($map['IzNo'])) {
            $model->izNo = $map['IzNo'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VSwitchName'])) {
            $model->vSwitchName = $map['VSwitchName'];
        }

        return $model;
    }
}

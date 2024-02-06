<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeVSwitchesResponseBody\vSwitches;

use AlibabaCloud\Tea\Model;

class vSwitch extends Model
{
    /**
     * @description The IPv4 CIDR block of the vSwitch.
     *
     * @example 10.21.224.0/22
     *
     * @var string
     */
    public $cidrBlock;

    /**
     * @description The time when the vSwitch was created. The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2020-06-16T06:33:15Z
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description The description of the vSwitch.
     *
     * @example VSwitchDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the edge node.
     *
     * @example cn-xian-unicom
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @description The number of available IP addresses.
     *
     * @example 1024
     *
     * @var int
     */
    public $freeIpCount;

    /**
     * @description The ID of the network.
     *
     * @example vpc-25cdvfeq58pl****
     *
     * @var string
     */
    public $networkId;

    /**
     * @description The status of the vSwitch. Valid values:
     *
     *   Pending
     *   Available
     *
     * @example Pending
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the vSwitch.
     *
     * @example vsw-5m9xhlq8oh***
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The name of the vSwitch.
     *
     * @example testVSwitchName
     *
     * @var string
     */
    public $vSwitchName;
    protected $_name = [
        'cidrBlock'   => 'CidrBlock',
        'createdTime' => 'CreatedTime',
        'description' => 'Description',
        'ensRegionId' => 'EnsRegionId',
        'freeIpCount' => 'FreeIpCount',
        'networkId'   => 'NetworkId',
        'status'      => 'Status',
        'vSwitchId'   => 'VSwitchId',
        'vSwitchName' => 'VSwitchName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cidrBlock) {
            $res['CidrBlock'] = $this->cidrBlock;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->freeIpCount) {
            $res['FreeIpCount'] = $this->freeIpCount;
        }
        if (null !== $this->networkId) {
            $res['NetworkId'] = $this->networkId;
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
     * @return vSwitch
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CidrBlock'])) {
            $model->cidrBlock = $map['CidrBlock'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['FreeIpCount'])) {
            $model->freeIpCount = $map['FreeIpCount'];
        }
        if (isset($map['NetworkId'])) {
            $model->networkId = $map['NetworkId'];
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

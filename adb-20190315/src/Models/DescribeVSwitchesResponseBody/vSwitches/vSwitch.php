<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeVSwitchesResponseBody\vSwitches;

use AlibabaCloud\Tea\Model;

class vSwitch extends Model
{
    /**
     * @description The ID of the Resource Access Management (RAM) user.
     *
     * @example 195813423043****
     *
     * @var string
     */
    public $aliUid;

    /**
     * @description The ID of the user channel.
     *
     * @example 2****
     *
     * @var string
     */
    public $bid;

    /**
     * @description The IPv4 CIDR block of the vSwitch.
     *
     * @example 172.16.0.0/24
     *
     * @var string
     */
    public $cidrBlock;

    /**
     * @description The time when the vSwitch was created.
     *
     * @example 2022-01-18T12:43:57Z
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The time when the vSwitch was modified.
     *
     * @example 2022-01-22T12:43:57Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description Indicates whether the vSwitch is the default vSwitch. Valid values: **true** **false**
     *
     * @example false
     *
     * @var bool
     */
    public $isDefault;

    /**
     * @description The zone ID of the vSwitch.
     *
     * @example cn-hangzhou-k
     *
     * @var string
     */
    public $izNo;

    /**
     * @description The region ID of the vSwitch.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionNo;

    /**
     * @description The state of the vSwitch. Valid values: **Pending**: the vSwitch is being configured. **Available**: the vSwitch is available.
     *
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description The vSwitch ID.
     *
     * @example vsw-25bcdxs7pv1****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The name of the vSwitch.
     *
     * @example vswitch
     *
     * @var string
     */
    public $vSwitchName;
    protected $_name = [
        'aliUid'      => 'AliUid',
        'bid'         => 'Bid',
        'cidrBlock'   => 'CidrBlock',
        'gmtCreate'   => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'isDefault'   => 'IsDefault',
        'izNo'        => 'IzNo',
        'regionNo'    => 'RegionNo',
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
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->bid) {
            $res['Bid'] = $this->bid;
        }
        if (null !== $this->cidrBlock) {
            $res['CidrBlock'] = $this->cidrBlock;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }
        if (null !== $this->izNo) {
            $res['IzNo'] = $this->izNo;
        }
        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
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
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['Bid'])) {
            $model->bid = $map['Bid'];
        }
        if (isset($map['CidrBlock'])) {
            $model->cidrBlock = $map['CidrBlock'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }
        if (isset($map['IzNo'])) {
            $model->izNo = $map['IzNo'];
        }
        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
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

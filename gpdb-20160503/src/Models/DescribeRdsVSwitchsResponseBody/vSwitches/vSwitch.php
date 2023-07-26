<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeRdsVSwitchsResponseBody\vSwitches;

use AlibabaCloud\Tea\Model;

class vSwitch extends Model
{
    /**
     * @description An invalid parameter. It is no longer returned when you call this operation.
     *
     * @example null
     *
     * @var string
     */
    public $aliUid;

    /**
     * @description An invalid parameter. It is no longer returned when you call this operation.
     *
     * @example null
     *
     * @var string
     */
    public $bid;

    /**
     * @description The CIDR block of the vSwitch.
     *
     * @example 192.**.**.0/24
     *
     * @var string
     */
    public $cidrBlock;

    /**
     * @description An invalid parameter. It is no longer returned when you call this operation.
     *
     * @example null
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description An invalid parameter. It is no longer returned when you call this operation.
     *
     * @example null
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description Indicates whether the vSwitch is the default vSwitch. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $isDefault;

    /**
     * @description The ID of the zone.
     *
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $izNo;

    /**
     * @description An invalid parameter. It is no longer returned when you call this operation.
     *
     * @example null
     *
     * @var string
     */
    public $regionNo;

    /**
     * @description The state of the vSwitch. If **Available** is returned, the vSwitch is available.
     *
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the vSwitch.
     *
     * @example vsw-bp*******************
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The name of the vSwitch.
     *
     * @example vsw-name
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

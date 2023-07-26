<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeRdsVpcsResponseBody\vpcs\vpc;

use AlibabaCloud\Tea\Model;

class vSwitchs extends Model
{
    /**
     * @description The CIDR block of the vSwitch.
     *
     * @example 10.**.**.0/24
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
     * @example true
     *
     * @var bool
     */
    public $isDefault;

    /**
     * @description The ID of the zone to which the vSwitch belongs.
     *
     * @example cn-hangzhou-i
     *
     * @var string
     */
    public $izNo;

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
        'cidrBlock'   => 'CidrBlock',
        'gmtCreate'   => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'isDefault'   => 'IsDefault',
        'izNo'        => 'IzNo',
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

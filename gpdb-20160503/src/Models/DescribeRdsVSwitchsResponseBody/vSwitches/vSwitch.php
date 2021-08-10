<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeRdsVSwitchsResponseBody\vSwitches;

use AlibabaCloud\Tea\Model;

class vSwitch extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var bool
     */
    public $isDefault;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $cidrBlock;

    /**
     * @var string
     */
    public $regionNo;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $aliUid;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $bid;

    /**
     * @var string
     */
    public $izNo;

    /**
     * @var string
     */
    public $vSwitchName;
    protected $_name = [
        'status'      => 'Status',
        'isDefault'   => 'IsDefault',
        'vSwitchId'   => 'VSwitchId',
        'cidrBlock'   => 'CidrBlock',
        'regionNo'    => 'RegionNo',
        'gmtCreate'   => 'GmtCreate',
        'aliUid'      => 'AliUid',
        'gmtModified' => 'GmtModified',
        'bid'         => 'Bid',
        'izNo'        => 'IzNo',
        'vSwitchName' => 'VSwitchName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->cidrBlock) {
            $res['CidrBlock'] = $this->cidrBlock;
        }
        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->bid) {
            $res['Bid'] = $this->bid;
        }
        if (null !== $this->izNo) {
            $res['IzNo'] = $this->izNo;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['CidrBlock'])) {
            $model->cidrBlock = $map['CidrBlock'];
        }
        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Bid'])) {
            $model->bid = $map['Bid'];
        }
        if (isset($map['IzNo'])) {
            $model->izNo = $map['IzNo'];
        }
        if (isset($map['VSwitchName'])) {
            $model->vSwitchName = $map['VSwitchName'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeRdsVpcsResponse\vpcs\vpc;

use AlibabaCloud\Tea\Model;

class vSwitchs extends Model
{
    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vSwitchName;

    /**
     * @var string
     */
    public $izNo;

    /**
     * @var string
     */
    public $cidrBlock;

    /**
     * @var bool
     */
    public $isDefault;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;
    protected $_name = [
        'vSwitchId'   => 'VSwitchId',
        'vSwitchName' => 'VSwitchName',
        'izNo'        => 'IzNo',
        'cidrBlock'   => 'CidrBlock',
        'isDefault'   => 'IsDefault',
        'status'      => 'Status',
        'gmtCreate'   => 'GmtCreate',
        'gmtModified' => 'GmtModified',
    ];

    public function validate()
    {
        Model::validateRequired('vSwitchId', $this->vSwitchId, true);
        Model::validateRequired('vSwitchName', $this->vSwitchName, true);
        Model::validateRequired('izNo', $this->izNo, true);
        Model::validateRequired('cidrBlock', $this->cidrBlock, true);
        Model::validateRequired('isDefault', $this->isDefault, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('gmtCreate', $this->gmtCreate, true);
        Model::validateRequired('gmtModified', $this->gmtModified, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vSwitchName) {
            $res['VSwitchName'] = $this->vSwitchName;
        }
        if (null !== $this->izNo) {
            $res['IzNo'] = $this->izNo;
        }
        if (null !== $this->cidrBlock) {
            $res['CidrBlock'] = $this->cidrBlock;
        }
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
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
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VSwitchName'])) {
            $model->vSwitchName = $map['VSwitchName'];
        }
        if (isset($map['IzNo'])) {
            $model->izNo = $map['IzNo'];
        }
        if (isset($map['CidrBlock'])) {
            $model->cidrBlock = $map['CidrBlock'];
        }
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        return $model;
    }
}

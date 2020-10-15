<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeVSwitchesResponse\vSwitches;

use AlibabaCloud\Tea\Model;

class vSwitch extends Model
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
    public $status;

    /**
     * @var string
     */
    public $cidrBlock;

    /**
     * @var string
     */
    public $ensRegionId;

    /**
     * @var int
     */
    public $freeIpCount;

    /**
     * @var string
     */
    public $createdTime;
    protected $_name = [
        'vSwitchId'   => 'VSwitchId',
        'vSwitchName' => 'VSwitchName',
        'status'      => 'Status',
        'cidrBlock'   => 'CidrBlock',
        'ensRegionId' => 'EnsRegionId',
        'freeIpCount' => 'FreeIpCount',
        'createdTime' => 'CreatedTime',
    ];

    public function validate()
    {
        Model::validateRequired('vSwitchId', $this->vSwitchId, true);
        Model::validateRequired('vSwitchName', $this->vSwitchName, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('cidrBlock', $this->cidrBlock, true);
        Model::validateRequired('ensRegionId', $this->ensRegionId, true);
        Model::validateRequired('freeIpCount', $this->freeIpCount, true);
        Model::validateRequired('createdTime', $this->createdTime, true);
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->cidrBlock) {
            $res['CidrBlock'] = $this->cidrBlock;
        }
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->freeIpCount) {
            $res['FreeIpCount'] = $this->freeIpCount;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
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
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VSwitchName'])) {
            $model->vSwitchName = $map['VSwitchName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['CidrBlock'])) {
            $model->cidrBlock = $map['CidrBlock'];
        }
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['FreeIpCount'])) {
            $model->freeIpCount = $map['FreeIpCount'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }

        return $model;
    }
}

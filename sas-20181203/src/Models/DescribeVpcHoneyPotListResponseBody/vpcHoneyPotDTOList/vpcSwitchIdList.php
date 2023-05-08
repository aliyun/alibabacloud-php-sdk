<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVpcHoneyPotListResponseBody\vpcHoneyPotDTOList;

use AlibabaCloud\Tea\Model;

class vpcSwitchIdList extends Model
{
    /**
     * @description The ID of the vSwitch.
     *
     * @example vsw-p0wdnyv4wzp6jkuu4****
     *
     * @var string
     */
    public $vpcSwitchId;

    /**
     * @description The name of the vSwitch.
     *
     * @example abc01
     *
     * @var string
     */
    public $vpcSwitchName;

    /**
     * @description The zone ID of the vSwitch.
     *
     * @example ap-southeast-2b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'vpcSwitchId'   => 'VpcSwitchId',
        'vpcSwitchName' => 'VpcSwitchName',
        'zoneId'        => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vpcSwitchId) {
            $res['VpcSwitchId'] = $this->vpcSwitchId;
        }
        if (null !== $this->vpcSwitchName) {
            $res['VpcSwitchName'] = $this->vpcSwitchName;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vpcSwitchIdList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VpcSwitchId'])) {
            $model->vpcSwitchId = $map['VpcSwitchId'];
        }
        if (isset($map['VpcSwitchName'])) {
            $model->vpcSwitchName = $map['VpcSwitchName'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}

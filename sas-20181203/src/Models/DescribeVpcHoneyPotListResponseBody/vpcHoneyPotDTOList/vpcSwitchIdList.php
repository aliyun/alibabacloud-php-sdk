<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVpcHoneyPotListResponseBody\vpcHoneyPotDTOList;

use AlibabaCloud\Tea\Model;

class vpcSwitchIdList extends Model
{
    /**
     * @var string
     */
    public $vpcSwitchName;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $vpcSwitchId;
    protected $_name = [
        'vpcSwitchName' => 'VpcSwitchName',
        'zoneId'        => 'ZoneId',
        'vpcSwitchId'   => 'VpcSwitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vpcSwitchName) {
            $res['VpcSwitchName'] = $this->vpcSwitchName;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->vpcSwitchId) {
            $res['VpcSwitchId'] = $this->vpcSwitchId;
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
        if (isset($map['VpcSwitchName'])) {
            $model->vpcSwitchName = $map['VpcSwitchName'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['VpcSwitchId'])) {
            $model->vpcSwitchId = $map['VpcSwitchId'];
        }

        return $model;
    }
}

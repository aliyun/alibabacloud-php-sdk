<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVpcHoneyPotListResponseBody\vpcHoneyPotDTOList;

use AlibabaCloud\Dara\Model;

class vpcSwitchIdList extends Model
{
    /**
     * @var string
     */
    public $vpcSwitchId;

    /**
     * @var string
     */
    public $vpcSwitchName;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'vpcSwitchId' => 'VpcSwitchId',
        'vpcSwitchName' => 'VpcSwitchName',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

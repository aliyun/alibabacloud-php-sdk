<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\QueryUserVpcResponseBody\data;

use AlibabaCloud\Tea\Model;

class vSwitchList extends Model
{
    /**
     * @var string
     */
    public $vswitchId;

    /**
     * @var string
     */
    public $vswitchName;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'vswitchId'   => 'VswitchId',
        'vswitchName' => 'VswitchName',
        'zoneId'      => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }
        if (null !== $this->vswitchName) {
            $res['VswitchName'] = $this->vswitchName;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vSwitchList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }
        if (isset($map['VswitchName'])) {
            $model->vswitchName = $map['VswitchName'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeRCClusterConfigRequest extends Model
{
    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The validity period of the temporary kubeconfig file. Unit: minutes. Valid values: 15 to 4320.
     *
     * >  If you do not specify this parameter, the system specifies a longer validity period. The validity period is returned in the `expiration` parameter.
     * @example 20
     *
     * @var int
     */
    public $temporaryDurationMinutes;

    /**
     * @description The virtual private cloud (VPC) ID.
     *
     * >  This is a reserved parameter.
     * @example None
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'regionId'                 => 'RegionId',
        'temporaryDurationMinutes' => 'TemporaryDurationMinutes',
        'vpcId'                    => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->temporaryDurationMinutes) {
            $res['TemporaryDurationMinutes'] = $this->temporaryDurationMinutes;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRCClusterConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TemporaryDurationMinutes'])) {
            $model->temporaryDurationMinutes = $map['TemporaryDurationMinutes'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class DescribeRdsPerformanceSummaryRequest extends Model
{
    /**
     * @description The ID of a DRDS instance.
     *
     * @example drds************
     *
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @example rm-*****************
     *
     * @var string[]
     */
    public $rdsInstanceId;

    /**
     * @description The ID of the region where the streaming domain resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'drdsInstanceId' => 'DrdsInstanceId',
        'rdsInstanceId'  => 'RdsInstanceId',
        'regionId'       => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }
        if (null !== $this->rdsInstanceId) {
            $res['RdsInstanceId'] = $this->rdsInstanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRdsPerformanceSummaryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }
        if (isset($map['RdsInstanceId'])) {
            if (!empty($map['RdsInstanceId'])) {
                $model->rdsInstanceId = $map['RdsInstanceId'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}

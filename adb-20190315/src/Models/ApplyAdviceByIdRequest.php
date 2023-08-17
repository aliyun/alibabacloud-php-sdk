<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Tea\Model;

class ApplyAdviceByIdRequest extends Model
{
    /**
     * @description The date when the suggestion is generated. Specify the date in the yyyyMMdd format. The date must be in UTC.
     *
     * @example 20221101
     *
     * @var int
     */
    public $adviceDate;

    /**
     * @description The suggestion ID.
     *
     * @example 0baf1f52-53df-487f-8292-99a03716****
     *
     * @var string
     */
    public $adviceId;

    /**
     * @description The ID of the cluster.
     *
     * >  You can call the [DescribeDBClusters](~~129857~~) operation to query the IDs of Data Warehouse Edition (V3.0) clusters.
     * @example am-uf6g8w25jacm7****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The region ID of the cluster.
     *
     * >  You can call the [DescribeRegions](~~143074~~) operation to query the most recent region list.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'adviceDate'  => 'AdviceDate',
        'adviceId'    => 'AdviceId',
        'DBClusterId' => 'DBClusterId',
        'regionId'    => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adviceDate) {
            $res['AdviceDate'] = $this->adviceDate;
        }
        if (null !== $this->adviceId) {
            $res['AdviceId'] = $this->adviceId;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApplyAdviceByIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdviceDate'])) {
            $model->adviceDate = $map['AdviceDate'];
        }
        if (isset($map['AdviceId'])) {
            $model->adviceId = $map['AdviceId'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}

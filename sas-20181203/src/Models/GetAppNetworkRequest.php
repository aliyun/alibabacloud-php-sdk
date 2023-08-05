<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetAppNetworkRequest extends Model
{
    /**
     * @description The ID of the cluster to which the container belongs.
     *
     * > You can call the [DescribeGroupedContainerInstances](~~DescribeGroupedContainerInstances~~) operation to query the IDs of container clusters.
     * @example cf77xxx
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The end timestamp of the query. Unit: milliseconds.
     *
     * > The days between the start timestamp and the end timestamp cannot exceed **seven** days.
     * @example 1650470399999
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The start timestamp of the query. Unit: milliseconds.
     *
     * > The days between the start timestamp and the end timestamp cannot exceed **seven** days.
     * @example 1649260800000
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'endTime'   => 'EndTime',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAppNetworkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}

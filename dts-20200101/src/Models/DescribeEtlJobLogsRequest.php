<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeEtlJobLogsRequest extends Model
{
    /**
     * @description The ID of the ETL task. You can call the [DescribeDtsJobs](~~209702~~) operation to query the task ID.
     *
     * @example l5512es7w15****
     *
     * @var string
     */
    public $dtsJobId;

    /**
     * @description The ID of the region in which the Data Transmission Service (DTS) instance resides. You can call the [DescribeRegions](~~25609~~) operation to query the available Alibaba Cloud regions.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'dtsJobId' => 'DtsJobId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dtsJobId) {
            $res['DtsJobId'] = $this->dtsJobId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEtlJobLogsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DtsJobId'])) {
            $model->dtsJobId = $map['DtsJobId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}

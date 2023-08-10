<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeJobMonitorRuleRequest extends Model
{
    /**
     * @description The ID of the data migration, data synchronization, or change tracking task. You can call the [DescribeDtsJobs](~~209702~~) operation to query the task ID.
     *
     * @example ta7w132u12h****
     *
     * @var string
     */
    public $dtsJobId;

    /**
     * @description The region ID of the DTS instance. For more information, see [List of supported regions](~~141033~~).
     *
     * @example cn-shenzhen
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
     * @return DescribeJobMonitorRuleRequest
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

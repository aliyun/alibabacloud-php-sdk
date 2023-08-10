<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class SuspendDtsJobsRequest extends Model
{
    /**
     * @description The ID of the data migration or data synchronization task.
     *
     * >
     *   For multiple tasks, separate them with commas (,).
     *   You can call the [DescribeDtsJobs](~~209702~~) operation to query the task ID.
     *
     * @example hfi12iv4z7e****
     *
     * @var string
     */
    public $dtsJobIds;

    /**
     * @description The ID of the region in which the DTS instance resides. For more information, see [List of supported regions](~~141033~~).
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'dtsJobIds' => 'DtsJobIds',
        'regionId'  => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dtsJobIds) {
            $res['DtsJobIds'] = $this->dtsJobIds;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SuspendDtsJobsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DtsJobIds'])) {
            $model->dtsJobIds = $map['DtsJobIds'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}

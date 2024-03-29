<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DeleteDtsJobsRequest extends Model
{
    /**
     * @description The ID of the data migration, data synchronization, or change tracking task.
     *
     * > *   Separate multiple task IDs with commas (,).
     * > *   You can call the [DescribeDtsJobs](~~209702~~) operation to query task IDs.
     * @example l5o11f9029c****
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

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var bool
     */
    public $zeroEtlJob;
    protected $_name = [
        'dtsJobIds'       => 'DtsJobIds',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'zeroEtlJob'      => 'ZeroEtlJob',
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
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->zeroEtlJob) {
            $res['ZeroEtlJob'] = $this->zeroEtlJob;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteDtsJobsRequest
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
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ZeroEtlJob'])) {
            $model->zeroEtlJob = $map['ZeroEtlJob'];
        }

        return $model;
    }
}

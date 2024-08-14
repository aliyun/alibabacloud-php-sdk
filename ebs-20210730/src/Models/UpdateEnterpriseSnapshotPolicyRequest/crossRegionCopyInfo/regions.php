<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models\UpdateEnterpriseSnapshotPolicyRequest\crossRegionCopyInfo;

use AlibabaCloud\Tea\Model;

class regions extends Model
{
    /**
     * @description The region ID. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/354276.html) operation to query the most recent list of regions in which async replication is supported.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Number of days to retain the destination snapshot. The range of values is greater than 1.
     *
     * @example 7
     *
     * @var int
     */
    public $retainDays;
    protected $_name = [
        'regionId'   => 'RegionId',
        'retainDays' => 'RetainDays',
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
        if (null !== $this->retainDays) {
            $res['RetainDays'] = $this->retainDays;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return regions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RetainDays'])) {
            $model->retainDays = $map['RetainDays'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\Tea\Model;

class DescribeDedicatedBlockStorageClusterDisksRequest extends Model
{
    /**
     * @description The ID of the dedicated block storage cluster.
     *
     * @example dbsc-cn-od43bf****
     *
     * @var string
     */
    public $dbscId;

    /**
     * @description The maximum number of entries to return on each page. Maximum value: 500.
     *
     * Default value: 10.
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The query token. Set the value to the NextToken value returned in the previous call to the DescribeDedicatedBlockStorageClusterDisks operation. Leave this parameter empty the first time you call this operation.
     *
     * @example AAAAAdDWBF2
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the region where the dedicated block storage cluster resides. You can call the [DescribeRegions](~~25609~~) operation to query the most recent region list.
     *
     * @example cn-heyuan
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'dbscId'     => 'DbscId',
        'maxResults' => 'MaxResults',
        'nextToken'  => 'NextToken',
        'regionId'   => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbscId) {
            $res['DbscId'] = $this->dbscId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDedicatedBlockStorageClusterDisksRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbscId'])) {
            $model->dbscId = $map['DbscId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}

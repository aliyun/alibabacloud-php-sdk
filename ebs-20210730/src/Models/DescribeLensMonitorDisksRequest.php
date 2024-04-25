<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\Tea\Model;

class DescribeLensMonitorDisksRequest extends Model
{
    /**
     * @description The type of the disk. Valid values:
     * - cloud_essd_entry
     * @example cloud_auto
     *
     * @var string
     */
    public $diskCategory;

    /**
     * @description The list of disks.
     *
     * @example [\"d-1\", \"d-2\"]
     *
     * @var string[]
     */
    public $diskIds;

    /**
     * @description Lens event tag list to filter cloud disks that have experienced these event types within 24 hours. Valid values:
     *
     * - DiskSlowIOTriggerred
     * @var string[]
     */
    public $lensTags;

    /**
     * @description The number of entries to return on each page. Valid values: 1 to 100. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token used to start the next query to retrieve more results.
     *
     * >  This parameter is not required in the first query. If not all results are returned in one query, you can pass in the NextToken value returned in the previous query to perform the query again.
     * @example caeba0bbb2be03f84eb48b699f0a****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'diskCategory' => 'DiskCategory',
        'diskIds'      => 'DiskIds',
        'lensTags'     => 'LensTags',
        'maxResults'   => 'MaxResults',
        'nextToken'    => 'NextToken',
        'regionId'     => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diskCategory) {
            $res['DiskCategory'] = $this->diskCategory;
        }
        if (null !== $this->diskIds) {
            $res['DiskIds'] = $this->diskIds;
        }
        if (null !== $this->lensTags) {
            $res['LensTags'] = $this->lensTags;
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
     * @return DescribeLensMonitorDisksRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiskCategory'])) {
            $model->diskCategory = $map['DiskCategory'];
        }
        if (isset($map['DiskIds'])) {
            if (!empty($map['DiskIds'])) {
                $model->diskIds = $map['DiskIds'];
            }
        }
        if (isset($map['LensTags'])) {
            if (!empty($map['LensTags'])) {
                $model->lensTags = $map['LensTags'];
            }
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

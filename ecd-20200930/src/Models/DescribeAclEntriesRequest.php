<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribeAclEntriesRequest extends Model
{
    /**
     * @description The number of entries per page.
     *
     *   Maximum value: 1600.
     *   Default value: 1600.
     *
     * @example 50
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that is used for the next query. If this parameter is empty, all results have been returned.
     *
     * @example AAAAAV3MpHK1AP0pfERHZN5pu6kRxd1mKkNnHlUy14zdjl/I
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The office network ID.
     *
     * @example cn-shanghai+dir-631324****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @description The region ID. You can call the [DescribeRegions](~~DescribeRegions~~) operation to query the list of regions where Elastic Desktop Service (EDS) Enterprise is available.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the instance to which the ACL applies. You can specify an office network ID or a cloud computer ID.
     *
     * @example cn-hangzhou+dir-****
     *
     * @var string
     */
    public $sourceId;

    /**
     * @description The granularity of the ACL.
     *
     * Valid values:
     *
     *   desktop: cloud computer
     *   vpc: office network
     *
     * @example desktop
     *
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'officeSiteId' => 'OfficeSiteId',
        'regionId' => 'RegionId',
        'sourceId' => 'SourceId',
        'sourceType' => 'SourceType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAclEntriesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        return $model;
    }
}

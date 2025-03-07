<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class ListMediaBasicInfosRequest extends Model
{
    /**
     * @description The business type of the media asset. Valid values:
     *
     * \\- general
     * @example opening
     *
     * @var string
     */
    public $businessType;

    /**
     * @description The end time of utcCreated.
     *
     * \\- Specify the time in the ISO 8601 standard in the YYYY-MM-DDThh:mm:ssZ format. For example, 2017-01-11T12:00:00Z indicates 20:00:00 on January 11, 2017 (UTC +8).
     * @example 2020-12-20T13:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description Specifies whether to return the basic information of the source file.
     *
     * @example true
     *
     * @var bool
     */
    public $includeFileBasicInfo;

    /**
     * @description The maximum number of entries to return.
     *
     * Maximum value: 100. Default value: 10.
     * @example 5
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The ID of the media asset.
     *
     * @example ****019b82e24b37a1c2958dec38****
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description The type of the media asset. Valid values:
     *
     * \\- text
     * @example video
     *
     * @var string
     */
    public $mediaType;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. You do not need to specify this parameter for the first request. You must specify the token that is obtained from the previous query as the value of NextToken.
     *
     * @example pSa1SQ0wCe5pzVrQ6mWZEw==
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The order of sorting by utcCreated. Default value: desc. Valid values:
     *
     * \\- asc
     * @example desc
     *
     * @var string
     */
    public $sortBy;

    /**
     * @description The source of the media asset. Valid values:
     *
     * \\- general: other sources. This is the default value.
     * @example oss
     *
     * @var string
     */
    public $source;

    /**
     * @description The start time of utcCreated.
     *
     * \\- Specify the time in the ISO 8601 standard in the YYYY-MM-DDThh:mm:ssZ format. For example, 2017-01-11T12:00:00Z indicates 20:00:00 on January 11, 2017 (UTC +8).
     * @example 2020-12-20T12:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The status of the media asset. Valid values:
     *
     * \\- Normal: The source file is ready.
     * @example Normal
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'businessType'         => 'BusinessType',
        'endTime'              => 'EndTime',
        'includeFileBasicInfo' => 'IncludeFileBasicInfo',
        'maxResults'           => 'MaxResults',
        'mediaId'              => 'MediaId',
        'mediaType'            => 'MediaType',
        'nextToken'            => 'NextToken',
        'sortBy'               => 'SortBy',
        'source'               => 'Source',
        'startTime'            => 'StartTime',
        'status'               => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->includeFileBasicInfo) {
            $res['IncludeFileBasicInfo'] = $this->includeFileBasicInfo;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->mediaType) {
            $res['MediaType'] = $this->mediaType;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMediaBasicInfosRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['IncludeFileBasicInfo'])) {
            $model->includeFileBasicInfo = $map['IncludeFileBasicInfo'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['MediaType'])) {
            $model->mediaType = $map['MediaType'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

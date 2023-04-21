<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ListUserAdOrganizationUnitsRequest extends Model
{
    /**
     * @description The string that you enter for fuzzy search.
     *
     * @example develop
     *
     * @var string
     */
    public $filter;

    /**
     * @description The maximum number of entries to return on each page. Valid values: 1 to 500. Default value: 500.
     *
     * @example 100
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that determines the start point of the query. Set the value to the NextToken value that is returned from the last call.
     *
     * @example CAAAAA==
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the AD workspace.
     *
     * @example cn-hangzhou+dir-485361****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'filter'       => 'Filter',
        'maxResults'   => 'MaxResults',
        'nextToken'    => 'NextToken',
        'officeSiteId' => 'OfficeSiteId',
        'regionId'     => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->filter) {
            $res['Filter'] = $this->filter;
        }
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUserAdOrganizationUnitsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Filter'])) {
            $model->filter = $map['Filter'];
        }
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

        return $model;
    }
}

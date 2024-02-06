<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeDataPushResultRequest extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example e76f8985-7965-41fc-925b-9648bb6bf650
     *
     * @var string
     */
    public $appId;

    /**
     * @description The name of the data file. Separate multiple names with commas (,). By default, all data files are queried.
     *
     * @example 159828628258496/mirror_file/game-2553efe7-7bf8-40fb-a6e7-09c9c00a992a.tar
     *
     * @var string
     */
    public $dataNames;

    /**
     * @description The version number of the data file. Separate multiple numbers with commas (,). By default, all versions of data files are queried.
     *
     * @example 90396
     *
     * @var string
     */
    public $dataVersions;

    /**
     * @description The end of the time range to query. Specify the time in the 2006-01-02 format. By default, the time range to query is not restricted.
     *
     * @example 2022-02-20
     *
     * @var string
     */
    public $maxDate;

    /**
     * @description The beginning of the time range to query. Specify the time in the 2006-01-02 format. By default, the time range to query is not restricted.
     *
     * @example 2022-02-15
     *
     * @var string
     */
    public $minDate;

    /**
     * @description The page number. Pages start from page 1. This parameter is optional if you want to return the push status of all data files.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. This parameter is optional if you want to return the push status of all data files.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The IDs of ENS nodes. Separate multiple IDs with commas (,). By default, all ENS nodes are queried.
     *
     * @example cn-wuhan-telecom_unicom_cmcc-2,cn-jiaozuo-2
     *
     * @var string
     */
    public $regionIds;
    protected $_name = [
        'appId'        => 'AppId',
        'dataNames'    => 'DataNames',
        'dataVersions' => 'DataVersions',
        'maxDate'      => 'MaxDate',
        'minDate'      => 'MinDate',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'regionIds'    => 'RegionIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->dataNames) {
            $res['DataNames'] = $this->dataNames;
        }
        if (null !== $this->dataVersions) {
            $res['DataVersions'] = $this->dataVersions;
        }
        if (null !== $this->maxDate) {
            $res['MaxDate'] = $this->maxDate;
        }
        if (null !== $this->minDate) {
            $res['MinDate'] = $this->minDate;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionIds) {
            $res['RegionIds'] = $this->regionIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDataPushResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['DataNames'])) {
            $model->dataNames = $map['DataNames'];
        }
        if (isset($map['DataVersions'])) {
            $model->dataVersions = $map['DataVersions'];
        }
        if (isset($map['MaxDate'])) {
            $model->maxDate = $map['MaxDate'];
        }
        if (isset($map['MinDate'])) {
            $model->minDate = $map['MinDate'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionIds'])) {
            $model->regionIds = $map['RegionIds'];
        }

        return $model;
    }
}

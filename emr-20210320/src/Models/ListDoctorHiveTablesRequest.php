<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class ListDoctorHiveTablesRequest extends Model
{
    /**
     * @description The cluster ID.
     *
     * This parameter is required.
     * @example c-b933c5aac8fe****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description Specify the date in the ISO 8601 standard. For example, 2023-01-01 represents January 1, 2023.
     *
     * This parameter is required.
     * @example 2023-01-01
     *
     * @var string
     */
    public $dateTime;

    /**
     * @description The maximum number of entries to return on each page.
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the request to retrieve a new page of results.
     *
     * @example DD6B1B2A-5837-5237-ABE4-FF0C89568980
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The basis on which you want to sort the query results. Valid values:
     *
     *   partitionNum: the number of partitions.
     *   totalFileCount: the total number of files.
     *   largeFileCount: the number of large files. Large files are those with a size greater than 1 GB.
     *   mediumFileCount: the number of medium files. Medium files are those with a size greater than or equal to 128 MB and less than or equal to 1 GB.
     *   smallFileCount: the number of small files. Small files are those with a size greater than or equal to 10 MB and less than 128 MB.
     *   tinyFileCount: the number of very small files. Very small files are those with a size greater than 0 MB and less than 10 MB.
     *   emptyFileCount: the number of empty files. Empty files are those with a size of 0 MB.
     *   largeFileRatio: the proportion of large files. Large files are those with a size greater than 1 GB.
     *   mediumFileRatio: the proportion of medium files. Medium files are those with a size greater than or equal to 128 MB and less than or equal to 1 GB.
     *   smallFileRatio: the proportion of small files. Small files are those with a size greater than or equal to 10 MB and less than 128 MB.
     *   tinyFileRatio: the proportion of very small files. Very small files are those with a size greater than 0 MB and less than 10 MB.
     *   emptyFileRatio: the proportion of empty files. Empty files are those with a size of 0 MB.
     *   hotDataSize: the amount of hot data. Hot data refers to data that is accessed in previous seven days.
     *   WarmDataSize: the amount of warm data. Warm data refers to data that is not accessed for more than 7 days but is accessed in previous 30 days.
     *   coldDataSize: the amount of cold data. Cold data refers to data that is not accessed for more than 30 days but is accessed in previous 90 days.
     *   freezeDataSize: the amount of very cold data. Very cold data refers to data that is not accessed for more than 90 days.
     *   totalDataSize: the total amount of data.
     *   hotDataRatio: the proportion of hot data. Hot data refers to data that is accessed in previous seven days.
     *   WarmDataRatio: the proportion of warm data. Warm data refers to data that is not accessed for more than 7 days but is accessed in previous 30 days.
     *   coldDataRatio: the proportion of cold data. Cold data refers to data that is not accessed for more than 30 days but is accessed in previous 90 days.
     *   freezeDataRatio: the proportion of very cold data. Very cold data refers to data that is not accessed for more than 90 days.
     *   totalFileDayGrowthCount: the daily increment of the total number of files.
     *   largeFileDayGrowthCount: the daily increment of the number of large files. Large files are those with a size greater than 1 GB.
     *   mediumFileDayGrowthCount: the daily increment of the number of medium files. Medium files are those with a size greater than or equal to 128 MB and less than or equal to 1 GB.
     *   smallFileDayGrowthCount: the daily increment of the number of small files. Small files are those with a size greater than or equal to 10 MB and less than 128 MB.
     *   tinyFileDayGrowthCount: the daily increment of the number of very small files. Very small files are those with a size greater than 0 MB and less than 10 MB.
     *   emptyFileDayGrowthCount: the daily increment of the number of empty files. Empty files are those with a size of 0 MB.
     *   hotDataDayGrowthSize: the daily increment of the amount of hot data. Hot data refers to data that is accessed in previous seven days.
     *   warmDataDayGrowthSize: the daily increment of the amount of warm data. Warm data refers to data that is not accessed for more than 7 days but is accessed in previous 30 days.
     *   coldDataDayGrowthSize: the daily increment of the amount of cold data. Cold data refers to data that is not accessed for more than 30 days but is accessed in previous 90 days.
     *   freezeDataDayGrowthSize: the daily increment of the amount of very cold data. Very cold data refers to data that is not accessed for more than 90 days.
     *   totalDataDayGrowthSize: the daily increment of the amount of total data.
     *   totalFileCountDayGrowthRatio: the day-to-day growth rate of the total number of files.
     *   largeFileCountDayGrowthRatio: the day-to-day growth rate of the number of large files. Large files are those with a size greater than 1 GB.
     *   mediumFileCountDayGrowthRatio: the day-to-day growth rate of the number of medium files. Medium files are those with a size greater than or equal to 128 MB and less than or equal to 1 GB.
     *   smallFileCountDayGrowthRatio: the day-to-day growth rate of the number of small files. Small files are those with a size greater than or equal to 10 MB and less than 128 MB.
     *   tinyFileCountDayGrowthRatio: the day-to-day growth rate of the number of very small files. Very small files are those with a size greater than 0 MB and less than 10 MB.
     *   emptyFileCountDayGrowthRatio: the day-to-day growth rate of the number of empty files. Empty files are those with a size of 0 MB.
     *   hotDataSizeDayGrowthRatio: the day-to-day growth rate of the amount of hot data. Hot data refers to data that is accessed in previous seven days.
     *   warmDataSizeDayGrowthRatio: the day-to-day growth rate of the amount of warm data. Warm data refers to data that is not accessed for more than 7 days but is accessed in previous 30 days.
     *   coldDataSizeDayGrowthRatio: the day-to-day growth rate of the amount of cold data. Cold data refers to data that is not accessed for more than 30 days but is accessed in previous 90 days.
     *   freezeDataSizeDayGrowthRatio: the day-to-day growth rate of the amount of very cold data. Very cold data refers to data that is not accessed for more than 90 days.
     *   totalDataSizeDayGrowthRatio: the day-to-day growth rate of the total amount of data.
     *
     * @example totalFileCount
     *
     * @var string
     */
    public $orderBy;

    /**
     * @description The order in which you want to sort the query results. Valid value:
     *
     *   ASC: in ascending order
     *   DESC: in descending order
     *
     * @example ASC
     *
     * @var string
     */
    public $orderType;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The table names, which are used to filter the query results.
     *
     * @example null
     *
     * @var string[]
     */
    public $tableNames;
    protected $_name = [
        'clusterId'  => 'ClusterId',
        'dateTime'   => 'DateTime',
        'maxResults' => 'MaxResults',
        'nextToken'  => 'NextToken',
        'orderBy'    => 'OrderBy',
        'orderType'  => 'OrderType',
        'regionId'   => 'RegionId',
        'tableNames' => 'TableNames',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->dateTime) {
            $res['DateTime'] = $this->dateTime;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->tableNames) {
            $res['TableNames'] = $this->tableNames;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDoctorHiveTablesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['DateTime'])) {
            $model->dateTime = $map['DateTime'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TableNames'])) {
            if (!empty($map['TableNames'])) {
                $model->tableNames = $map['TableNames'];
            }
        }

        return $model;
    }
}

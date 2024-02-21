<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHiveDatabaseResponseBody\data;

use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHiveDatabaseResponseBody\data\metrics\coldDataDayGrowthSize;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHiveDatabaseResponseBody\data\metrics\coldDataRatio;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHiveDatabaseResponseBody\data\metrics\coldDataSize;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHiveDatabaseResponseBody\data\metrics\coldDataSizeDayGrowthRatio;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHiveDatabaseResponseBody\data\metrics\emptyFileCount;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHiveDatabaseResponseBody\data\metrics\emptyFileCountDayGrowthRatio;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHiveDatabaseResponseBody\data\metrics\emptyFileDayGrowthCount;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHiveDatabaseResponseBody\data\metrics\emptyFileRatio;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHiveDatabaseResponseBody\data\metrics\freezeDataDayGrowthSize;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHiveDatabaseResponseBody\data\metrics\freezeDataRatio;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHiveDatabaseResponseBody\data\metrics\freezeDataSize;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHiveDatabaseResponseBody\data\metrics\freezeDataSizeDayGrowthRatio;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHiveDatabaseResponseBody\data\metrics\hotDataDayGrowthSize;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHiveDatabaseResponseBody\data\metrics\hotDataRatio;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHiveDatabaseResponseBody\data\metrics\hotDataSize;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHiveDatabaseResponseBody\data\metrics\hotDataSizeDayGrowthRatio;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHiveDatabaseResponseBody\data\metrics\largeFileCount;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHiveDatabaseResponseBody\data\metrics\largeFileCountDayGrowthRatio;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHiveDatabaseResponseBody\data\metrics\largeFileDayGrowthCount;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHiveDatabaseResponseBody\data\metrics\largeFileRatio;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHiveDatabaseResponseBody\data\metrics\mediumFileCount;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHiveDatabaseResponseBody\data\metrics\mediumFileCountDayGrowthRatio;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHiveDatabaseResponseBody\data\metrics\mediumFileDayGrowthCount;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHiveDatabaseResponseBody\data\metrics\mediumFileRatio;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHiveDatabaseResponseBody\data\metrics\partitionNum;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHiveDatabaseResponseBody\data\metrics\smallFileCount;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHiveDatabaseResponseBody\data\metrics\smallFileCountDayGrowthRatio;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHiveDatabaseResponseBody\data\metrics\smallFileDayGrowthCount;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHiveDatabaseResponseBody\data\metrics\smallFileRatio;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHiveDatabaseResponseBody\data\metrics\tableCount;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHiveDatabaseResponseBody\data\metrics\tinyFileCount;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHiveDatabaseResponseBody\data\metrics\tinyFileCountDayGrowthRatio;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHiveDatabaseResponseBody\data\metrics\tinyFileDayGrowthCount;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHiveDatabaseResponseBody\data\metrics\tinyFileRatio;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHiveDatabaseResponseBody\data\metrics\totalDataDayGrowthSize;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHiveDatabaseResponseBody\data\metrics\totalDataSize;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHiveDatabaseResponseBody\data\metrics\totalDataSizeDayGrowthRatio;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHiveDatabaseResponseBody\data\metrics\totalFileCount;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHiveDatabaseResponseBody\data\metrics\totalFileCountDayGrowthRatio;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHiveDatabaseResponseBody\data\metrics\totalFileDayGrowthCount;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHiveDatabaseResponseBody\data\metrics\warmDataDayGrowthSize;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHiveDatabaseResponseBody\data\metrics\warmDataRatio;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHiveDatabaseResponseBody\data\metrics\warmDataSize;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHiveDatabaseResponseBody\data\metrics\warmDataSizeDayGrowthRatio;
use AlibabaCloud\Tea\Model;

class metrics extends Model
{
    /**
     * @description The daily increment of the amount of cold data. Cold data refers to data that is not accessed for more than 30 days but is accessed in previous 90 days.
     *
     * @var coldDataDayGrowthSize
     */
    public $coldDataDayGrowthSize;

    /**
     * @description The proportion of cold data. Cold data refers to data that is not accessed for more than 30 days but is accessed in previous 90 days.
     *
     * @var coldDataRatio
     */
    public $coldDataRatio;

    /**
     * @description The amount of cold data. Cold data refers to data that is not accessed for more than 30 days but is accessed in previous 90 days.
     *
     * @var coldDataSize
     */
    public $coldDataSize;

    /**
     * @description The day-to-day growth rate of the amount of cold data. Cold data refers to data that is not accessed for more than 30 days but is accessed in previous 90 days.
     *
     * @var coldDataSizeDayGrowthRatio
     */
    public $coldDataSizeDayGrowthRatio;

    /**
     * @description The number of empty files. Empty files are those with a size of 0 MB.
     *
     * @var emptyFileCount
     */
    public $emptyFileCount;

    /**
     * @description The day-to-day growth rate of the number of empty files. Empty files are those with a size of 0 MB.
     *
     * @var emptyFileCountDayGrowthRatio
     */
    public $emptyFileCountDayGrowthRatio;

    /**
     * @description The daily increment of the number of empty files. Empty files are those with a size of 0 MB.
     *
     * @var emptyFileDayGrowthCount
     */
    public $emptyFileDayGrowthCount;

    /**
     * @description The proportion of empty files. Empty files are those with a size of 0 MB.
     *
     * @var emptyFileRatio
     */
    public $emptyFileRatio;

    /**
     * @description The daily increment of the amount of very cold data. Very cold data refers to data that is not accessed for more than 90 days.
     *
     * @var freezeDataDayGrowthSize
     */
    public $freezeDataDayGrowthSize;

    /**
     * @description The proportion of very cold data. Very cold data refers to data that is not accessed for more than 90 days.
     *
     * @var freezeDataRatio
     */
    public $freezeDataRatio;

    /**
     * @description The amount of very cold data. Very cold data refers to data that is not accessed for more than 90 days.
     *
     * @var freezeDataSize
     */
    public $freezeDataSize;

    /**
     * @description The day-to-day growth rate of the amount of very cold data. Very cold data refers to data that is not accessed for more than 90 days.
     *
     * @var freezeDataSizeDayGrowthRatio
     */
    public $freezeDataSizeDayGrowthRatio;

    /**
     * @description The daily increment of the amount of hot data. Hot data refers to data that is accessed in previous seven days.
     *
     * @var hotDataDayGrowthSize
     */
    public $hotDataDayGrowthSize;

    /**
     * @description The proportion of hot data. Hot data refers to data that is accessed in previous seven days.
     *
     * @var hotDataRatio
     */
    public $hotDataRatio;

    /**
     * @description The amount of hot data. Hot data refers to data that is accessed in previous seven days.
     *
     * @var hotDataSize
     */
    public $hotDataSize;

    /**
     * @description The day-to-day growth rate of the amount of hot data. Hot data refers to data that is accessed in previous seven days.
     *
     * @var hotDataSizeDayGrowthRatio
     */
    public $hotDataSizeDayGrowthRatio;

    /**
     * @description The number of large files. Large files are those with a size greater than 1 GB.
     *
     * @var largeFileCount
     */
    public $largeFileCount;

    /**
     * @description The day-to-day growth rate of the number of large files. Large files are those with a size greater than 1 GB.
     *
     * @var largeFileCountDayGrowthRatio
     */
    public $largeFileCountDayGrowthRatio;

    /**
     * @description The daily increment of the number of large files. Large files are those with a size greater than 1 GB.
     *
     * @var largeFileDayGrowthCount
     */
    public $largeFileDayGrowthCount;

    /**
     * @description The proportion of large files. Large files are those with a size greater than 1 GB.
     *
     * @var largeFileRatio
     */
    public $largeFileRatio;

    /**
     * @description The number of medium files. Medium files are those with a size greater than or equal to 128 MB and less than or equal to 1 GB.
     *
     * @var mediumFileCount
     */
    public $mediumFileCount;

    /**
     * @description The day-to-day growth rate of the number of medium files. Medium files are those with a size greater than or equal to 128 MB and less than or equal to 1 GB.
     *
     * @var mediumFileCountDayGrowthRatio
     */
    public $mediumFileCountDayGrowthRatio;

    /**
     * @description The daily increment of the number of medium files. Medium files are those with a size greater than or equal to 128 MB and less than or equal to 1 GB.
     *
     * @var mediumFileDayGrowthCount
     */
    public $mediumFileDayGrowthCount;

    /**
     * @description The proportion of medium files. Medium files are those with a size greater than or equal to 128 MB and less than or equal to 1 GB.
     *
     * @var mediumFileRatio
     */
    public $mediumFileRatio;

    /**
     * @description The number of partitions.
     *
     * @var partitionNum
     */
    public $partitionNum;

    /**
     * @description The number of small files. Small files are those with a size greater than or equal to 10 MB and less than 128 MB.
     *
     * @var smallFileCount
     */
    public $smallFileCount;

    /**
     * @description The day-to-day growth rate of the number of small files. Small files are those with a size greater than or equal to 10 MB and less than 128 MB.
     *
     * @var smallFileCountDayGrowthRatio
     */
    public $smallFileCountDayGrowthRatio;

    /**
     * @description The daily increment of the number of small files. Small files are those with a size greater than or equal to 10 MB and less than 128 MB.
     *
     * @var smallFileDayGrowthCount
     */
    public $smallFileDayGrowthCount;

    /**
     * @description The proportion of small files. Small files are those with a size greater than or equal to 10 MB and less than 128 MB.
     *
     * @var smallFileRatio
     */
    public $smallFileRatio;

    /**
     * @description The number of tables.
     *
     * @var tableCount
     */
    public $tableCount;

    /**
     * @description The number of very small files. Very small files are those with a size greater than 0 MB and less than 10 MB.
     *
     * @var tinyFileCount
     */
    public $tinyFileCount;

    /**
     * @description The day-to-day growth rate of the number of very small files. Very small files are those with a size greater than 0 MB and less than 10 MB.
     *
     * @var tinyFileCountDayGrowthRatio
     */
    public $tinyFileCountDayGrowthRatio;

    /**
     * @description The daily increment of the number of very small files. Very small files are those with a size greater than 0 MB and less than 10 MB.
     *
     * @var tinyFileDayGrowthCount
     */
    public $tinyFileDayGrowthCount;

    /**
     * @description The proportion of very small files. Very small files are those with a size greater than 0 MB and less than 10 MB.
     *
     * @var tinyFileRatio
     */
    public $tinyFileRatio;

    /**
     * @description The daily incremental of the total amount of data.
     *
     * @var totalDataDayGrowthSize
     */
    public $totalDataDayGrowthSize;

    /**
     * @description The total amount of data.
     *
     * @var totalDataSize
     */
    public $totalDataSize;

    /**
     * @description The day-to-day growth rate of the total data volume.
     *
     * @var totalDataSizeDayGrowthRatio
     */
    public $totalDataSizeDayGrowthRatio;

    /**
     * @description The total number of files.
     *
     * @var totalFileCount
     */
    public $totalFileCount;

    /**
     * @description The day-to-day growth rate of the total number of files.
     *
     * @var totalFileCountDayGrowthRatio
     */
    public $totalFileCountDayGrowthRatio;

    /**
     * @description The daily increment of the total number of files.
     *
     * @var totalFileDayGrowthCount
     */
    public $totalFileDayGrowthCount;

    /**
     * @description The daily increment of the amount of warm data. Warm data refers to data that is not accessed for more than 7 days but is accessed in previous 30 days.
     *
     * @var warmDataDayGrowthSize
     */
    public $warmDataDayGrowthSize;

    /**
     * @description The proportion of warm data. Warm data refers to data that is not accessed for more than 7 days but is accessed in previous 30 days.
     *
     * @var warmDataRatio
     */
    public $warmDataRatio;

    /**
     * @description The amount of warm data. Warm data refers to data that is not accessed for more than 7 days but is accessed in previous 30 days.
     *
     * @var warmDataSize
     */
    public $warmDataSize;

    /**
     * @description The day-to-day growth rate of the amount of warm data. Warm data refers to data that is not accessed for more than 7 days but is accessed in previous 30 days.
     *
     * @var warmDataSizeDayGrowthRatio
     */
    public $warmDataSizeDayGrowthRatio;
    protected $_name = [
        'coldDataDayGrowthSize'         => 'ColdDataDayGrowthSize',
        'coldDataRatio'                 => 'ColdDataRatio',
        'coldDataSize'                  => 'ColdDataSize',
        'coldDataSizeDayGrowthRatio'    => 'ColdDataSizeDayGrowthRatio',
        'emptyFileCount'                => 'EmptyFileCount',
        'emptyFileCountDayGrowthRatio'  => 'EmptyFileCountDayGrowthRatio',
        'emptyFileDayGrowthCount'       => 'EmptyFileDayGrowthCount',
        'emptyFileRatio'                => 'EmptyFileRatio',
        'freezeDataDayGrowthSize'       => 'FreezeDataDayGrowthSize',
        'freezeDataRatio'               => 'FreezeDataRatio',
        'freezeDataSize'                => 'FreezeDataSize',
        'freezeDataSizeDayGrowthRatio'  => 'FreezeDataSizeDayGrowthRatio',
        'hotDataDayGrowthSize'          => 'HotDataDayGrowthSize',
        'hotDataRatio'                  => 'HotDataRatio',
        'hotDataSize'                   => 'HotDataSize',
        'hotDataSizeDayGrowthRatio'     => 'HotDataSizeDayGrowthRatio',
        'largeFileCount'                => 'LargeFileCount',
        'largeFileCountDayGrowthRatio'  => 'LargeFileCountDayGrowthRatio',
        'largeFileDayGrowthCount'       => 'LargeFileDayGrowthCount',
        'largeFileRatio'                => 'LargeFileRatio',
        'mediumFileCount'               => 'MediumFileCount',
        'mediumFileCountDayGrowthRatio' => 'MediumFileCountDayGrowthRatio',
        'mediumFileDayGrowthCount'      => 'MediumFileDayGrowthCount',
        'mediumFileRatio'               => 'MediumFileRatio',
        'partitionNum'                  => 'PartitionNum',
        'smallFileCount'                => 'SmallFileCount',
        'smallFileCountDayGrowthRatio'  => 'SmallFileCountDayGrowthRatio',
        'smallFileDayGrowthCount'       => 'SmallFileDayGrowthCount',
        'smallFileRatio'                => 'SmallFileRatio',
        'tableCount'                    => 'TableCount',
        'tinyFileCount'                 => 'TinyFileCount',
        'tinyFileCountDayGrowthRatio'   => 'TinyFileCountDayGrowthRatio',
        'tinyFileDayGrowthCount'        => 'TinyFileDayGrowthCount',
        'tinyFileRatio'                 => 'TinyFileRatio',
        'totalDataDayGrowthSize'        => 'TotalDataDayGrowthSize',
        'totalDataSize'                 => 'TotalDataSize',
        'totalDataSizeDayGrowthRatio'   => 'TotalDataSizeDayGrowthRatio',
        'totalFileCount'                => 'TotalFileCount',
        'totalFileCountDayGrowthRatio'  => 'TotalFileCountDayGrowthRatio',
        'totalFileDayGrowthCount'       => 'TotalFileDayGrowthCount',
        'warmDataDayGrowthSize'         => 'WarmDataDayGrowthSize',
        'warmDataRatio'                 => 'WarmDataRatio',
        'warmDataSize'                  => 'WarmDataSize',
        'warmDataSizeDayGrowthRatio'    => 'WarmDataSizeDayGrowthRatio',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->coldDataDayGrowthSize) {
            $res['ColdDataDayGrowthSize'] = null !== $this->coldDataDayGrowthSize ? $this->coldDataDayGrowthSize->toMap() : null;
        }
        if (null !== $this->coldDataRatio) {
            $res['ColdDataRatio'] = null !== $this->coldDataRatio ? $this->coldDataRatio->toMap() : null;
        }
        if (null !== $this->coldDataSize) {
            $res['ColdDataSize'] = null !== $this->coldDataSize ? $this->coldDataSize->toMap() : null;
        }
        if (null !== $this->coldDataSizeDayGrowthRatio) {
            $res['ColdDataSizeDayGrowthRatio'] = null !== $this->coldDataSizeDayGrowthRatio ? $this->coldDataSizeDayGrowthRatio->toMap() : null;
        }
        if (null !== $this->emptyFileCount) {
            $res['EmptyFileCount'] = null !== $this->emptyFileCount ? $this->emptyFileCount->toMap() : null;
        }
        if (null !== $this->emptyFileCountDayGrowthRatio) {
            $res['EmptyFileCountDayGrowthRatio'] = null !== $this->emptyFileCountDayGrowthRatio ? $this->emptyFileCountDayGrowthRatio->toMap() : null;
        }
        if (null !== $this->emptyFileDayGrowthCount) {
            $res['EmptyFileDayGrowthCount'] = null !== $this->emptyFileDayGrowthCount ? $this->emptyFileDayGrowthCount->toMap() : null;
        }
        if (null !== $this->emptyFileRatio) {
            $res['EmptyFileRatio'] = null !== $this->emptyFileRatio ? $this->emptyFileRatio->toMap() : null;
        }
        if (null !== $this->freezeDataDayGrowthSize) {
            $res['FreezeDataDayGrowthSize'] = null !== $this->freezeDataDayGrowthSize ? $this->freezeDataDayGrowthSize->toMap() : null;
        }
        if (null !== $this->freezeDataRatio) {
            $res['FreezeDataRatio'] = null !== $this->freezeDataRatio ? $this->freezeDataRatio->toMap() : null;
        }
        if (null !== $this->freezeDataSize) {
            $res['FreezeDataSize'] = null !== $this->freezeDataSize ? $this->freezeDataSize->toMap() : null;
        }
        if (null !== $this->freezeDataSizeDayGrowthRatio) {
            $res['FreezeDataSizeDayGrowthRatio'] = null !== $this->freezeDataSizeDayGrowthRatio ? $this->freezeDataSizeDayGrowthRatio->toMap() : null;
        }
        if (null !== $this->hotDataDayGrowthSize) {
            $res['HotDataDayGrowthSize'] = null !== $this->hotDataDayGrowthSize ? $this->hotDataDayGrowthSize->toMap() : null;
        }
        if (null !== $this->hotDataRatio) {
            $res['HotDataRatio'] = null !== $this->hotDataRatio ? $this->hotDataRatio->toMap() : null;
        }
        if (null !== $this->hotDataSize) {
            $res['HotDataSize'] = null !== $this->hotDataSize ? $this->hotDataSize->toMap() : null;
        }
        if (null !== $this->hotDataSizeDayGrowthRatio) {
            $res['HotDataSizeDayGrowthRatio'] = null !== $this->hotDataSizeDayGrowthRatio ? $this->hotDataSizeDayGrowthRatio->toMap() : null;
        }
        if (null !== $this->largeFileCount) {
            $res['LargeFileCount'] = null !== $this->largeFileCount ? $this->largeFileCount->toMap() : null;
        }
        if (null !== $this->largeFileCountDayGrowthRatio) {
            $res['LargeFileCountDayGrowthRatio'] = null !== $this->largeFileCountDayGrowthRatio ? $this->largeFileCountDayGrowthRatio->toMap() : null;
        }
        if (null !== $this->largeFileDayGrowthCount) {
            $res['LargeFileDayGrowthCount'] = null !== $this->largeFileDayGrowthCount ? $this->largeFileDayGrowthCount->toMap() : null;
        }
        if (null !== $this->largeFileRatio) {
            $res['LargeFileRatio'] = null !== $this->largeFileRatio ? $this->largeFileRatio->toMap() : null;
        }
        if (null !== $this->mediumFileCount) {
            $res['MediumFileCount'] = null !== $this->mediumFileCount ? $this->mediumFileCount->toMap() : null;
        }
        if (null !== $this->mediumFileCountDayGrowthRatio) {
            $res['MediumFileCountDayGrowthRatio'] = null !== $this->mediumFileCountDayGrowthRatio ? $this->mediumFileCountDayGrowthRatio->toMap() : null;
        }
        if (null !== $this->mediumFileDayGrowthCount) {
            $res['MediumFileDayGrowthCount'] = null !== $this->mediumFileDayGrowthCount ? $this->mediumFileDayGrowthCount->toMap() : null;
        }
        if (null !== $this->mediumFileRatio) {
            $res['MediumFileRatio'] = null !== $this->mediumFileRatio ? $this->mediumFileRatio->toMap() : null;
        }
        if (null !== $this->partitionNum) {
            $res['PartitionNum'] = null !== $this->partitionNum ? $this->partitionNum->toMap() : null;
        }
        if (null !== $this->smallFileCount) {
            $res['SmallFileCount'] = null !== $this->smallFileCount ? $this->smallFileCount->toMap() : null;
        }
        if (null !== $this->smallFileCountDayGrowthRatio) {
            $res['SmallFileCountDayGrowthRatio'] = null !== $this->smallFileCountDayGrowthRatio ? $this->smallFileCountDayGrowthRatio->toMap() : null;
        }
        if (null !== $this->smallFileDayGrowthCount) {
            $res['SmallFileDayGrowthCount'] = null !== $this->smallFileDayGrowthCount ? $this->smallFileDayGrowthCount->toMap() : null;
        }
        if (null !== $this->smallFileRatio) {
            $res['SmallFileRatio'] = null !== $this->smallFileRatio ? $this->smallFileRatio->toMap() : null;
        }
        if (null !== $this->tableCount) {
            $res['TableCount'] = null !== $this->tableCount ? $this->tableCount->toMap() : null;
        }
        if (null !== $this->tinyFileCount) {
            $res['TinyFileCount'] = null !== $this->tinyFileCount ? $this->tinyFileCount->toMap() : null;
        }
        if (null !== $this->tinyFileCountDayGrowthRatio) {
            $res['TinyFileCountDayGrowthRatio'] = null !== $this->tinyFileCountDayGrowthRatio ? $this->tinyFileCountDayGrowthRatio->toMap() : null;
        }
        if (null !== $this->tinyFileDayGrowthCount) {
            $res['TinyFileDayGrowthCount'] = null !== $this->tinyFileDayGrowthCount ? $this->tinyFileDayGrowthCount->toMap() : null;
        }
        if (null !== $this->tinyFileRatio) {
            $res['TinyFileRatio'] = null !== $this->tinyFileRatio ? $this->tinyFileRatio->toMap() : null;
        }
        if (null !== $this->totalDataDayGrowthSize) {
            $res['TotalDataDayGrowthSize'] = null !== $this->totalDataDayGrowthSize ? $this->totalDataDayGrowthSize->toMap() : null;
        }
        if (null !== $this->totalDataSize) {
            $res['TotalDataSize'] = null !== $this->totalDataSize ? $this->totalDataSize->toMap() : null;
        }
        if (null !== $this->totalDataSizeDayGrowthRatio) {
            $res['TotalDataSizeDayGrowthRatio'] = null !== $this->totalDataSizeDayGrowthRatio ? $this->totalDataSizeDayGrowthRatio->toMap() : null;
        }
        if (null !== $this->totalFileCount) {
            $res['TotalFileCount'] = null !== $this->totalFileCount ? $this->totalFileCount->toMap() : null;
        }
        if (null !== $this->totalFileCountDayGrowthRatio) {
            $res['TotalFileCountDayGrowthRatio'] = null !== $this->totalFileCountDayGrowthRatio ? $this->totalFileCountDayGrowthRatio->toMap() : null;
        }
        if (null !== $this->totalFileDayGrowthCount) {
            $res['TotalFileDayGrowthCount'] = null !== $this->totalFileDayGrowthCount ? $this->totalFileDayGrowthCount->toMap() : null;
        }
        if (null !== $this->warmDataDayGrowthSize) {
            $res['WarmDataDayGrowthSize'] = null !== $this->warmDataDayGrowthSize ? $this->warmDataDayGrowthSize->toMap() : null;
        }
        if (null !== $this->warmDataRatio) {
            $res['WarmDataRatio'] = null !== $this->warmDataRatio ? $this->warmDataRatio->toMap() : null;
        }
        if (null !== $this->warmDataSize) {
            $res['WarmDataSize'] = null !== $this->warmDataSize ? $this->warmDataSize->toMap() : null;
        }
        if (null !== $this->warmDataSizeDayGrowthRatio) {
            $res['WarmDataSizeDayGrowthRatio'] = null !== $this->warmDataSizeDayGrowthRatio ? $this->warmDataSizeDayGrowthRatio->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metrics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColdDataDayGrowthSize'])) {
            $model->coldDataDayGrowthSize = coldDataDayGrowthSize::fromMap($map['ColdDataDayGrowthSize']);
        }
        if (isset($map['ColdDataRatio'])) {
            $model->coldDataRatio = coldDataRatio::fromMap($map['ColdDataRatio']);
        }
        if (isset($map['ColdDataSize'])) {
            $model->coldDataSize = coldDataSize::fromMap($map['ColdDataSize']);
        }
        if (isset($map['ColdDataSizeDayGrowthRatio'])) {
            $model->coldDataSizeDayGrowthRatio = coldDataSizeDayGrowthRatio::fromMap($map['ColdDataSizeDayGrowthRatio']);
        }
        if (isset($map['EmptyFileCount'])) {
            $model->emptyFileCount = emptyFileCount::fromMap($map['EmptyFileCount']);
        }
        if (isset($map['EmptyFileCountDayGrowthRatio'])) {
            $model->emptyFileCountDayGrowthRatio = emptyFileCountDayGrowthRatio::fromMap($map['EmptyFileCountDayGrowthRatio']);
        }
        if (isset($map['EmptyFileDayGrowthCount'])) {
            $model->emptyFileDayGrowthCount = emptyFileDayGrowthCount::fromMap($map['EmptyFileDayGrowthCount']);
        }
        if (isset($map['EmptyFileRatio'])) {
            $model->emptyFileRatio = emptyFileRatio::fromMap($map['EmptyFileRatio']);
        }
        if (isset($map['FreezeDataDayGrowthSize'])) {
            $model->freezeDataDayGrowthSize = freezeDataDayGrowthSize::fromMap($map['FreezeDataDayGrowthSize']);
        }
        if (isset($map['FreezeDataRatio'])) {
            $model->freezeDataRatio = freezeDataRatio::fromMap($map['FreezeDataRatio']);
        }
        if (isset($map['FreezeDataSize'])) {
            $model->freezeDataSize = freezeDataSize::fromMap($map['FreezeDataSize']);
        }
        if (isset($map['FreezeDataSizeDayGrowthRatio'])) {
            $model->freezeDataSizeDayGrowthRatio = freezeDataSizeDayGrowthRatio::fromMap($map['FreezeDataSizeDayGrowthRatio']);
        }
        if (isset($map['HotDataDayGrowthSize'])) {
            $model->hotDataDayGrowthSize = hotDataDayGrowthSize::fromMap($map['HotDataDayGrowthSize']);
        }
        if (isset($map['HotDataRatio'])) {
            $model->hotDataRatio = hotDataRatio::fromMap($map['HotDataRatio']);
        }
        if (isset($map['HotDataSize'])) {
            $model->hotDataSize = hotDataSize::fromMap($map['HotDataSize']);
        }
        if (isset($map['HotDataSizeDayGrowthRatio'])) {
            $model->hotDataSizeDayGrowthRatio = hotDataSizeDayGrowthRatio::fromMap($map['HotDataSizeDayGrowthRatio']);
        }
        if (isset($map['LargeFileCount'])) {
            $model->largeFileCount = largeFileCount::fromMap($map['LargeFileCount']);
        }
        if (isset($map['LargeFileCountDayGrowthRatio'])) {
            $model->largeFileCountDayGrowthRatio = largeFileCountDayGrowthRatio::fromMap($map['LargeFileCountDayGrowthRatio']);
        }
        if (isset($map['LargeFileDayGrowthCount'])) {
            $model->largeFileDayGrowthCount = largeFileDayGrowthCount::fromMap($map['LargeFileDayGrowthCount']);
        }
        if (isset($map['LargeFileRatio'])) {
            $model->largeFileRatio = largeFileRatio::fromMap($map['LargeFileRatio']);
        }
        if (isset($map['MediumFileCount'])) {
            $model->mediumFileCount = mediumFileCount::fromMap($map['MediumFileCount']);
        }
        if (isset($map['MediumFileCountDayGrowthRatio'])) {
            $model->mediumFileCountDayGrowthRatio = mediumFileCountDayGrowthRatio::fromMap($map['MediumFileCountDayGrowthRatio']);
        }
        if (isset($map['MediumFileDayGrowthCount'])) {
            $model->mediumFileDayGrowthCount = mediumFileDayGrowthCount::fromMap($map['MediumFileDayGrowthCount']);
        }
        if (isset($map['MediumFileRatio'])) {
            $model->mediumFileRatio = mediumFileRatio::fromMap($map['MediumFileRatio']);
        }
        if (isset($map['PartitionNum'])) {
            $model->partitionNum = partitionNum::fromMap($map['PartitionNum']);
        }
        if (isset($map['SmallFileCount'])) {
            $model->smallFileCount = smallFileCount::fromMap($map['SmallFileCount']);
        }
        if (isset($map['SmallFileCountDayGrowthRatio'])) {
            $model->smallFileCountDayGrowthRatio = smallFileCountDayGrowthRatio::fromMap($map['SmallFileCountDayGrowthRatio']);
        }
        if (isset($map['SmallFileDayGrowthCount'])) {
            $model->smallFileDayGrowthCount = smallFileDayGrowthCount::fromMap($map['SmallFileDayGrowthCount']);
        }
        if (isset($map['SmallFileRatio'])) {
            $model->smallFileRatio = smallFileRatio::fromMap($map['SmallFileRatio']);
        }
        if (isset($map['TableCount'])) {
            $model->tableCount = tableCount::fromMap($map['TableCount']);
        }
        if (isset($map['TinyFileCount'])) {
            $model->tinyFileCount = tinyFileCount::fromMap($map['TinyFileCount']);
        }
        if (isset($map['TinyFileCountDayGrowthRatio'])) {
            $model->tinyFileCountDayGrowthRatio = tinyFileCountDayGrowthRatio::fromMap($map['TinyFileCountDayGrowthRatio']);
        }
        if (isset($map['TinyFileDayGrowthCount'])) {
            $model->tinyFileDayGrowthCount = tinyFileDayGrowthCount::fromMap($map['TinyFileDayGrowthCount']);
        }
        if (isset($map['TinyFileRatio'])) {
            $model->tinyFileRatio = tinyFileRatio::fromMap($map['TinyFileRatio']);
        }
        if (isset($map['TotalDataDayGrowthSize'])) {
            $model->totalDataDayGrowthSize = totalDataDayGrowthSize::fromMap($map['TotalDataDayGrowthSize']);
        }
        if (isset($map['TotalDataSize'])) {
            $model->totalDataSize = totalDataSize::fromMap($map['TotalDataSize']);
        }
        if (isset($map['TotalDataSizeDayGrowthRatio'])) {
            $model->totalDataSizeDayGrowthRatio = totalDataSizeDayGrowthRatio::fromMap($map['TotalDataSizeDayGrowthRatio']);
        }
        if (isset($map['TotalFileCount'])) {
            $model->totalFileCount = totalFileCount::fromMap($map['TotalFileCount']);
        }
        if (isset($map['TotalFileCountDayGrowthRatio'])) {
            $model->totalFileCountDayGrowthRatio = totalFileCountDayGrowthRatio::fromMap($map['TotalFileCountDayGrowthRatio']);
        }
        if (isset($map['TotalFileDayGrowthCount'])) {
            $model->totalFileDayGrowthCount = totalFileDayGrowthCount::fromMap($map['TotalFileDayGrowthCount']);
        }
        if (isset($map['WarmDataDayGrowthSize'])) {
            $model->warmDataDayGrowthSize = warmDataDayGrowthSize::fromMap($map['WarmDataDayGrowthSize']);
        }
        if (isset($map['WarmDataRatio'])) {
            $model->warmDataRatio = warmDataRatio::fromMap($map['WarmDataRatio']);
        }
        if (isset($map['WarmDataSize'])) {
            $model->warmDataSize = warmDataSize::fromMap($map['WarmDataSize']);
        }
        if (isset($map['WarmDataSizeDayGrowthRatio'])) {
            $model->warmDataSizeDayGrowthRatio = warmDataSizeDayGrowthRatio::fromMap($map['WarmDataSizeDayGrowthRatio']);
        }

        return $model;
    }
}

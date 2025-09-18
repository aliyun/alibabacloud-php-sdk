<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHiveDatabaseResponseBody\data;

use AlibabaCloud\Dara\Model;
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

class metrics extends Model
{
    /**
     * @var coldDataDayGrowthSize
     */
    public $coldDataDayGrowthSize;

    /**
     * @var coldDataRatio
     */
    public $coldDataRatio;

    /**
     * @var coldDataSize
     */
    public $coldDataSize;

    /**
     * @var coldDataSizeDayGrowthRatio
     */
    public $coldDataSizeDayGrowthRatio;

    /**
     * @var emptyFileCount
     */
    public $emptyFileCount;

    /**
     * @var emptyFileCountDayGrowthRatio
     */
    public $emptyFileCountDayGrowthRatio;

    /**
     * @var emptyFileDayGrowthCount
     */
    public $emptyFileDayGrowthCount;

    /**
     * @var emptyFileRatio
     */
    public $emptyFileRatio;

    /**
     * @var freezeDataDayGrowthSize
     */
    public $freezeDataDayGrowthSize;

    /**
     * @var freezeDataRatio
     */
    public $freezeDataRatio;

    /**
     * @var freezeDataSize
     */
    public $freezeDataSize;

    /**
     * @var freezeDataSizeDayGrowthRatio
     */
    public $freezeDataSizeDayGrowthRatio;

    /**
     * @var hotDataDayGrowthSize
     */
    public $hotDataDayGrowthSize;

    /**
     * @var hotDataRatio
     */
    public $hotDataRatio;

    /**
     * @var hotDataSize
     */
    public $hotDataSize;

    /**
     * @var hotDataSizeDayGrowthRatio
     */
    public $hotDataSizeDayGrowthRatio;

    /**
     * @var largeFileCount
     */
    public $largeFileCount;

    /**
     * @var largeFileCountDayGrowthRatio
     */
    public $largeFileCountDayGrowthRatio;

    /**
     * @var largeFileDayGrowthCount
     */
    public $largeFileDayGrowthCount;

    /**
     * @var largeFileRatio
     */
    public $largeFileRatio;

    /**
     * @var mediumFileCount
     */
    public $mediumFileCount;

    /**
     * @var mediumFileCountDayGrowthRatio
     */
    public $mediumFileCountDayGrowthRatio;

    /**
     * @var mediumFileDayGrowthCount
     */
    public $mediumFileDayGrowthCount;

    /**
     * @var mediumFileRatio
     */
    public $mediumFileRatio;

    /**
     * @var partitionNum
     */
    public $partitionNum;

    /**
     * @var smallFileCount
     */
    public $smallFileCount;

    /**
     * @var smallFileCountDayGrowthRatio
     */
    public $smallFileCountDayGrowthRatio;

    /**
     * @var smallFileDayGrowthCount
     */
    public $smallFileDayGrowthCount;

    /**
     * @var smallFileRatio
     */
    public $smallFileRatio;

    /**
     * @var tableCount
     */
    public $tableCount;

    /**
     * @var tinyFileCount
     */
    public $tinyFileCount;

    /**
     * @var tinyFileCountDayGrowthRatio
     */
    public $tinyFileCountDayGrowthRatio;

    /**
     * @var tinyFileDayGrowthCount
     */
    public $tinyFileDayGrowthCount;

    /**
     * @var tinyFileRatio
     */
    public $tinyFileRatio;

    /**
     * @var totalDataDayGrowthSize
     */
    public $totalDataDayGrowthSize;

    /**
     * @var totalDataSize
     */
    public $totalDataSize;

    /**
     * @var totalDataSizeDayGrowthRatio
     */
    public $totalDataSizeDayGrowthRatio;

    /**
     * @var totalFileCount
     */
    public $totalFileCount;

    /**
     * @var totalFileCountDayGrowthRatio
     */
    public $totalFileCountDayGrowthRatio;

    /**
     * @var totalFileDayGrowthCount
     */
    public $totalFileDayGrowthCount;

    /**
     * @var warmDataDayGrowthSize
     */
    public $warmDataDayGrowthSize;

    /**
     * @var warmDataRatio
     */
    public $warmDataRatio;

    /**
     * @var warmDataSize
     */
    public $warmDataSize;

    /**
     * @var warmDataSizeDayGrowthRatio
     */
    public $warmDataSizeDayGrowthRatio;
    protected $_name = [
        'coldDataDayGrowthSize' => 'ColdDataDayGrowthSize',
        'coldDataRatio' => 'ColdDataRatio',
        'coldDataSize' => 'ColdDataSize',
        'coldDataSizeDayGrowthRatio' => 'ColdDataSizeDayGrowthRatio',
        'emptyFileCount' => 'EmptyFileCount',
        'emptyFileCountDayGrowthRatio' => 'EmptyFileCountDayGrowthRatio',
        'emptyFileDayGrowthCount' => 'EmptyFileDayGrowthCount',
        'emptyFileRatio' => 'EmptyFileRatio',
        'freezeDataDayGrowthSize' => 'FreezeDataDayGrowthSize',
        'freezeDataRatio' => 'FreezeDataRatio',
        'freezeDataSize' => 'FreezeDataSize',
        'freezeDataSizeDayGrowthRatio' => 'FreezeDataSizeDayGrowthRatio',
        'hotDataDayGrowthSize' => 'HotDataDayGrowthSize',
        'hotDataRatio' => 'HotDataRatio',
        'hotDataSize' => 'HotDataSize',
        'hotDataSizeDayGrowthRatio' => 'HotDataSizeDayGrowthRatio',
        'largeFileCount' => 'LargeFileCount',
        'largeFileCountDayGrowthRatio' => 'LargeFileCountDayGrowthRatio',
        'largeFileDayGrowthCount' => 'LargeFileDayGrowthCount',
        'largeFileRatio' => 'LargeFileRatio',
        'mediumFileCount' => 'MediumFileCount',
        'mediumFileCountDayGrowthRatio' => 'MediumFileCountDayGrowthRatio',
        'mediumFileDayGrowthCount' => 'MediumFileDayGrowthCount',
        'mediumFileRatio' => 'MediumFileRatio',
        'partitionNum' => 'PartitionNum',
        'smallFileCount' => 'SmallFileCount',
        'smallFileCountDayGrowthRatio' => 'SmallFileCountDayGrowthRatio',
        'smallFileDayGrowthCount' => 'SmallFileDayGrowthCount',
        'smallFileRatio' => 'SmallFileRatio',
        'tableCount' => 'TableCount',
        'tinyFileCount' => 'TinyFileCount',
        'tinyFileCountDayGrowthRatio' => 'TinyFileCountDayGrowthRatio',
        'tinyFileDayGrowthCount' => 'TinyFileDayGrowthCount',
        'tinyFileRatio' => 'TinyFileRatio',
        'totalDataDayGrowthSize' => 'TotalDataDayGrowthSize',
        'totalDataSize' => 'TotalDataSize',
        'totalDataSizeDayGrowthRatio' => 'TotalDataSizeDayGrowthRatio',
        'totalFileCount' => 'TotalFileCount',
        'totalFileCountDayGrowthRatio' => 'TotalFileCountDayGrowthRatio',
        'totalFileDayGrowthCount' => 'TotalFileDayGrowthCount',
        'warmDataDayGrowthSize' => 'WarmDataDayGrowthSize',
        'warmDataRatio' => 'WarmDataRatio',
        'warmDataSize' => 'WarmDataSize',
        'warmDataSizeDayGrowthRatio' => 'WarmDataSizeDayGrowthRatio',
    ];

    public function validate()
    {
        if (null !== $this->coldDataDayGrowthSize) {
            $this->coldDataDayGrowthSize->validate();
        }
        if (null !== $this->coldDataRatio) {
            $this->coldDataRatio->validate();
        }
        if (null !== $this->coldDataSize) {
            $this->coldDataSize->validate();
        }
        if (null !== $this->coldDataSizeDayGrowthRatio) {
            $this->coldDataSizeDayGrowthRatio->validate();
        }
        if (null !== $this->emptyFileCount) {
            $this->emptyFileCount->validate();
        }
        if (null !== $this->emptyFileCountDayGrowthRatio) {
            $this->emptyFileCountDayGrowthRatio->validate();
        }
        if (null !== $this->emptyFileDayGrowthCount) {
            $this->emptyFileDayGrowthCount->validate();
        }
        if (null !== $this->emptyFileRatio) {
            $this->emptyFileRatio->validate();
        }
        if (null !== $this->freezeDataDayGrowthSize) {
            $this->freezeDataDayGrowthSize->validate();
        }
        if (null !== $this->freezeDataRatio) {
            $this->freezeDataRatio->validate();
        }
        if (null !== $this->freezeDataSize) {
            $this->freezeDataSize->validate();
        }
        if (null !== $this->freezeDataSizeDayGrowthRatio) {
            $this->freezeDataSizeDayGrowthRatio->validate();
        }
        if (null !== $this->hotDataDayGrowthSize) {
            $this->hotDataDayGrowthSize->validate();
        }
        if (null !== $this->hotDataRatio) {
            $this->hotDataRatio->validate();
        }
        if (null !== $this->hotDataSize) {
            $this->hotDataSize->validate();
        }
        if (null !== $this->hotDataSizeDayGrowthRatio) {
            $this->hotDataSizeDayGrowthRatio->validate();
        }
        if (null !== $this->largeFileCount) {
            $this->largeFileCount->validate();
        }
        if (null !== $this->largeFileCountDayGrowthRatio) {
            $this->largeFileCountDayGrowthRatio->validate();
        }
        if (null !== $this->largeFileDayGrowthCount) {
            $this->largeFileDayGrowthCount->validate();
        }
        if (null !== $this->largeFileRatio) {
            $this->largeFileRatio->validate();
        }
        if (null !== $this->mediumFileCount) {
            $this->mediumFileCount->validate();
        }
        if (null !== $this->mediumFileCountDayGrowthRatio) {
            $this->mediumFileCountDayGrowthRatio->validate();
        }
        if (null !== $this->mediumFileDayGrowthCount) {
            $this->mediumFileDayGrowthCount->validate();
        }
        if (null !== $this->mediumFileRatio) {
            $this->mediumFileRatio->validate();
        }
        if (null !== $this->partitionNum) {
            $this->partitionNum->validate();
        }
        if (null !== $this->smallFileCount) {
            $this->smallFileCount->validate();
        }
        if (null !== $this->smallFileCountDayGrowthRatio) {
            $this->smallFileCountDayGrowthRatio->validate();
        }
        if (null !== $this->smallFileDayGrowthCount) {
            $this->smallFileDayGrowthCount->validate();
        }
        if (null !== $this->smallFileRatio) {
            $this->smallFileRatio->validate();
        }
        if (null !== $this->tableCount) {
            $this->tableCount->validate();
        }
        if (null !== $this->tinyFileCount) {
            $this->tinyFileCount->validate();
        }
        if (null !== $this->tinyFileCountDayGrowthRatio) {
            $this->tinyFileCountDayGrowthRatio->validate();
        }
        if (null !== $this->tinyFileDayGrowthCount) {
            $this->tinyFileDayGrowthCount->validate();
        }
        if (null !== $this->tinyFileRatio) {
            $this->tinyFileRatio->validate();
        }
        if (null !== $this->totalDataDayGrowthSize) {
            $this->totalDataDayGrowthSize->validate();
        }
        if (null !== $this->totalDataSize) {
            $this->totalDataSize->validate();
        }
        if (null !== $this->totalDataSizeDayGrowthRatio) {
            $this->totalDataSizeDayGrowthRatio->validate();
        }
        if (null !== $this->totalFileCount) {
            $this->totalFileCount->validate();
        }
        if (null !== $this->totalFileCountDayGrowthRatio) {
            $this->totalFileCountDayGrowthRatio->validate();
        }
        if (null !== $this->totalFileDayGrowthCount) {
            $this->totalFileDayGrowthCount->validate();
        }
        if (null !== $this->warmDataDayGrowthSize) {
            $this->warmDataDayGrowthSize->validate();
        }
        if (null !== $this->warmDataRatio) {
            $this->warmDataRatio->validate();
        }
        if (null !== $this->warmDataSize) {
            $this->warmDataSize->validate();
        }
        if (null !== $this->warmDataSizeDayGrowthRatio) {
            $this->warmDataSizeDayGrowthRatio->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->coldDataDayGrowthSize) {
            $res['ColdDataDayGrowthSize'] = null !== $this->coldDataDayGrowthSize ? $this->coldDataDayGrowthSize->toArray($noStream) : $this->coldDataDayGrowthSize;
        }

        if (null !== $this->coldDataRatio) {
            $res['ColdDataRatio'] = null !== $this->coldDataRatio ? $this->coldDataRatio->toArray($noStream) : $this->coldDataRatio;
        }

        if (null !== $this->coldDataSize) {
            $res['ColdDataSize'] = null !== $this->coldDataSize ? $this->coldDataSize->toArray($noStream) : $this->coldDataSize;
        }

        if (null !== $this->coldDataSizeDayGrowthRatio) {
            $res['ColdDataSizeDayGrowthRatio'] = null !== $this->coldDataSizeDayGrowthRatio ? $this->coldDataSizeDayGrowthRatio->toArray($noStream) : $this->coldDataSizeDayGrowthRatio;
        }

        if (null !== $this->emptyFileCount) {
            $res['EmptyFileCount'] = null !== $this->emptyFileCount ? $this->emptyFileCount->toArray($noStream) : $this->emptyFileCount;
        }

        if (null !== $this->emptyFileCountDayGrowthRatio) {
            $res['EmptyFileCountDayGrowthRatio'] = null !== $this->emptyFileCountDayGrowthRatio ? $this->emptyFileCountDayGrowthRatio->toArray($noStream) : $this->emptyFileCountDayGrowthRatio;
        }

        if (null !== $this->emptyFileDayGrowthCount) {
            $res['EmptyFileDayGrowthCount'] = null !== $this->emptyFileDayGrowthCount ? $this->emptyFileDayGrowthCount->toArray($noStream) : $this->emptyFileDayGrowthCount;
        }

        if (null !== $this->emptyFileRatio) {
            $res['EmptyFileRatio'] = null !== $this->emptyFileRatio ? $this->emptyFileRatio->toArray($noStream) : $this->emptyFileRatio;
        }

        if (null !== $this->freezeDataDayGrowthSize) {
            $res['FreezeDataDayGrowthSize'] = null !== $this->freezeDataDayGrowthSize ? $this->freezeDataDayGrowthSize->toArray($noStream) : $this->freezeDataDayGrowthSize;
        }

        if (null !== $this->freezeDataRatio) {
            $res['FreezeDataRatio'] = null !== $this->freezeDataRatio ? $this->freezeDataRatio->toArray($noStream) : $this->freezeDataRatio;
        }

        if (null !== $this->freezeDataSize) {
            $res['FreezeDataSize'] = null !== $this->freezeDataSize ? $this->freezeDataSize->toArray($noStream) : $this->freezeDataSize;
        }

        if (null !== $this->freezeDataSizeDayGrowthRatio) {
            $res['FreezeDataSizeDayGrowthRatio'] = null !== $this->freezeDataSizeDayGrowthRatio ? $this->freezeDataSizeDayGrowthRatio->toArray($noStream) : $this->freezeDataSizeDayGrowthRatio;
        }

        if (null !== $this->hotDataDayGrowthSize) {
            $res['HotDataDayGrowthSize'] = null !== $this->hotDataDayGrowthSize ? $this->hotDataDayGrowthSize->toArray($noStream) : $this->hotDataDayGrowthSize;
        }

        if (null !== $this->hotDataRatio) {
            $res['HotDataRatio'] = null !== $this->hotDataRatio ? $this->hotDataRatio->toArray($noStream) : $this->hotDataRatio;
        }

        if (null !== $this->hotDataSize) {
            $res['HotDataSize'] = null !== $this->hotDataSize ? $this->hotDataSize->toArray($noStream) : $this->hotDataSize;
        }

        if (null !== $this->hotDataSizeDayGrowthRatio) {
            $res['HotDataSizeDayGrowthRatio'] = null !== $this->hotDataSizeDayGrowthRatio ? $this->hotDataSizeDayGrowthRatio->toArray($noStream) : $this->hotDataSizeDayGrowthRatio;
        }

        if (null !== $this->largeFileCount) {
            $res['LargeFileCount'] = null !== $this->largeFileCount ? $this->largeFileCount->toArray($noStream) : $this->largeFileCount;
        }

        if (null !== $this->largeFileCountDayGrowthRatio) {
            $res['LargeFileCountDayGrowthRatio'] = null !== $this->largeFileCountDayGrowthRatio ? $this->largeFileCountDayGrowthRatio->toArray($noStream) : $this->largeFileCountDayGrowthRatio;
        }

        if (null !== $this->largeFileDayGrowthCount) {
            $res['LargeFileDayGrowthCount'] = null !== $this->largeFileDayGrowthCount ? $this->largeFileDayGrowthCount->toArray($noStream) : $this->largeFileDayGrowthCount;
        }

        if (null !== $this->largeFileRatio) {
            $res['LargeFileRatio'] = null !== $this->largeFileRatio ? $this->largeFileRatio->toArray($noStream) : $this->largeFileRatio;
        }

        if (null !== $this->mediumFileCount) {
            $res['MediumFileCount'] = null !== $this->mediumFileCount ? $this->mediumFileCount->toArray($noStream) : $this->mediumFileCount;
        }

        if (null !== $this->mediumFileCountDayGrowthRatio) {
            $res['MediumFileCountDayGrowthRatio'] = null !== $this->mediumFileCountDayGrowthRatio ? $this->mediumFileCountDayGrowthRatio->toArray($noStream) : $this->mediumFileCountDayGrowthRatio;
        }

        if (null !== $this->mediumFileDayGrowthCount) {
            $res['MediumFileDayGrowthCount'] = null !== $this->mediumFileDayGrowthCount ? $this->mediumFileDayGrowthCount->toArray($noStream) : $this->mediumFileDayGrowthCount;
        }

        if (null !== $this->mediumFileRatio) {
            $res['MediumFileRatio'] = null !== $this->mediumFileRatio ? $this->mediumFileRatio->toArray($noStream) : $this->mediumFileRatio;
        }

        if (null !== $this->partitionNum) {
            $res['PartitionNum'] = null !== $this->partitionNum ? $this->partitionNum->toArray($noStream) : $this->partitionNum;
        }

        if (null !== $this->smallFileCount) {
            $res['SmallFileCount'] = null !== $this->smallFileCount ? $this->smallFileCount->toArray($noStream) : $this->smallFileCount;
        }

        if (null !== $this->smallFileCountDayGrowthRatio) {
            $res['SmallFileCountDayGrowthRatio'] = null !== $this->smallFileCountDayGrowthRatio ? $this->smallFileCountDayGrowthRatio->toArray($noStream) : $this->smallFileCountDayGrowthRatio;
        }

        if (null !== $this->smallFileDayGrowthCount) {
            $res['SmallFileDayGrowthCount'] = null !== $this->smallFileDayGrowthCount ? $this->smallFileDayGrowthCount->toArray($noStream) : $this->smallFileDayGrowthCount;
        }

        if (null !== $this->smallFileRatio) {
            $res['SmallFileRatio'] = null !== $this->smallFileRatio ? $this->smallFileRatio->toArray($noStream) : $this->smallFileRatio;
        }

        if (null !== $this->tableCount) {
            $res['TableCount'] = null !== $this->tableCount ? $this->tableCount->toArray($noStream) : $this->tableCount;
        }

        if (null !== $this->tinyFileCount) {
            $res['TinyFileCount'] = null !== $this->tinyFileCount ? $this->tinyFileCount->toArray($noStream) : $this->tinyFileCount;
        }

        if (null !== $this->tinyFileCountDayGrowthRatio) {
            $res['TinyFileCountDayGrowthRatio'] = null !== $this->tinyFileCountDayGrowthRatio ? $this->tinyFileCountDayGrowthRatio->toArray($noStream) : $this->tinyFileCountDayGrowthRatio;
        }

        if (null !== $this->tinyFileDayGrowthCount) {
            $res['TinyFileDayGrowthCount'] = null !== $this->tinyFileDayGrowthCount ? $this->tinyFileDayGrowthCount->toArray($noStream) : $this->tinyFileDayGrowthCount;
        }

        if (null !== $this->tinyFileRatio) {
            $res['TinyFileRatio'] = null !== $this->tinyFileRatio ? $this->tinyFileRatio->toArray($noStream) : $this->tinyFileRatio;
        }

        if (null !== $this->totalDataDayGrowthSize) {
            $res['TotalDataDayGrowthSize'] = null !== $this->totalDataDayGrowthSize ? $this->totalDataDayGrowthSize->toArray($noStream) : $this->totalDataDayGrowthSize;
        }

        if (null !== $this->totalDataSize) {
            $res['TotalDataSize'] = null !== $this->totalDataSize ? $this->totalDataSize->toArray($noStream) : $this->totalDataSize;
        }

        if (null !== $this->totalDataSizeDayGrowthRatio) {
            $res['TotalDataSizeDayGrowthRatio'] = null !== $this->totalDataSizeDayGrowthRatio ? $this->totalDataSizeDayGrowthRatio->toArray($noStream) : $this->totalDataSizeDayGrowthRatio;
        }

        if (null !== $this->totalFileCount) {
            $res['TotalFileCount'] = null !== $this->totalFileCount ? $this->totalFileCount->toArray($noStream) : $this->totalFileCount;
        }

        if (null !== $this->totalFileCountDayGrowthRatio) {
            $res['TotalFileCountDayGrowthRatio'] = null !== $this->totalFileCountDayGrowthRatio ? $this->totalFileCountDayGrowthRatio->toArray($noStream) : $this->totalFileCountDayGrowthRatio;
        }

        if (null !== $this->totalFileDayGrowthCount) {
            $res['TotalFileDayGrowthCount'] = null !== $this->totalFileDayGrowthCount ? $this->totalFileDayGrowthCount->toArray($noStream) : $this->totalFileDayGrowthCount;
        }

        if (null !== $this->warmDataDayGrowthSize) {
            $res['WarmDataDayGrowthSize'] = null !== $this->warmDataDayGrowthSize ? $this->warmDataDayGrowthSize->toArray($noStream) : $this->warmDataDayGrowthSize;
        }

        if (null !== $this->warmDataRatio) {
            $res['WarmDataRatio'] = null !== $this->warmDataRatio ? $this->warmDataRatio->toArray($noStream) : $this->warmDataRatio;
        }

        if (null !== $this->warmDataSize) {
            $res['WarmDataSize'] = null !== $this->warmDataSize ? $this->warmDataSize->toArray($noStream) : $this->warmDataSize;
        }

        if (null !== $this->warmDataSizeDayGrowthRatio) {
            $res['WarmDataSizeDayGrowthRatio'] = null !== $this->warmDataSizeDayGrowthRatio ? $this->warmDataSizeDayGrowthRatio->toArray($noStream) : $this->warmDataSizeDayGrowthRatio;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

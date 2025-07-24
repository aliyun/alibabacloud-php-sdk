<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHDFSDirectoriesResponseBody\data;

use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHDFSDirectoriesResponseBody\data\metrics\coldDataDayGrowthSize;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHDFSDirectoriesResponseBody\data\metrics\coldDataSize;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHDFSDirectoriesResponseBody\data\metrics\coldDataSizeDayGrowthRatio;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHDFSDirectoriesResponseBody\data\metrics\emptyFileCount;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHDFSDirectoriesResponseBody\data\metrics\emptyFileCountDayGrowthRatio;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHDFSDirectoriesResponseBody\data\metrics\emptyFileDayGrowthCount;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHDFSDirectoriesResponseBody\data\metrics\freezeDataDayGrowthSize;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHDFSDirectoriesResponseBody\data\metrics\freezeDataSize;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHDFSDirectoriesResponseBody\data\metrics\freezeDataSizeDayGrowthRatio;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHDFSDirectoriesResponseBody\data\metrics\hotDataDayGrowthSize;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHDFSDirectoriesResponseBody\data\metrics\hotDataSize;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHDFSDirectoriesResponseBody\data\metrics\hotDataSizeDayGrowthRatio;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHDFSDirectoriesResponseBody\data\metrics\largeFileCount;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHDFSDirectoriesResponseBody\data\metrics\largeFileCountDayGrowthRatio;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHDFSDirectoriesResponseBody\data\metrics\largeFileDayGrowthCount;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHDFSDirectoriesResponseBody\data\metrics\mediumFileCount;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHDFSDirectoriesResponseBody\data\metrics\mediumFileCountDayGrowthRatio;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHDFSDirectoriesResponseBody\data\metrics\mediumFileDayGrowthCount;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHDFSDirectoriesResponseBody\data\metrics\smallFileCount;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHDFSDirectoriesResponseBody\data\metrics\smallFileCountDayGrowthRatio;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHDFSDirectoriesResponseBody\data\metrics\smallFileDayGrowthCount;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHDFSDirectoriesResponseBody\data\metrics\tinyFileCount;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHDFSDirectoriesResponseBody\data\metrics\tinyFileCountDayGrowthRatio;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHDFSDirectoriesResponseBody\data\metrics\tinyFileDayGrowthCount;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHDFSDirectoriesResponseBody\data\metrics\totalDataDayGrowthSize;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHDFSDirectoriesResponseBody\data\metrics\totalDataSize;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHDFSDirectoriesResponseBody\data\metrics\totalDataSizeDayGrowthRatio;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHDFSDirectoriesResponseBody\data\metrics\totalFileCount;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHDFSDirectoriesResponseBody\data\metrics\totalFileCountDayGrowthRatio;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHDFSDirectoriesResponseBody\data\metrics\totalFileDayGrowthCount;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHDFSDirectoriesResponseBody\data\metrics\warmDataDayGrowthSize;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHDFSDirectoriesResponseBody\data\metrics\warmDataSize;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHDFSDirectoriesResponseBody\data\metrics\warmDataSizeDayGrowthRatio;
use AlibabaCloud\Tea\Model;

class metrics extends Model
{
    /**
     * @var coldDataDayGrowthSize
     */
    public $coldDataDayGrowthSize;

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
     * @var freezeDataDayGrowthSize
     */
    public $freezeDataDayGrowthSize;

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
     * @var warmDataSize
     */
    public $warmDataSize;

    /**
     * @var warmDataSizeDayGrowthRatio
     */
    public $warmDataSizeDayGrowthRatio;
    protected $_name = [
        'coldDataDayGrowthSize' => 'ColdDataDayGrowthSize',
        'coldDataSize' => 'ColdDataSize',
        'coldDataSizeDayGrowthRatio' => 'ColdDataSizeDayGrowthRatio',
        'emptyFileCount' => 'EmptyFileCount',
        'emptyFileCountDayGrowthRatio' => 'EmptyFileCountDayGrowthRatio',
        'emptyFileDayGrowthCount' => 'EmptyFileDayGrowthCount',
        'freezeDataDayGrowthSize' => 'FreezeDataDayGrowthSize',
        'freezeDataSize' => 'FreezeDataSize',
        'freezeDataSizeDayGrowthRatio' => 'FreezeDataSizeDayGrowthRatio',
        'hotDataDayGrowthSize' => 'HotDataDayGrowthSize',
        'hotDataSize' => 'HotDataSize',
        'hotDataSizeDayGrowthRatio' => 'HotDataSizeDayGrowthRatio',
        'largeFileCount' => 'LargeFileCount',
        'largeFileCountDayGrowthRatio' => 'LargeFileCountDayGrowthRatio',
        'largeFileDayGrowthCount' => 'LargeFileDayGrowthCount',
        'mediumFileCount' => 'MediumFileCount',
        'mediumFileCountDayGrowthRatio' => 'MediumFileCountDayGrowthRatio',
        'mediumFileDayGrowthCount' => 'MediumFileDayGrowthCount',
        'smallFileCount' => 'SmallFileCount',
        'smallFileCountDayGrowthRatio' => 'SmallFileCountDayGrowthRatio',
        'smallFileDayGrowthCount' => 'SmallFileDayGrowthCount',
        'tinyFileCount' => 'TinyFileCount',
        'tinyFileCountDayGrowthRatio' => 'TinyFileCountDayGrowthRatio',
        'tinyFileDayGrowthCount' => 'TinyFileDayGrowthCount',
        'totalDataDayGrowthSize' => 'TotalDataDayGrowthSize',
        'totalDataSize' => 'TotalDataSize',
        'totalDataSizeDayGrowthRatio' => 'TotalDataSizeDayGrowthRatio',
        'totalFileCount' => 'TotalFileCount',
        'totalFileCountDayGrowthRatio' => 'TotalFileCountDayGrowthRatio',
        'totalFileDayGrowthCount' => 'TotalFileDayGrowthCount',
        'warmDataDayGrowthSize' => 'WarmDataDayGrowthSize',
        'warmDataSize' => 'WarmDataSize',
        'warmDataSizeDayGrowthRatio' => 'WarmDataSizeDayGrowthRatio',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->coldDataDayGrowthSize) {
            $res['ColdDataDayGrowthSize'] = null !== $this->coldDataDayGrowthSize ? $this->coldDataDayGrowthSize->toMap() : null;
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
        if (null !== $this->freezeDataDayGrowthSize) {
            $res['FreezeDataDayGrowthSize'] = null !== $this->freezeDataDayGrowthSize ? $this->freezeDataDayGrowthSize->toMap() : null;
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
        if (null !== $this->mediumFileCount) {
            $res['MediumFileCount'] = null !== $this->mediumFileCount ? $this->mediumFileCount->toMap() : null;
        }
        if (null !== $this->mediumFileCountDayGrowthRatio) {
            $res['MediumFileCountDayGrowthRatio'] = null !== $this->mediumFileCountDayGrowthRatio ? $this->mediumFileCountDayGrowthRatio->toMap() : null;
        }
        if (null !== $this->mediumFileDayGrowthCount) {
            $res['MediumFileDayGrowthCount'] = null !== $this->mediumFileDayGrowthCount ? $this->mediumFileDayGrowthCount->toMap() : null;
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
        if (null !== $this->tinyFileCount) {
            $res['TinyFileCount'] = null !== $this->tinyFileCount ? $this->tinyFileCount->toMap() : null;
        }
        if (null !== $this->tinyFileCountDayGrowthRatio) {
            $res['TinyFileCountDayGrowthRatio'] = null !== $this->tinyFileCountDayGrowthRatio ? $this->tinyFileCountDayGrowthRatio->toMap() : null;
        }
        if (null !== $this->tinyFileDayGrowthCount) {
            $res['TinyFileDayGrowthCount'] = null !== $this->tinyFileDayGrowthCount ? $this->tinyFileDayGrowthCount->toMap() : null;
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
        if (isset($map['FreezeDataDayGrowthSize'])) {
            $model->freezeDataDayGrowthSize = freezeDataDayGrowthSize::fromMap($map['FreezeDataDayGrowthSize']);
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
        if (isset($map['MediumFileCount'])) {
            $model->mediumFileCount = mediumFileCount::fromMap($map['MediumFileCount']);
        }
        if (isset($map['MediumFileCountDayGrowthRatio'])) {
            $model->mediumFileCountDayGrowthRatio = mediumFileCountDayGrowthRatio::fromMap($map['MediumFileCountDayGrowthRatio']);
        }
        if (isset($map['MediumFileDayGrowthCount'])) {
            $model->mediumFileDayGrowthCount = mediumFileDayGrowthCount::fromMap($map['MediumFileDayGrowthCount']);
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
        if (isset($map['TinyFileCount'])) {
            $model->tinyFileCount = tinyFileCount::fromMap($map['TinyFileCount']);
        }
        if (isset($map['TinyFileCountDayGrowthRatio'])) {
            $model->tinyFileCountDayGrowthRatio = tinyFileCountDayGrowthRatio::fromMap($map['TinyFileCountDayGrowthRatio']);
        }
        if (isset($map['TinyFileDayGrowthCount'])) {
            $model->tinyFileDayGrowthCount = tinyFileDayGrowthCount::fromMap($map['TinyFileDayGrowthCount']);
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
        if (isset($map['WarmDataSize'])) {
            $model->warmDataSize = warmDataSize::fromMap($map['WarmDataSize']);
        }
        if (isset($map['WarmDataSizeDayGrowthRatio'])) {
            $model->warmDataSizeDayGrowthRatio = warmDataSizeDayGrowthRatio::fromMap($map['WarmDataSizeDayGrowthRatio']);
        }

        return $model;
    }
}

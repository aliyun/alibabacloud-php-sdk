<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHiveDatabaseResponseBody\data;

use AlibabaCloud\Tea\Model;

class formats extends Model
{
    /**
     * @description The daily increment of data in the format.
     *
     * @example 1000
     *
     * @var int
     */
    public $formatDayGrowthSize;

    /**
     * @description The name of the storage format.
     *
     * @example TextInputFormat
     *
     * @var string
     */
    public $formatName;

    /**
     * @description The proportion of the data in the format.
     *
     * @example 0.5
     *
     * @var float
     */
    public $formatRatio;

    /**
     * @description The amount of data in the format.
     *
     * @example 1000
     *
     * @var int
     */
    public $formatSize;

    /**
     * @description The day-to-day growth rate of data in the format.
     *
     * @example 0.5
     *
     * @var float
     */
    public $formatSizeDayGrowthRatio;

    /**
     * @description The unit of the amount of data in the format.
     *
     * @example MB
     *
     * @var string
     */
    public $formatSizeUnit;
    protected $_name = [
        'formatDayGrowthSize' => 'FormatDayGrowthSize',
        'formatName' => 'FormatName',
        'formatRatio' => 'FormatRatio',
        'formatSize' => 'FormatSize',
        'formatSizeDayGrowthRatio' => 'FormatSizeDayGrowthRatio',
        'formatSizeUnit' => 'FormatSizeUnit',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->formatDayGrowthSize) {
            $res['FormatDayGrowthSize'] = $this->formatDayGrowthSize;
        }
        if (null !== $this->formatName) {
            $res['FormatName'] = $this->formatName;
        }
        if (null !== $this->formatRatio) {
            $res['FormatRatio'] = $this->formatRatio;
        }
        if (null !== $this->formatSize) {
            $res['FormatSize'] = $this->formatSize;
        }
        if (null !== $this->formatSizeDayGrowthRatio) {
            $res['FormatSizeDayGrowthRatio'] = $this->formatSizeDayGrowthRatio;
        }
        if (null !== $this->formatSizeUnit) {
            $res['FormatSizeUnit'] = $this->formatSizeUnit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return formats
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FormatDayGrowthSize'])) {
            $model->formatDayGrowthSize = $map['FormatDayGrowthSize'];
        }
        if (isset($map['FormatName'])) {
            $model->formatName = $map['FormatName'];
        }
        if (isset($map['FormatRatio'])) {
            $model->formatRatio = $map['FormatRatio'];
        }
        if (isset($map['FormatSize'])) {
            $model->formatSize = $map['FormatSize'];
        }
        if (isset($map['FormatSizeDayGrowthRatio'])) {
            $model->formatSizeDayGrowthRatio = $map['FormatSizeDayGrowthRatio'];
        }
        if (isset($map['FormatSizeUnit'])) {
            $model->formatSizeUnit = $map['FormatSizeUnit'];
        }

        return $model;
    }
}

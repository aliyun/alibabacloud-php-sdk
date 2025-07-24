<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHiveTableResponseBody\data;

use AlibabaCloud\Tea\Model;

class formats extends Model
{
    /**
     * @description The daily amount increment of the data in a specific storage format.
     *
     * @example 1232124
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
     * @description The ratio of the data in a specific storage format.
     *
     * @example 0.23
     *
     * @var float
     */
    public $formatRatio;

    /**
     * @description The size of storage format-specific data.
     *
     * @example 506930200
     *
     * @var int
     */
    public $formatSize;

    /**
     * @description The day-to-day growth rate of the amount of the data in a specific storage format.
     *
     * @example 0.04
     *
     * @var float
     */
    public $formatSizeDayGrowthRatio;

    /**
     * @description The unit of the data size.
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

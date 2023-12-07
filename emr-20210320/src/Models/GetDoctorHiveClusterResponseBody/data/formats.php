<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHiveClusterResponseBody\data;

use AlibabaCloud\Tea\Model;

class formats extends Model
{
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
     * @example 100
     *
     * @var int
     */
    public $formatSize;

    /**
     * @description The unit of the amount of data in the format.
     *
     * @example MB
     *
     * @var string
     */
    public $formatSizeUnit;
    protected $_name = [
        'formatName'     => 'FormatName',
        'formatRatio'    => 'FormatRatio',
        'formatSize'     => 'FormatSize',
        'formatSizeUnit' => 'FormatSizeUnit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->formatName) {
            $res['FormatName'] = $this->formatName;
        }
        if (null !== $this->formatRatio) {
            $res['FormatRatio'] = $this->formatRatio;
        }
        if (null !== $this->formatSize) {
            $res['FormatSize'] = $this->formatSize;
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
        if (isset($map['FormatName'])) {
            $model->formatName = $map['FormatName'];
        }
        if (isset($map['FormatRatio'])) {
            $model->formatRatio = $map['FormatRatio'];
        }
        if (isset($map['FormatSize'])) {
            $model->formatSize = $map['FormatSize'];
        }
        if (isset($map['FormatSizeUnit'])) {
            $model->formatSizeUnit = $map['FormatSizeUnit'];
        }

        return $model;
    }
}

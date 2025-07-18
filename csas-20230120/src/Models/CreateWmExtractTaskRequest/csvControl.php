<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\CreateWmExtractTaskRequest;

use AlibabaCloud\Tea\Model;

class csvControl extends Model
{
    /**
     * @description The timestamp watermark parameter that specifies how much information a single timestamp holds. You must keep the value of this parameter consistent for watermark embedding and watermark extraction. Otherwise, the extraction fails.
     *
     * @example 1
     *
     * @var int
     */
    public $embedBitsNumberInEachTime;

    /**
     * @description The lossy embedding control parameter that specifies columns to be modified You must keep the value of this parameter consistent for watermark embedding and watermark extraction. Otherwise, the extraction fails.
     *
     * @example 1
     *
     * @var int
     */
    public $embedColumn;

    /**
     * @description The lossy embedding control parameter that specifies the modification precision. You must keep the value of this parameter consistent for watermark embedding and watermark extraction. Otherwise, the extraction fails.
     *
     * @example 0
     *
     * @var int
     */
    public $embedPrecision;

    /**
     * @description The timestamp watermark parameter that specifies the embedding position of the timestamp watermarks. You must keep the value of this parameter consistent for watermark embedding and watermark extraction. Otherwise, the extraction fails.
     *
     * @example Min
     *
     * @var string
     */
    public $embedTimePosition;

    /**
     * @description The CSV watermark embedding method. You must keep the value of this parameter consistent for watermark embedding and watermark extraction. Otherwise, the extraction fails.
     *
     * @example lossless_row_shift_embed
     *
     * @var string
     */
    public $method;

    /**
     * @description The timestamp watermark parameter that specifies the timestamp format. You must keep the value of this parameter consistent for watermark embedding and watermark extraction. Otherwise, the extraction fails.
     *
     * @example Year-Mon-Day Hour:Min:Sec.MilSec
     *
     * @var string
     */
    public $timeFormat;
    protected $_name = [
        'embedBitsNumberInEachTime' => 'EmbedBitsNumberInEachTime',
        'embedColumn' => 'EmbedColumn',
        'embedPrecision' => 'EmbedPrecision',
        'embedTimePosition' => 'EmbedTimePosition',
        'method' => 'Method',
        'timeFormat' => 'TimeFormat',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->embedBitsNumberInEachTime) {
            $res['EmbedBitsNumberInEachTime'] = $this->embedBitsNumberInEachTime;
        }
        if (null !== $this->embedColumn) {
            $res['EmbedColumn'] = $this->embedColumn;
        }
        if (null !== $this->embedPrecision) {
            $res['EmbedPrecision'] = $this->embedPrecision;
        }
        if (null !== $this->embedTimePosition) {
            $res['EmbedTimePosition'] = $this->embedTimePosition;
        }
        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }
        if (null !== $this->timeFormat) {
            $res['TimeFormat'] = $this->timeFormat;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return csvControl
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EmbedBitsNumberInEachTime'])) {
            $model->embedBitsNumberInEachTime = $map['EmbedBitsNumberInEachTime'];
        }
        if (isset($map['EmbedColumn'])) {
            $model->embedColumn = $map['EmbedColumn'];
        }
        if (isset($map['EmbedPrecision'])) {
            $model->embedPrecision = $map['EmbedPrecision'];
        }
        if (isset($map['EmbedTimePosition'])) {
            $model->embedTimePosition = $map['EmbedTimePosition'];
        }
        if (isset($map['Method'])) {
            $model->method = $map['Method'];
        }
        if (isset($map['TimeFormat'])) {
            $model->timeFormat = $map['TimeFormat'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\DescribeSyncReportDetailResponseBody;

use AlibabaCloud\SDK\Airec\V20201126\Models\DescribeSyncReportDetailResponseBody\result\historyData;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $defaultDisplay;

    /**
     * @example 246165
     *
     * @var int
     */
    public $errorCount;

    /**
     * @example 84.6
     *
     * @var float
     */
    public $errorPercent;

    /**
     * @var historyData[]
     */
    public $historyData;

    /**
     * @example true
     *
     * @var bool
     */
    public $sampleDisplay;

    /**
     * @example bhvTimeBehavior
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'defaultDisplay' => 'defaultDisplay',
        'errorCount'     => 'errorCount',
        'errorPercent'   => 'errorPercent',
        'historyData'    => 'historyData',
        'sampleDisplay'  => 'sampleDisplay',
        'type'           => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultDisplay) {
            $res['defaultDisplay'] = $this->defaultDisplay;
        }
        if (null !== $this->errorCount) {
            $res['errorCount'] = $this->errorCount;
        }
        if (null !== $this->errorPercent) {
            $res['errorPercent'] = $this->errorPercent;
        }
        if (null !== $this->historyData) {
            $res['historyData'] = [];
            if (null !== $this->historyData && \is_array($this->historyData)) {
                $n = 0;
                foreach ($this->historyData as $item) {
                    $res['historyData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sampleDisplay) {
            $res['sampleDisplay'] = $this->sampleDisplay;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['defaultDisplay'])) {
            $model->defaultDisplay = $map['defaultDisplay'];
        }
        if (isset($map['errorCount'])) {
            $model->errorCount = $map['errorCount'];
        }
        if (isset($map['errorPercent'])) {
            $model->errorPercent = $map['errorPercent'];
        }
        if (isset($map['historyData'])) {
            if (!empty($map['historyData'])) {
                $model->historyData = [];
                $n                  = 0;
                foreach ($map['historyData'] as $item) {
                    $model->historyData[$n++] = null !== $item ? historyData::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['sampleDisplay'])) {
            $model->sampleDisplay = $map['sampleDisplay'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}

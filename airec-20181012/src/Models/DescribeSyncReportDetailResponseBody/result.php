<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20181012\Models\DescribeSyncReportDetailResponseBody;

use AlibabaCloud\SDK\Airec\V20181012\Models\DescribeSyncReportDetailResponseBody\result\historyData;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $errorCount;

    /**
     * @var bool
     */
    public $sampleDisplay;

    /**
     * @var historyData[]
     */
    public $historyData;

    /**
     * @var bool
     */
    public $defaultDisplay;

    /**
     * @var float
     */
    public $errorPercent;
    protected $_name = [
        'type'           => 'Type',
        'errorCount'     => 'ErrorCount',
        'sampleDisplay'  => 'SampleDisplay',
        'historyData'    => 'HistoryData',
        'defaultDisplay' => 'DefaultDisplay',
        'errorPercent'   => 'ErrorPercent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->errorCount) {
            $res['ErrorCount'] = $this->errorCount;
        }
        if (null !== $this->sampleDisplay) {
            $res['SampleDisplay'] = $this->sampleDisplay;
        }
        if (null !== $this->historyData) {
            $res['HistoryData'] = [];
            if (null !== $this->historyData && \is_array($this->historyData)) {
                $n = 0;
                foreach ($this->historyData as $item) {
                    $res['HistoryData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->defaultDisplay) {
            $res['DefaultDisplay'] = $this->defaultDisplay;
        }
        if (null !== $this->errorPercent) {
            $res['ErrorPercent'] = $this->errorPercent;
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['ErrorCount'])) {
            $model->errorCount = $map['ErrorCount'];
        }
        if (isset($map['SampleDisplay'])) {
            $model->sampleDisplay = $map['SampleDisplay'];
        }
        if (isset($map['HistoryData'])) {
            if (!empty($map['HistoryData'])) {
                $model->historyData = [];
                $n                  = 0;
                foreach ($map['HistoryData'] as $item) {
                    $model->historyData[$n++] = null !== $item ? historyData::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DefaultDisplay'])) {
            $model->defaultDisplay = $map['DefaultDisplay'];
        }
        if (isset($map['ErrorPercent'])) {
            $model->errorPercent = $map['ErrorPercent'];
        }

        return $model;
    }
}

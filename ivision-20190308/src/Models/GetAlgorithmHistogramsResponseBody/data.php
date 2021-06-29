<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ivision\V20190308\Models\GetAlgorithmHistogramsResponseBody;

use AlibabaCloud\SDK\Ivision\V20190308\Models\GetAlgorithmHistogramsResponseBody\data\histograms;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $failureCount;

    /**
     * @var int
     */
    public $successCount;

    /**
     * @var histograms[]
     */
    public $histograms;
    protected $_name = [
        'failureCount' => 'FailureCount',
        'successCount' => 'SuccessCount',
        'histograms'   => 'Histograms',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failureCount) {
            $res['FailureCount'] = $this->failureCount;
        }
        if (null !== $this->successCount) {
            $res['SuccessCount'] = $this->successCount;
        }
        if (null !== $this->histograms) {
            $res['Histograms'] = [];
            if (null !== $this->histograms && \is_array($this->histograms)) {
                $n = 0;
                foreach ($this->histograms as $item) {
                    $res['Histograms'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailureCount'])) {
            $model->failureCount = $map['FailureCount'];
        }
        if (isset($map['SuccessCount'])) {
            $model->successCount = $map['SuccessCount'];
        }
        if (isset($map['Histograms'])) {
            if (!empty($map['Histograms'])) {
                $model->histograms = [];
                $n                 = 0;
                foreach ($map['Histograms'] as $item) {
                    $model->histograms[$n++] = null !== $item ? histograms::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

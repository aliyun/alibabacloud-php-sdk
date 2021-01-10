<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ivision\V20190308\Models\GetAlgorithmHistogramsResponseBody\data;

use AlibabaCloud\Tea\Model;

class histograms extends Model
{
    /**
     * @var string
     */
    public $time;

    /**
     * @var int
     */
    public $successCount;

    /**
     * @var int
     */
    public $failureCount;
    protected $_name = [
        'time'         => 'Time',
        'successCount' => 'SuccessCount',
        'failureCount' => 'FailureCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->successCount) {
            $res['SuccessCount'] = $this->successCount;
        }
        if (null !== $this->failureCount) {
            $res['FailureCount'] = $this->failureCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return histograms
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['SuccessCount'])) {
            $model->successCount = $map['SuccessCount'];
        }
        if (isset($map['FailureCount'])) {
            $model->failureCount = $map['FailureCount'];
        }

        return $model;
    }
}

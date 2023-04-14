<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\Sample\meta;

use AlibabaCloud\Tea\Model;

class extendParams extends Model
{
    /**
     * @example 0 没有任务 1 正常 2 异常
     *
     * @var int
     */
    public $latestTaskStatus;

    /**
     * @example 0
     *
     * @var int
     */
    public $sampleCount;
    protected $_name = [
        'latestTaskStatus' => 'LatestTaskStatus',
        'sampleCount'      => 'SampleCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->latestTaskStatus) {
            $res['LatestTaskStatus'] = $this->latestTaskStatus;
        }
        if (null !== $this->sampleCount) {
            $res['SampleCount'] = $this->sampleCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return extendParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LatestTaskStatus'])) {
            $model->latestTaskStatus = $map['LatestTaskStatus'];
        }
        if (isset($map['SampleCount'])) {
            $model->sampleCount = $map['SampleCount'];
        }

        return $model;
    }
}

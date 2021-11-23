<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsSceneRunningDataResponseBody\chainMonitorDataList;

use AlibabaCloud\Tea\Model;

class checkPointResult extends Model
{
    /**
     * @var int
     */
    public $failedBusinessCount;

    /**
     * @var float
     */
    public $failedBusinessQps;

    /**
     * @var int
     */
    public $succeedBusinessCount;

    /**
     * @var float
     */
    public $succeedBusinessQps;
    protected $_name = [
        'failedBusinessCount'  => 'FailedBusinessCount',
        'failedBusinessQps'    => 'FailedBusinessQps',
        'succeedBusinessCount' => 'SucceedBusinessCount',
        'succeedBusinessQps'   => 'SucceedBusinessQps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failedBusinessCount) {
            $res['FailedBusinessCount'] = $this->failedBusinessCount;
        }
        if (null !== $this->failedBusinessQps) {
            $res['FailedBusinessQps'] = $this->failedBusinessQps;
        }
        if (null !== $this->succeedBusinessCount) {
            $res['SucceedBusinessCount'] = $this->succeedBusinessCount;
        }
        if (null !== $this->succeedBusinessQps) {
            $res['SucceedBusinessQps'] = $this->succeedBusinessQps;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return checkPointResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailedBusinessCount'])) {
            $model->failedBusinessCount = $map['FailedBusinessCount'];
        }
        if (isset($map['FailedBusinessQps'])) {
            $model->failedBusinessQps = $map['FailedBusinessQps'];
        }
        if (isset($map['SucceedBusinessCount'])) {
            $model->succeedBusinessCount = $map['SucceedBusinessCount'];
        }
        if (isset($map['SucceedBusinessQps'])) {
            $model->succeedBusinessQps = $map['SucceedBusinessQps'];
        }

        return $model;
    }
}

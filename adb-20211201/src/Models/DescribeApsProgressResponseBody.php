<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeApsProgressResponseBody\apsHiveProgress;
use AlibabaCloud\Tea\Model;

class DescribeApsProgressResponseBody extends Model
{
    /**
     * @example -
     *
     * @var apsHiveProgress[]
     */
    public $apsHiveProgress;

    /**
     * @example ******-3EEC-******-9F06-******
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 100
     *
     * @var int
     */
    public $successPercentage;

    /**
     * @example 10
     *
     * @var int
     */
    public $successTableCount;

    /**
     * @example 10
     *
     * @var int
     */
    public $totalTableCount;
    protected $_name = [
        'apsHiveProgress'   => 'ApsHiveProgress',
        'requestId'         => 'RequestId',
        'successPercentage' => 'SuccessPercentage',
        'successTableCount' => 'SuccessTableCount',
        'totalTableCount'   => 'TotalTableCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apsHiveProgress) {
            $res['ApsHiveProgress'] = [];
            if (null !== $this->apsHiveProgress && \is_array($this->apsHiveProgress)) {
                $n = 0;
                foreach ($this->apsHiveProgress as $item) {
                    $res['ApsHiveProgress'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->successPercentage) {
            $res['SuccessPercentage'] = $this->successPercentage;
        }
        if (null !== $this->successTableCount) {
            $res['SuccessTableCount'] = $this->successTableCount;
        }
        if (null !== $this->totalTableCount) {
            $res['TotalTableCount'] = $this->totalTableCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApsProgressResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApsHiveProgress'])) {
            if (!empty($map['ApsHiveProgress'])) {
                $model->apsHiveProgress = [];
                $n                      = 0;
                foreach ($map['ApsHiveProgress'] as $item) {
                    $model->apsHiveProgress[$n++] = null !== $item ? apsHiveProgress::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SuccessPercentage'])) {
            $model->successPercentage = $map['SuccessPercentage'];
        }
        if (isset($map['SuccessTableCount'])) {
            $model->successTableCount = $map['SuccessTableCount'];
        }
        if (isset($map['TotalTableCount'])) {
            $model->totalTableCount = $map['TotalTableCount'];
        }

        return $model;
    }
}

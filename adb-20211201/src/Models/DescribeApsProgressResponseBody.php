<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeApsProgressResponseBody\apsHiveProgress;

class DescribeApsProgressResponseBody extends Model
{
    /**
     * @var apsHiveProgress[]
     */
    public $apsHiveProgress;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $successPercentage;
    /**
     * @var int
     */
    public $successTableCount;
    /**
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
        if (\is_array($this->apsHiveProgress)) {
            Model::validateArray($this->apsHiveProgress);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apsHiveProgress) {
            if (\is_array($this->apsHiveProgress)) {
                $res['ApsHiveProgress'] = [];
                $n1                     = 0;
                foreach ($this->apsHiveProgress as $item1) {
                    $res['ApsHiveProgress'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApsHiveProgress'])) {
            if (!empty($map['ApsHiveProgress'])) {
                $model->apsHiveProgress = [];
                $n1                     = 0;
                foreach ($map['ApsHiveProgress'] as $item1) {
                    $model->apsHiveProgress[$n1++] = apsHiveProgress::fromMap($item1);
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

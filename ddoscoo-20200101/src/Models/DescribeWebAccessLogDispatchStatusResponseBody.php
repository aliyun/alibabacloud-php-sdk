<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebAccessLogDispatchStatusResponseBody\slsConfigStatus;

class DescribeWebAccessLogDispatchStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var slsConfigStatus[]
     */
    public $slsConfigStatus;
    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId'       => 'RequestId',
        'slsConfigStatus' => 'SlsConfigStatus',
        'totalCount'      => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->slsConfigStatus)) {
            Model::validateArray($this->slsConfigStatus);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->slsConfigStatus) {
            if (\is_array($this->slsConfigStatus)) {
                $res['SlsConfigStatus'] = [];
                $n1                     = 0;
                foreach ($this->slsConfigStatus as $item1) {
                    $res['SlsConfigStatus'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SlsConfigStatus'])) {
            if (!empty($map['SlsConfigStatus'])) {
                $model->slsConfigStatus = [];
                $n1                     = 0;
                foreach ($map['SlsConfigStatus'] as $item1) {
                    $model->slsConfigStatus[$n1++] = slsConfigStatus::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}

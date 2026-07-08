<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchCaptureRenderingInstanceScreenshotResponseBody\datatest;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchCaptureRenderingInstanceScreenshotResponseBody\failedItems;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchCaptureRenderingInstanceScreenshotResponseBody\successItems;

class BatchCaptureRenderingInstanceScreenshotResponseBody extends Model
{
    /**
     * @var datatest
     */
    public $datatest;

    /**
     * @var int
     */
    public $failedCount;

    /**
     * @var failedItems[]
     */
    public $failedItems;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $successCount;

    /**
     * @var successItems[]
     */
    public $successItems;
    protected $_name = [
        'datatest' => 'Datatest',
        'failedCount' => 'FailedCount',
        'failedItems' => 'FailedItems',
        'requestId' => 'RequestId',
        'successCount' => 'SuccessCount',
        'successItems' => 'SuccessItems',
    ];

    public function validate()
    {
        if (null !== $this->datatest) {
            $this->datatest->validate();
        }
        if (\is_array($this->failedItems)) {
            Model::validateArray($this->failedItems);
        }
        if (\is_array($this->successItems)) {
            Model::validateArray($this->successItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->datatest) {
            $res['Datatest'] = null !== $this->datatest ? $this->datatest->toArray($noStream) : $this->datatest;
        }

        if (null !== $this->failedCount) {
            $res['FailedCount'] = $this->failedCount;
        }

        if (null !== $this->failedItems) {
            if (\is_array($this->failedItems)) {
                $res['FailedItems'] = [];
                $n1 = 0;
                foreach ($this->failedItems as $item1) {
                    $res['FailedItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->successCount) {
            $res['SuccessCount'] = $this->successCount;
        }

        if (null !== $this->successItems) {
            if (\is_array($this->successItems)) {
                $res['SuccessItems'] = [];
                $n1 = 0;
                foreach ($this->successItems as $item1) {
                    $res['SuccessItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Datatest'])) {
            $model->datatest = datatest::fromMap($map['Datatest']);
        }

        if (isset($map['FailedCount'])) {
            $model->failedCount = $map['FailedCount'];
        }

        if (isset($map['FailedItems'])) {
            if (!empty($map['FailedItems'])) {
                $model->failedItems = [];
                $n1 = 0;
                foreach ($map['FailedItems'] as $item1) {
                    $model->failedItems[$n1] = failedItems::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SuccessCount'])) {
            $model->successCount = $map['SuccessCount'];
        }

        if (isset($map['SuccessItems'])) {
            if (!empty($map['SuccessItems'])) {
                $model->successItems = [];
                $n1 = 0;
                foreach ($map['SuccessItems'] as $item1) {
                    $model->successItems[$n1] = successItems::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

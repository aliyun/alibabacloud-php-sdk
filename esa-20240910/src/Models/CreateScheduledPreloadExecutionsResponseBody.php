<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateScheduledPreloadExecutionsResponseBody\failedExecutions;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateScheduledPreloadExecutionsResponseBody\successExecutions;

class CreateScheduledPreloadExecutionsResponseBody extends Model
{
    /**
     * @var failedExecutions[]
     */
    public $failedExecutions;
    /**
     * @var string[]
     */
    public $failedMessages;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $successCount;
    /**
     * @var successExecutions[]
     */
    public $successExecutions;
    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'failedExecutions'  => 'FailedExecutions',
        'failedMessages'    => 'FailedMessages',
        'requestId'         => 'RequestId',
        'successCount'      => 'SuccessCount',
        'successExecutions' => 'SuccessExecutions',
        'totalCount'        => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->failedExecutions)) {
            Model::validateArray($this->failedExecutions);
        }
        if (\is_array($this->failedMessages)) {
            Model::validateArray($this->failedMessages);
        }
        if (\is_array($this->successExecutions)) {
            Model::validateArray($this->successExecutions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failedExecutions) {
            if (\is_array($this->failedExecutions)) {
                $res['FailedExecutions'] = [];
                $n1                      = 0;
                foreach ($this->failedExecutions as $item1) {
                    $res['FailedExecutions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->failedMessages) {
            if (\is_array($this->failedMessages)) {
                $res['FailedMessages'] = [];
                $n1                    = 0;
                foreach ($this->failedMessages as $item1) {
                    $res['FailedMessages'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->successCount) {
            $res['SuccessCount'] = $this->successCount;
        }

        if (null !== $this->successExecutions) {
            if (\is_array($this->successExecutions)) {
                $res['SuccessExecutions'] = [];
                $n1                       = 0;
                foreach ($this->successExecutions as $item1) {
                    $res['SuccessExecutions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['FailedExecutions'])) {
            if (!empty($map['FailedExecutions'])) {
                $model->failedExecutions = [];
                $n1                      = 0;
                foreach ($map['FailedExecutions'] as $item1) {
                    $model->failedExecutions[$n1++] = failedExecutions::fromMap($item1);
                }
            }
        }

        if (isset($map['FailedMessages'])) {
            if (!empty($map['FailedMessages'])) {
                $model->failedMessages = [];
                $n1                    = 0;
                foreach ($map['FailedMessages'] as $item1) {
                    $model->failedMessages[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SuccessCount'])) {
            $model->successCount = $map['SuccessCount'];
        }

        if (isset($map['SuccessExecutions'])) {
            if (!empty($map['SuccessExecutions'])) {
                $model->successExecutions = [];
                $n1                       = 0;
                foreach ($map['SuccessExecutions'] as $item1) {
                    $model->successExecutions[$n1++] = successExecutions::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}

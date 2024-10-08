<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\CreateScheduledPreloadExecutionsResponseBody\failedExecutions;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateScheduledPreloadExecutionsResponseBody\successExecutions;
use AlibabaCloud\Tea\Model;

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
     * @description Id of the request
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failedExecutions) {
            $res['FailedExecutions'] = [];
            if (null !== $this->failedExecutions && \is_array($this->failedExecutions)) {
                $n = 0;
                foreach ($this->failedExecutions as $item) {
                    $res['FailedExecutions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->failedMessages) {
            $res['FailedMessages'] = $this->failedMessages;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->successCount) {
            $res['SuccessCount'] = $this->successCount;
        }
        if (null !== $this->successExecutions) {
            $res['SuccessExecutions'] = [];
            if (null !== $this->successExecutions && \is_array($this->successExecutions)) {
                $n = 0;
                foreach ($this->successExecutions as $item) {
                    $res['SuccessExecutions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateScheduledPreloadExecutionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailedExecutions'])) {
            if (!empty($map['FailedExecutions'])) {
                $model->failedExecutions = [];
                $n                       = 0;
                foreach ($map['FailedExecutions'] as $item) {
                    $model->failedExecutions[$n++] = null !== $item ? failedExecutions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['FailedMessages'])) {
            if (!empty($map['FailedMessages'])) {
                $model->failedMessages = $map['FailedMessages'];
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
                $n                        = 0;
                foreach ($map['SuccessExecutions'] as $item) {
                    $model->successExecutions[$n++] = null !== $item ? successExecutions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}

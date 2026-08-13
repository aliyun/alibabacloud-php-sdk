<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\RetryDirectoryFailedSourcesResponseBody\failedSources;

class RetryDirectoryFailedSourcesResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var int
     */
    public $enqueuedCount;

    /**
     * @var string[]
     */
    public $enqueuedIds;

    /**
     * @var int
     */
    public $failedCount;

    /**
     * @var failedSources[]
     */
    public $failedSources;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $skippedCount;
    protected $_name = [
        'code' => 'code',
        'directoryId' => 'directoryId',
        'enqueuedCount' => 'enqueuedCount',
        'enqueuedIds' => 'enqueuedIds',
        'failedCount' => 'failedCount',
        'failedSources' => 'failedSources',
        'message' => 'message',
        'requestId' => 'requestId',
        'skippedCount' => 'skippedCount',
    ];

    public function validate()
    {
        if (\is_array($this->enqueuedIds)) {
            Model::validateArray($this->enqueuedIds);
        }
        if (\is_array($this->failedSources)) {
            Model::validateArray($this->failedSources);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->directoryId) {
            $res['directoryId'] = $this->directoryId;
        }

        if (null !== $this->enqueuedCount) {
            $res['enqueuedCount'] = $this->enqueuedCount;
        }

        if (null !== $this->enqueuedIds) {
            if (\is_array($this->enqueuedIds)) {
                $res['enqueuedIds'] = [];
                $n1 = 0;
                foreach ($this->enqueuedIds as $item1) {
                    $res['enqueuedIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->failedCount) {
            $res['failedCount'] = $this->failedCount;
        }

        if (null !== $this->failedSources) {
            if (\is_array($this->failedSources)) {
                $res['failedSources'] = [];
                $n1 = 0;
                foreach ($this->failedSources as $item1) {
                    $res['failedSources'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->skippedCount) {
            $res['skippedCount'] = $this->skippedCount;
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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['directoryId'])) {
            $model->directoryId = $map['directoryId'];
        }

        if (isset($map['enqueuedCount'])) {
            $model->enqueuedCount = $map['enqueuedCount'];
        }

        if (isset($map['enqueuedIds'])) {
            if (!empty($map['enqueuedIds'])) {
                $model->enqueuedIds = [];
                $n1 = 0;
                foreach ($map['enqueuedIds'] as $item1) {
                    $model->enqueuedIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['failedCount'])) {
            $model->failedCount = $map['failedCount'];
        }

        if (isset($map['failedSources'])) {
            if (!empty($map['failedSources'])) {
                $model->failedSources = [];
                $n1 = 0;
                foreach ($map['failedSources'] as $item1) {
                    $model->failedSources[$n1] = failedSources::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['skippedCount'])) {
            $model->skippedCount = $map['skippedCount'];
        }

        return $model;
    }
}

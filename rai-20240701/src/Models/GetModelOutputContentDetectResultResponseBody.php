<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RAI\V20240701\Models\GetModelOutputContentDetectResultResponseBody\detectResultList;

class GetModelOutputContentDetectResultResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var detectResultList[]
     */
    public $detectResultList;

    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var string
     */
    public $message;

    /**
     * @var int
     */
    public $processedCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var int
     */
    public $taskStatus;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'code' => 'Code',
        'detectResultList' => 'DetectResultList',
        'httpStatusCode' => 'HttpStatusCode',
        'message' => 'Message',
        'processedCount' => 'ProcessedCount',
        'requestId' => 'RequestId',
        'success' => 'Success',
        'taskId' => 'TaskId',
        'taskStatus' => 'TaskStatus',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->detectResultList)) {
            Model::validateArray($this->detectResultList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->detectResultList) {
            if (\is_array($this->detectResultList)) {
                $res['DetectResultList'] = [];
                $n1 = 0;
                foreach ($this->detectResultList as $item1) {
                    $res['DetectResultList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->processedCount) {
            $res['ProcessedCount'] = $this->processedCount;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['DetectResultList'])) {
            if (!empty($map['DetectResultList'])) {
                $model->detectResultList = [];
                $n1 = 0;
                foreach ($map['DetectResultList'] as $item1) {
                    $model->detectResultList[$n1] = detectResultList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['ProcessedCount'])) {
            $model->processedCount = $map['ProcessedCount'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIDeepSign\V20260511\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\GetImageDetectionTaskResultResponseBody\labels;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\GetImageDetectionTaskResultResponseBody\tamper;

class GetImageDetectionTaskResultResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $detectMode;

    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var labels[]
     */
    public $labels;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var tamper
     */
    public $tamper;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'code' => 'Code',
        'detectMode' => 'DetectMode',
        'httpStatusCode' => 'HttpStatusCode',
        'labels' => 'Labels',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'status' => 'Status',
        'success' => 'Success',
        'tamper' => 'Tamper',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        if (null !== $this->tamper) {
            $this->tamper->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->detectMode) {
            $res['DetectMode'] = $this->detectMode;
        }

        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }

        if (null !== $this->labels) {
            if (\is_array($this->labels)) {
                $res['Labels'] = [];
                $n1 = 0;
                foreach ($this->labels as $item1) {
                    $res['Labels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->tamper) {
            $res['Tamper'] = null !== $this->tamper ? $this->tamper->toArray($noStream) : $this->tamper;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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

        if (isset($map['DetectMode'])) {
            $model->detectMode = $map['DetectMode'];
        }

        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }

        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n1 = 0;
                foreach ($map['Labels'] as $item1) {
                    $model->labels[$n1] = labels::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['Tamper'])) {
            $model->tamper = tamper::fromMap($map['Tamper']);
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}

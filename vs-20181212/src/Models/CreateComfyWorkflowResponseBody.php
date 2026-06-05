<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Dara\Model;

class CreateComfyWorkflowResponseBody extends Model
{
    /**
     * @var int
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string[]
     */
    public $missingNodes;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $workflowId;
    protected $_name = [
        'code' => 'Code',
        'message' => 'Message',
        'missingNodes' => 'MissingNodes',
        'requestId' => 'RequestId',
        'status' => 'Status',
        'workflowId' => 'WorkflowId',
    ];

    public function validate()
    {
        if (\is_array($this->missingNodes)) {
            Model::validateArray($this->missingNodes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->missingNodes) {
            if (\is_array($this->missingNodes)) {
                $res['MissingNodes'] = [];
                $n1 = 0;
                foreach ($this->missingNodes as $item1) {
                    $res['MissingNodes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->workflowId) {
            $res['WorkflowId'] = $this->workflowId;
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

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['MissingNodes'])) {
            if (!empty($map['MissingNodes'])) {
                $model->missingNodes = [];
                $n1 = 0;
                foreach ($map['MissingNodes'] as $item1) {
                    $model->missingNodes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['WorkflowId'])) {
            $model->workflowId = $map['WorkflowId'];
        }

        return $model;
    }
}

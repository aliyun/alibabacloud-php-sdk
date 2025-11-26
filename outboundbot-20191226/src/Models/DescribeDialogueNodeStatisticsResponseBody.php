<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeDialogueNodeStatisticsResponseBody\hangUpDialogueNodes;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeDialogueNodeStatisticsResponseBody\noAnswerDialogueNodes;

class DescribeDialogueNodeStatisticsResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var hangUpDialogueNodes[]
     */
    public $hangUpDialogueNodes;

    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $message;

    /**
     * @var noAnswerDialogueNodes[]
     */
    public $noAnswerDialogueNodes;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var int
     */
    public $totalCompleted;
    protected $_name = [
        'code' => 'Code',
        'groupId' => 'GroupId',
        'hangUpDialogueNodes' => 'HangUpDialogueNodes',
        'httpStatusCode' => 'HttpStatusCode',
        'instanceId' => 'InstanceId',
        'message' => 'Message',
        'noAnswerDialogueNodes' => 'NoAnswerDialogueNodes',
        'requestId' => 'RequestId',
        'success' => 'Success',
        'totalCompleted' => 'TotalCompleted',
    ];

    public function validate()
    {
        if (\is_array($this->hangUpDialogueNodes)) {
            Model::validateArray($this->hangUpDialogueNodes);
        }
        if (\is_array($this->noAnswerDialogueNodes)) {
            Model::validateArray($this->noAnswerDialogueNodes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->hangUpDialogueNodes) {
            if (\is_array($this->hangUpDialogueNodes)) {
                $res['HangUpDialogueNodes'] = [];
                $n1 = 0;
                foreach ($this->hangUpDialogueNodes as $item1) {
                    $res['HangUpDialogueNodes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->noAnswerDialogueNodes) {
            if (\is_array($this->noAnswerDialogueNodes)) {
                $res['NoAnswerDialogueNodes'] = [];
                $n1 = 0;
                foreach ($this->noAnswerDialogueNodes as $item1) {
                    $res['NoAnswerDialogueNodes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->totalCompleted) {
            $res['TotalCompleted'] = $this->totalCompleted;
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

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['HangUpDialogueNodes'])) {
            if (!empty($map['HangUpDialogueNodes'])) {
                $model->hangUpDialogueNodes = [];
                $n1 = 0;
                foreach ($map['HangUpDialogueNodes'] as $item1) {
                    $model->hangUpDialogueNodes[$n1] = hangUpDialogueNodes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['NoAnswerDialogueNodes'])) {
            if (!empty($map['NoAnswerDialogueNodes'])) {
                $model->noAnswerDialogueNodes = [];
                $n1 = 0;
                foreach ($map['NoAnswerDialogueNodes'] as $item1) {
                    $model->noAnswerDialogueNodes[$n1] = noAnswerDialogueNodes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['TotalCompleted'])) {
            $model->totalCompleted = $map['TotalCompleted'];
        }

        return $model;
    }
}

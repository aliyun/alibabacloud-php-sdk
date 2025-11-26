<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeIntentStatisticsResponseBody\globalIntents;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeIntentStatisticsResponseBody\intentsAfterNoAnswer;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeIntentStatisticsResponseBody\processIntents;

class DescribeIntentStatisticsResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $globalIntentNum;

    /**
     * @var globalIntents[]
     */
    public $globalIntents;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var intentsAfterNoAnswer[]
     */
    public $intentsAfterNoAnswer;

    /**
     * @var string
     */
    public $message;

    /**
     * @var int
     */
    public $processIntentNum;

    /**
     * @var processIntents[]
     */
    public $processIntents;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'code' => 'Code',
        'globalIntentNum' => 'GlobalIntentNum',
        'globalIntents' => 'GlobalIntents',
        'groupId' => 'GroupId',
        'httpStatusCode' => 'HttpStatusCode',
        'instanceId' => 'InstanceId',
        'intentsAfterNoAnswer' => 'IntentsAfterNoAnswer',
        'message' => 'Message',
        'processIntentNum' => 'ProcessIntentNum',
        'processIntents' => 'ProcessIntents',
        'requestId' => 'RequestId',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (\is_array($this->globalIntents)) {
            Model::validateArray($this->globalIntents);
        }
        if (\is_array($this->intentsAfterNoAnswer)) {
            Model::validateArray($this->intentsAfterNoAnswer);
        }
        if (\is_array($this->processIntents)) {
            Model::validateArray($this->processIntents);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->globalIntentNum) {
            $res['GlobalIntentNum'] = $this->globalIntentNum;
        }

        if (null !== $this->globalIntents) {
            if (\is_array($this->globalIntents)) {
                $res['GlobalIntents'] = [];
                $n1 = 0;
                foreach ($this->globalIntents as $item1) {
                    $res['GlobalIntents'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->intentsAfterNoAnswer) {
            if (\is_array($this->intentsAfterNoAnswer)) {
                $res['IntentsAfterNoAnswer'] = [];
                $n1 = 0;
                foreach ($this->intentsAfterNoAnswer as $item1) {
                    $res['IntentsAfterNoAnswer'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->processIntentNum) {
            $res['ProcessIntentNum'] = $this->processIntentNum;
        }

        if (null !== $this->processIntents) {
            if (\is_array($this->processIntents)) {
                $res['ProcessIntents'] = [];
                $n1 = 0;
                foreach ($this->processIntents as $item1) {
                    $res['ProcessIntents'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['GlobalIntentNum'])) {
            $model->globalIntentNum = $map['GlobalIntentNum'];
        }

        if (isset($map['GlobalIntents'])) {
            if (!empty($map['GlobalIntents'])) {
                $model->globalIntents = [];
                $n1 = 0;
                foreach ($map['GlobalIntents'] as $item1) {
                    $model->globalIntents[$n1] = globalIntents::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['IntentsAfterNoAnswer'])) {
            if (!empty($map['IntentsAfterNoAnswer'])) {
                $model->intentsAfterNoAnswer = [];
                $n1 = 0;
                foreach ($map['IntentsAfterNoAnswer'] as $item1) {
                    $model->intentsAfterNoAnswer[$n1] = intentsAfterNoAnswer::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['ProcessIntentNum'])) {
            $model->processIntentNum = $map['ProcessIntentNum'];
        }

        if (isset($map['ProcessIntents'])) {
            if (!empty($map['ProcessIntents'])) {
                $model->processIntents = [];
                $n1 = 0;
                foreach ($map['ProcessIntents'] as $item1) {
                    $model->processIntents[$n1] = processIntents::fromMap($item1);
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

        return $model;
    }
}

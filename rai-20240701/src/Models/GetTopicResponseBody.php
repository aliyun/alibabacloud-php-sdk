<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RAI\V20240701\Models\GetTopicResponseBody\policyInfoList;
use AlibabaCloud\SDK\RAI\V20240701\Models\GetTopicResponseBody\topicExampleInfoList;

class GetTopicResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var string
     */
    public $message;

    /**
     * @var policyInfoList[]
     */
    public $policyInfoList;

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
    public $topicDefinition;

    /**
     * @var topicExampleInfoList[]
     */
    public $topicExampleInfoList;

    /**
     * @var string
     */
    public $topicName;
    protected $_name = [
        'code' => 'Code',
        'gmtModified' => 'GmtModified',
        'httpStatusCode' => 'HttpStatusCode',
        'message' => 'Message',
        'policyInfoList' => 'PolicyInfoList',
        'requestId' => 'RequestId',
        'success' => 'Success',
        'topicDefinition' => 'TopicDefinition',
        'topicExampleInfoList' => 'TopicExampleInfoList',
        'topicName' => 'TopicName',
    ];

    public function validate()
    {
        if (\is_array($this->policyInfoList)) {
            Model::validateArray($this->policyInfoList);
        }
        if (\is_array($this->topicExampleInfoList)) {
            Model::validateArray($this->topicExampleInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->policyInfoList) {
            if (\is_array($this->policyInfoList)) {
                $res['PolicyInfoList'] = [];
                $n1 = 0;
                foreach ($this->policyInfoList as $item1) {
                    $res['PolicyInfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (null !== $this->topicDefinition) {
            $res['TopicDefinition'] = $this->topicDefinition;
        }

        if (null !== $this->topicExampleInfoList) {
            if (\is_array($this->topicExampleInfoList)) {
                $res['TopicExampleInfoList'] = [];
                $n1 = 0;
                foreach ($this->topicExampleInfoList as $item1) {
                    $res['TopicExampleInfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->topicName) {
            $res['TopicName'] = $this->topicName;
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

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['PolicyInfoList'])) {
            if (!empty($map['PolicyInfoList'])) {
                $model->policyInfoList = [];
                $n1 = 0;
                foreach ($map['PolicyInfoList'] as $item1) {
                    $model->policyInfoList[$n1] = policyInfoList::fromMap($item1);
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

        if (isset($map['TopicDefinition'])) {
            $model->topicDefinition = $map['TopicDefinition'];
        }

        if (isset($map['TopicExampleInfoList'])) {
            if (!empty($map['TopicExampleInfoList'])) {
                $model->topicExampleInfoList = [];
                $n1 = 0;
                foreach ($map['TopicExampleInfoList'] as $item1) {
                    $model->topicExampleInfoList[$n1] = topicExampleInfoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TopicName'])) {
            $model->topicName = $map['TopicName'];
        }

        return $model;
    }
}

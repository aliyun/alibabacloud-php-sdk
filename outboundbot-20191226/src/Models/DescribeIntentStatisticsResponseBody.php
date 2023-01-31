<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeIntentStatisticsResponseBody\globalIntents;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeIntentStatisticsResponseBody\intentsAfterNoAnswer;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeIntentStatisticsResponseBody\processIntents;
use AlibabaCloud\Tea\Model;

class DescribeIntentStatisticsResponseBody extends Model
{
    /**
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @example 100
     *
     * @var int
     */
    public $globalIntentNum;

    /**
     * @example []
     *
     * @var globalIntents[]
     */
    public $globalIntents;

    /**
     * @example 0c3f352f-d045-491d-9ce7-11f2d2b7775d
     *
     * @var string
     */
    public $groupId;

    /**
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @example a4274627-265f-4e14-b2d6-4ee7d4f8593e
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var intentsAfterNoAnswer[]
     */
    public $intentsAfterNoAnswer;

    /**
     * @example Success
     *
     * @var string
     */
    public $message;

    /**
     * @example 123
     *
     * @var int
     */
    public $processIntentNum;

    /**
     * @example []
     *
     * @var processIntents[]
     */
    public $processIntents;

    /**
     * @example 254EB995-DEDF-48A4-9101-9CA5B72FFBCC
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'                 => 'Code',
        'globalIntentNum'      => 'GlobalIntentNum',
        'globalIntents'        => 'GlobalIntents',
        'groupId'              => 'GroupId',
        'httpStatusCode'       => 'HttpStatusCode',
        'instanceId'           => 'InstanceId',
        'intentsAfterNoAnswer' => 'IntentsAfterNoAnswer',
        'message'              => 'Message',
        'processIntentNum'     => 'ProcessIntentNum',
        'processIntents'       => 'ProcessIntents',
        'requestId'            => 'RequestId',
        'success'              => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->globalIntentNum) {
            $res['GlobalIntentNum'] = $this->globalIntentNum;
        }
        if (null !== $this->globalIntents) {
            $res['GlobalIntents'] = [];
            if (null !== $this->globalIntents && \is_array($this->globalIntents)) {
                $n = 0;
                foreach ($this->globalIntents as $item) {
                    $res['GlobalIntents'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['IntentsAfterNoAnswer'] = [];
            if (null !== $this->intentsAfterNoAnswer && \is_array($this->intentsAfterNoAnswer)) {
                $n = 0;
                foreach ($this->intentsAfterNoAnswer as $item) {
                    $res['IntentsAfterNoAnswer'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['ProcessIntents'] = [];
            if (null !== $this->processIntents && \is_array($this->processIntents)) {
                $n = 0;
                foreach ($this->processIntents as $item) {
                    $res['ProcessIntents'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return DescribeIntentStatisticsResponseBody
     */
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
                $n                    = 0;
                foreach ($map['GlobalIntents'] as $item) {
                    $model->globalIntents[$n++] = null !== $item ? globalIntents::fromMap($item) : $item;
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
                $n                           = 0;
                foreach ($map['IntentsAfterNoAnswer'] as $item) {
                    $model->intentsAfterNoAnswer[$n++] = null !== $item ? intentsAfterNoAnswer::fromMap($item) : $item;
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
                $n                     = 0;
                foreach ($map['ProcessIntents'] as $item) {
                    $model->processIntents[$n++] = null !== $item ? processIntents::fromMap($item) : $item;
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

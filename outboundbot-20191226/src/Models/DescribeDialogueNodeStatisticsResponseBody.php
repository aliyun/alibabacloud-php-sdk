<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeDialogueNodeStatisticsResponseBody\noAnswerDialogueNodes;
use AlibabaCloud\Tea\Model;

class DescribeDialogueNodeStatisticsResponseBody extends Model
{
    /**
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @example f06f7c9f-2895-4b30-a8c2-6ecccb9c9f89
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
     * @example e5035654-1745-484a-8c5b-165f7c7bcd79
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example Success
     *
     * @var string
     */
    public $message;

    /**
     * @example []
     *
     * @var noAnswerDialogueNodes[]
     */
    public $noAnswerDialogueNodes;

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

    /**
     * @example 13
     *
     * @var int
     */
    public $totalCompleted;
    protected $_name = [
        'code'                  => 'Code',
        'groupId'               => 'GroupId',
        'httpStatusCode'        => 'HttpStatusCode',
        'instanceId'            => 'InstanceId',
        'message'               => 'Message',
        'noAnswerDialogueNodes' => 'NoAnswerDialogueNodes',
        'requestId'             => 'RequestId',
        'success'               => 'Success',
        'totalCompleted'        => 'TotalCompleted',
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
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
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
            $res['NoAnswerDialogueNodes'] = [];
            if (null !== $this->noAnswerDialogueNodes && \is_array($this->noAnswerDialogueNodes)) {
                $n = 0;
                foreach ($this->noAnswerDialogueNodes as $item) {
                    $res['NoAnswerDialogueNodes'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return DescribeDialogueNodeStatisticsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
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
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['NoAnswerDialogueNodes'])) {
            if (!empty($map['NoAnswerDialogueNodes'])) {
                $model->noAnswerDialogueNodes = [];
                $n                            = 0;
                foreach ($map['NoAnswerDialogueNodes'] as $item) {
                    $model->noAnswerDialogueNodes[$n++] = null !== $item ? noAnswerDialogueNodes::fromMap($item) : $item;
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

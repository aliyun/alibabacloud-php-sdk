<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\SDK\CCC\V20170705\Models\ListAgentStateLogsResponseBody\agentStateLogPage;
use AlibabaCloud\Tea\Model;

class ListAgentStateLogsResponseBody extends Model
{
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
    public $httpStatusCode;

    /**
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var agentStateLogPage
     */
    public $agentStateLogPage;
    protected $_name = [
        'message'           => 'Message',
        'requestId'         => 'RequestId',
        'httpStatusCode'    => 'HttpStatusCode',
        'code'              => 'Code',
        'success'           => 'Success',
        'agentStateLogPage' => 'AgentStateLogPage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->agentStateLogPage) {
            $res['AgentStateLogPage'] = null !== $this->agentStateLogPage ? $this->agentStateLogPage->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAgentStateLogsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['AgentStateLogPage'])) {
            $model->agentStateLogPage = agentStateLogPage::fromMap($map['AgentStateLogPage']);
        }

        return $model;
    }
}

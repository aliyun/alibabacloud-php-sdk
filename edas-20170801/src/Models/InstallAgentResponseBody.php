<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\SDK\Edas\V20170801\Models\InstallAgentResponseBody\executionResultList;
use AlibabaCloud\Tea\Model;

class InstallAgentResponseBody extends Model
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
     * @var executionResultList
     */
    public $executionResultList;

    /**
     * @var int
     */
    public $code;
    protected $_name = [
        'message'             => 'Message',
        'requestId'           => 'RequestId',
        'executionResultList' => 'ExecutionResultList',
        'code'                => 'Code',
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
        if (null !== $this->executionResultList) {
            $res['ExecutionResultList'] = null !== $this->executionResultList ? $this->executionResultList->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InstallAgentResponseBody
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
        if (isset($map['ExecutionResultList'])) {
            $model->executionResultList = executionResultList::fromMap($map['ExecutionResultList']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitoringAgentProcessesResponseBody\nodeProcesses;
use AlibabaCloud\Tea\Model;

class DescribeMonitoringAgentProcessesResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var nodeProcesses
     */
    public $nodeProcesses;
    protected $_name = [
        'code'          => 'Code',
        'message'       => 'Message',
        'requestId'     => 'RequestId',
        'success'       => 'Success',
        'nodeProcesses' => 'NodeProcesses',
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
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->nodeProcesses) {
            $res['NodeProcesses'] = null !== $this->nodeProcesses ? $this->nodeProcesses->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMonitoringAgentProcessesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['NodeProcesses'])) {
            $model->nodeProcesses = nodeProcesses::fromMap($map['NodeProcesses']);
        }

        return $model;
    }
}

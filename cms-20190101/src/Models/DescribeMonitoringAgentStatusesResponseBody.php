<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitoringAgentStatusesResponseBody\nodeStatusList;
use AlibabaCloud\Tea\Model;

class DescribeMonitoringAgentStatusesResponseBody extends Model
{
    /**
     * @description The status information.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The ID of the instance. Separate multiple instance IDs with commas (,).
     *
     * @example The specified resource is not found.
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the instance.
     *
     * @var nodeStatusList
     */
    public $nodeStatusList;

    /**
     * @description The status of SysOM. Valid values:
     *
     *   installing: SysOM is being installed.
     *   running: SysOM is running.
     *   stopped: SysOM is stopped.
     *   uninstalling: SysOM is being uninstalled.
     *
     * @example 6F8371DF-AB81-41B8-9E1B-5493B3FF0E4F
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the CloudMonitor agent is automatically installed. Valid values:
     *
     *   true: The CloudMonitor agent is automatically installed.
     *   false: The CloudMonitor agent is not automatically installed.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'           => 'Code',
        'message'        => 'Message',
        'nodeStatusList' => 'NodeStatusList',
        'requestId'      => 'RequestId',
        'success'        => 'Success',
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
        if (null !== $this->nodeStatusList) {
            $res['NodeStatusList'] = null !== $this->nodeStatusList ? $this->nodeStatusList->toMap() : null;
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
     * @return DescribeMonitoringAgentStatusesResponseBody
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
        if (isset($map['NodeStatusList'])) {
            $model->nodeStatusList = nodeStatusList::fromMap($map['NodeStatusList']);
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

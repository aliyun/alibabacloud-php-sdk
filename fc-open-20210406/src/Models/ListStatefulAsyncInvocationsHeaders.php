<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class ListStatefulAsyncInvocationsHeaders extends Model
{
    public $commonHeaders;

    /**
     * @description It is a tool used to manage and configure Alibaba Cloud resources. After simple installation and configuration, you can use Alibaba Cloud CLI to manage multiple Alibaba Cloud services and migrate your data and business to the cloud with ease.
     *
     * @example 188077086902****
     *
     * @var string
     */
    public $xFcAccountId;

    /**
     * @description Alibaba Cloud CLI
     *
     * @example 1506052139770049xxxx
     *
     * @var string
     */
    public $xFcCodeChecksum;

    /**
     * @description - **true**: returns the invocationPayload parameter in the response.
     * - **false**: does not return the invocationPayload parameter in the response.
     *
     * > The `invocationPayload` parameter indicates the input parameters of an asynchronous task.
     * @example Sat, 14 Jul 2017 07:02:38 GMT
     *
     * @var string
     */
    public $xFcDate;

    /**
     * @description The token used to obtain more results. If this parameter is left empty, all the results are returned.
     *
     * @example Async
     *
     * @var string
     */
    public $xFcInvocationType;

    /**
     * @description The time when Function Compute API is called.
     *
     * @example Tail
     *
     * @var string
     */
    public $xFcLogType;

    /**
     * @description The CRC-64 value of the function code package. This value is used to check data integrity. The value is automatically calculated by the tool.
     *
     * @example abcxxx
     *
     * @var string
     */
    public $xFcTraceId;
    protected $_name = [
        'xFcAccountId'      => 'X-Fc-Account-Id',
        'xFcCodeChecksum'   => 'X-Fc-Code-Checksum',
        'xFcDate'           => 'X-Fc-Date',
        'xFcInvocationType' => 'X-Fc-Invocation-Type',
        'xFcLogType'        => 'X-Fc-Log-Type',
        'xFcTraceId'        => 'X-Fc-Trace-Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commonHeaders) {
            $res['commonHeaders'] = $this->commonHeaders;
        }
        if (null !== $this->xFcAccountId) {
            $res['X-Fc-Account-Id'] = $this->xFcAccountId;
        }
        if (null !== $this->xFcCodeChecksum) {
            $res['X-Fc-Code-Checksum'] = $this->xFcCodeChecksum;
        }
        if (null !== $this->xFcDate) {
            $res['X-Fc-Date'] = $this->xFcDate;
        }
        if (null !== $this->xFcInvocationType) {
            $res['X-Fc-Invocation-Type'] = $this->xFcInvocationType;
        }
        if (null !== $this->xFcLogType) {
            $res['X-Fc-Log-Type'] = $this->xFcLogType;
        }
        if (null !== $this->xFcTraceId) {
            $res['X-Fc-Trace-Id'] = $this->xFcTraceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListStatefulAsyncInvocationsHeaders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['commonHeaders'])) {
            $model->commonHeaders = $map['commonHeaders'];
        }
        if (isset($map['X-Fc-Account-Id'])) {
            $model->xFcAccountId = $map['X-Fc-Account-Id'];
        }
        if (isset($map['X-Fc-Code-Checksum'])) {
            $model->xFcCodeChecksum = $map['X-Fc-Code-Checksum'];
        }
        if (isset($map['X-Fc-Date'])) {
            $model->xFcDate = $map['X-Fc-Date'];
        }
        if (isset($map['X-Fc-Invocation-Type'])) {
            $model->xFcInvocationType = $map['X-Fc-Invocation-Type'];
        }
        if (isset($map['X-Fc-Log-Type'])) {
            $model->xFcLogType = $map['X-Fc-Log-Type'];
        }
        if (isset($map['X-Fc-Trace-Id'])) {
            $model->xFcTraceId = $map['X-Fc-Trace-Id'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class UpdateServiceHeaders extends Model
{
    public $commonHeaders;

    /**
     * @description 用于确保实际更改的资源和期望更改的资源是一致的，该值来自Create，Get和Update API的响应
     *
     * @var string
     */
    public $ifMatch;

    /**
     * @var string
     */
    public $xFcAccountId;

    /**
     * @var string
     */
    public $xFcCodeChecksum;

    /**
     * @var string
     */
    public $xFcDate;

    /**
     * @var string
     */
    public $xFcInvocationType;

    /**
     * @var string
     */
    public $xFcLogType;

    /**
     * @var string
     */
    public $xFcTraceId;
    protected $_name = [
        'ifMatch'           => 'If-Match',
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
        if (null !== $this->ifMatch) {
            $res['If-Match'] = $this->ifMatch;
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
     * @return UpdateServiceHeaders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['commonHeaders'])) {
            $model->commonHeaders = $map['commonHeaders'];
        }
        if (isset($map['If-Match'])) {
            $model->ifMatch = $map['If-Match'];
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

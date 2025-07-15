<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class ModifyLiveMessageAppAuditResponseBody extends Model
{
    /**
     * @description The ID of the interactive messaging application.
     *
     * @example demo
     *
     * @var string
     */
    public $appId;

    /**
     * @description The signature of the interactive messaging application. It is required by the interactive messaging SDK.
     *
     * @example **************************************************************************
     *
     * @var string
     */
    public $appSign;

    /**
     * @description Indicates whether authentication is enabled. If custom content moderation is used, the value of this parameter is true by default.
     *
     * @example true
     *
     * @var bool
     */
    public $auditNeedAuthentication;

    /**
     * @description The content moderation method.
     *
     * @example 2
     *
     * @var int
     */
    public $auditType;

    /**
     * @description The URL for content moderation. This parameter is returned when the value of AuditType is 2.
     *
     * @example http: //example.aliyundoc.com/exampleaudit
     *
     * @var string
     */
    public $auditUrl;

    /**
     * @description The request ID.
     *
     * @example 4C4E8440-3838-1831-9BDE-AFC15803****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'appId' => 'AppId',
        'appSign' => 'AppSign',
        'auditNeedAuthentication' => 'AuditNeedAuthentication',
        'auditType' => 'AuditType',
        'auditUrl' => 'AuditUrl',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appSign) {
            $res['AppSign'] = $this->appSign;
        }
        if (null !== $this->auditNeedAuthentication) {
            $res['AuditNeedAuthentication'] = $this->auditNeedAuthentication;
        }
        if (null !== $this->auditType) {
            $res['AuditType'] = $this->auditType;
        }
        if (null !== $this->auditUrl) {
            $res['AuditUrl'] = $this->auditUrl;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyLiveMessageAppAuditResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppSign'])) {
            $model->appSign = $map['AppSign'];
        }
        if (isset($map['AuditNeedAuthentication'])) {
            $model->auditNeedAuthentication = $map['AuditNeedAuthentication'];
        }
        if (isset($map['AuditType'])) {
            $model->auditType = $map['AuditType'];
        }
        if (isset($map['AuditUrl'])) {
            $model->auditUrl = $map['AuditUrl'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

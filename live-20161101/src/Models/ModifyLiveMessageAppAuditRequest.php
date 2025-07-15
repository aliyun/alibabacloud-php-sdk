<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class ModifyLiveMessageAppAuditRequest extends Model
{
    /**
     * @description The ID of the interactive messaging application whose content moderation settings you want to modify.
     *
     * This parameter is required.
     *
     * @example demo
     *
     * @var string
     */
    public $appId;

    /**
     * @description The content moderation method. Valid values:
     *
     *   0: disables content moderation.
     *   1: uses built-in content moderation.
     *   2: uses custom content moderation.
     *
     * @example 2
     *
     * @var int
     */
    public $auditType;

    /**
     * @description The URL for content moderation. This parameter is required if you set AuditType to 2. The URL must start with http:// or https:// and cannot contain a private IP address or a port number.
     *
     * @example http://example.aliyundoc.com/exampleaudit
     *
     * @var string
     */
    public $auditUrl;

    /**
     * @description The data center. It must be the same as the data center that was specified when you called the [CreateLiveMessageApp](https://help.aliyun.com/document_detail/2848162.html) operation to create the interactive messaging application. Valid values: cn-shanghai and ap-southeast-1 (Singapore).
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $dataCenter;
    protected $_name = [
        'appId' => 'AppId',
        'auditType' => 'AuditType',
        'auditUrl' => 'AuditUrl',
        'dataCenter' => 'DataCenter',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->auditType) {
            $res['AuditType'] = $this->auditType;
        }
        if (null !== $this->auditUrl) {
            $res['AuditUrl'] = $this->auditUrl;
        }
        if (null !== $this->dataCenter) {
            $res['DataCenter'] = $this->dataCenter;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyLiveMessageAppAuditRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AuditType'])) {
            $model->auditType = $map['AuditType'];
        }
        if (isset($map['AuditUrl'])) {
            $model->auditUrl = $map['AuditUrl'];
        }
        if (isset($map['DataCenter'])) {
            $model->dataCenter = $map['DataCenter'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;

class CreateLiveMessageAppRequest extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var int
     */
    public $auditType;

    /**
     * @var string
     */
    public $auditUrl;

    /**
     * @var string
     */
    public $dataCenter;

    /**
     * @var string
     */
    public $eventCallbackUrl;

    /**
     * @var int
     */
    public $msgLifeCycle;
    protected $_name = [
        'appName' => 'AppName',
        'auditType' => 'AuditType',
        'auditUrl' => 'AuditUrl',
        'dataCenter' => 'DataCenter',
        'eventCallbackUrl' => 'EventCallbackUrl',
        'msgLifeCycle' => 'MsgLifeCycle',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
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

        if (null !== $this->eventCallbackUrl) {
            $res['EventCallbackUrl'] = $this->eventCallbackUrl;
        }

        if (null !== $this->msgLifeCycle) {
            $res['MsgLifeCycle'] = $this->msgLifeCycle;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
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

        if (isset($map['EventCallbackUrl'])) {
            $model->eventCallbackUrl = $map['EventCallbackUrl'];
        }

        if (isset($map['MsgLifeCycle'])) {
            $model->msgLifeCycle = $map['MsgLifeCycle'];
        }

        return $model;
    }
}

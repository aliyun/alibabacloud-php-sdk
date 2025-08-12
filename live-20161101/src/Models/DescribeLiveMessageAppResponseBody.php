<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;

class DescribeLiveMessageAppResponseBody extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appKey;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $appSign;

    /**
     * @var int
     */
    public $auditType;

    /**
     * @var string
     */
    public $auditUrl;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $dataCenter;

    /**
     * @var bool
     */
    public $disable;

    /**
     * @var string
     */
    public $eventCallbackUrl;

    /**
     * @var int
     */
    public $modifyTime;

    /**
     * @var int
     */
    public $msgLifeCycle;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'appId' => 'AppId',
        'appKey' => 'AppKey',
        'appName' => 'AppName',
        'appSign' => 'AppSign',
        'auditType' => 'AuditType',
        'auditUrl' => 'AuditUrl',
        'createTime' => 'CreateTime',
        'dataCenter' => 'DataCenter',
        'disable' => 'Disable',
        'eventCallbackUrl' => 'EventCallbackUrl',
        'modifyTime' => 'ModifyTime',
        'msgLifeCycle' => 'MsgLifeCycle',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->appSign) {
            $res['AppSign'] = $this->appSign;
        }

        if (null !== $this->auditType) {
            $res['AuditType'] = $this->auditType;
        }

        if (null !== $this->auditUrl) {
            $res['AuditUrl'] = $this->auditUrl;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->dataCenter) {
            $res['DataCenter'] = $this->dataCenter;
        }

        if (null !== $this->disable) {
            $res['Disable'] = $this->disable;
        }

        if (null !== $this->eventCallbackUrl) {
            $res['EventCallbackUrl'] = $this->eventCallbackUrl;
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        if (null !== $this->msgLifeCycle) {
            $res['MsgLifeCycle'] = $this->msgLifeCycle;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['AppSign'])) {
            $model->appSign = $map['AppSign'];
        }

        if (isset($map['AuditType'])) {
            $model->auditType = $map['AuditType'];
        }

        if (isset($map['AuditUrl'])) {
            $model->auditUrl = $map['AuditUrl'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DataCenter'])) {
            $model->dataCenter = $map['DataCenter'];
        }

        if (isset($map['Disable'])) {
            $model->disable = $map['Disable'];
        }

        if (isset($map['EventCallbackUrl'])) {
            $model->eventCallbackUrl = $map['EventCallbackUrl'];
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['MsgLifeCycle'])) {
            $model->msgLifeCycle = $map['MsgLifeCycle'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

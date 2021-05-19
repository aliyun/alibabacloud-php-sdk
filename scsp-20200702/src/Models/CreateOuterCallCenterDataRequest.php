<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scsp\V20200702\Models;

use AlibabaCloud\Tea\Model;

class CreateOuterCallCenterDataRequest extends Model
{
    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $interveneTime;

    /**
     * @var string
     */
    public $callType;

    /**
     * @var string
     */
    public $fromPhoneNum;

    /**
     * @var string
     */
    public $toPhoneNum;

    /**
     * @var string
     */
    public $endReason;

    /**
     * @var string
     */
    public $userInfo;

    /**
     * @var string
     */
    public $recordUrl;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $extInfo;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'sessionId'     => 'SessionId',
        'interveneTime' => 'InterveneTime',
        'callType'      => 'CallType',
        'fromPhoneNum'  => 'FromPhoneNum',
        'toPhoneNum'    => 'ToPhoneNum',
        'endReason'     => 'EndReason',
        'userInfo'      => 'UserInfo',
        'recordUrl'     => 'RecordUrl',
        'bizType'       => 'BizType',
        'bizId'         => 'BizId',
        'tenantId'      => 'TenantId',
        'extInfo'       => 'ExtInfo',
        'instanceId'    => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->interveneTime) {
            $res['InterveneTime'] = $this->interveneTime;
        }
        if (null !== $this->callType) {
            $res['CallType'] = $this->callType;
        }
        if (null !== $this->fromPhoneNum) {
            $res['FromPhoneNum'] = $this->fromPhoneNum;
        }
        if (null !== $this->toPhoneNum) {
            $res['ToPhoneNum'] = $this->toPhoneNum;
        }
        if (null !== $this->endReason) {
            $res['EndReason'] = $this->endReason;
        }
        if (null !== $this->userInfo) {
            $res['UserInfo'] = $this->userInfo;
        }
        if (null !== $this->recordUrl) {
            $res['RecordUrl'] = $this->recordUrl;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOuterCallCenterDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['InterveneTime'])) {
            $model->interveneTime = $map['InterveneTime'];
        }
        if (isset($map['CallType'])) {
            $model->callType = $map['CallType'];
        }
        if (isset($map['FromPhoneNum'])) {
            $model->fromPhoneNum = $map['FromPhoneNum'];
        }
        if (isset($map['ToPhoneNum'])) {
            $model->toPhoneNum = $map['ToPhoneNum'];
        }
        if (isset($map['EndReason'])) {
            $model->endReason = $map['EndReason'];
        }
        if (isset($map['UserInfo'])) {
            $model->userInfo = $map['UserInfo'];
        }
        if (isset($map['RecordUrl'])) {
            $model->recordUrl = $map['RecordUrl'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}

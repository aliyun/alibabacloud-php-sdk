<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListSipCallRecordsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $callId;

    /**
     * @var string
     */
    public $callee;

    /**
     * @var string
     */
    public $calleeClusterId;

    /**
     * @var string
     */
    public $caller;

    /**
     * @var string
     */
    public $callerClusterId;

    /**
     * @var string
     */
    public $contactId;

    /**
     * @var string
     */
    public $earlyMediaText;

    /**
     * @var string
     */
    public $earlyMediaUrl;

    /**
     * @var int
     */
    public $establishedTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $inviteTime;

    /**
     * @var int
     */
    public $lastResponseCode;

    /**
     * @var string
     */
    public $lastResponseText;

    /**
     * @var int
     */
    public $releaseReasonCode;

    /**
     * @var int
     */
    public $releasedTime;

    /**
     * @var int
     */
    public $ringTime;
    protected $_name = [
        'callId'            => 'CallId',
        'callee'            => 'Callee',
        'calleeClusterId'   => 'CalleeClusterId',
        'caller'            => 'Caller',
        'callerClusterId'   => 'CallerClusterId',
        'contactId'         => 'ContactId',
        'earlyMediaText'    => 'EarlyMediaText',
        'earlyMediaUrl'     => 'EarlyMediaUrl',
        'establishedTime'   => 'EstablishedTime',
        'instanceId'        => 'InstanceId',
        'inviteTime'        => 'InviteTime',
        'lastResponseCode'  => 'LastResponseCode',
        'lastResponseText'  => 'LastResponseText',
        'releaseReasonCode' => 'ReleaseReasonCode',
        'releasedTime'      => 'ReleasedTime',
        'ringTime'          => 'RingTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callId) {
            $res['CallId'] = $this->callId;
        }
        if (null !== $this->callee) {
            $res['Callee'] = $this->callee;
        }
        if (null !== $this->calleeClusterId) {
            $res['CalleeClusterId'] = $this->calleeClusterId;
        }
        if (null !== $this->caller) {
            $res['Caller'] = $this->caller;
        }
        if (null !== $this->callerClusterId) {
            $res['CallerClusterId'] = $this->callerClusterId;
        }
        if (null !== $this->contactId) {
            $res['ContactId'] = $this->contactId;
        }
        if (null !== $this->earlyMediaText) {
            $res['EarlyMediaText'] = $this->earlyMediaText;
        }
        if (null !== $this->earlyMediaUrl) {
            $res['EarlyMediaUrl'] = $this->earlyMediaUrl;
        }
        if (null !== $this->establishedTime) {
            $res['EstablishedTime'] = $this->establishedTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->inviteTime) {
            $res['InviteTime'] = $this->inviteTime;
        }
        if (null !== $this->lastResponseCode) {
            $res['LastResponseCode'] = $this->lastResponseCode;
        }
        if (null !== $this->lastResponseText) {
            $res['LastResponseText'] = $this->lastResponseText;
        }
        if (null !== $this->releaseReasonCode) {
            $res['ReleaseReasonCode'] = $this->releaseReasonCode;
        }
        if (null !== $this->releasedTime) {
            $res['ReleasedTime'] = $this->releasedTime;
        }
        if (null !== $this->ringTime) {
            $res['RingTime'] = $this->ringTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallId'])) {
            $model->callId = $map['CallId'];
        }
        if (isset($map['Callee'])) {
            $model->callee = $map['Callee'];
        }
        if (isset($map['CalleeClusterId'])) {
            $model->calleeClusterId = $map['CalleeClusterId'];
        }
        if (isset($map['Caller'])) {
            $model->caller = $map['Caller'];
        }
        if (isset($map['CallerClusterId'])) {
            $model->callerClusterId = $map['CallerClusterId'];
        }
        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }
        if (isset($map['EarlyMediaText'])) {
            $model->earlyMediaText = $map['EarlyMediaText'];
        }
        if (isset($map['EarlyMediaUrl'])) {
            $model->earlyMediaUrl = $map['EarlyMediaUrl'];
        }
        if (isset($map['EstablishedTime'])) {
            $model->establishedTime = $map['EstablishedTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InviteTime'])) {
            $model->inviteTime = $map['InviteTime'];
        }
        if (isset($map['LastResponseCode'])) {
            $model->lastResponseCode = $map['LastResponseCode'];
        }
        if (isset($map['LastResponseText'])) {
            $model->lastResponseText = $map['LastResponseText'];
        }
        if (isset($map['ReleaseReasonCode'])) {
            $model->releaseReasonCode = $map['ReleaseReasonCode'];
        }
        if (isset($map['ReleasedTime'])) {
            $model->releasedTime = $map['ReleasedTime'];
        }
        if (isset($map['RingTime'])) {
            $model->ringTime = $map['RingTime'];
        }

        return $model;
    }
}

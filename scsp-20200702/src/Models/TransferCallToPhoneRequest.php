<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scsp\V20200702\Models;

use AlibabaCloud\Tea\Model;

class TransferCallToPhoneRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $accountName;

    /**
     * @var string
     */
    public $caller;

    /**
     * @var string
     */
    public $callee;

    /**
     * @var string
     */
    public $callId;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $connectionId;

    /**
     * @var string
     */
    public $holdConnectionId;

    /**
     * @var int
     */
    public $type;

    /**
     * @var bool
     */
    public $isSingleTransfer;

    /**
     * @var string
     */
    public $callerPhone;

    /**
     * @var string
     */
    public $calleePhone;
    protected $_name = [
        'clientToken'      => 'ClientToken',
        'instanceId'       => 'InstanceId',
        'accountName'      => 'AccountName',
        'caller'           => 'Caller',
        'callee'           => 'Callee',
        'callId'           => 'CallId',
        'jobId'            => 'JobId',
        'connectionId'     => 'ConnectionId',
        'holdConnectionId' => 'HoldConnectionId',
        'type'             => 'Type',
        'isSingleTransfer' => 'IsSingleTransfer',
        'callerPhone'      => 'callerPhone',
        'calleePhone'      => 'calleePhone',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->caller) {
            $res['Caller'] = $this->caller;
        }
        if (null !== $this->callee) {
            $res['Callee'] = $this->callee;
        }
        if (null !== $this->callId) {
            $res['CallId'] = $this->callId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->connectionId) {
            $res['ConnectionId'] = $this->connectionId;
        }
        if (null !== $this->holdConnectionId) {
            $res['HoldConnectionId'] = $this->holdConnectionId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->isSingleTransfer) {
            $res['IsSingleTransfer'] = $this->isSingleTransfer;
        }
        if (null !== $this->callerPhone) {
            $res['callerPhone'] = $this->callerPhone;
        }
        if (null !== $this->calleePhone) {
            $res['calleePhone'] = $this->calleePhone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TransferCallToPhoneRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['Caller'])) {
            $model->caller = $map['Caller'];
        }
        if (isset($map['Callee'])) {
            $model->callee = $map['Callee'];
        }
        if (isset($map['CallId'])) {
            $model->callId = $map['CallId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['ConnectionId'])) {
            $model->connectionId = $map['ConnectionId'];
        }
        if (isset($map['HoldConnectionId'])) {
            $model->holdConnectionId = $map['HoldConnectionId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['IsSingleTransfer'])) {
            $model->isSingleTransfer = $map['IsSingleTransfer'];
        }
        if (isset($map['callerPhone'])) {
            $model->callerPhone = $map['callerPhone'];
        }
        if (isset($map['calleePhone'])) {
            $model->calleePhone = $map['calleePhone'];
        }

        return $model;
    }
}

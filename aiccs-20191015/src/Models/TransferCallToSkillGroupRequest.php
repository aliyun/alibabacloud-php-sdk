<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Dara\Model;

class TransferCallToSkillGroupRequest extends Model
{
    /**
     * @var string
     */
    public $accountName;
    /**
     * @var string
     */
    public $callId;
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var string
     */
    public $connectionId;
    /**
     * @var string
     */
    public $holdConnectionId;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var bool
     */
    public $isSingleTransfer;
    /**
     * @var string
     */
    public $jobId;
    /**
     * @var int
     */
    public $skillGroupId;
    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'accountName'      => 'AccountName',
        'callId'           => 'CallId',
        'clientToken'      => 'ClientToken',
        'connectionId'     => 'ConnectionId',
        'holdConnectionId' => 'HoldConnectionId',
        'instanceId'       => 'InstanceId',
        'isSingleTransfer' => 'IsSingleTransfer',
        'jobId'            => 'JobId',
        'skillGroupId'     => 'SkillGroupId',
        'type'             => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }

        if (null !== $this->callId) {
            $res['CallId'] = $this->callId;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->connectionId) {
            $res['ConnectionId'] = $this->connectionId;
        }

        if (null !== $this->holdConnectionId) {
            $res['HoldConnectionId'] = $this->holdConnectionId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->isSingleTransfer) {
            $res['IsSingleTransfer'] = $this->isSingleTransfer;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->skillGroupId) {
            $res['SkillGroupId'] = $this->skillGroupId;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }

        if (isset($map['CallId'])) {
            $model->callId = $map['CallId'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['ConnectionId'])) {
            $model->connectionId = $map['ConnectionId'];
        }

        if (isset($map['HoldConnectionId'])) {
            $model->holdConnectionId = $map['HoldConnectionId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['IsSingleTransfer'])) {
            $model->isSingleTransfer = $map['IsSingleTransfer'];
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['SkillGroupId'])) {
            $model->skillGroupId = $map['SkillGroupId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

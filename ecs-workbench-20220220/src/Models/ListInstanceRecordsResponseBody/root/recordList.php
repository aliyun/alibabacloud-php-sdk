<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\ListInstanceRecordsResponseBody\root;

use AlibabaCloud\Dara\Model;

class recordList extends Model
{
    /**
     * @var int
     */
    public $accountId;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceRecordUrl;

    /**
     * @var int
     */
    public $recordDurationMillis;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $terminalSessionToken;
    protected $_name = [
        'accountId' => 'AccountId',
        'expireTime' => 'ExpireTime',
        'gmtCreate' => 'GmtCreate',
        'instanceId' => 'InstanceId',
        'instanceRecordUrl' => 'InstanceRecordUrl',
        'recordDurationMillis' => 'RecordDurationMillis',
        'status' => 'Status',
        'terminalSessionToken' => 'TerminalSessionToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceRecordUrl) {
            $res['InstanceRecordUrl'] = $this->instanceRecordUrl;
        }

        if (null !== $this->recordDurationMillis) {
            $res['RecordDurationMillis'] = $this->recordDurationMillis;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->terminalSessionToken) {
            $res['TerminalSessionToken'] = $this->terminalSessionToken;
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
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceRecordUrl'])) {
            $model->instanceRecordUrl = $map['InstanceRecordUrl'];
        }

        if (isset($map['RecordDurationMillis'])) {
            $model->recordDurationMillis = $map['RecordDurationMillis'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TerminalSessionToken'])) {
            $model->terminalSessionToken = $map['TerminalSessionToken'];
        }

        return $model;
    }
}

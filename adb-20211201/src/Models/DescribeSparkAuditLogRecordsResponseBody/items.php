<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeSparkAuditLogRecordsResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $clientIp;

    /**
     * @var string
     */
    public $errorMsg;

    /**
     * @var string
     */
    public $errorTrace;

    /**
     * @var string
     */
    public $executeTime;

    /**
     * @var string
     */
    public $innerQueryId;

    /**
     * @var bool
     */
    public $isDiagnosable;

    /**
     * @var string
     */
    public $processId;

    /**
     * @var string
     */
    public $resourceGroupName;

    /**
     * @var string
     */
    public $SQLText;

    /**
     * @var string
     */
    public $statementId;

    /**
     * @var string
     */
    public $statementSource;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $totalTime;

    /**
     * @var string
     */
    public $user;
    protected $_name = [
        'appId' => 'AppId',
        'clientIp' => 'ClientIp',
        'errorMsg' => 'ErrorMsg',
        'errorTrace' => 'ErrorTrace',
        'executeTime' => 'ExecuteTime',
        'innerQueryId' => 'InnerQueryId',
        'isDiagnosable' => 'IsDiagnosable',
        'processId' => 'ProcessId',
        'resourceGroupName' => 'ResourceGroupName',
        'SQLText' => 'SQLText',
        'statementId' => 'StatementId',
        'statementSource' => 'StatementSource',
        'status' => 'Status',
        'totalTime' => 'TotalTime',
        'user' => 'User',
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

        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }

        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }

        if (null !== $this->errorTrace) {
            $res['ErrorTrace'] = $this->errorTrace;
        }

        if (null !== $this->executeTime) {
            $res['ExecuteTime'] = $this->executeTime;
        }

        if (null !== $this->innerQueryId) {
            $res['InnerQueryId'] = $this->innerQueryId;
        }

        if (null !== $this->isDiagnosable) {
            $res['IsDiagnosable'] = $this->isDiagnosable;
        }

        if (null !== $this->processId) {
            $res['ProcessId'] = $this->processId;
        }

        if (null !== $this->resourceGroupName) {
            $res['ResourceGroupName'] = $this->resourceGroupName;
        }

        if (null !== $this->SQLText) {
            $res['SQLText'] = $this->SQLText;
        }

        if (null !== $this->statementId) {
            $res['StatementId'] = $this->statementId;
        }

        if (null !== $this->statementSource) {
            $res['StatementSource'] = $this->statementSource;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->totalTime) {
            $res['TotalTime'] = $this->totalTime;
        }

        if (null !== $this->user) {
            $res['User'] = $this->user;
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

        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }

        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }

        if (isset($map['ErrorTrace'])) {
            $model->errorTrace = $map['ErrorTrace'];
        }

        if (isset($map['ExecuteTime'])) {
            $model->executeTime = $map['ExecuteTime'];
        }

        if (isset($map['InnerQueryId'])) {
            $model->innerQueryId = $map['InnerQueryId'];
        }

        if (isset($map['IsDiagnosable'])) {
            $model->isDiagnosable = $map['IsDiagnosable'];
        }

        if (isset($map['ProcessId'])) {
            $model->processId = $map['ProcessId'];
        }

        if (isset($map['ResourceGroupName'])) {
            $model->resourceGroupName = $map['ResourceGroupName'];
        }

        if (isset($map['SQLText'])) {
            $model->SQLText = $map['SQLText'];
        }

        if (isset($map['StatementId'])) {
            $model->statementId = $map['StatementId'];
        }

        if (isset($map['StatementSource'])) {
            $model->statementSource = $map['StatementSource'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TotalTime'])) {
            $model->totalTime = $map['TotalTime'];
        }

        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}

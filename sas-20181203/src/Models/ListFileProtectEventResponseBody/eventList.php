<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListFileProtectEventResponseBody;

use AlibabaCloud\Dara\Model;

class eventList extends Model
{
    /**
     * @var int
     */
    public $alertLevel;
    /**
     * @var string
     */
    public $cmdLine;
    /**
     * @var string
     */
    public $filePath;
    /**
     * @var int
     */
    public $handleTime;
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $instanceName;
    /**
     * @var string
     */
    public $internetIp;
    /**
     * @var string
     */
    public $intranetIp;
    /**
     * @var int
     */
    public $latestTime;
    /**
     * @var string
     */
    public $operation;
    /**
     * @var string
     */
    public $platform;
    /**
     * @var string
     */
    public $procPath;
    /**
     * @var string
     */
    public $procPermission;
    /**
     * @var string
     */
    public $processId;
    /**
     * @var string
     */
    public $remark;
    /**
     * @var string
     */
    public $ruleName;
    /**
     * @var int
     */
    public $status;
    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'alertLevel'     => 'AlertLevel',
        'cmdLine'        => 'CmdLine',
        'filePath'       => 'FilePath',
        'handleTime'     => 'HandleTime',
        'id'             => 'Id',
        'instanceName'   => 'InstanceName',
        'internetIp'     => 'InternetIp',
        'intranetIp'     => 'IntranetIp',
        'latestTime'     => 'LatestTime',
        'operation'      => 'Operation',
        'platform'       => 'Platform',
        'procPath'       => 'ProcPath',
        'procPermission' => 'ProcPermission',
        'processId'      => 'ProcessId',
        'remark'         => 'Remark',
        'ruleName'       => 'RuleName',
        'status'         => 'Status',
        'uuid'           => 'Uuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertLevel) {
            $res['AlertLevel'] = $this->alertLevel;
        }

        if (null !== $this->cmdLine) {
            $res['CmdLine'] = $this->cmdLine;
        }

        if (null !== $this->filePath) {
            $res['FilePath'] = $this->filePath;
        }

        if (null !== $this->handleTime) {
            $res['HandleTime'] = $this->handleTime;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }

        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }

        if (null !== $this->latestTime) {
            $res['LatestTime'] = $this->latestTime;
        }

        if (null !== $this->operation) {
            $res['Operation'] = $this->operation;
        }

        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }

        if (null !== $this->procPath) {
            $res['ProcPath'] = $this->procPath;
        }

        if (null !== $this->procPermission) {
            $res['ProcPermission'] = $this->procPermission;
        }

        if (null !== $this->processId) {
            $res['ProcessId'] = $this->processId;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['AlertLevel'])) {
            $model->alertLevel = $map['AlertLevel'];
        }

        if (isset($map['CmdLine'])) {
            $model->cmdLine = $map['CmdLine'];
        }

        if (isset($map['FilePath'])) {
            $model->filePath = $map['FilePath'];
        }

        if (isset($map['HandleTime'])) {
            $model->handleTime = $map['HandleTime'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }

        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }

        if (isset($map['LatestTime'])) {
            $model->latestTime = $map['LatestTime'];
        }

        if (isset($map['Operation'])) {
            $model->operation = $map['Operation'];
        }

        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }

        if (isset($map['ProcPath'])) {
            $model->procPath = $map['ProcPath'];
        }

        if (isset($map['ProcPermission'])) {
            $model->procPermission = $map['ProcPermission'];
        }

        if (isset($map['ProcessId'])) {
            $model->processId = $map['ProcessId'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListUniBackupRecordResponseBody;

use AlibabaCloud\Dara\Model;

class uniBackupRecordList extends Model
{
    /**
     * @var int
     */
    public $backupEndTime;

    /**
     * @var int
     */
    public $backupStartTime;

    /**
     * @var string
     */
    public $databaseName;

    /**
     * @var string
     */
    public $databaseType;

    /**
     * @var string[]
     */
    public $errorMessageList;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $instanceUuid;

    /**
     * @var string
     */
    public $internetIp;

    /**
     * @var string
     */
    public $intranetIp;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $subtype;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'backupEndTime' => 'BackupEndTime',
        'backupStartTime' => 'BackupStartTime',
        'databaseName' => 'DatabaseName',
        'databaseType' => 'DatabaseType',
        'errorMessageList' => 'ErrorMessageList',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'instanceUuid' => 'InstanceUuid',
        'internetIp' => 'InternetIp',
        'intranetIp' => 'IntranetIp',
        'ip' => 'Ip',
        'regionId' => 'RegionId',
        'state' => 'State',
        'subtype' => 'Subtype',
        'uuid' => 'Uuid',
    ];

    public function validate()
    {
        if (\is_array($this->errorMessageList)) {
            Model::validateArray($this->errorMessageList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupEndTime) {
            $res['BackupEndTime'] = $this->backupEndTime;
        }

        if (null !== $this->backupStartTime) {
            $res['BackupStartTime'] = $this->backupStartTime;
        }

        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }

        if (null !== $this->databaseType) {
            $res['DatabaseType'] = $this->databaseType;
        }

        if (null !== $this->errorMessageList) {
            if (\is_array($this->errorMessageList)) {
                $res['ErrorMessageList'] = [];
                $n1 = 0;
                foreach ($this->errorMessageList as $item1) {
                    $res['ErrorMessageList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->instanceUuid) {
            $res['InstanceUuid'] = $this->instanceUuid;
        }

        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }

        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }

        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->subtype) {
            $res['Subtype'] = $this->subtype;
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
        if (isset($map['BackupEndTime'])) {
            $model->backupEndTime = $map['BackupEndTime'];
        }

        if (isset($map['BackupStartTime'])) {
            $model->backupStartTime = $map['BackupStartTime'];
        }

        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }

        if (isset($map['DatabaseType'])) {
            $model->databaseType = $map['DatabaseType'];
        }

        if (isset($map['ErrorMessageList'])) {
            if (!empty($map['ErrorMessageList'])) {
                $model->errorMessageList = [];
                $n1 = 0;
                foreach ($map['ErrorMessageList'] as $item1) {
                    $model->errorMessageList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['InstanceUuid'])) {
            $model->instanceUuid = $map['InstanceUuid'];
        }

        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }

        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }

        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['Subtype'])) {
            $model->subtype = $map['Subtype'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Tea\Model;

class ModifyDataLimitRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $resourceType;

    /**
     * @var string
     */
    public $serviceRegionId;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $password;

    /**
     * @var bool
     */
    public $modifyPassword;

    /**
     * @var int
     */
    public $auditStatus;

    /**
     * @var int
     */
    public $logStoreDay;

    /**
     * @var string
     */
    public $engineType;

    /**
     * @var int
     */
    public $port;

    /**
     * @var int
     */
    public $autoScan;
    protected $_name = [
        'lang'            => 'Lang',
        'id'              => 'Id',
        'resourceType'    => 'ResourceType',
        'serviceRegionId' => 'ServiceRegionId',
        'userName'        => 'UserName',
        'password'        => 'Password',
        'modifyPassword'  => 'ModifyPassword',
        'auditStatus'     => 'AuditStatus',
        'logStoreDay'     => 'LogStoreDay',
        'engineType'      => 'EngineType',
        'port'            => 'Port',
        'autoScan'        => 'AutoScan',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->serviceRegionId) {
            $res['ServiceRegionId'] = $this->serviceRegionId;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->modifyPassword) {
            $res['ModifyPassword'] = $this->modifyPassword;
        }
        if (null !== $this->auditStatus) {
            $res['AuditStatus'] = $this->auditStatus;
        }
        if (null !== $this->logStoreDay) {
            $res['LogStoreDay'] = $this->logStoreDay;
        }
        if (null !== $this->engineType) {
            $res['EngineType'] = $this->engineType;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->autoScan) {
            $res['AutoScan'] = $this->autoScan;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDataLimitRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['ServiceRegionId'])) {
            $model->serviceRegionId = $map['ServiceRegionId'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['ModifyPassword'])) {
            $model->modifyPassword = $map['ModifyPassword'];
        }
        if (isset($map['AuditStatus'])) {
            $model->auditStatus = $map['AuditStatus'];
        }
        if (isset($map['LogStoreDay'])) {
            $model->logStoreDay = $map['LogStoreDay'];
        }
        if (isset($map['EngineType'])) {
            $model->engineType = $map['EngineType'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['AutoScan'])) {
            $model->autoScan = $map['AutoScan'];
        }

        return $model;
    }
}

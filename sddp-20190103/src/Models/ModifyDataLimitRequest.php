<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Tea\Model;

class ModifyDataLimitRequest extends Model
{
    /**
     * @var int
     */
    public $auditStatus;

    /**
     * @var int
     */
    public $autoScan;

    /**
     * @var string
     */
    public $engineType;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $logStoreDay;

    /**
     * @var bool
     */
    public $modifyPassword;

    /**
     * @var string
     */
    public $password;

    /**
     * @var int
     */
    public $port;

    /**
     * @var int
     */
    public $resourceType;

    /**
     * @var int
     */
    public $samplingSize;

    /**
     * @var string
     */
    public $serviceRegionId;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'auditStatus'     => 'AuditStatus',
        'autoScan'        => 'AutoScan',
        'engineType'      => 'EngineType',
        'id'              => 'Id',
        'lang'            => 'Lang',
        'logStoreDay'     => 'LogStoreDay',
        'modifyPassword'  => 'ModifyPassword',
        'password'        => 'Password',
        'port'            => 'Port',
        'resourceType'    => 'ResourceType',
        'samplingSize'    => 'SamplingSize',
        'serviceRegionId' => 'ServiceRegionId',
        'userName'        => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auditStatus) {
            $res['AuditStatus'] = $this->auditStatus;
        }
        if (null !== $this->autoScan) {
            $res['AutoScan'] = $this->autoScan;
        }
        if (null !== $this->engineType) {
            $res['EngineType'] = $this->engineType;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->logStoreDay) {
            $res['LogStoreDay'] = $this->logStoreDay;
        }
        if (null !== $this->modifyPassword) {
            $res['ModifyPassword'] = $this->modifyPassword;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->samplingSize) {
            $res['SamplingSize'] = $this->samplingSize;
        }
        if (null !== $this->serviceRegionId) {
            $res['ServiceRegionId'] = $this->serviceRegionId;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
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
        if (isset($map['AuditStatus'])) {
            $model->auditStatus = $map['AuditStatus'];
        }
        if (isset($map['AutoScan'])) {
            $model->autoScan = $map['AutoScan'];
        }
        if (isset($map['EngineType'])) {
            $model->engineType = $map['EngineType'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['LogStoreDay'])) {
            $model->logStoreDay = $map['LogStoreDay'];
        }
        if (isset($map['ModifyPassword'])) {
            $model->modifyPassword = $map['ModifyPassword'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['SamplingSize'])) {
            $model->samplingSize = $map['SamplingSize'];
        }
        if (isset($map['ServiceRegionId'])) {
            $model->serviceRegionId = $map['ServiceRegionId'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}

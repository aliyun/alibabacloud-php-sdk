<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Tea\Model;

class CreateDataLimitRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

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
    public $parentId;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $password;

    /**
     * @var int
     */
    public $auditStatus;

    /**
     * @var int
     */
    public $autoScan;

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
    public $ocrStatus;

    /**
     * @var int
     */
    public $eventStatus;
    protected $_name = [
        'lang'            => 'Lang',
        'resourceType'    => 'ResourceType',
        'serviceRegionId' => 'ServiceRegionId',
        'parentId'        => 'ParentId',
        'userName'        => 'UserName',
        'password'        => 'Password',
        'auditStatus'     => 'AuditStatus',
        'autoScan'        => 'AutoScan',
        'logStoreDay'     => 'LogStoreDay',
        'engineType'      => 'EngineType',
        'port'            => 'Port',
        'ocrStatus'       => 'OcrStatus',
        'eventStatus'     => 'EventStatus',
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
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->serviceRegionId) {
            $res['ServiceRegionId'] = $this->serviceRegionId;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->auditStatus) {
            $res['AuditStatus'] = $this->auditStatus;
        }
        if (null !== $this->autoScan) {
            $res['AutoScan'] = $this->autoScan;
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
        if (null !== $this->ocrStatus) {
            $res['OcrStatus'] = $this->ocrStatus;
        }
        if (null !== $this->eventStatus) {
            $res['EventStatus'] = $this->eventStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDataLimitRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['ServiceRegionId'])) {
            $model->serviceRegionId = $map['ServiceRegionId'];
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['AuditStatus'])) {
            $model->auditStatus = $map['AuditStatus'];
        }
        if (isset($map['AutoScan'])) {
            $model->autoScan = $map['AutoScan'];
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
        if (isset($map['OcrStatus'])) {
            $model->ocrStatus = $map['OcrStatus'];
        }
        if (isset($map['EventStatus'])) {
            $model->eventStatus = $map['EventStatus'];
        }

        return $model;
    }
}

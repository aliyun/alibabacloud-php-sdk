<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Dara\Model;

class CreateDataLimitRequest extends Model
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
    public $certificatePermission;

    /**
     * @var int
     */
    public $enable;

    /**
     * @var string
     */
    public $engineType;

    /**
     * @var int
     */
    public $eventStatus;

    /**
     * @var int
     */
    public $featureType;

    /**
     * @var bool
     */
    public $instantlyScan;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $logStoreDay;

    /**
     * @var int
     */
    public $ocrStatus;

    /**
     * @var string
     */
    public $parentId;

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
    public $sourceIp;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'auditStatus' => 'AuditStatus',
        'autoScan' => 'AutoScan',
        'certificatePermission' => 'CertificatePermission',
        'enable' => 'Enable',
        'engineType' => 'EngineType',
        'eventStatus' => 'EventStatus',
        'featureType' => 'FeatureType',
        'instantlyScan' => 'InstantlyScan',
        'lang' => 'Lang',
        'logStoreDay' => 'LogStoreDay',
        'ocrStatus' => 'OcrStatus',
        'parentId' => 'ParentId',
        'password' => 'Password',
        'port' => 'Port',
        'resourceType' => 'ResourceType',
        'samplingSize' => 'SamplingSize',
        'serviceRegionId' => 'ServiceRegionId',
        'sourceIp' => 'SourceIp',
        'userName' => 'UserName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->auditStatus) {
            $res['AuditStatus'] = $this->auditStatus;
        }

        if (null !== $this->autoScan) {
            $res['AutoScan'] = $this->autoScan;
        }

        if (null !== $this->certificatePermission) {
            $res['CertificatePermission'] = $this->certificatePermission;
        }

        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        if (null !== $this->engineType) {
            $res['EngineType'] = $this->engineType;
        }

        if (null !== $this->eventStatus) {
            $res['EventStatus'] = $this->eventStatus;
        }

        if (null !== $this->featureType) {
            $res['FeatureType'] = $this->featureType;
        }

        if (null !== $this->instantlyScan) {
            $res['InstantlyScan'] = $this->instantlyScan;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->logStoreDay) {
            $res['LogStoreDay'] = $this->logStoreDay;
        }

        if (null !== $this->ocrStatus) {
            $res['OcrStatus'] = $this->ocrStatus;
        }

        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
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

        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
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
        if (isset($map['AuditStatus'])) {
            $model->auditStatus = $map['AuditStatus'];
        }

        if (isset($map['AutoScan'])) {
            $model->autoScan = $map['AutoScan'];
        }

        if (isset($map['CertificatePermission'])) {
            $model->certificatePermission = $map['CertificatePermission'];
        }

        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        if (isset($map['EngineType'])) {
            $model->engineType = $map['EngineType'];
        }

        if (isset($map['EventStatus'])) {
            $model->eventStatus = $map['EventStatus'];
        }

        if (isset($map['FeatureType'])) {
            $model->featureType = $map['FeatureType'];
        }

        if (isset($map['InstantlyScan'])) {
            $model->instantlyScan = $map['InstantlyScan'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['LogStoreDay'])) {
            $model->logStoreDay = $map['LogStoreDay'];
        }

        if (isset($map['OcrStatus'])) {
            $model->ocrStatus = $map['OcrStatus'];
        }

        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
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

        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}

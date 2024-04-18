<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Tea\Model;

class CreateDataLimitRequest extends Model
{
    /**
     * @description Specifies whether to enable the security audit feature. Valid values:
     *
     *   **0**: no
     *   **1**: yes
     *
     * @example 1
     *
     * @var int
     */
    public $auditStatus;

    /**
     * @description Specifies whether to automatically trigger a re-scan after a rule is modified. Valid values:
     *
     *   **0**: no
     *   **1**: yes
     *
     * > When a re-scan is triggered, DSC scans all data in your data asset.
     * @example 1
     *
     * @var int
     */
    public $autoScan;

    /**
     * @description The permissions. Valid values:
     *
     *   **ReadOnly**: read-only permissions
     *   **ReadWrite**: read and write permissions
     *
     * @example ReadOnly
     *
     * @var string
     */
    public $certificatePermission;

    /**
     * @description Specifies whether to enable sensitive data detection. Valid values:
     *
     *   **1**: yes
     *   **0**: no
     *
     * > If this is your first time to authorize DSC to access the data asset, the default value is 1. If this is not your first time to authorize DSC to access the data asset, the default value is the same as that used in the last authorization operation. Both 1 and 0 are possible.
     * @example 1
     *
     * @var int
     */
    public $enable;

    /**
     * @description The database engine that is run by the instance. Valid values:
     *
     *   **MySQL**
     *   **SQLServer**
     *
     * @example MySQL
     *
     * @var string
     */
    public $engineType;

    /**
     * @description Specifies whether to enable anomalous event detection. Valid values:
     *
     *   **0**: no
     *   **1**: yes (default)
     *
     * @example 1
     *
     * @var int
     */
    public $eventStatus;

    /**
     * @description This parameter is deprecated.
     *
     * @example 2
     *
     * @var int
     */
    public $featureType;

    /**
     * @description The language of the content within the request and response. Default value: **zh_cn**. Valid values:
     *
     *   **zh_cn**: Chinese
     *   **en_us**: English
     *
     * @example zh_cn
     *
     * @var string
     */
    public $lang;

    /**
     * @description The retention period of raw logs after you enable the security audit feature. Unit: days. Valid values:
     *
     *   **30**
     *   **90**
     *   **180**
     *   **365**
     *
     * @example 30
     *
     * @var int
     */
    public $logStoreDay;

    /**
     * @description Specifies whether to enable optical character recognition (OCR). Valid values:
     *
     *   **1**: yes
     *   **0**: no
     *
     * @example 0
     *
     * @var int
     */
    public $ocrStatus;

    /**
     * @description The name of the data asset.
     *
     * @example test-11**
     *
     * @var string
     */
    public $parentId;

    /**
     * @description The password that is used to access the database.
     *
     * @example passwd
     *
     * @var string
     */
    public $password;

    /**
     * @description The port that is used to connect to the database.
     *
     * @example 3306
     *
     * @var int
     */
    public $port;

    /**
     * @description The type of service to which the data asset belongs. Valid values:
     *
     *   **1** :MaxCompute
     *   **2**: Object Storage Service (OSS)
     *   **3**: AnalyticDB for MySQL
     *   **4** :Tablestore
     *   **5**: ApsaraDB RDS
     *
     * @example 1
     *
     * @var int
     */
    public $resourceType;

    /**
     * @description The number of sensitive data samples that are collected after sensitive data detection is enabled. Valid values:
     *
     *   **0**
     *   **5**
     *   **10**
     *
     * @example 0
     *
     * @var int
     */
    public $samplingSize;

    /**
     * @description The region in which the data asset resides. Valid values:
     *
     *   **cn-beijing**: China (Beijing).
     *   **cn-zhangjiakou**: China (Zhangjiakou)
     *   **cn-huhehaote**: China (Hohhot)
     *   **cn-hangzhou**: China (Hangzhou)
     *   **cn-shanghai**: China (Shanghai)
     *   **cn-shenzhen**: China (Shenzhen)
     *   **cn-hongkong**: China (Hong Kong)
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $serviceRegionId;

    /**
     * @description This parameter is deprecated.
     *
     * @example 39.170.XX.XX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The username that is used to access the database.
     *
     * @example yhm
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'auditStatus'           => 'AuditStatus',
        'autoScan'              => 'AutoScan',
        'certificatePermission' => 'CertificatePermission',
        'enable'                => 'Enable',
        'engineType'            => 'EngineType',
        'eventStatus'           => 'EventStatus',
        'featureType'           => 'FeatureType',
        'lang'                  => 'Lang',
        'logStoreDay'           => 'LogStoreDay',
        'ocrStatus'             => 'OcrStatus',
        'parentId'              => 'ParentId',
        'password'              => 'Password',
        'port'                  => 'Port',
        'resourceType'          => 'ResourceType',
        'samplingSize'          => 'SamplingSize',
        'serviceRegionId'       => 'ServiceRegionId',
        'sourceIp'              => 'SourceIp',
        'userName'              => 'UserName',
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

    /**
     * @param array $map
     *
     * @return CreateDataLimitRequest
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

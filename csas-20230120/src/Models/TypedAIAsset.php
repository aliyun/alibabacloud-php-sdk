<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\TypedAIAsset\identityIdentifiers;
use AlibabaCloud\SDK\Csas\V20230120\Models\TypedAIAsset\recognitionEvidence;
use AlibabaCloud\SDK\Csas\V20230120\Models\TypedAIAsset\riskInfo;

class TypedAIAsset extends Model
{
    /**
     * @var string
     */
    public $accessType;

    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $configPath;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var string
     */
    public $endpointType;

    /**
     * @var string
     */
    public $firstSeen;

    /**
     * @var string
     */
    public $form;

    /**
     * @var string
     */
    public $id;

    /**
     * @var identityIdentifiers
     */
    public $identityIdentifiers;

    /**
     * @var string
     */
    public $installPath;

    /**
     * @var string
     */
    public $instanceLocalId;

    /**
     * @var string
     */
    public $lastCheckTime;

    /**
     * @var string
     */
    public $lastDetectTaskId;

    /**
     * @var string
     */
    public $lastSeen;

    /**
     * @var string[]
     */
    public $matchedRules;

    /**
     * @var string
     */
    public $mcpId;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $providerId;

    /**
     * @var string
     */
    public $providerName;

    /**
     * @var string
     */
    public $providerNameCn;

    /**
     * @var string
     */
    public $providerNameEn;

    /**
     * @var string
     */
    public $providerType;

    /**
     * @var recognitionEvidence
     */
    public $recognitionEvidence;

    /**
     * @var string
     */
    public $recognitionStatus;

    /**
     * @var riskInfo
     */
    public $riskInfo;

    /**
     * @var string
     */
    public $riskLevel;

    /**
     * @var string
     */
    public $scanId;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $standardSha256;

    /**
     * @var string
     */
    public $transport;

    /**
     * @var int
     */
    public $vendor;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'accessType' => 'AccessType',
        'agentId' => 'AgentId',
        'configPath' => 'ConfigPath',
        'description' => 'Description',
        'endpoint' => 'Endpoint',
        'endpointType' => 'EndpointType',
        'firstSeen' => 'FirstSeen',
        'form' => 'Form',
        'id' => 'Id',
        'identityIdentifiers' => 'IdentityIdentifiers',
        'installPath' => 'InstallPath',
        'instanceLocalId' => 'InstanceLocalId',
        'lastCheckTime' => 'LastCheckTime',
        'lastDetectTaskId' => 'LastDetectTaskId',
        'lastSeen' => 'LastSeen',
        'matchedRules' => 'MatchedRules',
        'mcpId' => 'McpId',
        'productCode' => 'ProductCode',
        'providerId' => 'ProviderId',
        'providerName' => 'ProviderName',
        'providerNameCn' => 'ProviderNameCn',
        'providerNameEn' => 'ProviderNameEn',
        'providerType' => 'ProviderType',
        'recognitionEvidence' => 'RecognitionEvidence',
        'recognitionStatus' => 'RecognitionStatus',
        'riskInfo' => 'RiskInfo',
        'riskLevel' => 'RiskLevel',
        'scanId' => 'ScanId',
        'sourceType' => 'SourceType',
        'standardSha256' => 'StandardSha256',
        'transport' => 'Transport',
        'vendor' => 'Vendor',
        'version' => 'Version',
    ];

    public function validate()
    {
        if (null !== $this->identityIdentifiers) {
            $this->identityIdentifiers->validate();
        }
        if (\is_array($this->matchedRules)) {
            Model::validateArray($this->matchedRules);
        }
        if (null !== $this->recognitionEvidence) {
            $this->recognitionEvidence->validate();
        }
        if (null !== $this->riskInfo) {
            $this->riskInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessType) {
            $res['AccessType'] = $this->accessType;
        }

        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }

        if (null !== $this->configPath) {
            $res['ConfigPath'] = $this->configPath;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }

        if (null !== $this->endpointType) {
            $res['EndpointType'] = $this->endpointType;
        }

        if (null !== $this->firstSeen) {
            $res['FirstSeen'] = $this->firstSeen;
        }

        if (null !== $this->form) {
            $res['Form'] = $this->form;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->identityIdentifiers) {
            $res['IdentityIdentifiers'] = null !== $this->identityIdentifiers ? $this->identityIdentifiers->toArray($noStream) : $this->identityIdentifiers;
        }

        if (null !== $this->installPath) {
            $res['InstallPath'] = $this->installPath;
        }

        if (null !== $this->instanceLocalId) {
            $res['InstanceLocalId'] = $this->instanceLocalId;
        }

        if (null !== $this->lastCheckTime) {
            $res['LastCheckTime'] = $this->lastCheckTime;
        }

        if (null !== $this->lastDetectTaskId) {
            $res['LastDetectTaskId'] = $this->lastDetectTaskId;
        }

        if (null !== $this->lastSeen) {
            $res['LastSeen'] = $this->lastSeen;
        }

        if (null !== $this->matchedRules) {
            if (\is_array($this->matchedRules)) {
                $res['MatchedRules'] = [];
                $n1 = 0;
                foreach ($this->matchedRules as $item1) {
                    $res['MatchedRules'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->mcpId) {
            $res['McpId'] = $this->mcpId;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->providerId) {
            $res['ProviderId'] = $this->providerId;
        }

        if (null !== $this->providerName) {
            $res['ProviderName'] = $this->providerName;
        }

        if (null !== $this->providerNameCn) {
            $res['ProviderNameCn'] = $this->providerNameCn;
        }

        if (null !== $this->providerNameEn) {
            $res['ProviderNameEn'] = $this->providerNameEn;
        }

        if (null !== $this->providerType) {
            $res['ProviderType'] = $this->providerType;
        }

        if (null !== $this->recognitionEvidence) {
            $res['RecognitionEvidence'] = null !== $this->recognitionEvidence ? $this->recognitionEvidence->toArray($noStream) : $this->recognitionEvidence;
        }

        if (null !== $this->recognitionStatus) {
            $res['RecognitionStatus'] = $this->recognitionStatus;
        }

        if (null !== $this->riskInfo) {
            $res['RiskInfo'] = null !== $this->riskInfo ? $this->riskInfo->toArray($noStream) : $this->riskInfo;
        }

        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }

        if (null !== $this->scanId) {
            $res['ScanId'] = $this->scanId;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        if (null !== $this->standardSha256) {
            $res['StandardSha256'] = $this->standardSha256;
        }

        if (null !== $this->transport) {
            $res['Transport'] = $this->transport;
        }

        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['AccessType'])) {
            $model->accessType = $map['AccessType'];
        }

        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }

        if (isset($map['ConfigPath'])) {
            $model->configPath = $map['ConfigPath'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }

        if (isset($map['EndpointType'])) {
            $model->endpointType = $map['EndpointType'];
        }

        if (isset($map['FirstSeen'])) {
            $model->firstSeen = $map['FirstSeen'];
        }

        if (isset($map['Form'])) {
            $model->form = $map['Form'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['IdentityIdentifiers'])) {
            $model->identityIdentifiers = identityIdentifiers::fromMap($map['IdentityIdentifiers']);
        }

        if (isset($map['InstallPath'])) {
            $model->installPath = $map['InstallPath'];
        }

        if (isset($map['InstanceLocalId'])) {
            $model->instanceLocalId = $map['InstanceLocalId'];
        }

        if (isset($map['LastCheckTime'])) {
            $model->lastCheckTime = $map['LastCheckTime'];
        }

        if (isset($map['LastDetectTaskId'])) {
            $model->lastDetectTaskId = $map['LastDetectTaskId'];
        }

        if (isset($map['LastSeen'])) {
            $model->lastSeen = $map['LastSeen'];
        }

        if (isset($map['MatchedRules'])) {
            if (!empty($map['MatchedRules'])) {
                $model->matchedRules = [];
                $n1 = 0;
                foreach ($map['MatchedRules'] as $item1) {
                    $model->matchedRules[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['McpId'])) {
            $model->mcpId = $map['McpId'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['ProviderId'])) {
            $model->providerId = $map['ProviderId'];
        }

        if (isset($map['ProviderName'])) {
            $model->providerName = $map['ProviderName'];
        }

        if (isset($map['ProviderNameCn'])) {
            $model->providerNameCn = $map['ProviderNameCn'];
        }

        if (isset($map['ProviderNameEn'])) {
            $model->providerNameEn = $map['ProviderNameEn'];
        }

        if (isset($map['ProviderType'])) {
            $model->providerType = $map['ProviderType'];
        }

        if (isset($map['RecognitionEvidence'])) {
            $model->recognitionEvidence = recognitionEvidence::fromMap($map['RecognitionEvidence']);
        }

        if (isset($map['RecognitionStatus'])) {
            $model->recognitionStatus = $map['RecognitionStatus'];
        }

        if (isset($map['RiskInfo'])) {
            $model->riskInfo = riskInfo::fromMap($map['RiskInfo']);
        }

        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        if (isset($map['ScanId'])) {
            $model->scanId = $map['ScanId'];
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        if (isset($map['StandardSha256'])) {
            $model->standardSha256 = $map['StandardSha256'];
        }

        if (isset($map['Transport'])) {
            $model->transport = $map['Transport'];
        }

        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}

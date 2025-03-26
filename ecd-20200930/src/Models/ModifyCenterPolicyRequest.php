<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyCenterPolicyRequest\authorizeAccessPolicyRule;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyCenterPolicyRequest\authorizeSecurityPolicyRule;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyCenterPolicyRequest\clientType;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyCenterPolicyRequest\deviceRedirects;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyCenterPolicyRequest\deviceRules;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyCenterPolicyRequest\domainResolveRule;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyCenterPolicyRequest\netRedirectRule;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyCenterPolicyRequest\revokeAccessPolicyRule;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyCenterPolicyRequest\revokeSecurityPolicyRule;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyCenterPolicyRequest\usbSupplyRedirectRule;

class ModifyCenterPolicyRequest extends Model
{
    /**
     * @var string
     */
    public $adminAccess;

    /**
     * @var string
     */
    public $appContentProtection;

    /**
     * @var authorizeAccessPolicyRule[]
     */
    public $authorizeAccessPolicyRule;

    /**
     * @var authorizeSecurityPolicyRule[]
     */
    public $authorizeSecurityPolicyRule;

    /**
     * @var int
     */
    public $businessType;

    /**
     * @var string
     */
    public $cameraRedirect;

    /**
     * @var clientType[]
     */
    public $clientType;

    /**
     * @var string
     */
    public $clipboard;

    /**
     * @var string
     */
    public $colorEnhancement;

    /**
     * @var int
     */
    public $cpuDownGradeDuration;

    /**
     * @var string[]
     */
    public $cpuProcessors;

    /**
     * @var string
     */
    public $cpuProtectedMode;

    /**
     * @var int
     */
    public $cpuRateLimit;

    /**
     * @var int
     */
    public $cpuSampleDuration;

    /**
     * @var int
     */
    public $cpuSingleRateLimit;

    /**
     * @var string
     */
    public $deviceConnectHint;

    /**
     * @var deviceRedirects[]
     */
    public $deviceRedirects;

    /**
     * @var deviceRules[]
     */
    public $deviceRules;

    /**
     * @var string
     */
    public $disconnectKeepSession;

    /**
     * @var int
     */
    public $disconnectKeepSessionTime;

    /**
     * @var string
     */
    public $displayMode;

    /**
     * @var domainResolveRule[]
     */
    public $domainResolveRule;

    /**
     * @var string
     */
    public $domainResolveRuleType;

    /**
     * @var string
     */
    public $enableSessionRateLimiting;

    /**
     * @var string
     */
    public $endUserApplyAdminCoordinate;

    /**
     * @var string
     */
    public $endUserGroupCoordinate;

    /**
     * @var string
     */
    public $fileMigrate;

    /**
     * @var string
     */
    public $gpuAcceleration;

    /**
     * @var string
     */
    public $html5FileTransfer;

    /**
     * @var string
     */
    public $internetCommunicationProtocol;

    /**
     * @var string
     */
    public $localDrive;

    /**
     * @var int
     */
    public $maxReconnectTime;

    /**
     * @var int
     */
    public $memoryDownGradeDuration;

    /**
     * @var string[]
     */
    public $memoryProcessors;

    /**
     * @var string
     */
    public $memoryProtectedMode;

    /**
     * @var int
     */
    public $memoryRateLimit;

    /**
     * @var int
     */
    public $memorySampleDuration;

    /**
     * @var int
     */
    public $memorySingleRateLimit;

    /**
     * @var string
     */
    public $mobileRestart;

    /**
     * @var string
     */
    public $mobileShutdown;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $netRedirect;

    /**
     * @var netRedirectRule[]
     */
    public $netRedirectRule;

    /**
     * @var string
     */
    public $noOperationDisconnect;

    /**
     * @var int
     */
    public $noOperationDisconnectTime;

    /**
     * @var string
     */
    public $policyGroupId;

    /**
     * @var string
     */
    public $printerRedirect;

    /**
     * @var string
     */
    public $qualityEnhancement;

    /**
     * @var int
     */
    public $recordEventDuration;

    /**
     * @var string[]
     */
    public $recordEventFilePaths;

    /**
     * @var string[]
     */
    public $recordEventRegisters;

    /**
     * @var string[]
     */
    public $recordEvents;

    /**
     * @var string
     */
    public $recording;

    /**
     * @var string
     */
    public $recordingAudio;

    /**
     * @var int
     */
    public $recordingDuration;

    /**
     * @var string
     */
    public $recordingEndTime;

    /**
     * @var int
     */
    public $recordingExpires;

    /**
     * @var string
     */
    public $recordingFps;

    /**
     * @var string
     */
    public $recordingStartTime;

    /**
     * @var string
     */
    public $recordingUserNotify;

    /**
     * @var string
     */
    public $recordingUserNotifyMessage;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $remoteCoordinate;

    /**
     * @var string
     */
    public $resetDesktop;

    /**
     * @var int
     */
    public $resolutionHeight;

    /**
     * @var string
     */
    public $resolutionModel;

    /**
     * @var int
     */
    public $resolutionWidth;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var revokeAccessPolicyRule[]
     */
    public $revokeAccessPolicyRule;

    /**
     * @var revokeSecurityPolicyRule[]
     */
    public $revokeSecurityPolicyRule;

    /**
     * @var string
     */
    public $scope;

    /**
     * @var string[]
     */
    public $scopeValue;

    /**
     * @var int
     */
    public $sessionMaxRateKbps;

    /**
     * @var string
     */
    public $smoothEnhancement;

    /**
     * @var string
     */
    public $statusMonitor;

    /**
     * @var string
     */
    public $streamingMode;

    /**
     * @var int
     */
    public $targetFps;

    /**
     * @var string
     */
    public $taskbar;

    /**
     * @var string
     */
    public $usbRedirect;

    /**
     * @var usbSupplyRedirectRule[]
     */
    public $usbSupplyRedirectRule;

    /**
     * @var int
     */
    public $videoEncAvgKbps;

    /**
     * @var int
     */
    public $videoEncMaxQP;

    /**
     * @var int
     */
    public $videoEncMinQP;

    /**
     * @var int
     */
    public $videoEncPeakKbps;

    /**
     * @var string
     */
    public $videoEncPolicy;

    /**
     * @var string
     */
    public $videoRedirect;

    /**
     * @var string
     */
    public $visualQuality;

    /**
     * @var string
     */
    public $watermark;

    /**
     * @var string
     */
    public $watermarkAntiCam;

    /**
     * @var int
     */
    public $watermarkColor;

    /**
     * @var int
     */
    public $watermarkColumnAmount;

    /**
     * @var string
     */
    public $watermarkCustomText;

    /**
     * @var float
     */
    public $watermarkDegree;

    /**
     * @var int
     */
    public $watermarkFontSize;

    /**
     * @var string
     */
    public $watermarkFontStyle;

    /**
     * @var string
     */
    public $watermarkPower;

    /**
     * @var int
     */
    public $watermarkRowAmount;

    /**
     * @var string
     */
    public $watermarkSecurity;

    /**
     * @var int
     */
    public $watermarkTransparencyValue;

    /**
     * @var string
     */
    public $watermarkType;

    /**
     * @var string
     */
    public $wuyingKeeper;

    /**
     * @var string
     */
    public $wyAssistant;
    protected $_name = [
        'adminAccess' => 'AdminAccess',
        'appContentProtection' => 'AppContentProtection',
        'authorizeAccessPolicyRule' => 'AuthorizeAccessPolicyRule',
        'authorizeSecurityPolicyRule' => 'AuthorizeSecurityPolicyRule',
        'businessType' => 'BusinessType',
        'cameraRedirect' => 'CameraRedirect',
        'clientType' => 'ClientType',
        'clipboard' => 'Clipboard',
        'colorEnhancement' => 'ColorEnhancement',
        'cpuDownGradeDuration' => 'CpuDownGradeDuration',
        'cpuProcessors' => 'CpuProcessors',
        'cpuProtectedMode' => 'CpuProtectedMode',
        'cpuRateLimit' => 'CpuRateLimit',
        'cpuSampleDuration' => 'CpuSampleDuration',
        'cpuSingleRateLimit' => 'CpuSingleRateLimit',
        'deviceConnectHint' => 'DeviceConnectHint',
        'deviceRedirects' => 'DeviceRedirects',
        'deviceRules' => 'DeviceRules',
        'disconnectKeepSession' => 'DisconnectKeepSession',
        'disconnectKeepSessionTime' => 'DisconnectKeepSessionTime',
        'displayMode' => 'DisplayMode',
        'domainResolveRule' => 'DomainResolveRule',
        'domainResolveRuleType' => 'DomainResolveRuleType',
        'enableSessionRateLimiting' => 'EnableSessionRateLimiting',
        'endUserApplyAdminCoordinate' => 'EndUserApplyAdminCoordinate',
        'endUserGroupCoordinate' => 'EndUserGroupCoordinate',
        'fileMigrate' => 'FileMigrate',
        'gpuAcceleration' => 'GpuAcceleration',
        'html5FileTransfer' => 'Html5FileTransfer',
        'internetCommunicationProtocol' => 'InternetCommunicationProtocol',
        'localDrive' => 'LocalDrive',
        'maxReconnectTime' => 'MaxReconnectTime',
        'memoryDownGradeDuration' => 'MemoryDownGradeDuration',
        'memoryProcessors' => 'MemoryProcessors',
        'memoryProtectedMode' => 'MemoryProtectedMode',
        'memoryRateLimit' => 'MemoryRateLimit',
        'memorySampleDuration' => 'MemorySampleDuration',
        'memorySingleRateLimit' => 'MemorySingleRateLimit',
        'mobileRestart' => 'MobileRestart',
        'mobileShutdown' => 'MobileShutdown',
        'name' => 'Name',
        'netRedirect' => 'NetRedirect',
        'netRedirectRule' => 'NetRedirectRule',
        'noOperationDisconnect' => 'NoOperationDisconnect',
        'noOperationDisconnectTime' => 'NoOperationDisconnectTime',
        'policyGroupId' => 'PolicyGroupId',
        'printerRedirect' => 'PrinterRedirect',
        'qualityEnhancement' => 'QualityEnhancement',
        'recordEventDuration' => 'RecordEventDuration',
        'recordEventFilePaths' => 'RecordEventFilePaths',
        'recordEventRegisters' => 'RecordEventRegisters',
        'recordEvents' => 'RecordEvents',
        'recording' => 'Recording',
        'recordingAudio' => 'RecordingAudio',
        'recordingDuration' => 'RecordingDuration',
        'recordingEndTime' => 'RecordingEndTime',
        'recordingExpires' => 'RecordingExpires',
        'recordingFps' => 'RecordingFps',
        'recordingStartTime' => 'RecordingStartTime',
        'recordingUserNotify' => 'RecordingUserNotify',
        'recordingUserNotifyMessage' => 'RecordingUserNotifyMessage',
        'regionId' => 'RegionId',
        'remoteCoordinate' => 'RemoteCoordinate',
        'resetDesktop' => 'ResetDesktop',
        'resolutionHeight' => 'ResolutionHeight',
        'resolutionModel' => 'ResolutionModel',
        'resolutionWidth' => 'ResolutionWidth',
        'resourceType' => 'ResourceType',
        'revokeAccessPolicyRule' => 'RevokeAccessPolicyRule',
        'revokeSecurityPolicyRule' => 'RevokeSecurityPolicyRule',
        'scope' => 'Scope',
        'scopeValue' => 'ScopeValue',
        'sessionMaxRateKbps' => 'SessionMaxRateKbps',
        'smoothEnhancement' => 'SmoothEnhancement',
        'statusMonitor' => 'StatusMonitor',
        'streamingMode' => 'StreamingMode',
        'targetFps' => 'TargetFps',
        'taskbar' => 'Taskbar',
        'usbRedirect' => 'UsbRedirect',
        'usbSupplyRedirectRule' => 'UsbSupplyRedirectRule',
        'videoEncAvgKbps' => 'VideoEncAvgKbps',
        'videoEncMaxQP' => 'VideoEncMaxQP',
        'videoEncMinQP' => 'VideoEncMinQP',
        'videoEncPeakKbps' => 'VideoEncPeakKbps',
        'videoEncPolicy' => 'VideoEncPolicy',
        'videoRedirect' => 'VideoRedirect',
        'visualQuality' => 'VisualQuality',
        'watermark' => 'Watermark',
        'watermarkAntiCam' => 'WatermarkAntiCam',
        'watermarkColor' => 'WatermarkColor',
        'watermarkColumnAmount' => 'WatermarkColumnAmount',
        'watermarkCustomText' => 'WatermarkCustomText',
        'watermarkDegree' => 'WatermarkDegree',
        'watermarkFontSize' => 'WatermarkFontSize',
        'watermarkFontStyle' => 'WatermarkFontStyle',
        'watermarkPower' => 'WatermarkPower',
        'watermarkRowAmount' => 'WatermarkRowAmount',
        'watermarkSecurity' => 'WatermarkSecurity',
        'watermarkTransparencyValue' => 'WatermarkTransparencyValue',
        'watermarkType' => 'WatermarkType',
        'wuyingKeeper' => 'WuyingKeeper',
        'wyAssistant' => 'WyAssistant',
    ];

    public function validate()
    {
        if (\is_array($this->authorizeAccessPolicyRule)) {
            Model::validateArray($this->authorizeAccessPolicyRule);
        }
        if (\is_array($this->authorizeSecurityPolicyRule)) {
            Model::validateArray($this->authorizeSecurityPolicyRule);
        }
        if (\is_array($this->clientType)) {
            Model::validateArray($this->clientType);
        }
        if (\is_array($this->cpuProcessors)) {
            Model::validateArray($this->cpuProcessors);
        }
        if (\is_array($this->deviceRedirects)) {
            Model::validateArray($this->deviceRedirects);
        }
        if (\is_array($this->deviceRules)) {
            Model::validateArray($this->deviceRules);
        }
        if (\is_array($this->domainResolveRule)) {
            Model::validateArray($this->domainResolveRule);
        }
        if (\is_array($this->memoryProcessors)) {
            Model::validateArray($this->memoryProcessors);
        }
        if (\is_array($this->netRedirectRule)) {
            Model::validateArray($this->netRedirectRule);
        }
        if (\is_array($this->recordEventFilePaths)) {
            Model::validateArray($this->recordEventFilePaths);
        }
        if (\is_array($this->recordEventRegisters)) {
            Model::validateArray($this->recordEventRegisters);
        }
        if (\is_array($this->recordEvents)) {
            Model::validateArray($this->recordEvents);
        }
        if (\is_array($this->revokeAccessPolicyRule)) {
            Model::validateArray($this->revokeAccessPolicyRule);
        }
        if (\is_array($this->revokeSecurityPolicyRule)) {
            Model::validateArray($this->revokeSecurityPolicyRule);
        }
        if (\is_array($this->scopeValue)) {
            Model::validateArray($this->scopeValue);
        }
        if (\is_array($this->usbSupplyRedirectRule)) {
            Model::validateArray($this->usbSupplyRedirectRule);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adminAccess) {
            $res['AdminAccess'] = $this->adminAccess;
        }

        if (null !== $this->appContentProtection) {
            $res['AppContentProtection'] = $this->appContentProtection;
        }

        if (null !== $this->authorizeAccessPolicyRule) {
            if (\is_array($this->authorizeAccessPolicyRule)) {
                $res['AuthorizeAccessPolicyRule'] = [];
                $n1 = 0;
                foreach ($this->authorizeAccessPolicyRule as $item1) {
                    $res['AuthorizeAccessPolicyRule'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->authorizeSecurityPolicyRule) {
            if (\is_array($this->authorizeSecurityPolicyRule)) {
                $res['AuthorizeSecurityPolicyRule'] = [];
                $n1 = 0;
                foreach ($this->authorizeSecurityPolicyRule as $item1) {
                    $res['AuthorizeSecurityPolicyRule'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }

        if (null !== $this->cameraRedirect) {
            $res['CameraRedirect'] = $this->cameraRedirect;
        }

        if (null !== $this->clientType) {
            if (\is_array($this->clientType)) {
                $res['ClientType'] = [];
                $n1 = 0;
                foreach ($this->clientType as $item1) {
                    $res['ClientType'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->clipboard) {
            $res['Clipboard'] = $this->clipboard;
        }

        if (null !== $this->colorEnhancement) {
            $res['ColorEnhancement'] = $this->colorEnhancement;
        }

        if (null !== $this->cpuDownGradeDuration) {
            $res['CpuDownGradeDuration'] = $this->cpuDownGradeDuration;
        }

        if (null !== $this->cpuProcessors) {
            if (\is_array($this->cpuProcessors)) {
                $res['CpuProcessors'] = [];
                $n1 = 0;
                foreach ($this->cpuProcessors as $item1) {
                    $res['CpuProcessors'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->cpuProtectedMode) {
            $res['CpuProtectedMode'] = $this->cpuProtectedMode;
        }

        if (null !== $this->cpuRateLimit) {
            $res['CpuRateLimit'] = $this->cpuRateLimit;
        }

        if (null !== $this->cpuSampleDuration) {
            $res['CpuSampleDuration'] = $this->cpuSampleDuration;
        }

        if (null !== $this->cpuSingleRateLimit) {
            $res['CpuSingleRateLimit'] = $this->cpuSingleRateLimit;
        }

        if (null !== $this->deviceConnectHint) {
            $res['DeviceConnectHint'] = $this->deviceConnectHint;
        }

        if (null !== $this->deviceRedirects) {
            if (\is_array($this->deviceRedirects)) {
                $res['DeviceRedirects'] = [];
                $n1 = 0;
                foreach ($this->deviceRedirects as $item1) {
                    $res['DeviceRedirects'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->deviceRules) {
            if (\is_array($this->deviceRules)) {
                $res['DeviceRules'] = [];
                $n1 = 0;
                foreach ($this->deviceRules as $item1) {
                    $res['DeviceRules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->disconnectKeepSession) {
            $res['DisconnectKeepSession'] = $this->disconnectKeepSession;
        }

        if (null !== $this->disconnectKeepSessionTime) {
            $res['DisconnectKeepSessionTime'] = $this->disconnectKeepSessionTime;
        }

        if (null !== $this->displayMode) {
            $res['DisplayMode'] = $this->displayMode;
        }

        if (null !== $this->domainResolveRule) {
            if (\is_array($this->domainResolveRule)) {
                $res['DomainResolveRule'] = [];
                $n1 = 0;
                foreach ($this->domainResolveRule as $item1) {
                    $res['DomainResolveRule'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->domainResolveRuleType) {
            $res['DomainResolveRuleType'] = $this->domainResolveRuleType;
        }

        if (null !== $this->enableSessionRateLimiting) {
            $res['EnableSessionRateLimiting'] = $this->enableSessionRateLimiting;
        }

        if (null !== $this->endUserApplyAdminCoordinate) {
            $res['EndUserApplyAdminCoordinate'] = $this->endUserApplyAdminCoordinate;
        }

        if (null !== $this->endUserGroupCoordinate) {
            $res['EndUserGroupCoordinate'] = $this->endUserGroupCoordinate;
        }

        if (null !== $this->fileMigrate) {
            $res['FileMigrate'] = $this->fileMigrate;
        }

        if (null !== $this->gpuAcceleration) {
            $res['GpuAcceleration'] = $this->gpuAcceleration;
        }

        if (null !== $this->html5FileTransfer) {
            $res['Html5FileTransfer'] = $this->html5FileTransfer;
        }

        if (null !== $this->internetCommunicationProtocol) {
            $res['InternetCommunicationProtocol'] = $this->internetCommunicationProtocol;
        }

        if (null !== $this->localDrive) {
            $res['LocalDrive'] = $this->localDrive;
        }

        if (null !== $this->maxReconnectTime) {
            $res['MaxReconnectTime'] = $this->maxReconnectTime;
        }

        if (null !== $this->memoryDownGradeDuration) {
            $res['MemoryDownGradeDuration'] = $this->memoryDownGradeDuration;
        }

        if (null !== $this->memoryProcessors) {
            if (\is_array($this->memoryProcessors)) {
                $res['MemoryProcessors'] = [];
                $n1 = 0;
                foreach ($this->memoryProcessors as $item1) {
                    $res['MemoryProcessors'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->memoryProtectedMode) {
            $res['MemoryProtectedMode'] = $this->memoryProtectedMode;
        }

        if (null !== $this->memoryRateLimit) {
            $res['MemoryRateLimit'] = $this->memoryRateLimit;
        }

        if (null !== $this->memorySampleDuration) {
            $res['MemorySampleDuration'] = $this->memorySampleDuration;
        }

        if (null !== $this->memorySingleRateLimit) {
            $res['MemorySingleRateLimit'] = $this->memorySingleRateLimit;
        }

        if (null !== $this->mobileRestart) {
            $res['MobileRestart'] = $this->mobileRestart;
        }

        if (null !== $this->mobileShutdown) {
            $res['MobileShutdown'] = $this->mobileShutdown;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->netRedirect) {
            $res['NetRedirect'] = $this->netRedirect;
        }

        if (null !== $this->netRedirectRule) {
            if (\is_array($this->netRedirectRule)) {
                $res['NetRedirectRule'] = [];
                $n1 = 0;
                foreach ($this->netRedirectRule as $item1) {
                    $res['NetRedirectRule'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->noOperationDisconnect) {
            $res['NoOperationDisconnect'] = $this->noOperationDisconnect;
        }

        if (null !== $this->noOperationDisconnectTime) {
            $res['NoOperationDisconnectTime'] = $this->noOperationDisconnectTime;
        }

        if (null !== $this->policyGroupId) {
            $res['PolicyGroupId'] = $this->policyGroupId;
        }

        if (null !== $this->printerRedirect) {
            $res['PrinterRedirect'] = $this->printerRedirect;
        }

        if (null !== $this->qualityEnhancement) {
            $res['QualityEnhancement'] = $this->qualityEnhancement;
        }

        if (null !== $this->recordEventDuration) {
            $res['RecordEventDuration'] = $this->recordEventDuration;
        }

        if (null !== $this->recordEventFilePaths) {
            if (\is_array($this->recordEventFilePaths)) {
                $res['RecordEventFilePaths'] = [];
                $n1 = 0;
                foreach ($this->recordEventFilePaths as $item1) {
                    $res['RecordEventFilePaths'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->recordEventRegisters) {
            if (\is_array($this->recordEventRegisters)) {
                $res['RecordEventRegisters'] = [];
                $n1 = 0;
                foreach ($this->recordEventRegisters as $item1) {
                    $res['RecordEventRegisters'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->recordEvents) {
            if (\is_array($this->recordEvents)) {
                $res['RecordEvents'] = [];
                $n1 = 0;
                foreach ($this->recordEvents as $item1) {
                    $res['RecordEvents'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->recording) {
            $res['Recording'] = $this->recording;
        }

        if (null !== $this->recordingAudio) {
            $res['RecordingAudio'] = $this->recordingAudio;
        }

        if (null !== $this->recordingDuration) {
            $res['RecordingDuration'] = $this->recordingDuration;
        }

        if (null !== $this->recordingEndTime) {
            $res['RecordingEndTime'] = $this->recordingEndTime;
        }

        if (null !== $this->recordingExpires) {
            $res['RecordingExpires'] = $this->recordingExpires;
        }

        if (null !== $this->recordingFps) {
            $res['RecordingFps'] = $this->recordingFps;
        }

        if (null !== $this->recordingStartTime) {
            $res['RecordingStartTime'] = $this->recordingStartTime;
        }

        if (null !== $this->recordingUserNotify) {
            $res['RecordingUserNotify'] = $this->recordingUserNotify;
        }

        if (null !== $this->recordingUserNotifyMessage) {
            $res['RecordingUserNotifyMessage'] = $this->recordingUserNotifyMessage;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->remoteCoordinate) {
            $res['RemoteCoordinate'] = $this->remoteCoordinate;
        }

        if (null !== $this->resetDesktop) {
            $res['ResetDesktop'] = $this->resetDesktop;
        }

        if (null !== $this->resolutionHeight) {
            $res['ResolutionHeight'] = $this->resolutionHeight;
        }

        if (null !== $this->resolutionModel) {
            $res['ResolutionModel'] = $this->resolutionModel;
        }

        if (null !== $this->resolutionWidth) {
            $res['ResolutionWidth'] = $this->resolutionWidth;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->revokeAccessPolicyRule) {
            if (\is_array($this->revokeAccessPolicyRule)) {
                $res['RevokeAccessPolicyRule'] = [];
                $n1 = 0;
                foreach ($this->revokeAccessPolicyRule as $item1) {
                    $res['RevokeAccessPolicyRule'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->revokeSecurityPolicyRule) {
            if (\is_array($this->revokeSecurityPolicyRule)) {
                $res['RevokeSecurityPolicyRule'] = [];
                $n1 = 0;
                foreach ($this->revokeSecurityPolicyRule as $item1) {
                    $res['RevokeSecurityPolicyRule'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }

        if (null !== $this->scopeValue) {
            if (\is_array($this->scopeValue)) {
                $res['ScopeValue'] = [];
                $n1 = 0;
                foreach ($this->scopeValue as $item1) {
                    $res['ScopeValue'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->sessionMaxRateKbps) {
            $res['SessionMaxRateKbps'] = $this->sessionMaxRateKbps;
        }

        if (null !== $this->smoothEnhancement) {
            $res['SmoothEnhancement'] = $this->smoothEnhancement;
        }

        if (null !== $this->statusMonitor) {
            $res['StatusMonitor'] = $this->statusMonitor;
        }

        if (null !== $this->streamingMode) {
            $res['StreamingMode'] = $this->streamingMode;
        }

        if (null !== $this->targetFps) {
            $res['TargetFps'] = $this->targetFps;
        }

        if (null !== $this->taskbar) {
            $res['Taskbar'] = $this->taskbar;
        }

        if (null !== $this->usbRedirect) {
            $res['UsbRedirect'] = $this->usbRedirect;
        }

        if (null !== $this->usbSupplyRedirectRule) {
            if (\is_array($this->usbSupplyRedirectRule)) {
                $res['UsbSupplyRedirectRule'] = [];
                $n1 = 0;
                foreach ($this->usbSupplyRedirectRule as $item1) {
                    $res['UsbSupplyRedirectRule'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->videoEncAvgKbps) {
            $res['VideoEncAvgKbps'] = $this->videoEncAvgKbps;
        }

        if (null !== $this->videoEncMaxQP) {
            $res['VideoEncMaxQP'] = $this->videoEncMaxQP;
        }

        if (null !== $this->videoEncMinQP) {
            $res['VideoEncMinQP'] = $this->videoEncMinQP;
        }

        if (null !== $this->videoEncPeakKbps) {
            $res['VideoEncPeakKbps'] = $this->videoEncPeakKbps;
        }

        if (null !== $this->videoEncPolicy) {
            $res['VideoEncPolicy'] = $this->videoEncPolicy;
        }

        if (null !== $this->videoRedirect) {
            $res['VideoRedirect'] = $this->videoRedirect;
        }

        if (null !== $this->visualQuality) {
            $res['VisualQuality'] = $this->visualQuality;
        }

        if (null !== $this->watermark) {
            $res['Watermark'] = $this->watermark;
        }

        if (null !== $this->watermarkAntiCam) {
            $res['WatermarkAntiCam'] = $this->watermarkAntiCam;
        }

        if (null !== $this->watermarkColor) {
            $res['WatermarkColor'] = $this->watermarkColor;
        }

        if (null !== $this->watermarkColumnAmount) {
            $res['WatermarkColumnAmount'] = $this->watermarkColumnAmount;
        }

        if (null !== $this->watermarkCustomText) {
            $res['WatermarkCustomText'] = $this->watermarkCustomText;
        }

        if (null !== $this->watermarkDegree) {
            $res['WatermarkDegree'] = $this->watermarkDegree;
        }

        if (null !== $this->watermarkFontSize) {
            $res['WatermarkFontSize'] = $this->watermarkFontSize;
        }

        if (null !== $this->watermarkFontStyle) {
            $res['WatermarkFontStyle'] = $this->watermarkFontStyle;
        }

        if (null !== $this->watermarkPower) {
            $res['WatermarkPower'] = $this->watermarkPower;
        }

        if (null !== $this->watermarkRowAmount) {
            $res['WatermarkRowAmount'] = $this->watermarkRowAmount;
        }

        if (null !== $this->watermarkSecurity) {
            $res['WatermarkSecurity'] = $this->watermarkSecurity;
        }

        if (null !== $this->watermarkTransparencyValue) {
            $res['WatermarkTransparencyValue'] = $this->watermarkTransparencyValue;
        }

        if (null !== $this->watermarkType) {
            $res['WatermarkType'] = $this->watermarkType;
        }

        if (null !== $this->wuyingKeeper) {
            $res['WuyingKeeper'] = $this->wuyingKeeper;
        }

        if (null !== $this->wyAssistant) {
            $res['WyAssistant'] = $this->wyAssistant;
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
        if (isset($map['AdminAccess'])) {
            $model->adminAccess = $map['AdminAccess'];
        }

        if (isset($map['AppContentProtection'])) {
            $model->appContentProtection = $map['AppContentProtection'];
        }

        if (isset($map['AuthorizeAccessPolicyRule'])) {
            if (!empty($map['AuthorizeAccessPolicyRule'])) {
                $model->authorizeAccessPolicyRule = [];
                $n1 = 0;
                foreach ($map['AuthorizeAccessPolicyRule'] as $item1) {
                    $model->authorizeAccessPolicyRule[$n1++] = authorizeAccessPolicyRule::fromMap($item1);
                }
            }
        }

        if (isset($map['AuthorizeSecurityPolicyRule'])) {
            if (!empty($map['AuthorizeSecurityPolicyRule'])) {
                $model->authorizeSecurityPolicyRule = [];
                $n1 = 0;
                foreach ($map['AuthorizeSecurityPolicyRule'] as $item1) {
                    $model->authorizeSecurityPolicyRule[$n1++] = authorizeSecurityPolicyRule::fromMap($item1);
                }
            }
        }

        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }

        if (isset($map['CameraRedirect'])) {
            $model->cameraRedirect = $map['CameraRedirect'];
        }

        if (isset($map['ClientType'])) {
            if (!empty($map['ClientType'])) {
                $model->clientType = [];
                $n1 = 0;
                foreach ($map['ClientType'] as $item1) {
                    $model->clientType[$n1++] = clientType::fromMap($item1);
                }
            }
        }

        if (isset($map['Clipboard'])) {
            $model->clipboard = $map['Clipboard'];
        }

        if (isset($map['ColorEnhancement'])) {
            $model->colorEnhancement = $map['ColorEnhancement'];
        }

        if (isset($map['CpuDownGradeDuration'])) {
            $model->cpuDownGradeDuration = $map['CpuDownGradeDuration'];
        }

        if (isset($map['CpuProcessors'])) {
            if (!empty($map['CpuProcessors'])) {
                $model->cpuProcessors = [];
                $n1 = 0;
                foreach ($map['CpuProcessors'] as $item1) {
                    $model->cpuProcessors[$n1++] = $item1;
                }
            }
        }

        if (isset($map['CpuProtectedMode'])) {
            $model->cpuProtectedMode = $map['CpuProtectedMode'];
        }

        if (isset($map['CpuRateLimit'])) {
            $model->cpuRateLimit = $map['CpuRateLimit'];
        }

        if (isset($map['CpuSampleDuration'])) {
            $model->cpuSampleDuration = $map['CpuSampleDuration'];
        }

        if (isset($map['CpuSingleRateLimit'])) {
            $model->cpuSingleRateLimit = $map['CpuSingleRateLimit'];
        }

        if (isset($map['DeviceConnectHint'])) {
            $model->deviceConnectHint = $map['DeviceConnectHint'];
        }

        if (isset($map['DeviceRedirects'])) {
            if (!empty($map['DeviceRedirects'])) {
                $model->deviceRedirects = [];
                $n1 = 0;
                foreach ($map['DeviceRedirects'] as $item1) {
                    $model->deviceRedirects[$n1++] = deviceRedirects::fromMap($item1);
                }
            }
        }

        if (isset($map['DeviceRules'])) {
            if (!empty($map['DeviceRules'])) {
                $model->deviceRules = [];
                $n1 = 0;
                foreach ($map['DeviceRules'] as $item1) {
                    $model->deviceRules[$n1++] = deviceRules::fromMap($item1);
                }
            }
        }

        if (isset($map['DisconnectKeepSession'])) {
            $model->disconnectKeepSession = $map['DisconnectKeepSession'];
        }

        if (isset($map['DisconnectKeepSessionTime'])) {
            $model->disconnectKeepSessionTime = $map['DisconnectKeepSessionTime'];
        }

        if (isset($map['DisplayMode'])) {
            $model->displayMode = $map['DisplayMode'];
        }

        if (isset($map['DomainResolveRule'])) {
            if (!empty($map['DomainResolveRule'])) {
                $model->domainResolveRule = [];
                $n1 = 0;
                foreach ($map['DomainResolveRule'] as $item1) {
                    $model->domainResolveRule[$n1++] = domainResolveRule::fromMap($item1);
                }
            }
        }

        if (isset($map['DomainResolveRuleType'])) {
            $model->domainResolveRuleType = $map['DomainResolveRuleType'];
        }

        if (isset($map['EnableSessionRateLimiting'])) {
            $model->enableSessionRateLimiting = $map['EnableSessionRateLimiting'];
        }

        if (isset($map['EndUserApplyAdminCoordinate'])) {
            $model->endUserApplyAdminCoordinate = $map['EndUserApplyAdminCoordinate'];
        }

        if (isset($map['EndUserGroupCoordinate'])) {
            $model->endUserGroupCoordinate = $map['EndUserGroupCoordinate'];
        }

        if (isset($map['FileMigrate'])) {
            $model->fileMigrate = $map['FileMigrate'];
        }

        if (isset($map['GpuAcceleration'])) {
            $model->gpuAcceleration = $map['GpuAcceleration'];
        }

        if (isset($map['Html5FileTransfer'])) {
            $model->html5FileTransfer = $map['Html5FileTransfer'];
        }

        if (isset($map['InternetCommunicationProtocol'])) {
            $model->internetCommunicationProtocol = $map['InternetCommunicationProtocol'];
        }

        if (isset($map['LocalDrive'])) {
            $model->localDrive = $map['LocalDrive'];
        }

        if (isset($map['MaxReconnectTime'])) {
            $model->maxReconnectTime = $map['MaxReconnectTime'];
        }

        if (isset($map['MemoryDownGradeDuration'])) {
            $model->memoryDownGradeDuration = $map['MemoryDownGradeDuration'];
        }

        if (isset($map['MemoryProcessors'])) {
            if (!empty($map['MemoryProcessors'])) {
                $model->memoryProcessors = [];
                $n1 = 0;
                foreach ($map['MemoryProcessors'] as $item1) {
                    $model->memoryProcessors[$n1++] = $item1;
                }
            }
        }

        if (isset($map['MemoryProtectedMode'])) {
            $model->memoryProtectedMode = $map['MemoryProtectedMode'];
        }

        if (isset($map['MemoryRateLimit'])) {
            $model->memoryRateLimit = $map['MemoryRateLimit'];
        }

        if (isset($map['MemorySampleDuration'])) {
            $model->memorySampleDuration = $map['MemorySampleDuration'];
        }

        if (isset($map['MemorySingleRateLimit'])) {
            $model->memorySingleRateLimit = $map['MemorySingleRateLimit'];
        }

        if (isset($map['MobileRestart'])) {
            $model->mobileRestart = $map['MobileRestart'];
        }

        if (isset($map['MobileShutdown'])) {
            $model->mobileShutdown = $map['MobileShutdown'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NetRedirect'])) {
            $model->netRedirect = $map['NetRedirect'];
        }

        if (isset($map['NetRedirectRule'])) {
            if (!empty($map['NetRedirectRule'])) {
                $model->netRedirectRule = [];
                $n1 = 0;
                foreach ($map['NetRedirectRule'] as $item1) {
                    $model->netRedirectRule[$n1++] = netRedirectRule::fromMap($item1);
                }
            }
        }

        if (isset($map['NoOperationDisconnect'])) {
            $model->noOperationDisconnect = $map['NoOperationDisconnect'];
        }

        if (isset($map['NoOperationDisconnectTime'])) {
            $model->noOperationDisconnectTime = $map['NoOperationDisconnectTime'];
        }

        if (isset($map['PolicyGroupId'])) {
            $model->policyGroupId = $map['PolicyGroupId'];
        }

        if (isset($map['PrinterRedirect'])) {
            $model->printerRedirect = $map['PrinterRedirect'];
        }

        if (isset($map['QualityEnhancement'])) {
            $model->qualityEnhancement = $map['QualityEnhancement'];
        }

        if (isset($map['RecordEventDuration'])) {
            $model->recordEventDuration = $map['RecordEventDuration'];
        }

        if (isset($map['RecordEventFilePaths'])) {
            if (!empty($map['RecordEventFilePaths'])) {
                $model->recordEventFilePaths = [];
                $n1 = 0;
                foreach ($map['RecordEventFilePaths'] as $item1) {
                    $model->recordEventFilePaths[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RecordEventRegisters'])) {
            if (!empty($map['RecordEventRegisters'])) {
                $model->recordEventRegisters = [];
                $n1 = 0;
                foreach ($map['RecordEventRegisters'] as $item1) {
                    $model->recordEventRegisters[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RecordEvents'])) {
            if (!empty($map['RecordEvents'])) {
                $model->recordEvents = [];
                $n1 = 0;
                foreach ($map['RecordEvents'] as $item1) {
                    $model->recordEvents[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Recording'])) {
            $model->recording = $map['Recording'];
        }

        if (isset($map['RecordingAudio'])) {
            $model->recordingAudio = $map['RecordingAudio'];
        }

        if (isset($map['RecordingDuration'])) {
            $model->recordingDuration = $map['RecordingDuration'];
        }

        if (isset($map['RecordingEndTime'])) {
            $model->recordingEndTime = $map['RecordingEndTime'];
        }

        if (isset($map['RecordingExpires'])) {
            $model->recordingExpires = $map['RecordingExpires'];
        }

        if (isset($map['RecordingFps'])) {
            $model->recordingFps = $map['RecordingFps'];
        }

        if (isset($map['RecordingStartTime'])) {
            $model->recordingStartTime = $map['RecordingStartTime'];
        }

        if (isset($map['RecordingUserNotify'])) {
            $model->recordingUserNotify = $map['RecordingUserNotify'];
        }

        if (isset($map['RecordingUserNotifyMessage'])) {
            $model->recordingUserNotifyMessage = $map['RecordingUserNotifyMessage'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RemoteCoordinate'])) {
            $model->remoteCoordinate = $map['RemoteCoordinate'];
        }

        if (isset($map['ResetDesktop'])) {
            $model->resetDesktop = $map['ResetDesktop'];
        }

        if (isset($map['ResolutionHeight'])) {
            $model->resolutionHeight = $map['ResolutionHeight'];
        }

        if (isset($map['ResolutionModel'])) {
            $model->resolutionModel = $map['ResolutionModel'];
        }

        if (isset($map['ResolutionWidth'])) {
            $model->resolutionWidth = $map['ResolutionWidth'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['RevokeAccessPolicyRule'])) {
            if (!empty($map['RevokeAccessPolicyRule'])) {
                $model->revokeAccessPolicyRule = [];
                $n1 = 0;
                foreach ($map['RevokeAccessPolicyRule'] as $item1) {
                    $model->revokeAccessPolicyRule[$n1++] = revokeAccessPolicyRule::fromMap($item1);
                }
            }
        }

        if (isset($map['RevokeSecurityPolicyRule'])) {
            if (!empty($map['RevokeSecurityPolicyRule'])) {
                $model->revokeSecurityPolicyRule = [];
                $n1 = 0;
                foreach ($map['RevokeSecurityPolicyRule'] as $item1) {
                    $model->revokeSecurityPolicyRule[$n1++] = revokeSecurityPolicyRule::fromMap($item1);
                }
            }
        }

        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }

        if (isset($map['ScopeValue'])) {
            if (!empty($map['ScopeValue'])) {
                $model->scopeValue = [];
                $n1 = 0;
                foreach ($map['ScopeValue'] as $item1) {
                    $model->scopeValue[$n1++] = $item1;
                }
            }
        }

        if (isset($map['SessionMaxRateKbps'])) {
            $model->sessionMaxRateKbps = $map['SessionMaxRateKbps'];
        }

        if (isset($map['SmoothEnhancement'])) {
            $model->smoothEnhancement = $map['SmoothEnhancement'];
        }

        if (isset($map['StatusMonitor'])) {
            $model->statusMonitor = $map['StatusMonitor'];
        }

        if (isset($map['StreamingMode'])) {
            $model->streamingMode = $map['StreamingMode'];
        }

        if (isset($map['TargetFps'])) {
            $model->targetFps = $map['TargetFps'];
        }

        if (isset($map['Taskbar'])) {
            $model->taskbar = $map['Taskbar'];
        }

        if (isset($map['UsbRedirect'])) {
            $model->usbRedirect = $map['UsbRedirect'];
        }

        if (isset($map['UsbSupplyRedirectRule'])) {
            if (!empty($map['UsbSupplyRedirectRule'])) {
                $model->usbSupplyRedirectRule = [];
                $n1 = 0;
                foreach ($map['UsbSupplyRedirectRule'] as $item1) {
                    $model->usbSupplyRedirectRule[$n1++] = usbSupplyRedirectRule::fromMap($item1);
                }
            }
        }

        if (isset($map['VideoEncAvgKbps'])) {
            $model->videoEncAvgKbps = $map['VideoEncAvgKbps'];
        }

        if (isset($map['VideoEncMaxQP'])) {
            $model->videoEncMaxQP = $map['VideoEncMaxQP'];
        }

        if (isset($map['VideoEncMinQP'])) {
            $model->videoEncMinQP = $map['VideoEncMinQP'];
        }

        if (isset($map['VideoEncPeakKbps'])) {
            $model->videoEncPeakKbps = $map['VideoEncPeakKbps'];
        }

        if (isset($map['VideoEncPolicy'])) {
            $model->videoEncPolicy = $map['VideoEncPolicy'];
        }

        if (isset($map['VideoRedirect'])) {
            $model->videoRedirect = $map['VideoRedirect'];
        }

        if (isset($map['VisualQuality'])) {
            $model->visualQuality = $map['VisualQuality'];
        }

        if (isset($map['Watermark'])) {
            $model->watermark = $map['Watermark'];
        }

        if (isset($map['WatermarkAntiCam'])) {
            $model->watermarkAntiCam = $map['WatermarkAntiCam'];
        }

        if (isset($map['WatermarkColor'])) {
            $model->watermarkColor = $map['WatermarkColor'];
        }

        if (isset($map['WatermarkColumnAmount'])) {
            $model->watermarkColumnAmount = $map['WatermarkColumnAmount'];
        }

        if (isset($map['WatermarkCustomText'])) {
            $model->watermarkCustomText = $map['WatermarkCustomText'];
        }

        if (isset($map['WatermarkDegree'])) {
            $model->watermarkDegree = $map['WatermarkDegree'];
        }

        if (isset($map['WatermarkFontSize'])) {
            $model->watermarkFontSize = $map['WatermarkFontSize'];
        }

        if (isset($map['WatermarkFontStyle'])) {
            $model->watermarkFontStyle = $map['WatermarkFontStyle'];
        }

        if (isset($map['WatermarkPower'])) {
            $model->watermarkPower = $map['WatermarkPower'];
        }

        if (isset($map['WatermarkRowAmount'])) {
            $model->watermarkRowAmount = $map['WatermarkRowAmount'];
        }

        if (isset($map['WatermarkSecurity'])) {
            $model->watermarkSecurity = $map['WatermarkSecurity'];
        }

        if (isset($map['WatermarkTransparencyValue'])) {
            $model->watermarkTransparencyValue = $map['WatermarkTransparencyValue'];
        }

        if (isset($map['WatermarkType'])) {
            $model->watermarkType = $map['WatermarkType'];
        }

        if (isset($map['WuyingKeeper'])) {
            $model->wuyingKeeper = $map['WuyingKeeper'];
        }

        if (isset($map['WyAssistant'])) {
            $model->wyAssistant = $map['WyAssistant'];
        }

        return $model;
    }
}

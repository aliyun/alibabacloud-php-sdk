<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCenterPolicyListResponseBody;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCenterPolicyListResponseBody\describePolicyGroups\authorizeAccessPolicyRules;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCenterPolicyListResponseBody\describePolicyGroups\authorizeSecurityPolicyRules;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCenterPolicyListResponseBody\describePolicyGroups\clientTypes;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCenterPolicyListResponseBody\describePolicyGroups\deviceRedirects;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCenterPolicyListResponseBody\describePolicyGroups\deviceRules;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCenterPolicyListResponseBody\describePolicyGroups\domainResolveRule;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCenterPolicyListResponseBody\describePolicyGroups\netRedirectRule;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCenterPolicyListResponseBody\describePolicyGroups\usbSupplyRedirectRule;
use AlibabaCloud\Tea\Model;

class describePolicyGroups extends Model
{
    /**
     * @description Indicates whether the admin permissions are granted to end users.
     *
     * >  This parameter is in private preview and only available to specific users.
     *
     * @example deny
     *
     * @var string
     */
    public $adminAccess;

    /**
     * @description Indicates whether anti-screenshot is enabled.
     *
     * @example off
     *
     * @var string
     */
    public $appContentProtection;

    /**
     * @description The client IP address whitelists.
     *
     * @var authorizeAccessPolicyRules[]
     */
    public $authorizeAccessPolicyRules;

    /**
     * @description The security group rules.
     *
     * @var authorizeSecurityPolicyRules[]
     */
    public $authorizeSecurityPolicyRules;

    /**
     * @description Indicates whether on-premises webcam redirection is enabled.
     *
     * @example on
     *
     * @var string
     */
    public $cameraRedirect;

    /**
     * @var string
     */
    public $clientControlMenu;

    /**
     * @description The logon method control rules.
     *
     * @var clientTypes[]
     */
    public $clientTypes;

    /**
     * @description The read/write permissions on the clipboard.
     *
     * @example off
     *
     * @var string
     */
    public $clipboard;

    /**
     * @description Indicates whether color enhancement is enabled for design and 3D applications.
     *
     * @example off
     *
     * @var string
     */
    public $colorEnhancement;

    /**
     * @var string
     */
    public $cpdDriveClipboard;

    /**
     * @description The CPU underclocking duration. Valid values: 30 to 120. Unit: seconds.
     *
     * @example 30
     *
     * @var int
     */
    public $cpuDownGradeDuration;

    /**
     * @description The CPU processors.
     *
     * @var string[]
     */
    public $cpuProcessors;

    /**
     * @description The CPU spike protection policy.
     *
     * @example on
     *
     * @var string
     */
    public $cpuProtectedMode;

    /**
     * @description The overall CPU usage. Valid values: 70 to 90. Unit: percentage (%).
     *
     * @example 70
     *
     * @var int
     */
    public $cpuRateLimit;

    /**
     * @description The overall CPU sampling duration. Valid values: 10 to 60. Unit: seconds.
     *
     * @example 10
     *
     * @var int
     */
    public $cpuSampleDuration;

    /**
     * @description The single-CPU usage. Valid values: 70 to 100. Unit: %.
     *
     * @example 70
     *
     * @var int
     */
    public $cpuSingleRateLimit;

    /**
     * @description The number of cloud computers that are associated with the policy.
     *
     * @example 1
     *
     * @var int
     */
    public $desktopCount;

    /**
     * @description The number of cloud computer shares that are associated with the policy.
     *
     * @example 1
     *
     * @var int
     */
    public $desktopGroupCount;

    /**
     * @description The device redirection rules.
     *
     * @var deviceRedirects[]
     */
    public $deviceRedirects;

    /**
     * @description The custom peripheral rules.
     *
     * @var deviceRules[]
     */
    public $deviceRules;

    /**
     * @description Indicates whether the session is retained after disconnection.
     *
     * >  This parameter applies only to cloud application policies.
     *
     * @example persistent
     *
     * @var string
     */
    public $disconnectKeepSession;

    /**
     * @description The retention period of the session after disconnection. Unit: seconds.
     *
     * >  This parameter applies only to cloud application policies.
     *
     * @example 120
     *
     * @var int
     */
    public $disconnectKeepSessionTime;

    /**
     * @description The display mode.
     *
     * @example adminCustom
     *
     * @var string
     */
    public $displayMode;

    /**
     * @description The field where the domain resolution policy is applied.
     *
     * @example xxxx
     *
     * @var string
     */
    public $domainRegisterValue;

    /**
     * @description The domain resolution policies.
     *
     * @var domainResolveRule[]
     */
    public $domainResolveRule;

    /**
     * @description Indicates whether domain name resolution is allowed.
     *
     * @example on
     *
     * @var string
     */
    public $domainResolveRuleType;

    /**
     * @description Indicates whether end users are allowed to request administrator help.
     *
     * @example off
     *
     * @var string
     */
    public $endUserApplyAdminCoordinate;

    /**
     * @description Indicates whether end users in the same office network can share cloud computers.
     *
     * @example off
     *
     * @var string
     */
    public $endUserGroupCoordinate;

    /**
     * @var string
     */
    public $fileTransferAddress;

    /**
     * @var string
     */
    public $fileTransferSpeed;

    /**
     * @var string
     */
    public $fileTransferSpeedLocation;

    /**
     * @description Indicates whether image quality control is enabled. For optimal computer performance and user experience in professional design scenarios, we recommend enabling this feature.
     *
     * @example off
     *
     * @var string
     */
    public $gpuAcceleration;

    /**
     * @description The web client access policy.
     *
     * @example off
     *
     * @var string
     */
    public $html5Access;

    /**
     * @description The file transfer feature on the web client.
     *
     * @example off
     *
     * @var string
     */
    public $html5FileTransfer;

    /**
     * @description The network communication protocol.
     *
     * @example tcp
     *
     * @var string
     */
    public $internetCommunicationProtocol;

    /**
     * @var string
     */
    public $internetPrinter;

    /**
     * @description The read/write permissions on the on-premises drive.
     *
     * @example readwrite
     *
     * @var string
     */
    public $localDrive;

    /**
     * @description The maximum duration to retry reconnecting to cloud computers after an unexpected disconnection (non-human causes). Valid values: 30 to 7200. Unit: seconds.
     *
     * @example 120
     *
     * @var int
     */
    public $maxReconnectTime;

    /**
     * @description The memory underclocking duration per process. Valid values: 30 to 120. Unit: seconds.
     *
     * @example 30
     *
     * @var int
     */
    public $memoryDownGradeDuration;

    /**
     * @description The memory processors.
     *
     * @var string[]
     */
    public $memoryProcessors;

    /**
     * @description The memory spike protection policy.
     *
     * @example off
     *
     * @var string
     */
    public $memoryProtectedMode;

    /**
     * @description The overall memory usage. Valid values: 70 to 90. Unit: %.
     *
     * @example 70
     *
     * @var int
     */
    public $memoryRateLimit;

    /**
     * @description The overall memory sampling duration. Valid values: 30 to 60. Unit: seconds.
     *
     * @example 30
     *
     * @var int
     */
    public $memorySampleDuration;

    /**
     * @description The memory usage per process. Valid values: 30 to 60. Unit: %.
     *
     * @example 30
     *
     * @var int
     */
    public $memorySingleRateLimit;

    /**
     * @description Indicates whether the Restart button is displayed in the DesktopAssistant menu when end users connect to cloud computers from Android clients.
     *
     * >  This feature applies to only mobile clients of version 7.4.0 or later.
     *
     * @example off
     *
     * @var string
     */
    public $mobileRestart;

    /**
     * @description Indicates whether the Stop button is displayed in the DesktopAssistant menu when end users connect to cloud computers from Android clients.
     *
     * >  This feature applies to only mobile clients of version 7.4.0 or later.
     *
     * @example off
     *
     * @var string
     */
    public $mobileShutdown;

    /**
     * @description The policy name.
     *
     * @example testPolicyGroupName
     *
     * @var string
     */
    public $name;

    /**
     * @description The network redirection policy.
     *
     * >  This parameter is in private preview and only available to specific users.
     *
     * @example off
     *
     * @var string
     */
    public $netRedirect;

    /**
     * @description The network redirection policies.
     *
     * >  This parameter is in private preview and only available to specific users.
     *
     * @var netRedirectRule[]
     */
    public $netRedirectRule;

    /**
     * @description Indicates whether a disconnection is enforced upon inactivity.
     *
     * >  This parameter applies only to cloud application policies.
     *
     * @example off
     *
     * @var string
     */
    public $noOperationDisconnect;

    /**
     * @description The duration of disconnection after inactivity. Unit: seconds.
     *
     * >  This parameter applies only to cloud application policies.
     *
     * @example 120
     *
     * @var int
     */
    public $noOperationDisconnectTime;

    /**
     * @description The policy ID.
     *
     * @example pg-gx2x1dhsmthe9****
     *
     * @var string
     */
    public $policyGroupId;

    /**
     * @description The policy type.
     *
     * @example SYSTEM
     *
     * @var string
     */
    public $policyGroupType;

    /**
     * @description The status of the cloud computer policy.
     *
     * @example AVAILABLE
     *
     * @var string
     */
    public $policyStatus;

    /**
     * @description The printer redirection policy.
     *
     * @example off
     *
     * @var string
     */
    public $printerRedirection;

    /**
     * @description Indicates whether image quality enhancement is enabled for design and 3D applications.
     *
     * @example off
     *
     * @var string
     */
    public $qualityEnhancement;

    /**
     * @description Indicates whether custom screen recording is enabled.
     *
     * @example off
     *
     * @var string
     */
    public $recordContent;

    /**
     * @description The duration for which custom screen recordings are kept before they expire. Default value: 30 days.
     *
     * @example 30
     *
     * @var int
     */
    public $recordContentExpires;

    /**
     * @description The duration of screen recording after the specified event is detected. Unit: minutes. Valid values: 10 to 60.
     *
     * @example 10
     *
     * @var int
     */
    public $recordEventDuration;

    /**
     * @description The absolute paths to screen recording files.
     *
     * @var string[]
     */
    public $recordEventFilePaths;

    /**
     * @description The absolute paths to screen recording registries.
     *
     * @var string[]
     */
    public $recordEventRegisters;

    /**
     * @description Indicates whether screen recording is enabled.
     *
     * @example off
     *
     * @var string
     */
    public $recording;

    /**
     * @description Indicates whether audio files generated on cloud computers are recorded.
     *
     * @example on
     *
     * @var string
     */
    public $recordingAudio;

    /**
     * @description The length of the screen recording file. Unit: minutes. Screen recording files are split by the specified length and uploaded to OSS buckets. Once a file reaches 300 MB, the system prioritizes rolling updates for that file.
     *
     * @example 10
     *
     * @var int
     */
    public $recordingDuration;

    /**
     * @description The end time of screen recording. The value is in the HH:MM:SS format. The value is meaningful only when you set Recording to period.
     *
     * @example 08:59:00
     *
     * @var string
     */
    public $recordingEndTime;

    /**
     * @description The retention period of the screen recording file. Valid values: 1 to 180. Unit: days.
     *
     * @example 15
     *
     * @var int
     */
    public $recordingExpires;

    /**
     * @description The frame rate of screen recording. Unit: fps.
     *
     * @example 5
     *
     * @var int
     */
    public $recordingFps;

    /**
     * @description The start time of screen recording. The value is in the HH:MM:SS format. The value is meaningful only when you set Recording to period.
     *
     * @example 08:00:00
     *
     * @var string
     */
    public $recordingStartTime;

    /**
     * @description Indicates whether to notify end users when screen recording is enabled.
     *
     * @example off
     *
     * @var string
     */
    public $recordingUserNotify;

    /**
     * @description The notification sent to end users when screen recording is enabled.
     *
     * @var string
     */
    public $recordingUserNotifyMessage;

    /**
     * @description The keyboard and mouse control permissions during remote assistance.
     *
     * @example fullControl
     *
     * @var string
     */
    public $remoteCoordinate;

    /**
     * @description The height of the resolution. Unit: pixel.
     *
     * @example 1280
     *
     * @var int
     */
    public $resolutionHeight;

    /**
     * @description The resolution type.
     *
     * @example adaptive
     *
     * @var string
     */
    public $resolutionModel;

    /**
     * @description The width of the resolution. Unit: pixel.
     *
     * @example 1920
     *
     * @var int
     */
    public $resolutionWidth;

    /**
     * @description The number of resource groups that are associated with the policy.
     *
     * @example 1
     *
     * @var int
     */
    public $resourceGroupCount;

    /**
     * @var string
     */
    public $safeMenu;

    /**
     * @description The effective scope of the policy.
     *
     * @example GLOBAL
     *
     * @var string
     */
    public $scope;

    /**
     * @description The effective scopes specified by CIDR blocks.
     *
     * @var string[]
     */
    public $scopeValue;

    /**
     * @var string
     */
    public $screenDisplayMode;

    /**
     * @description Indicates whether smoothness enhancement is enabled for daily office use.
     *
     * @example off
     *
     * @var string
     */
    public $smoothEnhancement;

    /**
     * @description Indicates whether the metric status entry is displayed in the DesktopAssistant menu.
     *
     * @example on
     *
     * @var string
     */
    public $statusMonitor;

    /**
     * @description The streaming mode.
     *
     * @example smooth
     *
     * @var string
     */
    public $streamingMode;

    /**
     * @description The target frame rate. Valid values: 10 to 60. Unit: fps.
     *
     * @example 30
     *
     * @var int
     */
    public $targetFps;

    /**
     * @description Indicates whether the application taskbar is displayed.
     *
     * >  This parameter applies only to cloud application policies.
     *
     * @example off
     *
     * @var string
     */
    public $taskbar;

    /**
     * @description The USB redirection policy.
     *
     * @example off
     *
     * @var string
     */
    public $usbRedirect;

    /**
     * @description The USB redirection rules.
     *
     * @var usbSupplyRedirectRule[]
     */
    public $usbSupplyRedirectRule;

    /**
     * @var string
     */
    public $useTime;

    /**
     * @description The average bitrate for video encoding. Unit: Kbit/s. Valid values: 1000 to 50000.
     *
     * @example 1000
     *
     * @var int
     */
    public $videoEncAvgKbps;

    /**
     * @description The maximum QP for video files. Higher QP values result in lower video quality. Valid values: 0 to 51.
     *
     * @example 20
     *
     * @var int
     */
    public $videoEncMaxQP;

    /**
     * @description The minimum quantizer parameter (QP) for video files. A lower QP means better video quality. Valid values: 0 to 51.
     *
     * @example 20
     *
     * @var int
     */
    public $videoEncMinQP;

    /**
     * @description The peak bitrate for video encoding. Unit: Kbit/s. Valid values: 1000 to 50000.
     *
     * @example 2000
     *
     * @var int
     */
    public $videoEncPeakKbps;

    /**
     * @description The video encoding policy.
     *
     * @example qualityFirst
     *
     * @var string
     */
    public $videoEncPolicy;

    /**
     * @description Indicates whether multimedia redirection is enabled.
     *
     * @example off
     *
     * @var string
     */
    public $videoRedirect;

    /**
     * @description The image quality policy.
     *
     * @example medium
     *
     * @var string
     */
    public $visualQuality;

    /**
     * @description The watermark policy.
     *
     * @example on
     *
     * @var string
     */
    public $watermark;

    /**
     * @description Indicates whether anti-screen capture is enabled for invisible watermarks.
     *
     * @example off
     *
     * @var string
     */
    public $watermarkAntiCam;

    /**
     * @description The font color of the watermark. Valid values: 0 to 16777215.
     *
     * @example 0
     *
     * @var int
     */
    public $watermarkColor;

    /**
     * @description If you set `WatermarkType` to `custom`, you must also specify `WatermarkCustomText`.
     *
     * @example custom-watermark
     *
     * @var string
     */
    public $watermarkCustomText;

    /**
     * @description The watermark rotation. Valid values: -10 to -30.
     *
     * @example -10
     *
     * @var float
     */
    public $watermarkDegree;

    /**
     * @description The font size of the watermark. Valid values: 10 to 20.
     *
     * @example 10
     *
     * @var int
     */
    public $watermarkFontSize;

    /**
     * @description The font style of the watermark.
     *
     * @example plain
     *
     * @var string
     */
    public $watermarkFontStyle;

    /**
     * @description The enhancement level for invisible watermarks.
     *
     * @example medium
     *
     * @var string
     */
    public $watermarkPower;

    /**
     * @description The number of watermark rows.
     *
     * @example 3
     *
     * @var int
     */
    public $watermarkRowAmount;

    /**
     * @description Indicates whether security priority is enabled for invisible watermarks.
     *
     * @example on
     *
     * @var string
     */
    public $watermarkSecurity;

    /**
     * @description The watermark transparency. A higher value means the watermark is less transparent. Valid values: 10 to 100.
     *
     * @example 10
     *
     * @var int
     */
    public $watermarkTransparencyValue;

    /**
     * @description The watermark type.
     *
     * @example EndUserId
     *
     * @var string
     */
    public $watermarkType;

    /**
     * @description Indicates whether the Xiaoying AI Assistant entry is displayed in the DesktopAssistant menu.
     *
     * @example on
     *
     * @var string
     */
    public $wyAssistant;
    protected $_name = [
        'adminAccess' => 'AdminAccess',
        'appContentProtection' => 'AppContentProtection',
        'authorizeAccessPolicyRules' => 'AuthorizeAccessPolicyRules',
        'authorizeSecurityPolicyRules' => 'AuthorizeSecurityPolicyRules',
        'cameraRedirect' => 'CameraRedirect',
        'clientControlMenu' => 'ClientControlMenu',
        'clientTypes' => 'ClientTypes',
        'clipboard' => 'Clipboard',
        'colorEnhancement' => 'ColorEnhancement',
        'cpdDriveClipboard' => 'CpdDriveClipboard',
        'cpuDownGradeDuration' => 'CpuDownGradeDuration',
        'cpuProcessors' => 'CpuProcessors',
        'cpuProtectedMode' => 'CpuProtectedMode',
        'cpuRateLimit' => 'CpuRateLimit',
        'cpuSampleDuration' => 'CpuSampleDuration',
        'cpuSingleRateLimit' => 'CpuSingleRateLimit',
        'desktopCount' => 'DesktopCount',
        'desktopGroupCount' => 'DesktopGroupCount',
        'deviceRedirects' => 'DeviceRedirects',
        'deviceRules' => 'DeviceRules',
        'disconnectKeepSession' => 'DisconnectKeepSession',
        'disconnectKeepSessionTime' => 'DisconnectKeepSessionTime',
        'displayMode' => 'DisplayMode',
        'domainRegisterValue' => 'DomainRegisterValue',
        'domainResolveRule' => 'DomainResolveRule',
        'domainResolveRuleType' => 'DomainResolveRuleType',
        'endUserApplyAdminCoordinate' => 'EndUserApplyAdminCoordinate',
        'endUserGroupCoordinate' => 'EndUserGroupCoordinate',
        'fileTransferAddress' => 'FileTransferAddress',
        'fileTransferSpeed' => 'FileTransferSpeed',
        'fileTransferSpeedLocation' => 'FileTransferSpeedLocation',
        'gpuAcceleration' => 'GpuAcceleration',
        'html5Access' => 'Html5Access',
        'html5FileTransfer' => 'Html5FileTransfer',
        'internetCommunicationProtocol' => 'InternetCommunicationProtocol',
        'internetPrinter' => 'InternetPrinter',
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
        'policyGroupType' => 'PolicyGroupType',
        'policyStatus' => 'PolicyStatus',
        'printerRedirection' => 'PrinterRedirection',
        'qualityEnhancement' => 'QualityEnhancement',
        'recordContent' => 'RecordContent',
        'recordContentExpires' => 'RecordContentExpires',
        'recordEventDuration' => 'RecordEventDuration',
        'recordEventFilePaths' => 'RecordEventFilePaths',
        'recordEventRegisters' => 'RecordEventRegisters',
        'recording' => 'Recording',
        'recordingAudio' => 'RecordingAudio',
        'recordingDuration' => 'RecordingDuration',
        'recordingEndTime' => 'RecordingEndTime',
        'recordingExpires' => 'RecordingExpires',
        'recordingFps' => 'RecordingFps',
        'recordingStartTime' => 'RecordingStartTime',
        'recordingUserNotify' => 'RecordingUserNotify',
        'recordingUserNotifyMessage' => 'RecordingUserNotifyMessage',
        'remoteCoordinate' => 'RemoteCoordinate',
        'resolutionHeight' => 'ResolutionHeight',
        'resolutionModel' => 'ResolutionModel',
        'resolutionWidth' => 'ResolutionWidth',
        'resourceGroupCount' => 'ResourceGroupCount',
        'safeMenu' => 'SafeMenu',
        'scope' => 'Scope',
        'scopeValue' => 'ScopeValue',
        'screenDisplayMode' => 'ScreenDisplayMode',
        'smoothEnhancement' => 'SmoothEnhancement',
        'statusMonitor' => 'StatusMonitor',
        'streamingMode' => 'StreamingMode',
        'targetFps' => 'TargetFps',
        'taskbar' => 'Taskbar',
        'usbRedirect' => 'UsbRedirect',
        'usbSupplyRedirectRule' => 'UsbSupplyRedirectRule',
        'useTime' => 'UseTime',
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
        'watermarkCustomText' => 'WatermarkCustomText',
        'watermarkDegree' => 'WatermarkDegree',
        'watermarkFontSize' => 'WatermarkFontSize',
        'watermarkFontStyle' => 'WatermarkFontStyle',
        'watermarkPower' => 'WatermarkPower',
        'watermarkRowAmount' => 'WatermarkRowAmount',
        'watermarkSecurity' => 'WatermarkSecurity',
        'watermarkTransparencyValue' => 'WatermarkTransparencyValue',
        'watermarkType' => 'WatermarkType',
        'wyAssistant' => 'WyAssistant',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->adminAccess) {
            $res['AdminAccess'] = $this->adminAccess;
        }
        if (null !== $this->appContentProtection) {
            $res['AppContentProtection'] = $this->appContentProtection;
        }
        if (null !== $this->authorizeAccessPolicyRules) {
            $res['AuthorizeAccessPolicyRules'] = [];
            if (null !== $this->authorizeAccessPolicyRules && \is_array($this->authorizeAccessPolicyRules)) {
                $n = 0;
                foreach ($this->authorizeAccessPolicyRules as $item) {
                    $res['AuthorizeAccessPolicyRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->authorizeSecurityPolicyRules) {
            $res['AuthorizeSecurityPolicyRules'] = [];
            if (null !== $this->authorizeSecurityPolicyRules && \is_array($this->authorizeSecurityPolicyRules)) {
                $n = 0;
                foreach ($this->authorizeSecurityPolicyRules as $item) {
                    $res['AuthorizeSecurityPolicyRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->cameraRedirect) {
            $res['CameraRedirect'] = $this->cameraRedirect;
        }
        if (null !== $this->clientControlMenu) {
            $res['ClientControlMenu'] = $this->clientControlMenu;
        }
        if (null !== $this->clientTypes) {
            $res['ClientTypes'] = [];
            if (null !== $this->clientTypes && \is_array($this->clientTypes)) {
                $n = 0;
                foreach ($this->clientTypes as $item) {
                    $res['ClientTypes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->clipboard) {
            $res['Clipboard'] = $this->clipboard;
        }
        if (null !== $this->colorEnhancement) {
            $res['ColorEnhancement'] = $this->colorEnhancement;
        }
        if (null !== $this->cpdDriveClipboard) {
            $res['CpdDriveClipboard'] = $this->cpdDriveClipboard;
        }
        if (null !== $this->cpuDownGradeDuration) {
            $res['CpuDownGradeDuration'] = $this->cpuDownGradeDuration;
        }
        if (null !== $this->cpuProcessors) {
            $res['CpuProcessors'] = $this->cpuProcessors;
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
        if (null !== $this->desktopCount) {
            $res['DesktopCount'] = $this->desktopCount;
        }
        if (null !== $this->desktopGroupCount) {
            $res['DesktopGroupCount'] = $this->desktopGroupCount;
        }
        if (null !== $this->deviceRedirects) {
            $res['DeviceRedirects'] = [];
            if (null !== $this->deviceRedirects && \is_array($this->deviceRedirects)) {
                $n = 0;
                foreach ($this->deviceRedirects as $item) {
                    $res['DeviceRedirects'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->deviceRules) {
            $res['DeviceRules'] = [];
            if (null !== $this->deviceRules && \is_array($this->deviceRules)) {
                $n = 0;
                foreach ($this->deviceRules as $item) {
                    $res['DeviceRules'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (null !== $this->domainRegisterValue) {
            $res['DomainRegisterValue'] = $this->domainRegisterValue;
        }
        if (null !== $this->domainResolveRule) {
            $res['DomainResolveRule'] = [];
            if (null !== $this->domainResolveRule && \is_array($this->domainResolveRule)) {
                $n = 0;
                foreach ($this->domainResolveRule as $item) {
                    $res['DomainResolveRule'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->domainResolveRuleType) {
            $res['DomainResolveRuleType'] = $this->domainResolveRuleType;
        }
        if (null !== $this->endUserApplyAdminCoordinate) {
            $res['EndUserApplyAdminCoordinate'] = $this->endUserApplyAdminCoordinate;
        }
        if (null !== $this->endUserGroupCoordinate) {
            $res['EndUserGroupCoordinate'] = $this->endUserGroupCoordinate;
        }
        if (null !== $this->fileTransferAddress) {
            $res['FileTransferAddress'] = $this->fileTransferAddress;
        }
        if (null !== $this->fileTransferSpeed) {
            $res['FileTransferSpeed'] = $this->fileTransferSpeed;
        }
        if (null !== $this->fileTransferSpeedLocation) {
            $res['FileTransferSpeedLocation'] = $this->fileTransferSpeedLocation;
        }
        if (null !== $this->gpuAcceleration) {
            $res['GpuAcceleration'] = $this->gpuAcceleration;
        }
        if (null !== $this->html5Access) {
            $res['Html5Access'] = $this->html5Access;
        }
        if (null !== $this->html5FileTransfer) {
            $res['Html5FileTransfer'] = $this->html5FileTransfer;
        }
        if (null !== $this->internetCommunicationProtocol) {
            $res['InternetCommunicationProtocol'] = $this->internetCommunicationProtocol;
        }
        if (null !== $this->internetPrinter) {
            $res['InternetPrinter'] = $this->internetPrinter;
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
            $res['MemoryProcessors'] = $this->memoryProcessors;
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
            $res['NetRedirectRule'] = [];
            if (null !== $this->netRedirectRule && \is_array($this->netRedirectRule)) {
                $n = 0;
                foreach ($this->netRedirectRule as $item) {
                    $res['NetRedirectRule'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (null !== $this->policyGroupType) {
            $res['PolicyGroupType'] = $this->policyGroupType;
        }
        if (null !== $this->policyStatus) {
            $res['PolicyStatus'] = $this->policyStatus;
        }
        if (null !== $this->printerRedirection) {
            $res['PrinterRedirection'] = $this->printerRedirection;
        }
        if (null !== $this->qualityEnhancement) {
            $res['QualityEnhancement'] = $this->qualityEnhancement;
        }
        if (null !== $this->recordContent) {
            $res['RecordContent'] = $this->recordContent;
        }
        if (null !== $this->recordContentExpires) {
            $res['RecordContentExpires'] = $this->recordContentExpires;
        }
        if (null !== $this->recordEventDuration) {
            $res['RecordEventDuration'] = $this->recordEventDuration;
        }
        if (null !== $this->recordEventFilePaths) {
            $res['RecordEventFilePaths'] = $this->recordEventFilePaths;
        }
        if (null !== $this->recordEventRegisters) {
            $res['RecordEventRegisters'] = $this->recordEventRegisters;
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
        if (null !== $this->remoteCoordinate) {
            $res['RemoteCoordinate'] = $this->remoteCoordinate;
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
        if (null !== $this->resourceGroupCount) {
            $res['ResourceGroupCount'] = $this->resourceGroupCount;
        }
        if (null !== $this->safeMenu) {
            $res['SafeMenu'] = $this->safeMenu;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }
        if (null !== $this->scopeValue) {
            $res['ScopeValue'] = $this->scopeValue;
        }
        if (null !== $this->screenDisplayMode) {
            $res['ScreenDisplayMode'] = $this->screenDisplayMode;
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
            $res['UsbSupplyRedirectRule'] = [];
            if (null !== $this->usbSupplyRedirectRule && \is_array($this->usbSupplyRedirectRule)) {
                $n = 0;
                foreach ($this->usbSupplyRedirectRule as $item) {
                    $res['UsbSupplyRedirectRule'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->useTime) {
            $res['UseTime'] = $this->useTime;
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
        if (null !== $this->wyAssistant) {
            $res['WyAssistant'] = $this->wyAssistant;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return describePolicyGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdminAccess'])) {
            $model->adminAccess = $map['AdminAccess'];
        }
        if (isset($map['AppContentProtection'])) {
            $model->appContentProtection = $map['AppContentProtection'];
        }
        if (isset($map['AuthorizeAccessPolicyRules'])) {
            if (!empty($map['AuthorizeAccessPolicyRules'])) {
                $model->authorizeAccessPolicyRules = [];
                $n = 0;
                foreach ($map['AuthorizeAccessPolicyRules'] as $item) {
                    $model->authorizeAccessPolicyRules[$n++] = null !== $item ? authorizeAccessPolicyRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AuthorizeSecurityPolicyRules'])) {
            if (!empty($map['AuthorizeSecurityPolicyRules'])) {
                $model->authorizeSecurityPolicyRules = [];
                $n = 0;
                foreach ($map['AuthorizeSecurityPolicyRules'] as $item) {
                    $model->authorizeSecurityPolicyRules[$n++] = null !== $item ? authorizeSecurityPolicyRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CameraRedirect'])) {
            $model->cameraRedirect = $map['CameraRedirect'];
        }
        if (isset($map['ClientControlMenu'])) {
            $model->clientControlMenu = $map['ClientControlMenu'];
        }
        if (isset($map['ClientTypes'])) {
            if (!empty($map['ClientTypes'])) {
                $model->clientTypes = [];
                $n = 0;
                foreach ($map['ClientTypes'] as $item) {
                    $model->clientTypes[$n++] = null !== $item ? clientTypes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Clipboard'])) {
            $model->clipboard = $map['Clipboard'];
        }
        if (isset($map['ColorEnhancement'])) {
            $model->colorEnhancement = $map['ColorEnhancement'];
        }
        if (isset($map['CpdDriveClipboard'])) {
            $model->cpdDriveClipboard = $map['CpdDriveClipboard'];
        }
        if (isset($map['CpuDownGradeDuration'])) {
            $model->cpuDownGradeDuration = $map['CpuDownGradeDuration'];
        }
        if (isset($map['CpuProcessors'])) {
            if (!empty($map['CpuProcessors'])) {
                $model->cpuProcessors = $map['CpuProcessors'];
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
        if (isset($map['DesktopCount'])) {
            $model->desktopCount = $map['DesktopCount'];
        }
        if (isset($map['DesktopGroupCount'])) {
            $model->desktopGroupCount = $map['DesktopGroupCount'];
        }
        if (isset($map['DeviceRedirects'])) {
            if (!empty($map['DeviceRedirects'])) {
                $model->deviceRedirects = [];
                $n = 0;
                foreach ($map['DeviceRedirects'] as $item) {
                    $model->deviceRedirects[$n++] = null !== $item ? deviceRedirects::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DeviceRules'])) {
            if (!empty($map['DeviceRules'])) {
                $model->deviceRules = [];
                $n = 0;
                foreach ($map['DeviceRules'] as $item) {
                    $model->deviceRules[$n++] = null !== $item ? deviceRules::fromMap($item) : $item;
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
        if (isset($map['DomainRegisterValue'])) {
            $model->domainRegisterValue = $map['DomainRegisterValue'];
        }
        if (isset($map['DomainResolveRule'])) {
            if (!empty($map['DomainResolveRule'])) {
                $model->domainResolveRule = [];
                $n = 0;
                foreach ($map['DomainResolveRule'] as $item) {
                    $model->domainResolveRule[$n++] = null !== $item ? domainResolveRule::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DomainResolveRuleType'])) {
            $model->domainResolveRuleType = $map['DomainResolveRuleType'];
        }
        if (isset($map['EndUserApplyAdminCoordinate'])) {
            $model->endUserApplyAdminCoordinate = $map['EndUserApplyAdminCoordinate'];
        }
        if (isset($map['EndUserGroupCoordinate'])) {
            $model->endUserGroupCoordinate = $map['EndUserGroupCoordinate'];
        }
        if (isset($map['FileTransferAddress'])) {
            $model->fileTransferAddress = $map['FileTransferAddress'];
        }
        if (isset($map['FileTransferSpeed'])) {
            $model->fileTransferSpeed = $map['FileTransferSpeed'];
        }
        if (isset($map['FileTransferSpeedLocation'])) {
            $model->fileTransferSpeedLocation = $map['FileTransferSpeedLocation'];
        }
        if (isset($map['GpuAcceleration'])) {
            $model->gpuAcceleration = $map['GpuAcceleration'];
        }
        if (isset($map['Html5Access'])) {
            $model->html5Access = $map['Html5Access'];
        }
        if (isset($map['Html5FileTransfer'])) {
            $model->html5FileTransfer = $map['Html5FileTransfer'];
        }
        if (isset($map['InternetCommunicationProtocol'])) {
            $model->internetCommunicationProtocol = $map['InternetCommunicationProtocol'];
        }
        if (isset($map['InternetPrinter'])) {
            $model->internetPrinter = $map['InternetPrinter'];
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
                $model->memoryProcessors = $map['MemoryProcessors'];
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
                $n = 0;
                foreach ($map['NetRedirectRule'] as $item) {
                    $model->netRedirectRule[$n++] = null !== $item ? netRedirectRule::fromMap($item) : $item;
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
        if (isset($map['PolicyGroupType'])) {
            $model->policyGroupType = $map['PolicyGroupType'];
        }
        if (isset($map['PolicyStatus'])) {
            $model->policyStatus = $map['PolicyStatus'];
        }
        if (isset($map['PrinterRedirection'])) {
            $model->printerRedirection = $map['PrinterRedirection'];
        }
        if (isset($map['QualityEnhancement'])) {
            $model->qualityEnhancement = $map['QualityEnhancement'];
        }
        if (isset($map['RecordContent'])) {
            $model->recordContent = $map['RecordContent'];
        }
        if (isset($map['RecordContentExpires'])) {
            $model->recordContentExpires = $map['RecordContentExpires'];
        }
        if (isset($map['RecordEventDuration'])) {
            $model->recordEventDuration = $map['RecordEventDuration'];
        }
        if (isset($map['RecordEventFilePaths'])) {
            if (!empty($map['RecordEventFilePaths'])) {
                $model->recordEventFilePaths = $map['RecordEventFilePaths'];
            }
        }
        if (isset($map['RecordEventRegisters'])) {
            if (!empty($map['RecordEventRegisters'])) {
                $model->recordEventRegisters = $map['RecordEventRegisters'];
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
        if (isset($map['RemoteCoordinate'])) {
            $model->remoteCoordinate = $map['RemoteCoordinate'];
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
        if (isset($map['ResourceGroupCount'])) {
            $model->resourceGroupCount = $map['ResourceGroupCount'];
        }
        if (isset($map['SafeMenu'])) {
            $model->safeMenu = $map['SafeMenu'];
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }
        if (isset($map['ScopeValue'])) {
            if (!empty($map['ScopeValue'])) {
                $model->scopeValue = $map['ScopeValue'];
            }
        }
        if (isset($map['ScreenDisplayMode'])) {
            $model->screenDisplayMode = $map['ScreenDisplayMode'];
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
                $n = 0;
                foreach ($map['UsbSupplyRedirectRule'] as $item) {
                    $model->usbSupplyRedirectRule[$n++] = null !== $item ? usbSupplyRedirectRule::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UseTime'])) {
            $model->useTime = $map['UseTime'];
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
        if (isset($map['WyAssistant'])) {
            $model->wyAssistant = $map['WyAssistant'];
        }

        return $model;
    }
}

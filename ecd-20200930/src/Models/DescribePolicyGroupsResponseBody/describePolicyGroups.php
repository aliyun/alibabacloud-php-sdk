<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePolicyGroupsResponseBody;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePolicyGroupsResponseBody\describePolicyGroups\authorizeAccessPolicyRules;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePolicyGroupsResponseBody\describePolicyGroups\authorizeSecurityPolicyRules;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePolicyGroupsResponseBody\describePolicyGroups\clientTypes;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePolicyGroupsResponseBody\describePolicyGroups\deviceRedirects;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePolicyGroupsResponseBody\describePolicyGroups\deviceRules;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePolicyGroupsResponseBody\describePolicyGroups\domainResolveRule;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePolicyGroupsResponseBody\describePolicyGroups\netRedirectRule;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePolicyGroupsResponseBody\describePolicyGroups\usbSupplyRedirectRule;
use AlibabaCloud\Tea\Model;

class describePolicyGroups extends Model
{
    /**
     * @description Indicates whether end users are granted the administrator permissions.
     *
     * >  This parameter is in invitational preview for specific users and not available to the public.
     *
     * @example deny
     *
     * @var string
     */
    public $adminAccess;

    /**
     * @description Indicates whether the anti-screenshot feature is enabled.
     *
     * Valid values:
     *
     *   off (default)
     *   on
     *
     * @example off
     *
     * @var string
     */
    public $appContentProtection;

    /**
     * @description The client IP address whitelist. End users can access cloud computers only from the IP addresses in the whitelist.
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
     * @description Indicates whether the webcam redirection feature is enabled.
     *
     * Valid values:
     *
     *   off
     *   on (default)
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
     * @description The logon method control rules to limit the type of the Alibaba Cloud Workspace client used by end users to connect to cloud computers.
     *
     * @var clientTypes[]
     */
    public $clientTypes;

    /**
     * @description The permissions on the clipboard.
     *
     * Valid values:
     *
     *   read: specifies one-way transfer. You can copy files only from local devices to cloud computers.
     *   readwrite: specifies two-way transfer. You can copy files between local devices and cloud computers.
     *   write: specifies one-way transfer. You can only copy files from cloud computers to local devices.
     *   off: disables both one-way and two-way transfer. Files cannot be copied between local devices and cloud computers.
     *
     * @example readwrite
     *
     * @var string
     */
    public $clipboard;

    /**
     * @description Indicates whether the Color Enhancement switch is turned on in design and 3D scenarios.
     *
     * Valid values:
     *
     *   off
     *   on
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
     * @description The process whitelist that is not restricted by the CPU usage limit.
     *
     * @var string[]
     */
    public $cpuProcessors;

    /**
     * @description Indicates whether the CPU spike protection switch is turned on.
     *
     * Valid values:
     *
     *   off
     *   on
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
     * @description The number of cloud computers bound with this policy.
     *
     * @example 1
     *
     * @var int
     */
    public $desktopCount;

    /**
     * @description The number of shared cloud computers bound with this policy.
     *
     * @example 1
     *
     * @var int
     */
    public $desktopGroupCount;

    /**
     * @var string
     */
    public $deviceConnectHint;

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
     * @description The display mode.
     *
     * Valid values:
     *
     *   clientCustom: suitable for user-defined scenarios.
     *   adminOffice: suitable for daily office scenarios.
     *   adminDesign: suitable for 3D application scenarios.
     *   adminCustom: administrator-customized scenarios
     *
     * @example adminCustom
     *
     * @var string
     */
    public $displayMode;

    /**
     * @description Specifies whether to enable the access control for domain names. Domain names support wildcards (\\*). Separate multiple domain names with commas (,).
     *
     * Valid values:
     *
     *   off
     *   on
     *
     * @example off
     *
     * @var string
     */
    public $domainList;

    /**
     * @description The domain name resolution rules.
     *
     * @var domainResolveRule[]
     */
    public $domainResolveRule;

    /**
     * @description Indicates whether the switch for domain name resolution is turned on.
     *
     * Valid values:
     *
     *   off
     *   on
     *
     * @example on
     *
     * @var string
     */
    public $domainResolveRuleType;

    /**
     * @description The number of cloud computers that are associated with the policy. The number of cloud computers that are associated only with custom policies is returned.
     *
     * @example 1
     *
     * @var int
     */
    public $edsCount;

    /**
     * @description Indicates whether the Contact Administrator for Help switch is turned on.
     *
     * Valid values:
     *
     *   off
     *   on
     *
     * @example on
     *
     * @var string
     */
    public $endUserApplyAdminCoordinate;

    /**
     * @description Indicates whether the User Stream Collaboration switch is turned on.
     *
     * Valid values:
     *
     *   off
     *   on
     *
     * @example on
     *
     * @var string
     */
    public $endUserGroupCoordinate;

    /**
     * @var string
     */
    public $fileMigrate;

    /**
     * @description Transfers files.
     *
     * @example null
     *
     * @var string
     */
    public $fileTransfer;

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
     * @description Indicates whether the Image Quality Control feature is enabled. If you have high requirements on the performance and user experience in scenarios such as professional design, we recommend that you enable this feature.
     *
     * Valid values:
     *
     *   off
     *   on
     *
     * @example off
     *
     * @var string
     */
    public $gpuAcceleration;

    /**
     * @description Specifies whether to allow web client access.
     *
     * Valid values:
     *
     *   off (default)
     *   on
     *
     * @example off
     *
     * @var string
     */
    public $html5Access;

    /**
     * @description The file transfer feature on the web client.
     *
     * Valid values:
     *
     *   all: Files can be uploaded and downloaded between local computers and the web client.
     *   download: Files on the web client can be downloaded to local computers.
     *   upload: Files on local computers can be uploaded to the web client.
     *   off (default): Files cannot be transferred between the web client and local computers.
     *
     * @example off
     *
     * @var string
     */
    public $html5FileTransfer;

    /**
     * @description The protocol for network communication.
     *
     * Valid values:
     *
     *   TCP (default): TCP.
     *   BOTH: TCP and UDP.
     *
     * @example BOTH
     *
     * @var string
     */
    public $internetCommunicationProtocol;

    /**
     * @var string
     */
    public $internetPrinter;

    /**
     * @description The permissions on local disk mapping.
     *
     * Valid values:
     *
     *   read: read-only. Local disk mapping is available on cloud computers. However, you can only read (copy) local files but cannot modify the files.
     *   readwrite: read and write. Local disk mapping is available on cloud computers. You can read (copy) and write (modify) local files.
     *   off (default): none.
     *
     * @example readwrite
     *
     * @var string
     */
    public $localDrive;

    /**
     * @description The maximum retry period for reconnecting to cloud computers when the cloud computers are disconnected due to none-human reasons. Valid values: 30 to 7200. Unit: seconds.
     *
     * @example 120
     *
     * @var int
     */
    public $maxReconnectTime;

    /**
     * @description The memory underclocking duration for a single process. Valid values: 30 to 120. Unit: seconds.
     *
     * @example 30
     *
     * @var int
     */
    public $memoryDownGradeDuration;

    /**
     * @description The whitelist of processes that are not restricted by the memory usage limit.
     *
     * @var string[]
     */
    public $memoryProcessors;

    /**
     * @description Indicates whether the memory spike protection switch is turned on.
     *
     * Valid values:
     *
     *   off
     *   on
     *
     * @example on
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
     * @description The memory usage of a single process. Valid values: 30 to 60. Unit: %.
     *
     * @example 30
     *
     * @var int
     */
    public $memorySingleRateLimit;

    /**
     * @description Specifies whether to display the restart button in the DesktopAssistant when the cloud computer is accessed from the Alibaba Cloud Workspace mobile clients (including the Android client and the iOS client).
     *
     * > Mobile clients of V7.4 and higher versions required.
     *
     * Valid values:
     *
     * - off: not provided.
     * - on: provided.
     *
     * @example off
     *
     * @var string
     */
    public $mobileRestart;

    /**
     * @description Specifies whether to display the shut down button in the DesktopAssistant when the cloud computer is accessed from the Alibaba Cloud Workspace mobile clients (including the Android client and the iOS client).
     *
     * > Mobile clients of V7.4 and higher versions required.
     *
     * Valid values:
     *
     * - off: not provided.
     * - on: provided.
     *
     * @example off
     *
     * @var string
     */
    public $mobileShutdown;

    /**
     * @description The name of the cloud computer policy.
     *
     * @example testPolicyGroupName
     *
     * @var string
     */
    public $name;

    /**
     * @description Indicates whether the network redirection feature is enabled.
     *
     * >  This parameter is in invitational preview for specific users and not available to the public.
     *
     * Valid values:
     *
     *   off (default)
     *   on
     *
     * @example off
     *
     * @var string
     */
    public $netRedirect;

    /**
     * @description The network redirection rule.
     *
     * >  This parameter is in invitational preview for specific users and not available to the public.
     *
     * @var netRedirectRule[]
     */
    public $netRedirectRule;

    /**
     * @description The ID of the cloud computer policy.
     *
     * @example pg-gx2x1dhsmthe9****
     *
     * @var string
     */
    public $policyGroupId;

    /**
     * @description The type of the cloud computer policy.
     *
     * Valid values:
     *
     *   SYSTEM
     *   CUSTOM
     *
     * @example SYSTEM
     *
     * @var string
     */
    public $policyGroupType;

    /**
     * @description The status of the cloud computer policy.
     *
     * Valid values:
     *
     *   AVAILABLE
     *   CREATING
     *
     * @example AVAILABLE
     *
     * @var string
     */
    public $policyStatus;

    /**
     * @description The cloud computer preemption feature.
     *
     * >  To ensure user experience and data security, when a cloud computer is used by an end user, other end users cannot connect to the cloud computer. By default, this parameter is set to `off`, which cannot be modified.
     *
     * Valid values:
     *
     *   off: Preemption is not allowed.
     *
     * @example off
     *
     * @var string
     */
    public $preemptLogin;

    /**
     * @description The usernames that can preempt to connect to the cloud computer.
     *
     * @var string[]
     */
    public $preemptLoginUsers;

    /**
     * @description Indicates whether the printer redirection feature is enabled.
     *
     * Valid values:
     *
     *   off
     *   on
     *
     * @example on
     *
     * @var string
     */
    public $printerRedirection;

    /**
     * @description Indicates whether the Image Quality Enhancement switch is turned on for design and 3D scenarios.
     *
     * Valid values:
     *
     *   off
     *   on
     *
     * @example off
     *
     * @var string
     */
    public $qualityEnhancement;

    /**
     * @description Indicates whether the custom screen recording feature is enabled.
     *
     * Valid values:
     *
     *   off (default)
     *   on
     *
     * @example off
     *
     * @var string
     */
    public $recordContent;

    /**
     * @description The period when the custom screen recording can be retained before expiration. Default value: 30 days.
     *
     * @example 30
     *
     * @var int
     */
    public $recordContentExpires;

    /**
     * @description The recording duration since a target event is detected by the screen recording audit policy. Unit: Minute. Valid values: 10-60.
     *
     * @example 10
     *
     * @var int
     */
    public $recordEventDuration;

    /**
     * @description The array of absolute paths of the monitored files in the screen recording audit policy.
     *
     * @var string[]
     */
    public $recordEventFilePaths;

    /**
     * @description The array of absolute paths of the monitored registry entries in the screen recording audit policy.
     *
     * @var string[]
     */
    public $recordEventRegisters;

    /**
     * @description Indicates whether the screen recording feature is enabled.
     *
     * Valid values:
     *
     *   byaction_cmd_ft: enables the operation-triggered screen recording upon command execution and file transfer.
     *   ALLTIME: enables the whole-process screen recording. That is, the recording starts when cloud computers are connected and ends when the cloud computers are disconnected.
     *   PERIOD: enables the interval-based screen recording. You must specify an interval between the start time and end time of this type of recording.
     *   byaction_commands: enables the operation-triggered screen recording upon command execution.
     *   OFF: disables the screen recording feature.
     *   byaction_file_transfer: enables the operation-triggered screen recording upon file transfer.
     *
     * @example OFF
     *
     * @var string
     */
    public $recording;

    /**
     * @description Indicates whether audio files generated from cloud computers are recorded.
     *
     * Valid values:
     *
     *   off (default): records only video files.
     *   on: records video and audio files.
     *
     * @example on
     *
     * @var string
     */
    public $recordingAudio;

    /**
     * @description The file length of the screen recording. Unit: minutes. Screen recording files are split based on the specified file length and uploaded to Object Storage Service (OSS) buckets. When a screen recording file reaches 300 MB in size, the system preferentially performs rolling update for the file.
     *
     * Valid values:
     *
     *   10
     *   20
     *   30
     *   60
     *
     * @example 10
     *
     * @var int
     */
    public $recordingDuration;

    /**
     * @description The time when the screen recording ended. The value is in the HH:MM:SS format. The value takes effect only when Recording is set to PERIOD.
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
     * Valid values:
     *
     *   2
     *   5
     *   10
     *   15
     *
     * @example 5
     *
     * @var int
     */
    public $recordingFps;

    /**
     * @description The time when the screen recording was started. The value is in the HH:MM:SS format. The value takes effect only when Recording is set to PERIOD.
     *
     * @example 08:00:00
     *
     * @var string
     */
    public $recordingStartTime;

    /**
     * @description Indicates whether the screen recording notification feature is enabled after end users log on to the Alibaba Cloud Workspace client.
     *
     * Valid values:
     *
     *   off
     *   on
     *
     * @example off
     *
     * @var string
     */
    public $recordingUserNotify;

    /**
     * @description The notification content of screen recording. By default, this parameter is left empty.
     *
     * @example Your desktop is being recorded
     *
     * @var string
     */
    public $recordingUserNotifyMessage;

    /**
     * @description The permissions on keyboard and mouse control during remote assistance.
     *
     * Valid values:
     *
     *   optionalControl: By default, you are not granted the permissions. You can apply for the permissions.
     *   fullControl: You are granted the full permissions.
     *   disableControl: You are not granted the permissions.
     *
     * @example fullControl
     *
     * @var string
     */
    public $remoteCoordinate;

    /**
     * @description Resets the cloud computer.
     *
     * @example null
     *
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
     * @description The number of resource groups bound with this policy.
     *
     * @example 1
     *
     * @var int
     */
    public $resourceGroupCount;

    /**
     * @description The region of the cloud computer policy.
     *
     * > The value of a region-less policy is `center`.
     *
     * @example center
     *
     * @var string
     */
    public $resourceRegionId;

    /**
     * @var string
     */
    public $safeMenu;

    /**
     * @description The effective scope of the policy.
     *
     * Valid values:
     *
     *   IP: The policy takes effect based on the IP address.
     *   GLOBAL: The policy takes effect globally.
     *
     * @example GLOBAL
     *
     * @var string
     */
    public $scope;

    /**
     * @description This parameter is required when the `Scope` parameter is set to `IP`.````
     *
     * @var string[]
     */
    public $scopeValue;

    /**
     * @var string
     */
    public $screenDisplayMode;

    /**
     * @description Indicates whether the Smooth Enhancement switch is turned on.
     *
     * Valid values:
     *
     *   off
     *   on
     *
     * @example off
     *
     * @var string
     */
    public $smoothEnhancement;

    /**
     * @description Specifies whether to provide the Metrics function in the DesktopAssistant. Valid values:
     *
     * - off: not provided.
     * - on: provided.
     *
     * @example on
     *
     * @var string
     */
    public $statusMonitor;

    /**
     * @description The streaming mode.
     *
     * Valid values:
     *
     *   intelligent: suitable for daily office scenarios (Intelligent Mode).
     *   smooth: suitable for design and 3D application scenarios (Smooth Mode).
     *
     * @example smooth
     *
     * @var string
     */
    public $streamingMode;

    /**
     * @description The destination frame rate. Valid values: 10 to 60. Unit: fps.
     *
     * @example 30
     *
     * @var int
     */
    public $targetFps;

    /**
     * @description Indicates whether the USB redirection feature is enabled.
     *
     * Valid values:
     *
     *   off
     *   on
     *
     * @example on
     *
     * @var string
     */
    public $usbRedirect;

    /**
     * @description The USB redirection rule.
     *
     * @var usbSupplyRedirectRule[]
     */
    public $usbSupplyRedirectRule;

    /**
     * @var string
     */
    public $useTime;

    /**
     * @description The average bitrate for video encoding. Valid values: 1000 to 50000.
     *
     * @example 1000
     *
     * @var int
     */
    public $videoEncAvgKbps;

    /**
     * @description The maximum quantizer parameter (QP) of video files. A larger QP value indicates worse video quality. Valid values: 0 to 51.
     *
     * @example 20
     *
     * @var int
     */
    public $videoEncMaxQP;

    /**
     * @description The minimum quantizer parameter (QP) of video files. A smaller QP value indicates higher video quality. Valid values: 0 to 51.
     *
     * @example 20
     *
     * @var int
     */
    public $videoEncMinQP;

    /**
     * @description The peak bitrate for video encoding. Valid values: 1000 to 50000.
     *
     * @example 1000
     *
     * @var int
     */
    public $videoEncPeakKbps;

    /**
     * @description The video encoding feature.
     *
     * Valid values:
     *
     *   qualityFirst: The priority given to the image quality.
     *   bandwidthFirst: The priority given to the bitrate.
     *
     * @example qualityFirst
     *
     * @var string
     */
    public $videoEncPolicy;

    /**
     * @description Indicates whether the multimedia redirection feature is enabled.
     *
     * Valid values:
     *
     *   off
     *   on
     *
     * @example off
     *
     * @var string
     */
    public $videoRedirect;

    /**
     * @description The image display quality.
     *
     * Valid values:
     *
     *   high: high-definition (HD)
     *   low: fluent
     *   medium (default): adaptive
     *   lossless: no quality loss
     *
     * @example medium
     *
     * @var string
     */
    public $visualQuality;

    /**
     * @description The watermarking feature.
     *
     * Valid values:
     *
     *   blind: Invisible watermarks are applied.
     *   off: The watermarking feature is disabled.
     *   on: Visible watermarks are applied.
     *
     * @example on
     *
     * @var string
     */
    public $watermark;

    /**
     * @description Indicates whether the anti-screen photo feature is enabled for invisible watermarks.
     *
     * Valid values:
     *
     *   off
     *   on
     *
     * @example off
     *
     * @var string
     */
    public $watermarkAntiCam;

    /**
     * @description The font color in red, green, and blue (RGB) of the watermark. Valid values: 0 to 16777215.
     *
     * @example 0
     *
     * @var int
     */
    public $watermarkColor;

    /**
     * @description If you set `WatermarkType` to `custom`, you must also specify `WatermarkCustomText`.
     *
     * @example test
     *
     * @var string
     */
    public $watermarkCustomText;

    /**
     * @description The slope of the watermark. Valid values: -10 to -30.
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
     * @description The watermark font style.
     *
     * Valid values:
     *
     *   plain
     *   bold
     *
     * @example plain
     *
     * @var string
     */
    public $watermarkFontStyle;

    /**
     * @description The watermark enhancement feature.
     *
     * Valid values:
     *
     *   high
     *   low
     *   medium
     *
     * @example medium
     *
     * @var string
     */
    public $watermarkPower;

    /**
     * @description The number of watermark rows.
     *
     * >  This parameter is not available for public use.
     *
     * @example 5
     *
     * @var int
     */
    public $watermarkRowAmount;

    /**
     * @description Indicates whether the security priority feature is enabled for invisible watermarks.
     *
     * Valid values:
     *
     *   off
     *   on
     *
     * @example on
     *
     * @var string
     */
    public $watermarkSecurity;

    /**
     * @description The watermark transparency.
     *
     * Valid values:
     *
     *   LIGHT
     *   DARK
     *   MIDDLE
     *
     * @example LIGHT
     *
     * @var string
     */
    public $watermarkTransparency;

    /**
     * @description The watermark transparency. A greater value indicates that the watermark is less transparent. Valid values: 10 to 100.
     *
     * @example 10
     *
     * @var int
     */
    public $watermarkTransparencyValue;

    /**
     * @description The watermark content.
     *
     * Valid values:
     *
     *   EndUserId: the username.
     *   Custom
     *   DesktopIp: the IP address of the cloud computer.
     *   ClientIp: the IP address of the Alibaba Cloud Workspace client.
     *   HostName: the rightmost 15 digits of the cloud computer ID.
     *   ClientTime: the current time displayed on the cloud computer.
     *
     * @example EndUserId
     *
     * @var string
     */
    public $watermarkType;

    /**
     * @var string
     */
    public $wuyingKeeper;

    /**
     * @description Specifies whether to provide the AI Assistant function in the DesktopAssistant when the cloud computer is accessed from the Alibaba Cloud Workspace desktop clients (including the Windows client and the macOS client).
     *
     * > Desktop clients of V7.7 and higher versions required.
     *
     * Valid values:
     *
     * - off: the AI Aisstant function is not provided.
     * - on: the AI Aisstant function is provided.
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
        'deviceConnectHint' => 'DeviceConnectHint',
        'deviceRedirects' => 'DeviceRedirects',
        'deviceRules' => 'DeviceRules',
        'displayMode' => 'DisplayMode',
        'domainList' => 'DomainList',
        'domainResolveRule' => 'DomainResolveRule',
        'domainResolveRuleType' => 'DomainResolveRuleType',
        'edsCount' => 'EdsCount',
        'endUserApplyAdminCoordinate' => 'EndUserApplyAdminCoordinate',
        'endUserGroupCoordinate' => 'EndUserGroupCoordinate',
        'fileMigrate' => 'FileMigrate',
        'fileTransfer' => 'FileTransfer',
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
        'policyGroupId' => 'PolicyGroupId',
        'policyGroupType' => 'PolicyGroupType',
        'policyStatus' => 'PolicyStatus',
        'preemptLogin' => 'PreemptLogin',
        'preemptLoginUsers' => 'PreemptLoginUsers',
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
        'resetDesktop' => 'ResetDesktop',
        'resolutionHeight' => 'ResolutionHeight',
        'resolutionModel' => 'ResolutionModel',
        'resolutionWidth' => 'ResolutionWidth',
        'resourceGroupCount' => 'ResourceGroupCount',
        'resourceRegionId' => 'ResourceRegionId',
        'safeMenu' => 'SafeMenu',
        'scope' => 'Scope',
        'scopeValue' => 'ScopeValue',
        'screenDisplayMode' => 'ScreenDisplayMode',
        'smoothEnhancement' => 'SmoothEnhancement',
        'statusMonitor' => 'StatusMonitor',
        'streamingMode' => 'StreamingMode',
        'targetFps' => 'TargetFps',
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
        'watermarkTransparency' => 'WatermarkTransparency',
        'watermarkTransparencyValue' => 'WatermarkTransparencyValue',
        'watermarkType' => 'WatermarkType',
        'wuyingKeeper' => 'WuyingKeeper',
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
        if (null !== $this->deviceConnectHint) {
            $res['DeviceConnectHint'] = $this->deviceConnectHint;
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
        if (null !== $this->displayMode) {
            $res['DisplayMode'] = $this->displayMode;
        }
        if (null !== $this->domainList) {
            $res['DomainList'] = $this->domainList;
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
        if (null !== $this->edsCount) {
            $res['EdsCount'] = $this->edsCount;
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
        if (null !== $this->fileTransfer) {
            $res['FileTransfer'] = $this->fileTransfer;
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
        if (null !== $this->policyGroupId) {
            $res['PolicyGroupId'] = $this->policyGroupId;
        }
        if (null !== $this->policyGroupType) {
            $res['PolicyGroupType'] = $this->policyGroupType;
        }
        if (null !== $this->policyStatus) {
            $res['PolicyStatus'] = $this->policyStatus;
        }
        if (null !== $this->preemptLogin) {
            $res['PreemptLogin'] = $this->preemptLogin;
        }
        if (null !== $this->preemptLoginUsers) {
            $res['PreemptLoginUsers'] = $this->preemptLoginUsers;
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
        if (null !== $this->resourceGroupCount) {
            $res['ResourceGroupCount'] = $this->resourceGroupCount;
        }
        if (null !== $this->resourceRegionId) {
            $res['ResourceRegionId'] = $this->resourceRegionId;
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
        if (null !== $this->watermarkTransparency) {
            $res['WatermarkTransparency'] = $this->watermarkTransparency;
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
        if (isset($map['DeviceConnectHint'])) {
            $model->deviceConnectHint = $map['DeviceConnectHint'];
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
        if (isset($map['DisplayMode'])) {
            $model->displayMode = $map['DisplayMode'];
        }
        if (isset($map['DomainList'])) {
            $model->domainList = $map['DomainList'];
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
        if (isset($map['EdsCount'])) {
            $model->edsCount = $map['EdsCount'];
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
        if (isset($map['FileTransfer'])) {
            $model->fileTransfer = $map['FileTransfer'];
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
        if (isset($map['PolicyGroupId'])) {
            $model->policyGroupId = $map['PolicyGroupId'];
        }
        if (isset($map['PolicyGroupType'])) {
            $model->policyGroupType = $map['PolicyGroupType'];
        }
        if (isset($map['PolicyStatus'])) {
            $model->policyStatus = $map['PolicyStatus'];
        }
        if (isset($map['PreemptLogin'])) {
            $model->preemptLogin = $map['PreemptLogin'];
        }
        if (isset($map['PreemptLoginUsers'])) {
            if (!empty($map['PreemptLoginUsers'])) {
                $model->preemptLoginUsers = $map['PreemptLoginUsers'];
            }
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
        if (isset($map['ResourceGroupCount'])) {
            $model->resourceGroupCount = $map['ResourceGroupCount'];
        }
        if (isset($map['ResourceRegionId'])) {
            $model->resourceRegionId = $map['ResourceRegionId'];
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
        if (isset($map['WatermarkTransparency'])) {
            $model->watermarkTransparency = $map['WatermarkTransparency'];
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

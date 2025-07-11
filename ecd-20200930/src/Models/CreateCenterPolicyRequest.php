<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateCenterPolicyRequest\authorizeAccessPolicyRule;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateCenterPolicyRequest\authorizeSecurityPolicyRule;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateCenterPolicyRequest\clientType;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateCenterPolicyRequest\deviceRedirects;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateCenterPolicyRequest\deviceRules;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateCenterPolicyRequest\domainResolveRule;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateCenterPolicyRequest\netRedirectRule;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateCenterPolicyRequest\usbSupplyRedirectRule;
use AlibabaCloud\Tea\Model;

class CreateCenterPolicyRequest extends Model
{
    /**
     * @description Specifies whether to grant the admin permissions to end users.
     *
     * >  This parameter is in private preview and only available to specific users.
     *
     * Valid values:
     *
     *   allow: forcibly grants admin permissions.
     *   deny: forcibly rejects granting admin permissions.
     *   inherited: inherits the admin permissions from the user dimension.
     *
     * @example deny
     *
     * @var string
     */
    public $adminAccess;

    /**
     * @description The anti-screenshot policy.
     *
     * Valid values:
     *
     *   off (default): disables anti-screenshot.
     *   on: enables anti-screenshot.
     *
     * @example off
     *
     * @var string
     */
    public $appContentProtection;

    /**
     * @description The client IP address whitelists that you want to add. Once an IP address whitelist is configured, end users can only access cloud computers from the IP addresses listed in it.
     *
     * @var authorizeAccessPolicyRule[]
     */
    public $authorizeAccessPolicyRule;

    /**
     * @description The security group rule.
     *
     * @var authorizeSecurityPolicyRule[]
     */
    public $authorizeSecurityPolicyRule;

    /**
     * @description The business type.
     *
     * Valid values:
     *
     *   1: public cloud
     *   8: commercial edition.
     *
     * This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $businessType;

    /**
     * @description The on-premises camera redirection policy. This parameter only applies if DeviceRedirects does not include an on-premises camera redirection policy.
     *
     * Valid values:
     *
     *   deviceRedirect: enables device redirection.
     *   off: disables device redirection.
     *
     * @example off
     *
     * @var string
     */
    public $cameraRedirect;

    /**
     * @var string
     */
    public $clientControlMenu;

    /**
     * @description The types of Alibaba Cloud Workspace clients that end users can use to connect to cloud computers.
     *
     * @var clientType[]
     */
    public $clientType;

    /**
     * @description The read/write permissions on the clipboard.
     *
     * Valid values:
     *
     *   read: specifies one-way transfer You can copy files only from on-premises devices to cloud computers.
     *   readwrite: specifies two-way transfer. You can copy files between on-premises devices and cloud computers.
     *   write: specifies one-way transfer. You can only copy files from cloud computers to on-premises devices.
     *   off (default): disables all transfers, both one-way and two-way. Files cannot be copied directly between on-premises devices and cloud computers.
     *
     * @example off
     *
     * @var string
     */
    public $clipboard;

    /**
     * @description Specifies whether to enable color enhancement for design and 3D applications.
     *
     * Valid values:
     *
     *   off: doesn\\"t enable color enhancement for design and 3D applications.
     *   on: enables color enhancement for design and 3D applications.
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
     * Valid values:
     *
     *   off: disables CPU spike protection.
     *   on: enables CPU spike protection.
     *
     * @example off
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
     * @example 60
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
     * @description Specifies whether to display the peripheral connection prompt.
     *
     * @example off
     *
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
     * @description Specifies whether to retain the session upon disconnection.
     *
     * >  This parameter applies only to cloud application policies.
     *
     * Valid values:
     *
     *   customTime: retains the session for a specified time period.
     *   persistent: retains the session permanently.
     *
     * @example customTime
     *
     * @var string
     */
    public $disconnectKeepSession;

    /**
     * @description The retention period of the session after disconnection. Valid values: 30 to 7200. Unit: seconds.
     *
     * >  This parameter applies only to cloud application policies.
     *
     * @example 30
     *
     * @var int
     */
    public $disconnectKeepSessionTime;

    /**
     * @description The display mode.
     *
     * Valid values:
     *
     *   clientCustom: suitable for user-defined scenarios.
     *   adminOffice: suitable for daily office scenarios.
     *   adminDesign: suitable for design and 3D application scenarios.
     *   adminCustom: suitable for admin-customized scenarios.
     *
     * @example clientCustom
     *
     * @var string
     */
    public $displayMode;

    /**
     * @description The domain resolution policies.
     *
     * @var domainResolveRule[]
     */
    public $domainResolveRule;

    /**
     * @description Specifies whether to enforce the domain resolution policy.
     *
     * Valid values:
     *
     *   off: disables the domain resolution policy.
     *   on: enables the domain resolution policy.
     *
     * @example off
     *
     * @var string
     */
    public $domainResolveRuleType;

    /**
     * @description Specifies whether to enforce the peak bandwidth limit for sessions.
     *
     * Valid values:
     *
     *   off: doesn\\"t enforce the peak bandwidth limit for sessions.
     *   on: enforces the peak bandwidth limit for sessions.
     *
     * @example off
     *
     * @var string
     */
    public $enableSessionRateLimiting;

    /**
     * @description Specifies whether to enable end users to request administrator help.
     *
     * Valid values:
     *
     *   off: disables end users to request administrator help.
     *   on: enables end users to request administrator help.
     *
     * @example off
     *
     * @var string
     */
    public $endUserApplyAdminCoordinate;

    /**
     * @description Specifies whether to allow end users in the same office network to share cloud computers.
     *
     * Valid values:
     *
     *   off: doesn\\"t allow end users in the same office network to share cloud computers.
     *   on: allows end users in the same office network to share cloud computers.
     *
     * @example off
     *
     * @var string
     */
    public $endUserGroupCoordinate;

    /**
     * @description Specifies whether to enable file transfer.
     *
     * @example off
     *
     * @var string
     */
    public $fileMigrate;

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
     * @description Specifies whether to enable image quality control. This feature is highly recommended for professional design scenarios where computer performance and user experience are critical.
     *
     * Valid values:
     *
     *   off: doesn\\"t enable image quality control.
     *   on: enables image quality control.
     *
     * @example off
     *
     * @var string
     */
    public $gpuAcceleration;

    /**
     * @description The file transfer feature on the web client.
     *
     * Valid values:
     *
     *   all: File upload and download are supported.
     *   download: Only file download is supported.
     *   upload: Only file upload is supported.
     *   off (default): File upload and download are not supported.
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
     *   tcp: TCP is used when UDP/AST is restricted.
     *   rtc: AST is used for high-frequency audio and video streaming.
     *   auto: UTO is used to enable automatic switch between AST and UDP modes based on desktop content.
     *   both: UDP is used for office and HD graphic design use.
     *
     * @example both
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
     * Valid values:
     *
     *   read: read-only. Cloud computers support on-premises disk mapping, but only for reading (copying) files—not modifying them.
     *   readwrite: read and write. Cloud computers support on-premises disk mapping, allowing you to read (copy) and write (modify) on-premises files.
     *   off (default): none. Cloud computers don\\"t support on-premises disk mapping.
     *
     * @example off
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
     * @example 40
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
     * Valid values:
     *
     *   off: disables memory spike protection.
     *   on: enables memory spike protection.
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
     * @example 40
     *
     * @var int
     */
    public $memorySampleDuration;

    /**
     * @description The memory usage per process. Valid values: 30 to 60. Unit: %.
     *
     * @example 40
     *
     * @var int
     */
    public $memorySingleRateLimit;

    /**
     * @description Specifies whether to display the Restart button in the DesktopAssistant menu when end users connect to cloud computers from Android clients.
     *
     * >  This feature applies to only mobile clients of version 7.4.0 or later.
     *
     * Valid values:
     *
     *   off: doesn\\"t display the Restart button in the DesktopAssistant menu.
     *   on: displays the Restart button in the DesktopAssistant menu.
     *
     * @example off
     *
     * @var string
     */
    public $mobileRestart;

    /**
     * @description Specifies whether to display the Stop button in the DesktopAssistant menu when end users connect to cloud computers from Android clients.
     *
     * >  This feature applies to only mobile clients of version 7.4.0 or later.
     *
     * Valid values:
     *
     *   off: doesn\\"t display the Stop button in the DesktopAssistant menu.
     *   on: displays the Stop button in the DesktopAssistant menu.
     *
     * @example off
     *
     * @var string
     */
    public $mobileShutdown;

    /**
     * @description The policy name.
     *
     * This parameter is required.
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
     * Valid values:
     *
     *   all: enables network redirection globally.
     *   off (default): disables network redirection.
     *   on: enables the whitelist mode.
     *
     * @example off
     *
     * @var string
     */
    public $netRedirect;

    /**
     * @description The network redirection policy.
     *
     * >  This parameter is in private preview and only available to specific users.
     *
     * @var netRedirectRule[]
     */
    public $netRedirectRule;

    /**
     * @description Specifies whether to enforce a disconnection upon inactivity.
     *
     * >  This parameter applies only to cloud application policies.
     *
     * Valid values:
     *
     *   off: doesn\\"t enforce a disconnection upon inactivity.
     *   on: enforces a disconnection upon inactivity.
     *
     * @example off
     *
     * @var string
     */
    public $noOperationDisconnect;

    /**
     * @description The duration of disconnection after inactivity. Valid values: 120 to 7200. Unit: seconds.
     *
     * >  This parameter applies only to cloud application policies.
     *
     * @example 120
     *
     * @var int
     */
    public $noOperationDisconnectTime;

    /**
     * @description The printer redirection policy. This parameter only applies if DeviceRedirects does not include a printer redirection policy.
     *
     * Valid values:
     *
     *   deviceRedirect (default):enables device redirection.
     *   usbRedirect: enables USB redirection.
     *   off: disables any type of redirection.
     *
     * @example off
     *
     * @var string
     */
    public $printerRedirect;

    /**
     * @description Specifies whether to enable image quality enhancement for design and 3D applications.
     *
     * Valid values:
     *
     *   off: doesn\\"t enable image quality enhancement for design and 3D applications.
     *   on: enables image quality enhancement for design and 3D applications.
     *
     * @example off
     *
     * @var string
     */
    public $qualityEnhancement;

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
     * @description The events that trigger screen recording.
     *
     * @var string[]
     */
    public $recordEvents;

    /**
     * @description The screen recording policy.
     *
     * Valid values:
     *
     *   period: Screen recording occurs at set intervals.
     *   session: Screen recording is limited to sessions only.
     *   off: Screen recording is disabled.
     *   alltime: Screen recording is always enabled.
     *
     * @example off
     *
     * @var string
     */
    public $recording;

    /**
     * @description Specifies whether to record audio files generated on cloud computers.
     *
     * Valid values:
     *
     *   off: doesn\\"t record audio files generated on cloud computers.
     *   on: records audio files generated on cloud computers.
     *
     * @example on
     *
     * @var string
     */
    public $recordingAudio;

    /**
     * @description The frame rate of screen recording. Screen recordings are split based on the specified duration and uploaded to Object Storage Service (OSS) buckets. If a file reaches 300 MB, the system prioritizes rolling updates for that file. Valid values: 10 to 60
     *
     * @example 10
     *
     * @var int
     */
    public $recordingDuration;

    /**
     * @description The screen recording\\"s end time in HH:MM:SS format. The value is meaningful only if `Recording` is set to `PERIOD`.
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
     * @example 2
     *
     * @var string
     */
    public $recordingFps;

    /**
     * @description The screen recording\\"s start time in HH:MM:SS format. The value is meaningful only if `Recording` is set to `PERIOD`.
     *
     * @example 08:00:00
     *
     * @var string
     */
    public $recordingStartTime;

    /**
     * @description Specifies whether to notify end users when screen recording is enabled.
     *
     * Valid values:
     *
     *   off: doesn\\"t notify end users when screen recording is enabled.
     *   on: notifies end users when screen recording is enabled.
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
     * @description The region ID. Set the value to cn-shanghai.
     *
     * This parameter is required.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The keyboard and mouse control permissions during remote assistance.
     *
     * Valid values:
     *
     *   optionalControl: By default, keyboard and mouse control is disabled during remote assistance. You can request permissions as needed.
     *   fullControl: Keyboard and mouse control is enabled during remote assistance.
     *   disableControl: Keyboard and mouse control is disabled during remote assistance.
     *
     * @example fullControl
     *
     * @var string
     */
    public $remoteCoordinate;

    /**
     * @description The computer reset setting.
     *
     * @example off
     *
     * @var string
     */
    public $resetDesktop;

    /**
     * @description The resolution height. Unit: pixel. Valid values for cloud applications: 500 to 50000. Valid values for cloud computers: 480 to 4096.
     *
     * @example 1280
     *
     * @var int
     */
    public $resolutionHeight;

    /**
     * @description The resolution type.
     *
     * Valid values:
     *
     *   adaptive: adaptive resolution.
     *   customer: fixed resolution.
     *
     * @example adaptive
     *
     * @var string
     */
    public $resolutionModel;

    /**
     * @description The resolution width. Unit: pixel. Valid values for cloud applications: 500 to 50000. Valid values for cloud computers: 480 to 4096.
     *
     * @example 720
     *
     * @var int
     */
    public $resolutionWidth;

    /**
     * @description The resource type.
     *
     * Valid values:
     *
     *   app: cloud applications.
     *   desktop: cloud computers.
     *
     * This parameter is required.
     *
     * @example desktop
     *
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $safeMenu;

    /**
     * @description The effective scope of the policy.
     *
     * Valid values:
     *
     *   IP: The policy applies to specific IP addresses.
     *   GLOBAL: The policy applies globally.
     *
     * @example GLOBAL
     *
     * @var string
     */
    public $scope;

    /**
     * @description The effective scopes. This parameter is required when `Scope` is set to `IP`. If `Scope` is set to `IP`, this parameter doesn\\"t take effect.
     *
     * @var string[]
     */
    public $scopeValue;

    /**
     * @var string
     */
    public $screenDisplayMode;

    /**
     * @description The bandwidth peak allowed for sessions. Unit: Kbit/s. Valid values: 2000 to 100000.
     *
     * @example 2000
     *
     * @var int
     */
    public $sessionMaxRateKbps;

    /**
     * @description Specifies whether to enable smoothness enhancement for daily office use.
     *
     * Valid values:
     *
     *   off: doesn\\"t enable smoothness enhancement for daily office use.
     *   on: enables smoothness enhancement for daily office use.
     *
     * @example off
     *
     * @var string
     */
    public $smoothEnhancement;

    /**
     * @description Specifies whether to display the metric status entry in the DesktopAssistant menu.
     *
     * Valid values:
     *
     *   off: doesn\\"t display the metric status entry in the DesktopAssistant menu.
     *   on: displays the metric status entry in the DesktopAssistant menu.
     *
     * @example off
     *
     * @var string
     */
    public $statusMonitor;

    /**
     * @description The streaming mode.
     *
     * Valid values:
     *
     *   intelligent
     *   smooth
     *
     * @example smooth
     *
     * @var string
     */
    public $streamingMode;

    /**
     * @description The target frame rate. Valid values: 10 to 60.
     *
     * @example 30
     *
     * @var int
     */
    public $targetFps;

    /**
     * @description Specifies whether to display the application taskbar.
     *
     * >  This parameter applies only to cloud application policies.
     *
     * Valid values:
     *
     *   off: doesn\\"t display the application taskbar.
     *   on: displays the application taskbar.
     *
     * @example off
     *
     * @var string
     */
    public $taskbar;

    /**
     * @description Specifies whether to enable USB redirection.
     *
     * Valid values:
     *
     *   off (default): doesn\\"t enable USB redirection.
     *   on: enables USB redirection.
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
     * @example 2000
     *
     * @var int
     */
    public $videoEncAvgKbps;

    /**
     * @description The maximum QP for video files. Higher QP values result in lower video quality. Valid values: 0 to 51.
     *
     * @example 30
     *
     * @var int
     */
    public $videoEncMaxQP;

    /**
     * @description The minimum quantizer parameter (QP) for video files. A lower QP means better video quality. Valid values: 0 to 51.
     *
     * @example 30
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
     * Valid values:
     *
     *   qualityFirst: prioritizes image quality.
     *   bandwidthFirst: prioritizes bandwidth.
     *
     * @example qualityFirst
     *
     * @var string
     */
    public $videoEncPolicy;

    /**
     * @description The multimedia redirection policy.
     *
     * Valid values:
     *
     *   off: disables multimedia redirection.
     *   on: enables multimedia redirection.
     *
     * @example on
     *
     * @var string
     */
    public $videoRedirect;

    /**
     * @description The image display quality.
     *
     * Valid values:
     *
     *   high: high-definition (HD).
     *   low: smoothness.
     *   lossless: no quality loss.
     *   medium (default): scenario-specific adaptation.
     *
     * @example low
     *
     * @var string
     */
    public $visualQuality;

    /**
     * @description The watermark policy.
     *
     * Valid values:
     *
     *   blind: displays invisible watermarks.
     *   off (default): displays no watermark.
     *   on: displays visible watermarks.
     *
     * @example off
     *
     * @var string
     */
    public $watermark;

    /**
     * @description Specifies whether to enable anti-screen capture for invisible watermarks.
     *
     * Valid values:
     *
     *   off: disables anti-screen capture for invisible watermarks.
     *   on: enables anti-screen capture for invisible watermarks.
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
     * @description The number of watermark columns. Valid values: 3 to 10.
     *
     * @example 3
     *
     * @var int
     */
    public $watermarkColumnAmount;

    /**
     * @description If you set `WatermarkType` to `custom`, you must also specify `WatermarkCustomText`.
     *
     * @example test
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
     * @description The enhancement level for invisible watermarks.
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
     * @description The number of watermark rows. Valid values: 3 to 10.
     *
     * @example 3
     *
     * @var int
     */
    public $watermarkRowAmount;

    /**
     * @description Specifies whether to enable security priority for invisible watermarks.
     *
     * Valid values:
     *
     *   off: disables security priority for invisible watermarks.
     *   on: enables security priority for invisible watermarks.
     *
     * @example on
     *
     * @var string
     */
    public $watermarkSecurity;

    /**
     * @description The watermark opacity. A higher value makes the watermark more opaque. Valid values: 10 to 100.
     *
     * @example 10
     *
     * @var int
     */
    public $watermarkTransparencyValue;

    /**
     * @description The watermark type. You can specify up to three types. Separate multiple values with commas (,).
     *
     * >  If you provide `custom` as the value for this parameter, you must configure `WatermarkCustomText` to specify custom text.
     *
     * Valid values:
     *
     *   EndUserId: the username.
     *   Custom: the custom text.
     *   DesktopIp: the IP address of the cloud computer.
     *   ClientIp: the IP address of the client.
     *   HostName: the rightmost 15 digits of the cloud computer ID.
     *   ClientTime: the current time displayed on the cloud computer.
     *
     * @example EndUserId,HostName,ClientTime
     *
     * @var string
     */
    public $watermarkType;

    /**
     * @description Specifies whether to enable Cloud Computer Manager.
     *
     * @example off
     *
     * @var string
     */
    public $wuyingKeeper;

    /**
     * @description Specifies whether to display the Xiaoying AI Assistant option in the DesktopAssistant menu when end users connect to cloud computers via desktop clients (Windows and macOS).
     *
     * >  This feature applies to only desktop clients of version 7.7.0 or later.
     *
     * Valid values:
     *
     *   off: doesn\\"t display the Xiaoying AI Assistant option in the DesktopAssistant menu.
     *   on: displays the Xiaoying AI Assistant option in the DesktopAssistant menu.
     *
     * @example on
     *
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
        'clientControlMenu' => 'ClientControlMenu',
        'clientType' => 'ClientType',
        'clipboard' => 'Clipboard',
        'colorEnhancement' => 'ColorEnhancement',
        'cpdDriveClipboard' => 'CpdDriveClipboard',
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
        'fileTransferAddress' => 'FileTransferAddress',
        'fileTransferSpeed' => 'FileTransferSpeed',
        'fileTransferSpeedLocation' => 'FileTransferSpeedLocation',
        'gpuAcceleration' => 'GpuAcceleration',
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
        'safeMenu' => 'SafeMenu',
        'scope' => 'Scope',
        'scopeValue' => 'ScopeValue',
        'screenDisplayMode' => 'ScreenDisplayMode',
        'sessionMaxRateKbps' => 'SessionMaxRateKbps',
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
        if (null !== $this->authorizeAccessPolicyRule) {
            $res['AuthorizeAccessPolicyRule'] = [];
            if (null !== $this->authorizeAccessPolicyRule && \is_array($this->authorizeAccessPolicyRule)) {
                $n = 0;
                foreach ($this->authorizeAccessPolicyRule as $item) {
                    $res['AuthorizeAccessPolicyRule'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->authorizeSecurityPolicyRule) {
            $res['AuthorizeSecurityPolicyRule'] = [];
            if (null !== $this->authorizeSecurityPolicyRule && \is_array($this->authorizeSecurityPolicyRule)) {
                $n = 0;
                foreach ($this->authorizeSecurityPolicyRule as $item) {
                    $res['AuthorizeSecurityPolicyRule'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }
        if (null !== $this->cameraRedirect) {
            $res['CameraRedirect'] = $this->cameraRedirect;
        }
        if (null !== $this->clientControlMenu) {
            $res['ClientControlMenu'] = $this->clientControlMenu;
        }
        if (null !== $this->clientType) {
            $res['ClientType'] = [];
            if (null !== $this->clientType && \is_array($this->clientType)) {
                $n = 0;
                foreach ($this->clientType as $item) {
                    $res['ClientType'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['RecordEventFilePaths'] = $this->recordEventFilePaths;
        }
        if (null !== $this->recordEventRegisters) {
            $res['RecordEventRegisters'] = $this->recordEventRegisters;
        }
        if (null !== $this->recordEvents) {
            $res['RecordEvents'] = $this->recordEvents;
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

    /**
     * @param array $map
     *
     * @return CreateCenterPolicyRequest
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
        if (isset($map['AuthorizeAccessPolicyRule'])) {
            if (!empty($map['AuthorizeAccessPolicyRule'])) {
                $model->authorizeAccessPolicyRule = [];
                $n = 0;
                foreach ($map['AuthorizeAccessPolicyRule'] as $item) {
                    $model->authorizeAccessPolicyRule[$n++] = null !== $item ? authorizeAccessPolicyRule::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AuthorizeSecurityPolicyRule'])) {
            if (!empty($map['AuthorizeSecurityPolicyRule'])) {
                $model->authorizeSecurityPolicyRule = [];
                $n = 0;
                foreach ($map['AuthorizeSecurityPolicyRule'] as $item) {
                    $model->authorizeSecurityPolicyRule[$n++] = null !== $item ? authorizeSecurityPolicyRule::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }
        if (isset($map['CameraRedirect'])) {
            $model->cameraRedirect = $map['CameraRedirect'];
        }
        if (isset($map['ClientControlMenu'])) {
            $model->clientControlMenu = $map['ClientControlMenu'];
        }
        if (isset($map['ClientType'])) {
            if (!empty($map['ClientType'])) {
                $model->clientType = [];
                $n = 0;
                foreach ($map['ClientType'] as $item) {
                    $model->clientType[$n++] = null !== $item ? clientType::fromMap($item) : $item;
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
                $n = 0;
                foreach ($map['DomainResolveRule'] as $item) {
                    $model->domainResolveRule[$n++] = null !== $item ? domainResolveRule::fromMap($item) : $item;
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
                $model->recordEventFilePaths = $map['RecordEventFilePaths'];
            }
        }
        if (isset($map['RecordEventRegisters'])) {
            if (!empty($map['RecordEventRegisters'])) {
                $model->recordEventRegisters = $map['RecordEventRegisters'];
            }
        }
        if (isset($map['RecordEvents'])) {
            if (!empty($map['RecordEvents'])) {
                $model->recordEvents = $map['RecordEvents'];
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePolicyGroupsResponseBody;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePolicyGroupsResponseBody\describePolicyGroups\authorizeAccessPolicyRules;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePolicyGroupsResponseBody\describePolicyGroups\authorizeSecurityPolicyRules;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePolicyGroupsResponseBody\describePolicyGroups\clientTypes;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePolicyGroupsResponseBody\describePolicyGroups\domainResolveRule;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePolicyGroupsResponseBody\describePolicyGroups\netRedirectRule;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePolicyGroupsResponseBody\describePolicyGroups\usbSupplyRedirectRule;
use AlibabaCloud\Tea\Model;

class describePolicyGroups extends Model
{
    /**
     * @description Indicates whether users have the administrator permissions after they connect to cloud desktops.
     *
     * >  This parameter is in invitational preview and not available to the public.
     * @example deny
     *
     * @var string
     */
    public $adminAccess;

    /**
     * @description Indicates whether the anti-screenshot feature is enabled. Valid values:
     *
     *   on
     *   off
     *
     * Default value: off.
     * @example off
     *
     * @var string
     */
    public $appContentProtection;

    /**
     * @description The client CIDR blocks in a whitelist.
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
     * @description The logon methods.
     *
     * @var clientTypes[]
     */
    public $clientTypes;

    /**
     * @description The permissions on the clipboard.
     *
     * Valid values:
     *
     *   read: One-way transfer is allowed.
     *   readwrite: Two-way transfer is allowed.
     *   off: Two-way transfer is not allowed.
     *
     * @example readwrite
     *
     * @var string
     */
    public $clipboard;

    /**
     * @var string
     */
    public $colorEnhancement;

    /**
     * @description The CPU underclocking duration. Valid values: 30 to 120.
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
     * @description Indicates whether the switch for CPU protection mode is turned on. Valid values: on and off.
     *
     * @example on
     *
     * @var string
     */
    public $cpuProtectedMode;

    /**
     * @description The overall CPU utilization. Valid values: 70 to 90.
     *
     * @example 70
     *
     * @var int
     */
    public $cpuRateLimit;

    /**
     * @description The overall CPU sampling duration. Valid values: 10 to 60.
     *
     * @example 10
     *
     * @var int
     */
    public $cpuSampleDuration;

    /**
     * @description The usage of a single CPU. Valid values: 70 to 100.
     *
     * @example 70
     *
     * @var int
     */
    public $cpuSingleRateLimit;

    /**
     * @var string
     */
    public $displayMode;

    /**
     * @description Indicates whether the access control for domain names is enabled. The domain names can contain wildcard characters (\\*). Multiple domain names are separated by commas (,). Valid values:
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
     * @description The rule of domain name resolution.
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
     * @description The number of cloud desktops that are associated with the policy.\\
     * This parameter is returned only for custom policies.
     * @example 1
     *
     * @var int
     */
    public $edsCount;

    /**
     * @description Indicates whether the switch for end users to ask for assistance from the administrator is turned on. Valid values: on and off.
     *
     * @example on
     *
     * @var string
     */
    public $endUserApplyAdminCoordinate;

    /**
     * @description Indicates whether the switch for stream collaboration between end users is turned on. Valid values: on and off.
     *
     * @example on
     *
     * @var string
     */
    public $endUserGroupCoordinate;

    /**
     * @description Indicates whether the image quality feature is enabled for Graphics cloud desktops. If you have high requirements for desktop performance and user experience, we recommend that you enable this feature. For example, you can enable this feature in professional graphic design scenarios.
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
     * @description Indicates whether the access policy on HTML5 clients is allowed.
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
     * @description The file transfer policy for HTML5 clients.
     *
     * Valid values:
     *
     *   all: Files can be uploaded and downloaded between your local computer and HTML5 clients.
     *   download: Files on HTML5 clients can be downloaded to your local computer.
     *   upload: Files on your local computer can be uploaded to HTML5 clients.
     *   off (default): File transfer between HTML5 clients and your computer is disabled.
     *
     * @example off
     *
     * @var string
     */
    public $html5FileTransfer;

    /**
     * @description The protocol that is used for network communication. Valid values:
     *
     *   TCP: Only TCP can be used.
     *   BOTH: TCP or UDP can be used. The system switches between TCP and UDP based on the actual network condition.
     *
     * Default value: TCP.
     * @example BOTH
     *
     * @var string
     */
    public $internetCommunicationProtocol;

    /**
     * @description The permissions on local disk mapping.
     *
     * Valid values:
     *
     *   read: read-only
     *   readwrite: read and write
     *   off: no permissions
     *
     * @example readwrite
     *
     * @var string
     */
    public $localDrive;

    /**
     * @var int
     */
    public $maxReconnectTime;

    /**
     * @description The duration required for underclocking memory by a single process. Valid values: 30 to 120.
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
     * @description Indicates whether the switch for memory protection mode is turned on. Valid values: on and off.
     *
     * @example on
     *
     * @var string
     */
    public $memoryProtectedMode;

    /**
     * @description The overall memory usage. Valid values: 70 to 90.
     *
     * @example 70
     *
     * @var int
     */
    public $memoryRateLimit;

    /**
     * @description The overall sampling duration of memory statistics. Valid values: 30 to 60.
     *
     * @example 30
     *
     * @var int
     */
    public $memorySampleDuration;

    /**
     * @description The memory usage of a single process. Valid values: 30 to 60.
     *
     * @example 30
     *
     * @var int
     */
    public $memorySingleRateLimit;

    /**
     * @description The policy name.
     *
     * @example testPolicyGroupName
     *
     * @var string
     */
    public $name;

    /**
     * @description Indicates whether the network redirection feature is enabled. Valid values:
     *
     *   on
     *   off
     *
     * >  This parameter is in invitational preview and not available to the public.
     * @example off
     *
     * @var string
     */
    public $netRedirect;

    /**
     * @description The network redirection rule.
     *
     * >  This parameter is in invitational preview and not available to the public.
     * @var netRedirectRule[]
     */
    public $netRedirectRule;

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
     * @description The policy status.
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
     * @description Indicates whether user preemption is allowed. The value is fixed to `off`, which indicates that user preemption is not allowed.
     *
     * @example off
     *
     * @var string
     */
    public $preemptLogin;

    /**
     * @description The names of the users that are allowed to connect to the cloud desktop to which another user is logged on.
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
     * @var string
     */
    public $qualityEnhancement;

    /**
     * @description Indicates whether the custom screen recording feature is enabled. Valid values:
     *
     *   on
     *   off
     *
     * Default value: off.
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
     * @description Indicates whether the screen recording feature is enabled.
     *
     * Valid values:
     *
     *   ALLTIME: All operations that are performed by end users on cloud desktops are recorded. The recording starts immediately when end users connect to cloud desktops and ends after the end users disconnect from the cloud desktops.
     *   PERIOD: The operations that are performed by end users on cloud desktops during a specified period of time are recorded. You must specify the start time and the end time of the recording.
     *   OFF: The screen recording feature is disabled.
     *
     * @example OFF
     *
     * @var string
     */
    public $recording;

    /**
     * @description Indicates whether to record audio or video data that is generated on the cloud desktop during screen recording. Valid values:
     *
     *   on: records audio and video data.
     *   off: records only video data.
     *
     * @example on
     *
     * @var string
     */
    public $recordingAudio;

    /**
     * @description This parameter is used with the Recording parameter to generate a screen recording file after you specify the duration of screen recording.
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
     * @description The period in which the screen recording audit is valid. Valid values: 15 to 180. Unit: day.
     *
     * @example 15
     *
     * @var int
     */
    public $recordingExpires;

    /**
     * @description The frame rate of screen recording. Unit: fps. Valid values:
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
     * @description Indicates whether the client notification of screen recording is enabled. Valid values: on and off.
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
     * @description The permissions on the keyboard and mouse to control the cloud desktop during remote assistance. Valid values:
     *
     *   fullControl: The keyboard and mouse are fully controlled.
     *   optionalControl: By default, you do not have the permissions on the keyboard or mouse to control the cloud desktop during remote assistance. You can apply for the permissions.
     *   disableControl: The keyboard and mouse are not controlled.
     *
     * @example fullControl
     *
     * @var string
     */
    public $remoteCoordinate;

    /**
     * @description The effective scope of the policy. Valid values:
     *
     *   GLOBAL: The policy takes effect globally.
     *   IP: The policy takes effect based on IP addresses.
     *
     * @example GLOBAL
     *
     * @var string
     */
    public $scope;

    /**
     * @description This parameter is required when Scope is set to IP. This parameter takes effect when Scope is set to IP.
     *
     * @var string[]
     */
    public $scopeValue;

    /**
     * @var string
     */
    public $smoothEnhancement;

    /**
     * @var string
     */
    public $streamingMode;

    /**
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
     * @description Indicates whether the multimedia redirection feature is enabled. Valid values: on and off.
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
     * @description Indicates whether the watermarking feature is enabled.
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
    public $watermark;

    /**
     * @description Indicates whether the anti-screen photo feature is enabled for invisible watermarks. Valid values: on and off.
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
     * @description This parameter is unavailable for public use.
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
     * @description The font style of the watermark. Valid values:
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
     * @description The invisible watermark enhancement feature. Valid values: low, medium, and high.
     *
     * @example medium
     *
     * @var string
     */
    public $watermarkPower;

    /**
     * @description The number of watermark rows. This parameter is now invalid.
     *
     * @example 5
     *
     * @var int
     */
    public $watermarkRowAmount;

    /**
     * @description Indicates whether the security priority for invisible watermarks is enabled. Valid values: on and off.
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
     * @description The watermark type.
     *
     * Valid values:
     *
     *   HostName,EndUserId: The watermark is displayed in the following format: Rightmost 15 characters of the cloud desktop ID,Username.
     *   EndUserId: The username is displayed.
     *   EndUserId,HostName: The watermark is displayed in the following format: Username,Rightmost 15 characters of the cloud desktop ID.
     *   HostName: The rightmost 15 characters of the cloud desktop ID are displayed.
     *
     * @example EndUserId
     *
     * @var string
     */
    public $watermarkType;
    protected $_name = [
        'adminAccess'                   => 'AdminAccess',
        'appContentProtection'          => 'AppContentProtection',
        'authorizeAccessPolicyRules'    => 'AuthorizeAccessPolicyRules',
        'authorizeSecurityPolicyRules'  => 'AuthorizeSecurityPolicyRules',
        'cameraRedirect'                => 'CameraRedirect',
        'clientTypes'                   => 'ClientTypes',
        'clipboard'                     => 'Clipboard',
        'colorEnhancement'              => 'ColorEnhancement',
        'cpuDownGradeDuration'          => 'CpuDownGradeDuration',
        'cpuProcessors'                 => 'CpuProcessors',
        'cpuProtectedMode'              => 'CpuProtectedMode',
        'cpuRateLimit'                  => 'CpuRateLimit',
        'cpuSampleDuration'             => 'CpuSampleDuration',
        'cpuSingleRateLimit'            => 'CpuSingleRateLimit',
        'displayMode'                   => 'DisplayMode',
        'domainList'                    => 'DomainList',
        'domainResolveRule'             => 'DomainResolveRule',
        'domainResolveRuleType'         => 'DomainResolveRuleType',
        'edsCount'                      => 'EdsCount',
        'endUserApplyAdminCoordinate'   => 'EndUserApplyAdminCoordinate',
        'endUserGroupCoordinate'        => 'EndUserGroupCoordinate',
        'gpuAcceleration'               => 'GpuAcceleration',
        'html5Access'                   => 'Html5Access',
        'html5FileTransfer'             => 'Html5FileTransfer',
        'internetCommunicationProtocol' => 'InternetCommunicationProtocol',
        'localDrive'                    => 'LocalDrive',
        'maxReconnectTime'              => 'MaxReconnectTime',
        'memoryDownGradeDuration'       => 'MemoryDownGradeDuration',
        'memoryProcessors'              => 'MemoryProcessors',
        'memoryProtectedMode'           => 'MemoryProtectedMode',
        'memoryRateLimit'               => 'MemoryRateLimit',
        'memorySampleDuration'          => 'MemorySampleDuration',
        'memorySingleRateLimit'         => 'MemorySingleRateLimit',
        'name'                          => 'Name',
        'netRedirect'                   => 'NetRedirect',
        'netRedirectRule'               => 'NetRedirectRule',
        'policyGroupId'                 => 'PolicyGroupId',
        'policyGroupType'               => 'PolicyGroupType',
        'policyStatus'                  => 'PolicyStatus',
        'preemptLogin'                  => 'PreemptLogin',
        'preemptLoginUsers'             => 'PreemptLoginUsers',
        'printerRedirection'            => 'PrinterRedirection',
        'qualityEnhancement'            => 'QualityEnhancement',
        'recordContent'                 => 'RecordContent',
        'recordContentExpires'          => 'RecordContentExpires',
        'recording'                     => 'Recording',
        'recordingAudio'                => 'RecordingAudio',
        'recordingDuration'             => 'RecordingDuration',
        'recordingEndTime'              => 'RecordingEndTime',
        'recordingExpires'              => 'RecordingExpires',
        'recordingFps'                  => 'RecordingFps',
        'recordingStartTime'            => 'RecordingStartTime',
        'recordingUserNotify'           => 'RecordingUserNotify',
        'recordingUserNotifyMessage'    => 'RecordingUserNotifyMessage',
        'remoteCoordinate'              => 'RemoteCoordinate',
        'scope'                         => 'Scope',
        'scopeValue'                    => 'ScopeValue',
        'smoothEnhancement'             => 'SmoothEnhancement',
        'streamingMode'                 => 'StreamingMode',
        'targetFps'                     => 'TargetFps',
        'usbRedirect'                   => 'UsbRedirect',
        'usbSupplyRedirectRule'         => 'UsbSupplyRedirectRule',
        'videoEncAvgKbps'               => 'VideoEncAvgKbps',
        'videoEncMaxQP'                 => 'VideoEncMaxQP',
        'videoEncMinQP'                 => 'VideoEncMinQP',
        'videoEncPeakKbps'              => 'VideoEncPeakKbps',
        'videoEncPolicy'                => 'VideoEncPolicy',
        'videoRedirect'                 => 'VideoRedirect',
        'visualQuality'                 => 'VisualQuality',
        'watermark'                     => 'Watermark',
        'watermarkAntiCam'              => 'WatermarkAntiCam',
        'watermarkColor'                => 'WatermarkColor',
        'watermarkCustomText'           => 'WatermarkCustomText',
        'watermarkDegree'               => 'WatermarkDegree',
        'watermarkFontSize'             => 'WatermarkFontSize',
        'watermarkFontStyle'            => 'WatermarkFontStyle',
        'watermarkPower'                => 'WatermarkPower',
        'watermarkRowAmount'            => 'WatermarkRowAmount',
        'watermarkSecurity'             => 'WatermarkSecurity',
        'watermarkTransparency'         => 'WatermarkTransparency',
        'watermarkTransparencyValue'    => 'WatermarkTransparencyValue',
        'watermarkType'                 => 'WatermarkType',
    ];

    public function validate()
    {
    }

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
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }
        if (null !== $this->scopeValue) {
            $res['ScopeValue'] = $this->scopeValue;
        }
        if (null !== $this->smoothEnhancement) {
            $res['SmoothEnhancement'] = $this->smoothEnhancement;
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
                $n                                 = 0;
                foreach ($map['AuthorizeAccessPolicyRules'] as $item) {
                    $model->authorizeAccessPolicyRules[$n++] = null !== $item ? authorizeAccessPolicyRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AuthorizeSecurityPolicyRules'])) {
            if (!empty($map['AuthorizeSecurityPolicyRules'])) {
                $model->authorizeSecurityPolicyRules = [];
                $n                                   = 0;
                foreach ($map['AuthorizeSecurityPolicyRules'] as $item) {
                    $model->authorizeSecurityPolicyRules[$n++] = null !== $item ? authorizeSecurityPolicyRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CameraRedirect'])) {
            $model->cameraRedirect = $map['CameraRedirect'];
        }
        if (isset($map['ClientTypes'])) {
            if (!empty($map['ClientTypes'])) {
                $model->clientTypes = [];
                $n                  = 0;
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
        if (isset($map['DisplayMode'])) {
            $model->displayMode = $map['DisplayMode'];
        }
        if (isset($map['DomainList'])) {
            $model->domainList = $map['DomainList'];
        }
        if (isset($map['DomainResolveRule'])) {
            if (!empty($map['DomainResolveRule'])) {
                $model->domainResolveRule = [];
                $n                        = 0;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NetRedirect'])) {
            $model->netRedirect = $map['NetRedirect'];
        }
        if (isset($map['NetRedirectRule'])) {
            if (!empty($map['NetRedirectRule'])) {
                $model->netRedirectRule = [];
                $n                      = 0;
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
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }
        if (isset($map['ScopeValue'])) {
            if (!empty($map['ScopeValue'])) {
                $model->scopeValue = $map['ScopeValue'];
            }
        }
        if (isset($map['SmoothEnhancement'])) {
            $model->smoothEnhancement = $map['SmoothEnhancement'];
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
                $n                            = 0;
                foreach ($map['UsbSupplyRedirectRule'] as $item) {
                    $model->usbSupplyRedirectRule[$n++] = null !== $item ? usbSupplyRedirectRule::fromMap($item) : $item;
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

        return $model;
    }
}

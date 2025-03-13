<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyPolicyGroupRequest\authorizeAccessPolicyRule;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyPolicyGroupRequest\authorizeSecurityPolicyRule;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyPolicyGroupRequest\clientType;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyPolicyGroupRequest\deviceRedirects;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyPolicyGroupRequest\deviceRules;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyPolicyGroupRequest\domainResolveRule;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyPolicyGroupRequest\revokeAccessPolicyRule;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyPolicyGroupRequest\revokeSecurityPolicyRule;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyPolicyGroupRequest\usbSupplyRedirectRule;
use AlibabaCloud\Tea\Model;

class ModifyPolicyGroupRequest extends Model
{
    /**
     * @description Specifies whether end users have the administrator permissions.
     *
     * >  This parameter is in invitational preview for specific users and not available to the public.
     * @example deny
     *
     * @var string
     */
    public $adminAccess;

    /**
     * @description Specifies whether to enable the anti-screenshot feature.
     *
     * Valid values:
     *
     *   off (default)
     *   on
     *
     * @example on
     *
     * @var string
     */
    public $appContentProtection;

    /**
     * @description The client IP address whitelist.
     *
     * @var authorizeAccessPolicyRule[]
     */
    public $authorizeAccessPolicyRule;

    /**
     * @description The security group rules.
     *
     * @var authorizeSecurityPolicyRule[]
     */
    public $authorizeSecurityPolicyRule;

    /**
     * @description Specifies whether to enable the webcam redirection feature.
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
     * @description The logon method control rules to limit the type of the Alibaba Cloud Workspace client used by end users to connect to cloud computers.
     *
     * @var clientType[]
     */
    public $clientType;

    /**
     * @description The permissions on the clipboard.
     *
     * Valid values:
     *
     *   read: specifies one-way transfer. You can copy files only from local devices to cloud computers.
     *   readwrite: specifies two-way transfer You can copy files between local devices and cloud computers.
     *   write: specifies one-way transfer. You can only copy files from cloud computers to local devices.
     *   off: disables both one-way and two-way transfer. Files cannot be copied between local devices and cloud computers.
     *
     * @example off
     *
     * @var string
     */
    public $clipboard;

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
     * @description Specifies whether the access control for domain names is enabled. Domain names support wildcards (\\*). Separate multiple domain names with commas (,).
     *
     * Valid values:
     *
     *   off
     *   on
     *
     * @example [black:],example1.com,example2.com
     *
     * @var string
     */
    public $domainList;

    /**
     * @description The details of the domain name resolution rules.
     *
     * @var domainResolveRule[]
     */
    public $domainResolveRule;

    /**
     * @description The type of the domain name resolution rule.
     *
     * Valid values:
     *
     *   OFF
     *   ON
     *
     * @example OFF
     *
     * @var string
     */
    public $domainResolveRuleType;

    /**
     * @description Specifies whether to turn on the Contact Administrator for Help switch.
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
     * @description Specifies whether to turn on the User Stream Collaboration switch.
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
     * @description Specifies whether to enable the Image Quality Control feature for Graphic-based cloud computers. If you have high requirements on the performance and user experience in scenarios such as professional design, we recommend that you enable this feature.
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
     *   off
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
     *   TCP (default): TCP
     *   BOTH: TCP and UDP
     *
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
     *   read: read-only. Local disk mapping is available on cloud computers. However, you can only read (copy) local files but cannot modify the files.
     *   readwrite: read and write. Local disk mapping is available on cloud computers. You can read (copy) and write (modify) local files.
     *   off (default): no permissions. Local disk mapping is unavailable on cloud computers.
     *
     * @example off
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
     * @description The name of the cloud computer policy.
     *
     * @example testPolicyGroupName
     *
     * @var string
     */
    public $name;

    /**
     * @description Specifies whether to enable network redirection.
     *
     * Valid values:
     *
     *   off (default)
     *   on
     *
     * @example on
     *
     * @var string
     */
    public $netRedirect;

    /**
     * @description The ID of the cloud computer policy.
     *
     * This parameter is required.
     * @example pg-gx2x1dhsmthe9****
     *
     * @var string
     */
    public $policyGroupId;

    /**
     * @description The cloud computer preemption feature.
     *
     * Valid values:
     *
     *   off (default): Multiple end users cannot connect to the same cloud computer at the same time.
     *
     * @example off
     *
     * @var string
     */
    public $preemptLogin;

    /**
     * @description The usernames that are allowed to connect to the cloud computer in use. You can specify up to five usernames.
     *
     * >  To ensure user experience and data security, other end users cannot connect to the cloud computer that is used by an end user.
     * @var string[]
     */
    public $preemptLoginUser;

    /**
     * @description The printer redirection feature.
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
    public $printerRedirection;

    /**
     * @description Specifies whether to enable the custom screen recording feature.
     *
     * Valid values:
     *
     *   off (default)
     *   on
     *
     * @example OFF
     *
     * @var string
     */
    public $recordContent;

    /**
     * @description The duration in which the custom screen recording is valid. Default value: 30. Unit: days.
     *
     * @example 30
     *
     * @var int
     */
    public $recordContentExpires;

    /**
     * @description Specifies whether to enable the screen recording feature.
     *
     * Valid values:
     *
     *   byaction_cmd_ft: enables the operation-triggered screen recording upon command execution and file transfer.
     *   ALLTIME: enables the whole-process screen recording. That is, the recording starts when cloud computers are connected and ends when the cloud computers are disconnected.
     *   session: enables the screen recording for session lifecycle listening.
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
     * @description Specifies whether to record the audio files generated from cloud computers.
     *
     * Valid values:
     *
     *   off: records only video files.
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
     * @example 15
     *
     * @var int
     */
    public $recordingDuration;

    /**
     * @description The time when the screen recording stops. Specify the value in the HH:MM:SS format. The value is meaningful only when you set `Recording` to `PERIOD`.
     *
     * @example 08:59:00
     *
     * @var string
     */
    public $recordingEndTime;

    /**
     * @description The retention period of the screen recording file. Valid values: 1 to 180. Unit: days.
     *
     * @example 30
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
     * @description The time when the screen recording starts. Specify the value in the HH:MM:SS format. The value is meaningful only when you set the `Recording` parameter to `PERIOD`.
     *
     * @example 08:00:00
     *
     * @var string
     */
    public $recordingStartTime;

    /**
     * @description Specifies whether to enable the screen recording notification feature after end users log on to the Alibaba Cloud Workspace client.
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
     * @example Your desktop is being recorded.
     *
     * @var string
     */
    public $recordingUserNotifyMessage;

    /**
     * @description The region ID. You can call the [DescribeRegions](~~DescribeRegions~~) operation to query the regions supported by Elastic Desktop Service (EDS).
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

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
     * @description The client IP addresses that you want to delete from the whitelist.
     *
     * @var revokeAccessPolicyRule[]
     */
    public $revokeAccessPolicyRule;

    /**
     * @description The security group rules that you want to delete.
     *
     * @var revokeSecurityPolicyRule[]
     */
    public $revokeSecurityPolicyRule;

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
     * @description Specifies whether to enable the USB redirection feature.
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
    public $usbRedirect;

    /**
     * @description The USB redirection rules.
     *
     * @var usbSupplyRedirectRule[]
     */
    public $usbSupplyRedirectRule;

    /**
     * @description The multimedia redirection feature.
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
     *   high: high-definition (HD)
     *   low: smoothness
     *   lossless: no quality loss
     *   medium (default): scenario-specific adaptation
     *
     * @example low
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
     * @example off
     *
     * @var string
     */
    public $watermark;

    /**
     * @description Specifies whether to enable the anti-screen photo feature for invisible watermarks.
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
     * @description The watermark rotation. Valid values: -10 to -30.
     *
     * @example -10
     *
     * @var float
     */
    public $watermarkDegree;

    /**
     * @description The watermark font size. Valid values: 10 to 20.
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
     * @example 3
     *
     * @var int
     */
    public $watermarkRowAmount;

    /**
     * @description Specifies whether to enable the security priority feature for invisible watermarks.
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
    public $watermarkSecurity;

    /**
     * @description The watermark transparency.
     *
     * Valid values:
     *
     *   LIGHT (default)
     *   DARK
     *   MIDDLE
     *
     * @example LIGHT
     *
     * @var string
     */
    public $watermarkTransparency;

    /**
     * @description The watermark opacity. A larger value indicates more opaque watermarks. Valid values: 10 to 100.
     *
     * @example 10
     *
     * @var int
     */
    public $watermarkTransparencyValue;

    /**
     * @description The watermark content. You can select up to three items as the watermark content. Separate multiple items with commas (,).
     *
     * Valid values:
     *
     *   EndUserId: the username
     *   Custom: the custom text
     *   DesktopIp: the IP address of the cloud computer
     *   ClientIp: the IP address of the Alibaba Cloud Workspace client
     *   HostName: the rightmost 15 digits of the cloud computer ID
     *   ClientTime: the current time displayed on the cloud computer
     *
     * @example EndUserId
     *
     * @var string
     */
    public $watermarkType;

    /**
     * @description Specifies whether to provide the AI Assistant function in the DesktopAssistant when the cloud computer is accessed from the Alibaba Cloud Workspace desktop clients (including the Windows client and the macOS client).
     *
     * - on: the AI Aisstant function is provided.
     * @example on
     *
     * @var string
     */
    public $wyAssistant;
    protected $_name = [
        'adminAccess'                   => 'AdminAccess',
        'appContentProtection'          => 'AppContentProtection',
        'authorizeAccessPolicyRule'     => 'AuthorizeAccessPolicyRule',
        'authorizeSecurityPolicyRule'   => 'AuthorizeSecurityPolicyRule',
        'cameraRedirect'                => 'CameraRedirect',
        'clientType'                    => 'ClientType',
        'clipboard'                     => 'Clipboard',
        'deviceRedirects'               => 'DeviceRedirects',
        'deviceRules'                   => 'DeviceRules',
        'domainList'                    => 'DomainList',
        'domainResolveRule'             => 'DomainResolveRule',
        'domainResolveRuleType'         => 'DomainResolveRuleType',
        'endUserApplyAdminCoordinate'   => 'EndUserApplyAdminCoordinate',
        'endUserGroupCoordinate'        => 'EndUserGroupCoordinate',
        'gpuAcceleration'               => 'GpuAcceleration',
        'html5Access'                   => 'Html5Access',
        'html5FileTransfer'             => 'Html5FileTransfer',
        'internetCommunicationProtocol' => 'InternetCommunicationProtocol',
        'localDrive'                    => 'LocalDrive',
        'maxReconnectTime'              => 'MaxReconnectTime',
        'name'                          => 'Name',
        'netRedirect'                   => 'NetRedirect',
        'policyGroupId'                 => 'PolicyGroupId',
        'preemptLogin'                  => 'PreemptLogin',
        'preemptLoginUser'              => 'PreemptLoginUser',
        'printerRedirection'            => 'PrinterRedirection',
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
        'regionId'                      => 'RegionId',
        'remoteCoordinate'              => 'RemoteCoordinate',
        'revokeAccessPolicyRule'        => 'RevokeAccessPolicyRule',
        'revokeSecurityPolicyRule'      => 'RevokeSecurityPolicyRule',
        'scope'                         => 'Scope',
        'scopeValue'                    => 'ScopeValue',
        'usbRedirect'                   => 'UsbRedirect',
        'usbSupplyRedirectRule'         => 'UsbSupplyRedirectRule',
        'videoRedirect'                 => 'VideoRedirect',
        'visualQuality'                 => 'VisualQuality',
        'watermark'                     => 'Watermark',
        'watermarkAntiCam'              => 'WatermarkAntiCam',
        'watermarkColor'                => 'WatermarkColor',
        'watermarkDegree'               => 'WatermarkDegree',
        'watermarkFontSize'             => 'WatermarkFontSize',
        'watermarkFontStyle'            => 'WatermarkFontStyle',
        'watermarkPower'                => 'WatermarkPower',
        'watermarkRowAmount'            => 'WatermarkRowAmount',
        'watermarkSecurity'             => 'WatermarkSecurity',
        'watermarkTransparency'         => 'WatermarkTransparency',
        'watermarkTransparencyValue'    => 'WatermarkTransparencyValue',
        'watermarkType'                 => 'WatermarkType',
        'wyAssistant'                   => 'WyAssistant',
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
        if (null !== $this->cameraRedirect) {
            $res['CameraRedirect'] = $this->cameraRedirect;
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->netRedirect) {
            $res['NetRedirect'] = $this->netRedirect;
        }
        if (null !== $this->policyGroupId) {
            $res['PolicyGroupId'] = $this->policyGroupId;
        }
        if (null !== $this->preemptLogin) {
            $res['PreemptLogin'] = $this->preemptLogin;
        }
        if (null !== $this->preemptLoginUser) {
            $res['PreemptLoginUser'] = $this->preemptLoginUser;
        }
        if (null !== $this->printerRedirection) {
            $res['PrinterRedirection'] = $this->printerRedirection;
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->remoteCoordinate) {
            $res['RemoteCoordinate'] = $this->remoteCoordinate;
        }
        if (null !== $this->revokeAccessPolicyRule) {
            $res['RevokeAccessPolicyRule'] = [];
            if (null !== $this->revokeAccessPolicyRule && \is_array($this->revokeAccessPolicyRule)) {
                $n = 0;
                foreach ($this->revokeAccessPolicyRule as $item) {
                    $res['RevokeAccessPolicyRule'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->revokeSecurityPolicyRule) {
            $res['RevokeSecurityPolicyRule'] = [];
            if (null !== $this->revokeSecurityPolicyRule && \is_array($this->revokeSecurityPolicyRule)) {
                $n = 0;
                foreach ($this->revokeSecurityPolicyRule as $item) {
                    $res['RevokeSecurityPolicyRule'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }
        if (null !== $this->scopeValue) {
            $res['ScopeValue'] = $this->scopeValue;
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
        if (null !== $this->wyAssistant) {
            $res['WyAssistant'] = $this->wyAssistant;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyPolicyGroupRequest
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
                $n                                = 0;
                foreach ($map['AuthorizeAccessPolicyRule'] as $item) {
                    $model->authorizeAccessPolicyRule[$n++] = null !== $item ? authorizeAccessPolicyRule::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AuthorizeSecurityPolicyRule'])) {
            if (!empty($map['AuthorizeSecurityPolicyRule'])) {
                $model->authorizeSecurityPolicyRule = [];
                $n                                  = 0;
                foreach ($map['AuthorizeSecurityPolicyRule'] as $item) {
                    $model->authorizeSecurityPolicyRule[$n++] = null !== $item ? authorizeSecurityPolicyRule::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CameraRedirect'])) {
            $model->cameraRedirect = $map['CameraRedirect'];
        }
        if (isset($map['ClientType'])) {
            if (!empty($map['ClientType'])) {
                $model->clientType = [];
                $n                 = 0;
                foreach ($map['ClientType'] as $item) {
                    $model->clientType[$n++] = null !== $item ? clientType::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Clipboard'])) {
            $model->clipboard = $map['Clipboard'];
        }
        if (isset($map['DeviceRedirects'])) {
            if (!empty($map['DeviceRedirects'])) {
                $model->deviceRedirects = [];
                $n                      = 0;
                foreach ($map['DeviceRedirects'] as $item) {
                    $model->deviceRedirects[$n++] = null !== $item ? deviceRedirects::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DeviceRules'])) {
            if (!empty($map['DeviceRules'])) {
                $model->deviceRules = [];
                $n                  = 0;
                foreach ($map['DeviceRules'] as $item) {
                    $model->deviceRules[$n++] = null !== $item ? deviceRules::fromMap($item) : $item;
                }
            }
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NetRedirect'])) {
            $model->netRedirect = $map['NetRedirect'];
        }
        if (isset($map['PolicyGroupId'])) {
            $model->policyGroupId = $map['PolicyGroupId'];
        }
        if (isset($map['PreemptLogin'])) {
            $model->preemptLogin = $map['PreemptLogin'];
        }
        if (isset($map['PreemptLoginUser'])) {
            if (!empty($map['PreemptLoginUser'])) {
                $model->preemptLoginUser = $map['PreemptLoginUser'];
            }
        }
        if (isset($map['PrinterRedirection'])) {
            $model->printerRedirection = $map['PrinterRedirection'];
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RemoteCoordinate'])) {
            $model->remoteCoordinate = $map['RemoteCoordinate'];
        }
        if (isset($map['RevokeAccessPolicyRule'])) {
            if (!empty($map['RevokeAccessPolicyRule'])) {
                $model->revokeAccessPolicyRule = [];
                $n                             = 0;
                foreach ($map['RevokeAccessPolicyRule'] as $item) {
                    $model->revokeAccessPolicyRule[$n++] = null !== $item ? revokeAccessPolicyRule::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RevokeSecurityPolicyRule'])) {
            if (!empty($map['RevokeSecurityPolicyRule'])) {
                $model->revokeSecurityPolicyRule = [];
                $n                               = 0;
                foreach ($map['RevokeSecurityPolicyRule'] as $item) {
                    $model->revokeSecurityPolicyRule[$n++] = null !== $item ? revokeSecurityPolicyRule::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }
        if (isset($map['ScopeValue'])) {
            if (!empty($map['ScopeValue'])) {
                $model->scopeValue = $map['ScopeValue'];
            }
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
        if (isset($map['WyAssistant'])) {
            $model->wyAssistant = $map['WyAssistant'];
        }

        return $model;
    }
}

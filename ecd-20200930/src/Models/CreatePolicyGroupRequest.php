<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\CreatePolicyGroupRequest\authorizeAccessPolicyRule;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreatePolicyGroupRequest\authorizeSecurityPolicyRule;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreatePolicyGroupRequest\clientType;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreatePolicyGroupRequest\domainResolveRule;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreatePolicyGroupRequest\usbSupplyRedirectRule;
use AlibabaCloud\Tea\Model;

class CreatePolicyGroupRequest extends Model
{
    /**
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
     *   off: Anti-screenshot is disabled. This value is the default value.
     *
     * <!-- -->
     *
     *   on: Anti-screenshot is enabled.
     *
     * <!-- -->
     * @example off
     *
     * @var string
     */
    public $appContentProtection;

    /**
     * @description The client IP address whitelists. Only the client IP addresses in whitelists can access the cloud desktop.
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
     *   off: Webcam redirection is disabled.
     *
     * <!-- -->
     *
     *   on: Webcam redirection is enabled. This value is the default value.
     *
     * <!-- -->
     * @example on
     *
     * @var string
     */
    public $cameraRedirect;

    /**
     * @description The logon methods. You can use this parameter to determine which clients can be used to connect to the cloud desktop.
     *
     * @var clientType[]
     */
    public $clientType;

    /**
     * @description The permissions on the clipboard.
     *
     * Valid values:
     *
     *   read: specifies one-way transfer
     *
     * <!-- -->
     *
     *   readwrite: specifies two-way transfer
     *
     * <!-- -->
     *
     *   off: disables both one-way and two-way transfer
     *
     * <!-- -->
     * @example off
     *
     * @var string
     */
    public $clipboard;

    /**
     * @description Access control for domain names. The wildcard character (\*) is supported for domain names. Separate multiple domain names with commas (,). Valid values:
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
     * @description The details of the domain name resolution policy.
     *
     * @var domainResolveRule[]
     */
    public $domainResolveRule;

    /**
     * @description The type of the domain name resolution policy.
     *
     * Valid values:
     *
     *   OFF
     *
     * <!-- -->
     *
     *   ON
     *
     * <!-- -->
     * @example OFF
     *
     * @var string
     */
    public $domainResolveRuleType;

    /**
     * @description Specifies whether to allow end users to seek assistance from the administrator. Valid values: ON OFF
     *
     * @example ON
     *
     * @var string
     */
    public $endUserApplyAdminCoordinate;

    /**
     * @description The switch for collaboration between end users. Valid values: ON OFF
     *
     * @example ON
     *
     * @var string
     */
    public $endUserGroupCoordinate;

    /**
     * @description Specifies whether to enable the image display quality feature for the Graphics cloud desktop. If you have high requirements for desktop performance and user experience, we recommend that you enable this feature. For example, you can enable this feature in professional design scenarios.
     *
     * Valid values:
     *
     *   off
     *
     * <!-- -->
     *
     *   on
     *
     * <!-- -->
     * @example off
     *
     * @var string
     */
    public $gpuAcceleration;

    /**
     * @description The policy for HTML5 client access.
     *
     * Valid values:
     *
     *   off: HTML5 client access is disabled. This value is the default value.
     *
     * <!-- -->
     *
     *   on: HTML5 client access is enabled.
     *
     * <!-- -->
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
     *   all: Files can be uploaded and downloaded between your computer and HTML5 clients.
     *
     * <!-- -->
     *
     *   download: Files on HTML5 clients can be downloaded to your computer.
     *
     * <!-- -->
     *
     *   upload: Files on your computer can be uploaded to HTML5 clients.
     *
     * <!-- -->
     *
     *   off: File transfer between HTML5 clients and your computer is disabled. This value is the default value.
     *
     * <!-- -->
     * @example off
     *
     * @var string
     */
    public $html5FileTransfer;

    /**
     * @description The protocol that you want to use for network communication. Valid values: -TCP: Only TCP is allowed. -BOTH: Automatic switch between TCP and UDP is allowed. Default value: TCP.
     *
     * @example both
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
     *
     * <!-- -->
     *
     *   readwrite: read and write
     *
     * <!-- -->
     *
     *   off:
     *
     * <!-- -->
     * @example off
     *
     * @var string
     */
    public $localDrive;

    /**
     * @description The name of the policy.
     *
     * @example testPolicyGroupName
     *
     * @var string
     */
    public $name;

    /**
     * @description Specifies whether to enable the network redirection feature.
     *
     * Valid values:
     *
     *   off (default): The network redirection feature is disabled.
     *
     * <!-- -->
     *
     *   on: The network redirection feature is enabled.
     *
     * <!-- -->
     * @example off
     *
     * @var string
     */
    public $netRedirect;

    /**
     * @description Specifies whether to allow user preemption.
     *
     * > To improve user experience and ensure data security, multiple end users cannot connect to the same cloud desktop at the same time. The default value of this parameter is `off`, and the value cannot be changed.
     * @example off
     *
     * @var string
     */
    public $preemptLogin;

    /**
     * @description The names of the users that are allowed to connect to the same cloud desktop at the same time. You can specify up to five usernames.
     *
     * > To improve user experience and ensure data security, we recommend that you disable the user preemption feature.
     * @example Alice
     *
     * @var string[]
     */
    public $preemptLoginUser;

    /**
     * @description The policy for printer redirection.
     *
     * Valid values:
     *
     *   off: Printer redirection is disabled.
     *
     * <!-- -->
     *
     *   on: Printer redirection is enabled.
     *
     * <!-- -->
     * @example on
     *
     * @var string
     */
    public $printerRedirection;

    /**
     * @description Specifies whether to enable the custom screen recording feature.
     *
     * Valid values:
     *
     *   off: Custom screen recording is disabled. This value is the default value.
     *
     * <!-- -->
     *
     *   on: Custom screen recording is enabled.
     *
     * <!-- -->
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
     * @description Specifies whether to enable screen recording.
     *
     * Valid values:
     *
     *   ALLTIME: All operations that are performed by end users on cloud desktops are recorded. The recording starts immediately when end users connect to cloud desktops and ends when the end users disconnect from the cloud desktops.
     *
     * <!-- -->
     *
     *   PERIOD: The operations that are performed by end users on cloud desktops during a specified period of time are recorded. You must set the start time and end time for the recording period.
     *
     * <!-- -->
     *
     *   OFF: Screen recording is disabled.
     *
     * <!-- -->
     * @example OFF
     *
     * @var string
     */
    public $recording;

    /**
     * @description Specifies whether to record audio data during the screen recording. Valid values:
     *
     *   on: records audio and video data
     *   off: records only video data
     *
     * @example on
     *
     * @var string
     */
    public $recordingAudio;

    /**
     * @description The duration from the time when the screen recording starts to the time when the screen recording stops. If you specify the Recording parameter, you must also specify the RecordingDuration parameter. When the specified duration ends, a recording file is generated.
     *
     * @example 15
     *
     * @var int
     */
    public $recordingDuration;

    /**
     * @description The time when the screen recording stops. Specify the value in the HH:MM:SS format. The value of this parameter is valid only if you set the Recording parameter to PERIOD.
     *
     * @example 08:59:00
     *
     * @var string
     */
    public $recordingEndTime;

    /**
     * @description The duration in which the screen recording is valid. Unit: days.
     *
     * @example 15
     *
     * @var int
     */
    public $recordingExpires;

    /**
     * @description The frame rate of screen recording.
     *
     * Valid values:
     *
     *   2
     *
     *   5
     *
     *  10
     *
     *   15
     *
     * @example 2
     *
     * @var int
     */
    public $recordingFps;

    /**
     * @description The time when screen recording starts. Specify the value in the HH:MM:SS format. The value of this parameter is valid only if you set the Recording parameter to PERIOD.
     *
     * @example 08:00:00
     *
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
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The permission to control the keyboard and the mouse during remote assistance.
     *
     * Valid values:
     *
     *    optionalControl: By default, this feature is disabled. You can enable it by applying permissions.
     *
     *   fullControl: The permission is granted.
     *
     * <!-- -->
     *
     *   disableControl: The permission is revoked.
     *
     * <!-- -->
     * @example fullControl
     *
     * @var string
     */
    public $remoteCoordinate;

    /**
     * @description The effective scope of the policy. Valid values:
     *
     *   GLOBAL: The policy takes effect globally.
     *   IP: The policy takes effect for specified IP addresses.
     *
     * @example GLOBAL
     *
     * @var string
     */
    public $scope;

    /**
     * @description The effective CIDR block ranges. If you set the Scope parameter to IP, you must specify this parameter.
     *
     * @var string[]
     */
    public $scopeValue;

    /**
     * @description Specifies whether to enable USB redirection.
     *
     * Valid values:
     *
     *   off: USB redirection is disabled. This value is the default value.
     *
     * <!-- -->
     *
     *   on: USB redirection is enabled.
     *
     * <!-- -->
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
     * @description Specifies whether to enable the multimedia redirection feature. Valid values:
     *
     *   on: Multimedia redirection is enabled.
     *   off: Multimedia redirection is disabled.
     *
     * @example on
     *
     * @var string
     */
    public $videoRedirect;

    /**
     * @description The policy for image display quality.
     *
     * Valid values:
     *
     *   high
     *
     * <!-- -->
     *
     *   low
     *
     * <!-- -->
     *
     *   lossless
     *
     * <!-- -->
     *
     *   medium: adaptive. This value is the default value.
     *
     * <!-- -->
     * @example medium
     *
     * @var string
     */
    public $visualQuality;

    /**
     * @description Specifies whether to enable watermarking.
     *
     * Valid values:
     *
     *   off: Watermarking is disabled. This value is the default value.
     *
     * <!-- -->
     *
     *   on: Watermarking is enabled.
     *
     * <!-- -->
     * @example off
     *
     * @var string
     */
    public $watermark;

    /**
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
     * @description The inclination angle of the watermark. Valid values: -10 to -30.
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
     * @description The security priority for invisible watermarks. Valid values: on and off.
     *
     * @example on
     *
     * @var string
     */
    public $watermarkSecurity;

    /**
     * @description The transparency of the watermark.
     *
     * Valid values:
     *
     *   LIGHT
     *
     * <!-- -->
     *
     *   DARK
     *
     * <!-- -->
     *
     *   MIDDLE
     *
     * <!-- -->
     * @example LIGHT
     *
     * @var string
     */
    public $watermarkTransparency;

    /**
     * @description The transparency of the watermark. A larger value specifies that the watermark is less transparent. Valid values: 10 to 100.
     *
     * @example 10
     *
     * @var int
     */
    public $watermarkTransparencyValue;

    /**
     * @description The type of the watermark. You can specify multiple types of watermarks at the same time. Separate multiple watermark types with commas (,).
     *
     * Valid values:
     *
     *   EndUserId: The ID of the end user is displayed.
     *
     * <!-- -->
     *
     *   HostName: The rightmost 15 characters of the cloud desktop ID are displayed.
     *
     * <!-- -->
     * @example EndUserId
     *
     * @var string
     */
    public $watermarkType;
    protected $_name = [
        'adminAccess'                   => 'AdminAccess',
        'appContentProtection'          => 'AppContentProtection',
        'authorizeAccessPolicyRule'     => 'AuthorizeAccessPolicyRule',
        'authorizeSecurityPolicyRule'   => 'AuthorizeSecurityPolicyRule',
        'cameraRedirect'                => 'CameraRedirect',
        'clientType'                    => 'ClientType',
        'clipboard'                     => 'Clipboard',
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
        'name'                          => 'Name',
        'netRedirect'                   => 'NetRedirect',
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->netRedirect) {
            $res['NetRedirect'] = $this->netRedirect;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePolicyGroupRequest
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NetRedirect'])) {
            $model->netRedirect = $map['NetRedirect'];
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

        return $model;
    }
}

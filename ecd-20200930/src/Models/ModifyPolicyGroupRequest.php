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
     * @description Specifies whether the end user has administrator permissions after the end user connects to the cloud desktop.
     *
     * >  This parameter is in invitational preview and not available to the public.
     * @example deny
     *
     * @var string
     */
    public $adminAccess;

    /**
     * @description Specifies whether to enable the anti-screenshot feature. Valid values:
     *
     * on
     * off
     *
     * Default value: off.
     * @example on
     *
     * @var string
     */
    public $appContentProtection;

    /**
     * @description The client CIDR blocks in the whitelist.
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
     * @description Specifies whether to enable the webcam redirection feature. Valid values:
     *
     * on
     * off
     *
     * Default value: on.
     * @example on
     *
     * @var string
     */
    public $cameraRedirect;

    /**
     * @description The logon methods.
     *
     * @var clientType[]
     */
    public $clientType;

    /**
     * @description The permissions on clipboards. Valid values:
     *
     *   read: specifies one-way transfer. You can copy data from your computer to cloud desktops, but cannot copy data from cloud desktops to your computer.
     *   readwrite: specifies two-way transfer. You can copy data between your computer and cloud desktops.
     *   off: specifies that the two-way transfer is disabled. You cannot copy data between your computer and cloud desktops.
     *
     * @example off
     *
     * @var string
     */
    public $clipboard;

    /**
     * @var deviceRedirects[]
     */
    public $deviceRedirects;

    /**
     * @var deviceRules[]
     */
    public $deviceRules;

    /**
     * @description The domain blacklist or whitelist. Wildcard domains are supported. Separate domain names with commas (,). Valid values:
     *
     *   [black:],example1.com,example2.com: the domain name blacklist.
     *   [white:],example1.com,example2.com: the domain name whitelist.
     *
     * @example [black:],example1.com,example2.com
     *
     * @var string
     */
    public $domainList;

    /**
     * @description The details of the DNS rule.
     *
     * @var domainResolveRule[]
     */
    public $domainResolveRule;

    /**
     * @description The DNS rule type.
     *
     * @example OFF
     *
     * @var string
     */
    public $domainResolveRuleType;

    /**
     * @description The user applies for the administrator assistance switch. Value range:
     * on
     * off
     *
     * @example on
     *
     * @var string
     */
    public $endUserApplyAdminCoordinate;

    /**
     * @description The flow collaboration switch between users. Value range:
     * on
     * off
     *
     * @example on
     *
     * @var string
     */
    public $endUserGroupCoordinate;

    /**
     * @description Specifies whether to enable the image display quality feature for the Graphics cloud desktop. If your business requires high desktop performance and optimal user experience, we recommend that you enable this feature. For example, you can enable this policy in professional design scenarios. Valid values:
     *
     * on
     * off
     *
     * @example off
     *
     * @var string
     */
    public $gpuAcceleration;

    /**
     * @description Specifies whether to allow the access from HTM5 clients to a cloud desktop. Valid values:
     *
     *   on: allows the access.
     *   off: denies the access.
     *
     * >  We recommend that you use the ClientType-related parameters to control the EDS client type for cloud desktop logon.
     * @example off
     *
     * @var string
     */
    public $html5Access;

    /**
     * @description The file transfer policy for HTML5 clients. Valid values:
     *
     *   off: Files cannot be uploaded from or downloaded to HTML5 clients.
     *   upload: Files can be uploaded from HTML5 clients.
     *   download: Files can be downloaded to HTML5 clients.
     *   all: Files can be uploaded from and downloaded to HTML5 clients.
     *
     * Default value: off.
     * @example off
     *
     * @var string
     */
    public $html5FileTransfer;

    /**
     * @description The protocol that you want to use for network communication. Valid values:
     *
     * TCP: Only the TCP protocol is used.
     * BOTH: allows automatic switchover between the TCP protocol and the UDP protocol.
     *
     * Default value: TCP.
     * @example BOTH
     *
     * @var string
     */
    public $internetCommunicationProtocol;

    /**
     * @description The permissions on local disk mapping. Valid values:
     *
     *   read: read-only permissions. Local disks are mapped to cloud desktops. You can only read (copy) local files but cannot modify them.
     *   readwrite: read and write permissions. Local disks are mapped to cloud desktops. You can read (copy) and modify local files.
     *   off: no permissions. Local disks are not mapped to cloud desktops.
     *
     * @example off
     *
     * @var string
     */
    public $localDrive;

    /**
     * @var int
     */
    public $maxReconnectTime;

    /**
     * @description The name of the policy.
     *
     * @example testPolicyGroupName
     *
     * @var string
     */
    public $name;

    /**
     * @description The network redirection feature. Valid values:
     *
     * on
     * off
     *
     * Default value: off.
     * @example on
     *
     * @var string
     */
    public $netRedirect;

    /**
     * @description The ID of the policy.
     *
     * This parameter is required.
     * @example pg-gx2x1dhsmthe9****
     *
     * @var string
     */
    public $policyGroupId;

    /**
     * @description Specifies whether to allow user preemption. Default value: off. You cannot change the value.
     *
     * @example off
     *
     * @var string
     */
    public $preemptLogin;

    /**
     * @description The names of the users that are allowed to connect to the same cloud desktop at the same time. You can specify up to five usernames.
     *
     * > To improve user experience and ensure data security, multiple end users cannot connect to the same cloud desktop at the same time.
     * @var string[]
     */
    public $preemptLoginUser;

    /**
     * @description Specifies whether to enable printer redirection. Valid values:
     *
     *   off: disables printer redirection.
     *   on: enables printer redirection.
     *
     * @example off
     *
     * @var string
     */
    public $printerRedirection;

    /**
     * @description Specifies whether to enable the custom screen recording feature. Valid values:
     *
     * on
     * off
     *
     * Default value: off.
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
     * @description Specifies whether to enable screen recording. Valid values:
     *
     * OFF: disabled.
     * ALLTIME: All operations that are performed by an end user on the cloud desktop are recorded. The recording immediately starts when the end user connects to the cloud desktop and ends after the end user disconnects from the cloud desktop.
     * PERIOD: The operations that are performed by an end user on the cloud desktop during a specific period of time are recorded. You must specify the start time and the end time of the recording.
     *
     * @example OFF
     *
     * @var string
     */
    public $recording;

    /**
     * @description Specifies whether to record the sound that is generated on the cloud desktop during screen recording. Valid values:
     *
     * on
     * off
     *
     * @example on
     *
     * @var string
     */
    public $recordingAudio;

    /**
     * @description This parameter takes effect based on the Recording-related parameters. You can specify a time range for screen recording, and recording files are generated after the specified end time is reached.
     *
     * @example 15
     *
     * @var int
     */
    public $recordingDuration;

    /**
     * @description The time when the screen recording ends. Specify the value in the HH:MM:SS format. The value is valid only when you set the Recording parameter to PERIOD.
     *
     * @example 08:59:00
     *
     * @var string
     */
    public $recordingEndTime;

    /**
     * @description The period in which the screen recording audit is valid. Valid values: 15 to 180. Unit: days.
     *
     * @example 30
     *
     * @var int
     */
    public $recordingExpires;

    /**
     * @description The frame rate of screen recording. Unit: fps. Valid values:
     *
     * 2
     * 5
     * 10
     * 15
     *
     * @example 5
     *
     * @var int
     */
    public $recordingFps;

    /**
     * @description The time when the screen recording starts. Specify the value in the HH:MM:SS format. The value is valid only when you set the Recording parameter to PERIOD.
     *
     * @example 08:00:00
     *
     * @var string
     */
    public $recordingStartTime;

    /**
     * @description Specifies whether to enable the screen recording notification feature. Valid values: on and off. on and off (default).
     *
     * @example off
     *
     * @var string
     */
    public $recordingUserNotify;

    /**
     * @description The content of the screen recording notification sent to the client. By default, you do not need to specify this parameter.
     *
     * @example Your desktop is being recorded.
     *
     * @var string
     */
    public $recordingUserNotifyMessage;

    /**
     * @description The ID of the region where the cloud desktop resides.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The permissions on the keyboard and mouse to control the cloud desktop during remote assistance. Valid values:
     *
     * fullControl: The keyboard and mouse can be fully controlled.
     * optionalControl: By default, this feature is disabled. You can apply for permissions to enable the feature.
     * disableControl: The keyboard and mouse cannot be controlled.
     *
     * @example fullControl
     *
     * @var string
     */
    public $remoteCoordinate;

    /**
     * @description The security group rules that you want to delete.
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
     * @description The effective scope of the policy. Valid values:
     *
     * GLOBAL: takes effect globally.
     * IP: takes effect based on the IP address.
     *
     * @example GLOBAL
     *
     * @var string
     */
    public $scope;

    /**
     * @description This parameter is required when the Scope parameter is set to IP.
     *
     * @var string[]
     */
    public $scopeValue;

    /**
     * @description Specifies whether to enable USB redirection. Valid values:
     *
     *   on: enables USB redirection.
     *   off: disables USB redirection.
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
     * @description Specify whether to enable the policy of image display quality. Valid values:
     *
     *   on: enables the policy of image display quality.
     *   off: disables the policy of image display quality.
     *
     * Default value: off.
     * @example low
     *
     * @var string
     */
    public $visualQuality;

    /**
     * @description Specifies whether to enable watermarking. Valid values:
     *
     *   on: enables watermarking.
     *   off: disables watermarking.
     *
     * @example off
     *
     * @var string
     */
    public $watermark;

    /**
     * @description Specifies whether to enable the anti-screen photo feature for invisible watermarks. on and off (default).
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
     * @description The inclination angle of the watermark. Value values: -10 to -30.
     *
     * @example -10
     *
     * @var float
     */
    public $watermarkDegree;

    /**
     * @description The font size of the watermark. Valid values: 10 to 50
     *
     * @example 10
     *
     * @var int
     */
    public $watermarkFontSize;

    /**
     * @description The font style of the watermark. Valid values:
     *
     * plain
     * bold
     *
     * @example plain
     *
     * @var string
     */
    public $watermarkFontStyle;

    /**
     * @description The watermark enhancement feature. Valid values: low, medium, and high.
     *
     * @example medium
     *
     * @var string
     */
    public $watermarkPower;

    /**
     * @description The number of watermark rows. This parameter is not in use.
     *
     * @example 3
     *
     * @var int
     */
    public $watermarkRowAmount;

    /**
     * @description The security priority rule for invisible watermarks. Valid values: on and off.
     *
     * @example off
     *
     * @var string
     */
    public $watermarkSecurity;

    /**
     * @description The transparency of the watermark. The valid values include:
     *
     *   LIGHT
     *   MIDDLE
     *   DARK
     *
     * @example LIGHT
     *
     * @var string
     */
    public $watermarkTransparency;

    /**
     * @description The transparency of the watermark. A larger value indicates a less transparent watermark. Valid values: 10 to 100.
     *
     * @example 10
     *
     * @var int
     */
    public $watermarkTransparencyValue;

    /**
     * @description The type of the watermark. You can specify multiple watermark types at a time. Separate watermark types with commas (,). Valid values:
     *
     *   EndUserId: the username
     *   HostName: the last 15 characters of the cloud desktop ID
     *
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

        return $model;
    }
}

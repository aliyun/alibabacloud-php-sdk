<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyPolicyGroupRequest\authorizeAccessPolicyRule;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyPolicyGroupRequest\authorizeSecurityPolicyRule;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyPolicyGroupRequest\clientType;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyPolicyGroupRequest\deviceRedirects;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyPolicyGroupRequest\deviceRules;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyPolicyGroupRequest\domainResolveRule;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyPolicyGroupRequest\revokeAccessPolicyRule;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyPolicyGroupRequest\revokeSecurityPolicyRule;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyPolicyGroupRequest\usbSupplyRedirectRule;

class ModifyPolicyGroupRequest extends Model
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
    public $domainList;
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
    public $endUserApplyAdminCoordinate;
    /**
     * @var string
     */
    public $endUserGroupCoordinate;
    /**
     * @var string
     */
    public $gpuAcceleration;
    /**
     * @var string
     */
    public $html5Access;
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
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $netRedirect;
    /**
     * @var string
     */
    public $policyGroupId;
    /**
     * @var string
     */
    public $preemptLogin;
    /**
     * @var string[]
     */
    public $preemptLoginUser;
    /**
     * @var string
     */
    public $printerRedirection;
    /**
     * @var string
     */
    public $recordContent;
    /**
     * @var int
     */
    public $recordContentExpires;
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
     * @var int
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
     * @var string
     */
    public $usbRedirect;
    /**
     * @var usbSupplyRedirectRule[]
     */
    public $usbSupplyRedirectRule;
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
     * @var string
     */
    public $watermarkTransparency;
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
        if (\is_array($this->authorizeAccessPolicyRule)) {
            Model::validateArray($this->authorizeAccessPolicyRule);
        }
        if (\is_array($this->authorizeSecurityPolicyRule)) {
            Model::validateArray($this->authorizeSecurityPolicyRule);
        }
        if (\is_array($this->clientType)) {
            Model::validateArray($this->clientType);
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
        if (\is_array($this->preemptLoginUser)) {
            Model::validateArray($this->preemptLoginUser);
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
                $n1                               = 0;
                foreach ($this->authorizeAccessPolicyRule as $item1) {
                    $res['AuthorizeAccessPolicyRule'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->authorizeSecurityPolicyRule) {
            if (\is_array($this->authorizeSecurityPolicyRule)) {
                $res['AuthorizeSecurityPolicyRule'] = [];
                $n1                                 = 0;
                foreach ($this->authorizeSecurityPolicyRule as $item1) {
                    $res['AuthorizeSecurityPolicyRule'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->cameraRedirect) {
            $res['CameraRedirect'] = $this->cameraRedirect;
        }

        if (null !== $this->clientType) {
            if (\is_array($this->clientType)) {
                $res['ClientType'] = [];
                $n1                = 0;
                foreach ($this->clientType as $item1) {
                    $res['ClientType'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->clipboard) {
            $res['Clipboard'] = $this->clipboard;
        }

        if (null !== $this->deviceRedirects) {
            if (\is_array($this->deviceRedirects)) {
                $res['DeviceRedirects'] = [];
                $n1                     = 0;
                foreach ($this->deviceRedirects as $item1) {
                    $res['DeviceRedirects'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->deviceRules) {
            if (\is_array($this->deviceRules)) {
                $res['DeviceRules'] = [];
                $n1                 = 0;
                foreach ($this->deviceRules as $item1) {
                    $res['DeviceRules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->domainList) {
            $res['DomainList'] = $this->domainList;
        }

        if (null !== $this->domainResolveRule) {
            if (\is_array($this->domainResolveRule)) {
                $res['DomainResolveRule'] = [];
                $n1                       = 0;
                foreach ($this->domainResolveRule as $item1) {
                    $res['DomainResolveRule'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->preemptLoginUser)) {
                $res['PreemptLoginUser'] = [];
                $n1                      = 0;
                foreach ($this->preemptLoginUser as $item1) {
                    $res['PreemptLoginUser'][$n1++] = $item1;
                }
            }
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
            if (\is_array($this->revokeAccessPolicyRule)) {
                $res['RevokeAccessPolicyRule'] = [];
                $n1                            = 0;
                foreach ($this->revokeAccessPolicyRule as $item1) {
                    $res['RevokeAccessPolicyRule'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->revokeSecurityPolicyRule) {
            if (\is_array($this->revokeSecurityPolicyRule)) {
                $res['RevokeSecurityPolicyRule'] = [];
                $n1                              = 0;
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
                $n1                = 0;
                foreach ($this->scopeValue as $item1) {
                    $res['ScopeValue'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->usbRedirect) {
            $res['UsbRedirect'] = $this->usbRedirect;
        }

        if (null !== $this->usbSupplyRedirectRule) {
            if (\is_array($this->usbSupplyRedirectRule)) {
                $res['UsbSupplyRedirectRule'] = [];
                $n1                           = 0;
                foreach ($this->usbSupplyRedirectRule as $item1) {
                    $res['UsbSupplyRedirectRule'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
                $n1                               = 0;
                foreach ($map['AuthorizeAccessPolicyRule'] as $item1) {
                    $model->authorizeAccessPolicyRule[$n1++] = authorizeAccessPolicyRule::fromMap($item1);
                }
            }
        }

        if (isset($map['AuthorizeSecurityPolicyRule'])) {
            if (!empty($map['AuthorizeSecurityPolicyRule'])) {
                $model->authorizeSecurityPolicyRule = [];
                $n1                                 = 0;
                foreach ($map['AuthorizeSecurityPolicyRule'] as $item1) {
                    $model->authorizeSecurityPolicyRule[$n1++] = authorizeSecurityPolicyRule::fromMap($item1);
                }
            }
        }

        if (isset($map['CameraRedirect'])) {
            $model->cameraRedirect = $map['CameraRedirect'];
        }

        if (isset($map['ClientType'])) {
            if (!empty($map['ClientType'])) {
                $model->clientType = [];
                $n1                = 0;
                foreach ($map['ClientType'] as $item1) {
                    $model->clientType[$n1++] = clientType::fromMap($item1);
                }
            }
        }

        if (isset($map['Clipboard'])) {
            $model->clipboard = $map['Clipboard'];
        }

        if (isset($map['DeviceRedirects'])) {
            if (!empty($map['DeviceRedirects'])) {
                $model->deviceRedirects = [];
                $n1                     = 0;
                foreach ($map['DeviceRedirects'] as $item1) {
                    $model->deviceRedirects[$n1++] = deviceRedirects::fromMap($item1);
                }
            }
        }

        if (isset($map['DeviceRules'])) {
            if (!empty($map['DeviceRules'])) {
                $model->deviceRules = [];
                $n1                 = 0;
                foreach ($map['DeviceRules'] as $item1) {
                    $model->deviceRules[$n1++] = deviceRules::fromMap($item1);
                }
            }
        }

        if (isset($map['DomainList'])) {
            $model->domainList = $map['DomainList'];
        }

        if (isset($map['DomainResolveRule'])) {
            if (!empty($map['DomainResolveRule'])) {
                $model->domainResolveRule = [];
                $n1                       = 0;
                foreach ($map['DomainResolveRule'] as $item1) {
                    $model->domainResolveRule[$n1++] = domainResolveRule::fromMap($item1);
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
                $model->preemptLoginUser = [];
                $n1                      = 0;
                foreach ($map['PreemptLoginUser'] as $item1) {
                    $model->preemptLoginUser[$n1++] = $item1;
                }
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
                $n1                            = 0;
                foreach ($map['RevokeAccessPolicyRule'] as $item1) {
                    $model->revokeAccessPolicyRule[$n1++] = revokeAccessPolicyRule::fromMap($item1);
                }
            }
        }

        if (isset($map['RevokeSecurityPolicyRule'])) {
            if (!empty($map['RevokeSecurityPolicyRule'])) {
                $model->revokeSecurityPolicyRule = [];
                $n1                              = 0;
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
                $n1                = 0;
                foreach ($map['ScopeValue'] as $item1) {
                    $model->scopeValue[$n1++] = $item1;
                }
            }
        }

        if (isset($map['UsbRedirect'])) {
            $model->usbRedirect = $map['UsbRedirect'];
        }

        if (isset($map['UsbSupplyRedirectRule'])) {
            if (!empty($map['UsbSupplyRedirectRule'])) {
                $model->usbSupplyRedirectRule = [];
                $n1                           = 0;
                foreach ($map['UsbSupplyRedirectRule'] as $item1) {
                    $model->usbSupplyRedirectRule[$n1++] = usbSupplyRedirectRule::fromMap($item1);
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

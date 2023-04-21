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
     * @example off
     *
     * @var string
     */
    public $appContentProtection;

    /**
     * @var authorizeAccessPolicyRules[]
     */
    public $authorizeAccessPolicyRules;

    /**
     * @var authorizeSecurityPolicyRules[]
     */
    public $authorizeSecurityPolicyRules;

    /**
     * @example on
     *
     * @var string
     */
    public $cameraRedirect;

    /**
     * @var clientTypes[]
     */
    public $clientTypes;

    /**
     * @example readwrite
     *
     * @var string
     */
    public $clipboard;

    /**
     * @example off
     *
     * @var string
     */
    public $domainList;

    /**
     * @var domainResolveRule[]
     */
    public $domainResolveRule;

    /**
     * @example on
     *
     * @var string
     */
    public $domainResolveRuleType;

    /**
     * @example 1
     *
     * @var int
     */
    public $edsCount;

    /**
     * @example on
     *
     * @var string
     */
    public $endUserApplyAdminCoordinate;

    /**
     * @example on
     *
     * @var string
     */
    public $endUserGroupCoordinate;

    /**
     * @example off
     *
     * @var string
     */
    public $gpuAcceleration;

    /**
     * @example off
     *
     * @var string
     */
    public $html5Access;

    /**
     * @example off
     *
     * @var string
     */
    public $html5FileTransfer;

    /**
     * @example BOTH
     *
     * @var string
     */
    public $internetCommunicationProtocol;

    /**
     * @example readwrite
     *
     * @var string
     */
    public $localDrive;

    /**
     * @example testPolicyGroupName
     *
     * @var string
     */
    public $name;

    /**
     * @example off
     *
     * @var string
     */
    public $netRedirect;

    /**
     * @var netRedirectRule[]
     */
    public $netRedirectRule;

    /**
     * @example pg-gx2x1dhsmthe9****
     *
     * @var string
     */
    public $policyGroupId;

    /**
     * @example SYSTEM
     *
     * @var string
     */
    public $policyGroupType;

    /**
     * @example AVAILABLE
     *
     * @var string
     */
    public $policyStatus;

    /**
     * @example off
     *
     * @var string
     */
    public $preemptLogin;

    /**
     * @var string[]
     */
    public $preemptLoginUsers;

    /**
     * @example on
     *
     * @var string
     */
    public $printerRedirection;

    /**
     * @example off
     *
     * @var string
     */
    public $recordContent;

    /**
     * @example 30
     *
     * @var int
     */
    public $recordContentExpires;

    /**
     * @example OFF
     *
     * @var string
     */
    public $recording;

    /**
     * @example on
     *
     * @var string
     */
    public $recordingAudio;

    /**
     * @example 10
     *
     * @var int
     */
    public $recordingDuration;

    /**
     * @example 08:59:00
     *
     * @var string
     */
    public $recordingEndTime;

    /**
     * @example 15
     *
     * @var int
     */
    public $recordingExpires;

    /**
     * @example 5
     *
     * @var int
     */
    public $recordingFps;

    /**
     * @example 08:00:00
     *
     * @var string
     */
    public $recordingStartTime;

    /**
     * @example fullControl
     *
     * @var string
     */
    public $remoteCoordinate;

    /**
     * @example GLOBAL
     *
     * @var string
     */
    public $scope;

    /**
     * @var string[]
     */
    public $scopeValue;

    /**
     * @example on
     *
     * @var string
     */
    public $usbRedirect;

    /**
     * @var usbSupplyRedirectRule[]
     */
    public $usbSupplyRedirectRule;

    /**
     * @example off
     *
     * @var string
     */
    public $videoRedirect;

    /**
     * @example medium
     *
     * @var string
     */
    public $visualQuality;

    /**
     * @example on
     *
     * @var string
     */
    public $watermark;

    /**
     * @example 0
     *
     * @var int
     */
    public $watermarkColor;

    /**
     * @example test
     *
     * @var string
     */
    public $watermarkCustomText;

    /**
     * @example -10
     *
     * @var float
     */
    public $watermarkDegree;

    /**
     * @example 10
     *
     * @var int
     */
    public $watermarkFontSize;

    /**
     * @example plain
     *
     * @var string
     */
    public $watermarkFontStyle;

    /**
     * @example 5
     *
     * @var int
     */
    public $watermarkRowAmount;

    /**
     * @example LIGHT
     *
     * @var string
     */
    public $watermarkTransparency;

    /**
     * @example 10
     *
     * @var int
     */
    public $watermarkTransparencyValue;

    /**
     * @example EndUserId
     *
     * @var string
     */
    public $watermarkType;
    protected $_name = [
        'appContentProtection'          => 'AppContentProtection',
        'authorizeAccessPolicyRules'    => 'AuthorizeAccessPolicyRules',
        'authorizeSecurityPolicyRules'  => 'AuthorizeSecurityPolicyRules',
        'cameraRedirect'                => 'CameraRedirect',
        'clientTypes'                   => 'ClientTypes',
        'clipboard'                     => 'Clipboard',
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
        'name'                          => 'Name',
        'netRedirect'                   => 'NetRedirect',
        'netRedirectRule'               => 'NetRedirectRule',
        'policyGroupId'                 => 'PolicyGroupId',
        'policyGroupType'               => 'PolicyGroupType',
        'policyStatus'                  => 'PolicyStatus',
        'preemptLogin'                  => 'PreemptLogin',
        'preemptLoginUsers'             => 'PreemptLoginUsers',
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
        'remoteCoordinate'              => 'RemoteCoordinate',
        'scope'                         => 'Scope',
        'scopeValue'                    => 'ScopeValue',
        'usbRedirect'                   => 'UsbRedirect',
        'usbSupplyRedirectRule'         => 'UsbSupplyRedirectRule',
        'videoRedirect'                 => 'VideoRedirect',
        'visualQuality'                 => 'VisualQuality',
        'watermark'                     => 'Watermark',
        'watermarkColor'                => 'WatermarkColor',
        'watermarkCustomText'           => 'WatermarkCustomText',
        'watermarkDegree'               => 'WatermarkDegree',
        'watermarkFontSize'             => 'WatermarkFontSize',
        'watermarkFontStyle'            => 'WatermarkFontStyle',
        'watermarkRowAmount'            => 'WatermarkRowAmount',
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
        if (null !== $this->watermarkRowAmount) {
            $res['WatermarkRowAmount'] = $this->watermarkRowAmount;
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
        if (isset($map['WatermarkRowAmount'])) {
            $model->watermarkRowAmount = $map['WatermarkRowAmount'];
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyPolicyGroupRequest\authorizeAccessPolicyRule;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyPolicyGroupRequest\authorizeSecurityPolicyRule;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyPolicyGroupRequest\clientType;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyPolicyGroupRequest\revokeAccessPolicyRule;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyPolicyGroupRequest\revokeSecurityPolicyRule;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyPolicyGroupRequest\usbSupplyRedirectRule;
use AlibabaCloud\Tea\Model;

class ModifyPolicyGroupRequest extends Model
{
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
     * @var string
     */
    public $domainList;

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
    public $localDrive;

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
    public $regionId;

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
    public $usbRedirect;

    /**
     * @var usbSupplyRedirectRule[]
     */
    public $usbSupplyRedirectRule;

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
    public $watermarkTransparency;

    /**
     * @var string
     */
    public $watermarkType;
    protected $_name = [
        'appContentProtection'        => 'AppContentProtection',
        'authorizeAccessPolicyRule'   => 'AuthorizeAccessPolicyRule',
        'authorizeSecurityPolicyRule' => 'AuthorizeSecurityPolicyRule',
        'cameraRedirect'              => 'CameraRedirect',
        'clientType'                  => 'ClientType',
        'clipboard'                   => 'Clipboard',
        'domainList'                  => 'DomainList',
        'gpuAcceleration'             => 'GpuAcceleration',
        'html5Access'                 => 'Html5Access',
        'html5FileTransfer'           => 'Html5FileTransfer',
        'localDrive'                  => 'LocalDrive',
        'name'                        => 'Name',
        'netRedirect'                 => 'NetRedirect',
        'policyGroupId'               => 'PolicyGroupId',
        'preemptLogin'                => 'PreemptLogin',
        'preemptLoginUser'            => 'PreemptLoginUser',
        'printerRedirection'          => 'PrinterRedirection',
        'recordContent'               => 'RecordContent',
        'recordContentExpires'        => 'RecordContentExpires',
        'recording'                   => 'Recording',
        'recordingEndTime'            => 'RecordingEndTime',
        'recordingExpires'            => 'RecordingExpires',
        'recordingFps'                => 'RecordingFps',
        'recordingStartTime'          => 'RecordingStartTime',
        'regionId'                    => 'RegionId',
        'revokeAccessPolicyRule'      => 'RevokeAccessPolicyRule',
        'revokeSecurityPolicyRule'    => 'RevokeSecurityPolicyRule',
        'usbRedirect'                 => 'UsbRedirect',
        'usbSupplyRedirectRule'       => 'UsbSupplyRedirectRule',
        'visualQuality'               => 'VisualQuality',
        'watermark'                   => 'Watermark',
        'watermarkTransparency'       => 'WatermarkTransparency',
        'watermarkType'               => 'WatermarkType',
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
        if (null !== $this->gpuAcceleration) {
            $res['GpuAcceleration'] = $this->gpuAcceleration;
        }
        if (null !== $this->html5Access) {
            $res['Html5Access'] = $this->html5Access;
        }
        if (null !== $this->html5FileTransfer) {
            $res['Html5FileTransfer'] = $this->html5FileTransfer;
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (null !== $this->visualQuality) {
            $res['VisualQuality'] = $this->visualQuality;
        }
        if (null !== $this->watermark) {
            $res['Watermark'] = $this->watermark;
        }
        if (null !== $this->watermarkTransparency) {
            $res['WatermarkTransparency'] = $this->watermarkTransparency;
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
        if (isset($map['GpuAcceleration'])) {
            $model->gpuAcceleration = $map['GpuAcceleration'];
        }
        if (isset($map['Html5Access'])) {
            $model->html5Access = $map['Html5Access'];
        }
        if (isset($map['Html5FileTransfer'])) {
            $model->html5FileTransfer = $map['Html5FileTransfer'];
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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
        if (isset($map['VisualQuality'])) {
            $model->visualQuality = $map['VisualQuality'];
        }
        if (isset($map['Watermark'])) {
            $model->watermark = $map['Watermark'];
        }
        if (isset($map['WatermarkTransparency'])) {
            $model->watermarkTransparency = $map['WatermarkTransparency'];
        }
        if (isset($map['WatermarkType'])) {
            $model->watermarkType = $map['WatermarkType'];
        }

        return $model;
    }
}

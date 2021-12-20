<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\CreatePolicyGroupRequest\authorizeAccessPolicyRule;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreatePolicyGroupRequest\authorizeSecurityPolicyRule;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreatePolicyGroupRequest\clientType;
use AlibabaCloud\Tea\Model;

class CreatePolicyGroupRequest extends Model
{
    /**
     * @var authorizeAccessPolicyRule[]
     */
    public $authorizeAccessPolicyRule;

    /**
     * @var authorizeSecurityPolicyRule[]
     */
    public $authorizeSecurityPolicyRule;

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
    public $regionId;

    /**
     * @var string
     */
    public $usbRedirect;

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
    public $watermarkCustomText;

    /**
     * @var string
     */
    public $watermarkTransparency;

    /**
     * @var string
     */
    public $watermarkType;
    protected $_name = [
        'authorizeAccessPolicyRule'   => 'AuthorizeAccessPolicyRule',
        'authorizeSecurityPolicyRule' => 'AuthorizeSecurityPolicyRule',
        'clientType'                  => 'ClientType',
        'clipboard'                   => 'Clipboard',
        'domainList'                  => 'DomainList',
        'gpuAcceleration'             => 'GpuAcceleration',
        'html5Access'                 => 'Html5Access',
        'html5FileTransfer'           => 'Html5FileTransfer',
        'localDrive'                  => 'LocalDrive',
        'name'                        => 'Name',
        'preemptLogin'                => 'PreemptLogin',
        'preemptLoginUser'            => 'PreemptLoginUser',
        'printerRedirection'          => 'PrinterRedirection',
        'regionId'                    => 'RegionId',
        'usbRedirect'                 => 'UsbRedirect',
        'visualQuality'               => 'VisualQuality',
        'watermark'                   => 'Watermark',
        'watermarkCustomText'         => 'WatermarkCustomText',
        'watermarkTransparency'       => 'WatermarkTransparency',
        'watermarkType'               => 'WatermarkType',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->preemptLogin) {
            $res['PreemptLogin'] = $this->preemptLogin;
        }
        if (null !== $this->preemptLoginUser) {
            $res['PreemptLoginUser'] = $this->preemptLoginUser;
        }
        if (null !== $this->printerRedirection) {
            $res['PrinterRedirection'] = $this->printerRedirection;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->usbRedirect) {
            $res['UsbRedirect'] = $this->usbRedirect;
        }
        if (null !== $this->visualQuality) {
            $res['VisualQuality'] = $this->visualQuality;
        }
        if (null !== $this->watermark) {
            $res['Watermark'] = $this->watermark;
        }
        if (null !== $this->watermarkCustomText) {
            $res['WatermarkCustomText'] = $this->watermarkCustomText;
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
     * @return CreatePolicyGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['UsbRedirect'])) {
            $model->usbRedirect = $map['UsbRedirect'];
        }
        if (isset($map['VisualQuality'])) {
            $model->visualQuality = $map['VisualQuality'];
        }
        if (isset($map['Watermark'])) {
            $model->watermark = $map['Watermark'];
        }
        if (isset($map['WatermarkCustomText'])) {
            $model->watermarkCustomText = $map['WatermarkCustomText'];
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

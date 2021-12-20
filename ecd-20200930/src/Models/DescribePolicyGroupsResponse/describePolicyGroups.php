<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePolicyGroupsResponse;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePolicyGroupsResponse\describePolicyGroups\authorizeAccessPolicyRules;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePolicyGroupsResponse\describePolicyGroups\authorizeSecurityPolicyRules;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePolicyGroupsResponse\describePolicyGroups\clientTypes;
use AlibabaCloud\Tea\Model;

class describePolicyGroups extends Model
{
    /**
     * @var string
     */
    public $clipboard;

    /**
     * @var string
     */
    public $domainList;

    /**
     * @var int
     */
    public $edsCount;

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
    public $policyGroupId;

    /**
     * @var string
     */
    public $policyGroupType;

    /**
     * @var string
     */
    public $policyStatus;

    /**
     * @var string
     */
    public $preemptLogin;

    /**
     * @var string
     */
    public $printerRedirection;

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

    /**
     * @var authorizeAccessPolicyRules[]
     */
    public $authorizeAccessPolicyRules;

    /**
     * @var authorizeSecurityPolicyRules[]
     */
    public $authorizeSecurityPolicyRules;

    /**
     * @var clientTypes[]
     */
    public $clientTypes;

    /**
     * @var string[]
     */
    public $preemptLoginUsers;
    protected $_name = [
        'clipboard'                    => 'Clipboard',
        'domainList'                   => 'DomainList',
        'edsCount'                     => 'EdsCount',
        'gpuAcceleration'              => 'GpuAcceleration',
        'html5Access'                  => 'Html5Access',
        'html5FileTransfer'            => 'Html5FileTransfer',
        'localDrive'                   => 'LocalDrive',
        'name'                         => 'Name',
        'policyGroupId'                => 'PolicyGroupId',
        'policyGroupType'              => 'PolicyGroupType',
        'policyStatus'                 => 'PolicyStatus',
        'preemptLogin'                 => 'PreemptLogin',
        'printerRedirection'           => 'PrinterRedirection',
        'usbRedirect'                  => 'UsbRedirect',
        'visualQuality'                => 'VisualQuality',
        'watermark'                    => 'Watermark',
        'watermarkCustomText'          => 'WatermarkCustomText',
        'watermarkTransparency'        => 'WatermarkTransparency',
        'watermarkType'                => 'WatermarkType',
        'authorizeAccessPolicyRules'   => 'AuthorizeAccessPolicyRules',
        'authorizeSecurityPolicyRules' => 'AuthorizeSecurityPolicyRules',
        'clientTypes'                  => 'ClientTypes',
        'preemptLoginUsers'            => 'PreemptLoginUsers',
    ];

    public function validate()
    {
        Model::validateRequired('clipboard', $this->clipboard, true);
        Model::validateRequired('domainList', $this->domainList, true);
        Model::validateRequired('edsCount', $this->edsCount, true);
        Model::validateRequired('gpuAcceleration', $this->gpuAcceleration, true);
        Model::validateRequired('html5Access', $this->html5Access, true);
        Model::validateRequired('html5FileTransfer', $this->html5FileTransfer, true);
        Model::validateRequired('localDrive', $this->localDrive, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('policyGroupId', $this->policyGroupId, true);
        Model::validateRequired('policyGroupType', $this->policyGroupType, true);
        Model::validateRequired('policyStatus', $this->policyStatus, true);
        Model::validateRequired('preemptLogin', $this->preemptLogin, true);
        Model::validateRequired('printerRedirection', $this->printerRedirection, true);
        Model::validateRequired('usbRedirect', $this->usbRedirect, true);
        Model::validateRequired('visualQuality', $this->visualQuality, true);
        Model::validateRequired('watermark', $this->watermark, true);
        Model::validateRequired('watermarkCustomText', $this->watermarkCustomText, true);
        Model::validateRequired('watermarkTransparency', $this->watermarkTransparency, true);
        Model::validateRequired('watermarkType', $this->watermarkType, true);
        Model::validateRequired('authorizeAccessPolicyRules', $this->authorizeAccessPolicyRules, true);
        Model::validateRequired('authorizeSecurityPolicyRules', $this->authorizeSecurityPolicyRules, true);
        Model::validateRequired('clientTypes', $this->clientTypes, true);
        Model::validateRequired('preemptLoginUsers', $this->preemptLoginUsers, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clipboard) {
            $res['Clipboard'] = $this->clipboard;
        }
        if (null !== $this->domainList) {
            $res['DomainList'] = $this->domainList;
        }
        if (null !== $this->edsCount) {
            $res['EdsCount'] = $this->edsCount;
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
        if (null !== $this->printerRedirection) {
            $res['PrinterRedirection'] = $this->printerRedirection;
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
        if (null !== $this->clientTypes) {
            $res['ClientTypes'] = [];
            if (null !== $this->clientTypes && \is_array($this->clientTypes)) {
                $n = 0;
                foreach ($this->clientTypes as $item) {
                    $res['ClientTypes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->preemptLoginUsers) {
            $res['PreemptLoginUsers'] = $this->preemptLoginUsers;
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
        if (isset($map['Clipboard'])) {
            $model->clipboard = $map['Clipboard'];
        }
        if (isset($map['DomainList'])) {
            $model->domainList = $map['DomainList'];
        }
        if (isset($map['EdsCount'])) {
            $model->edsCount = $map['EdsCount'];
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
        if (isset($map['PrinterRedirection'])) {
            $model->printerRedirection = $map['PrinterRedirection'];
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
        if (isset($map['ClientTypes'])) {
            if (!empty($map['ClientTypes'])) {
                $model->clientTypes = [];
                $n                  = 0;
                foreach ($map['ClientTypes'] as $item) {
                    $model->clientTypes[$n++] = null !== $item ? clientTypes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PreemptLoginUsers'])) {
            if (!empty($map['PreemptLoginUsers'])) {
                $model->preemptLoginUsers = $map['PreemptLoginUsers'];
            }
        }

        return $model;
    }
}

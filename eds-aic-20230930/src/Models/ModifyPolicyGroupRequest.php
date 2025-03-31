<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ModifyPolicyGroupRequest\netRedirectPolicy;

class ModifyPolicyGroupRequest extends Model
{
    /**
     * @var string
     */
    public $cameraRedirect;

    /**
     * @var string
     */
    public $clipboard;

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
    public $lockResolution;

    /**
     * @var netRedirectPolicy
     */
    public $netRedirectPolicy;

    /**
     * @var string
     */
    public $policyGroupId;

    /**
     * @var string
     */
    public $policyGroupName;

    /**
     * @var int
     */
    public $resolutionHeight;

    /**
     * @var int
     */
    public $resolutionWidth;
    protected $_name = [
        'cameraRedirect' => 'CameraRedirect',
        'clipboard' => 'Clipboard',
        'html5FileTransfer' => 'Html5FileTransfer',
        'localDrive' => 'LocalDrive',
        'lockResolution' => 'LockResolution',
        'netRedirectPolicy' => 'NetRedirectPolicy',
        'policyGroupId' => 'PolicyGroupId',
        'policyGroupName' => 'PolicyGroupName',
        'resolutionHeight' => 'ResolutionHeight',
        'resolutionWidth' => 'ResolutionWidth',
    ];

    public function validate()
    {
        if (null !== $this->netRedirectPolicy) {
            $this->netRedirectPolicy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cameraRedirect) {
            $res['CameraRedirect'] = $this->cameraRedirect;
        }

        if (null !== $this->clipboard) {
            $res['Clipboard'] = $this->clipboard;
        }

        if (null !== $this->html5FileTransfer) {
            $res['Html5FileTransfer'] = $this->html5FileTransfer;
        }

        if (null !== $this->localDrive) {
            $res['LocalDrive'] = $this->localDrive;
        }

        if (null !== $this->lockResolution) {
            $res['LockResolution'] = $this->lockResolution;
        }

        if (null !== $this->netRedirectPolicy) {
            $res['NetRedirectPolicy'] = null !== $this->netRedirectPolicy ? $this->netRedirectPolicy->toArray($noStream) : $this->netRedirectPolicy;
        }

        if (null !== $this->policyGroupId) {
            $res['PolicyGroupId'] = $this->policyGroupId;
        }

        if (null !== $this->policyGroupName) {
            $res['PolicyGroupName'] = $this->policyGroupName;
        }

        if (null !== $this->resolutionHeight) {
            $res['ResolutionHeight'] = $this->resolutionHeight;
        }

        if (null !== $this->resolutionWidth) {
            $res['ResolutionWidth'] = $this->resolutionWidth;
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
        if (isset($map['CameraRedirect'])) {
            $model->cameraRedirect = $map['CameraRedirect'];
        }

        if (isset($map['Clipboard'])) {
            $model->clipboard = $map['Clipboard'];
        }

        if (isset($map['Html5FileTransfer'])) {
            $model->html5FileTransfer = $map['Html5FileTransfer'];
        }

        if (isset($map['LocalDrive'])) {
            $model->localDrive = $map['LocalDrive'];
        }

        if (isset($map['LockResolution'])) {
            $model->lockResolution = $map['LockResolution'];
        }

        if (isset($map['NetRedirectPolicy'])) {
            $model->netRedirectPolicy = netRedirectPolicy::fromMap($map['NetRedirectPolicy']);
        }

        if (isset($map['PolicyGroupId'])) {
            $model->policyGroupId = $map['PolicyGroupId'];
        }

        if (isset($map['PolicyGroupName'])) {
            $model->policyGroupName = $map['PolicyGroupName'];
        }

        if (isset($map['ResolutionHeight'])) {
            $model->resolutionHeight = $map['ResolutionHeight'];
        }

        if (isset($map['ResolutionWidth'])) {
            $model->resolutionWidth = $map['ResolutionWidth'];
        }

        return $model;
    }
}

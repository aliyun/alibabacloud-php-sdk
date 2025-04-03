<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;

class CreatePolicyGroupShrinkRequest extends Model
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
     * @var string
     */
    public $netRedirectPolicyShrink;

    /**
     * @var string
     */
    public $policyGroupName;

    /**
     * @var string
     */
    public $policyType;

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
        'netRedirectPolicyShrink' => 'NetRedirectPolicy',
        'policyGroupName' => 'PolicyGroupName',
        'policyType' => 'PolicyType',
        'resolutionHeight' => 'ResolutionHeight',
        'resolutionWidth' => 'ResolutionWidth',
    ];

    public function validate()
    {
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

        if (null !== $this->netRedirectPolicyShrink) {
            $res['NetRedirectPolicy'] = $this->netRedirectPolicyShrink;
        }

        if (null !== $this->policyGroupName) {
            $res['PolicyGroupName'] = $this->policyGroupName;
        }

        if (null !== $this->policyType) {
            $res['PolicyType'] = $this->policyType;
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
            $model->netRedirectPolicyShrink = $map['NetRedirectPolicy'];
        }

        if (isset($map['PolicyGroupName'])) {
            $model->policyGroupName = $map['PolicyGroupName'];
        }

        if (isset($map['PolicyType'])) {
            $model->policyType = $map['PolicyType'];
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

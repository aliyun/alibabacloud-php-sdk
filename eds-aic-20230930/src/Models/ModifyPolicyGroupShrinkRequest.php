<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class ModifyPolicyGroupShrinkRequest extends Model
{
    /**
     * @description Specifies whether to enable the webcam redirection feature.
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
    public $cameraRedirect;

    /**
     * @description The read/write permissions on the clipboard.
     *
     * Valid values:
     *
     *   read: read-only.
     *   readwrite: ready and write.
     *   off: read/write disabled.
     *
     * @example readwrite
     *
     * @var string
     */
    public $clipboard;

    /**
     * @description The file transfer policy of the Alibaba Cloud Workspace web client.
     *
     * Valid values:
     *
     *   all: File upload and download are supported.
     *   download: Only file download is supported.
     *   upload: Only file upload is supported.
     *   off: File upload or download is forbidden.
     *
     * @example off
     *
     * @var string
     */
    public $html5FileTransfer;

    /**
     * @description The read/write permissions on the on-premises drive.
     *
     * Valid values:
     *
     *   read: read-only.
     *   readwrite: ready and write.
     *   off: read/write disabled.
     *
     * @example off
     *
     * @var string
     */
    public $localDrive;

    /**
     * @description Specifies whether to lock the resolution.
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
    public $lockResolution;

    /**
     * @description The network redirection policy.
     *
     * @var string
     */
    public $netRedirectPolicyShrink;

    /**
     * @description The ID of the policy.
     *
     * @example pg-4bi18ebi9tfjh****
     *
     * @var string
     */
    public $policyGroupId;

    /**
     * @description The name of the policy.
     *
     * @example defaultPolicyGroup
     *
     * @var string
     */
    public $policyGroupName;

    /**
     * @description The height of the resolution. Unit: pixels.
     *
     * @example 1280
     *
     * @var int
     */
    public $resolutionHeight;

    /**
     * @description The width of the resolution. Unit: pixels.
     *
     * @example 720
     *
     * @var int
     */
    public $resolutionWidth;

    /**
     * @var string
     */
    public $watermarkShrink;
    protected $_name = [
        'cameraRedirect' => 'CameraRedirect',
        'clipboard' => 'Clipboard',
        'html5FileTransfer' => 'Html5FileTransfer',
        'localDrive' => 'LocalDrive',
        'lockResolution' => 'LockResolution',
        'netRedirectPolicyShrink' => 'NetRedirectPolicy',
        'policyGroupId' => 'PolicyGroupId',
        'policyGroupName' => 'PolicyGroupName',
        'resolutionHeight' => 'ResolutionHeight',
        'resolutionWidth' => 'ResolutionWidth',
        'watermarkShrink' => 'Watermark',
    ];

    public function validate() {}

    public function toMap()
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
        if (null !== $this->watermarkShrink) {
            $res['Watermark'] = $this->watermarkShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyPolicyGroupShrinkRequest
     */
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
        if (isset($map['Watermark'])) {
            $model->watermarkShrink = $map['Watermark'];
        }

        return $model;
    }
}

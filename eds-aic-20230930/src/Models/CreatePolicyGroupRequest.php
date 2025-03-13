<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreatePolicyGroupRequest\netRedirectPolicy;
use AlibabaCloud\Tea\Model;

class CreatePolicyGroupRequest extends Model
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
     *   readwrite: read and write.
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
     * @var netRedirectPolicy
     */
    public $netRedirectPolicy;

    /**
     * @description The name of the policy.
     *
     * @example defaultPolicy
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
    protected $_name = [
        'cameraRedirect'    => 'CameraRedirect',
        'clipboard'         => 'Clipboard',
        'html5FileTransfer' => 'Html5FileTransfer',
        'localDrive'        => 'LocalDrive',
        'lockResolution'    => 'LockResolution',
        'netRedirectPolicy' => 'NetRedirectPolicy',
        'policyGroupName'   => 'PolicyGroupName',
        'resolutionHeight'  => 'ResolutionHeight',
        'resolutionWidth'   => 'ResolutionWidth',
    ];

    public function validate()
    {
    }

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
        if (null !== $this->netRedirectPolicy) {
            $res['NetRedirectPolicy'] = null !== $this->netRedirectPolicy ? $this->netRedirectPolicy->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return CreatePolicyGroupRequest
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
            $model->netRedirectPolicy = netRedirectPolicy::fromMap($map['NetRedirectPolicy']);
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

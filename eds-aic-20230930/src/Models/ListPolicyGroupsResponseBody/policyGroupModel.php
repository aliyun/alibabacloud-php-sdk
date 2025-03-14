<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\ListPolicyGroupsResponseBody;

use AlibabaCloud\SDK\Edsaic\V20230930\Models\ListPolicyGroupsResponseBody\policyGroupModel\netRedirectPolicy;
use AlibabaCloud\Tea\Model;

class policyGroupModel extends Model
{
    /**
     * @description Specifies whether to enable the webcam redirection feature.
     *
     * Valid values:
     *
     *   off
     *   on
     *
     * @example on
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
     * @description The time when the policy was created.
     *
     * @example 2024-06-04 10:28:54
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The file transfer policy of the HTML5 client.
     *
     * Valid values:
     *
     *   all: File upload and download are supported.
     *   download: Only file download is supported.
     *   upload: Only file upload is supported.
     *   off: File upload or download is forbidden.
     *
     * @example download
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
     *   off: read/write denied.
     *
     * @example off
     *
     * @var string
     */
    public $localDrive;

    /**
     * @description Identifies whether the resolution is locked.
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
     * @description The ID of the policy.
     *
     * @example pg-9q6o8qpiy8opkj****
     *
     * @var string
     */
    public $policyGroupId;

    /**
     * @description The name of the policy.
     *
     * @example Default Policy
     *
     * @var string
     */
    public $policyGroupName;

    /**
     * @description The height of the resolution.
     *
     * @example 1080
     *
     * @var int
     */
    public $sessionResolutionHeight;

    /**
     * @description The width of the resolution.
     *
     * @example 1920
     *
     * @var int
     */
    public $sessionResolutionWidth;
    protected $_name = [
        'cameraRedirect' => 'CameraRedirect',
        'clipboard' => 'Clipboard',
        'gmtCreate' => 'GmtCreate',
        'html5FileTransfer' => 'Html5FileTransfer',
        'localDrive' => 'LocalDrive',
        'lockResolution' => 'LockResolution',
        'netRedirectPolicy' => 'NetRedirectPolicy',
        'policyGroupId' => 'PolicyGroupId',
        'policyGroupName' => 'PolicyGroupName',
        'sessionResolutionHeight' => 'SessionResolutionHeight',
        'sessionResolutionWidth' => 'SessionResolutionWidth',
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
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
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
        if (null !== $this->policyGroupId) {
            $res['PolicyGroupId'] = $this->policyGroupId;
        }
        if (null !== $this->policyGroupName) {
            $res['PolicyGroupName'] = $this->policyGroupName;
        }
        if (null !== $this->sessionResolutionHeight) {
            $res['SessionResolutionHeight'] = $this->sessionResolutionHeight;
        }
        if (null !== $this->sessionResolutionWidth) {
            $res['SessionResolutionWidth'] = $this->sessionResolutionWidth;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return policyGroupModel
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
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
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
        if (isset($map['SessionResolutionHeight'])) {
            $model->sessionResolutionHeight = $map['SessionResolutionHeight'];
        }
        if (isset($map['SessionResolutionWidth'])) {
            $model->sessionResolutionWidth = $map['SessionResolutionWidth'];
        }

        return $model;
    }
}

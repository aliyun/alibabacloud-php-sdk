<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class ModifyPolicyGroupRequest extends Model
{
    /**
     * @example off
     *
     * @var string
     */
    public $cameraRedirect;

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
    public $html5FileTransfer;

    /**
     * @example off
     *
     * @var string
     */
    public $localDrive;

    /**
     * @example pg-4bi18ebi9tfjh****
     *
     * @var string
     */
    public $policyGroupId;

    /**
     * @var string
     */
    public $policyGroupName;

    /**
     * @example 1280
     *
     * @var int
     */
    public $resolutionHeight;

    /**
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
        'policyGroupId'     => 'PolicyGroupId',
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

    /**
     * @param array $map
     *
     * @return ModifyPolicyGroupRequest
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

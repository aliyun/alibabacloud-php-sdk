<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\ListPolicyGroupsResponseBody;

use AlibabaCloud\Tea\Model;

class policyGroupModel extends Model
{
    /**
     * @example on
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
     * @example 2024-06-04 10:28:54
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example download
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
     * @example pg-9q6o8qpiy8opkj****
     *
     * @var string
     */
    public $policyGroupId;

    /**
     * @var string
     */
    public $policyGroupName;

    /**
     * @example 1080
     *
     * @var string
     */
    public $sessionResolutionHeight;

    /**
     * @example 1920
     *
     * @var string
     */
    public $sessionResolutionWidth;
    protected $_name = [
        'cameraRedirect'          => 'CameraRedirect',
        'clipboard'               => 'Clipboard',
        'gmtCreate'               => 'GmtCreate',
        'html5FileTransfer'       => 'Html5FileTransfer',
        'localDrive'              => 'LocalDrive',
        'policyGroupId'           => 'PolicyGroupId',
        'policyGroupName'         => 'PolicyGroupName',
        'sessionResolutionHeight' => 'SessionResolutionHeight',
        'sessionResolutionWidth'  => 'SessionResolutionWidth',
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
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
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

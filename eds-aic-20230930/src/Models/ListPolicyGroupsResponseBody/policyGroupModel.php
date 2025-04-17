<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\ListPolicyGroupsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ListPolicyGroupsResponseBody\policyGroupModel\netRedirectPolicy;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ListPolicyGroupsResponseBody\policyGroupModel\policyRelatedResources;

class policyGroupModel extends Model
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
    public $gmtCreate;

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
     * @var policyRelatedResources
     */
    public $policyRelatedResources;

    /**
     * @var int
     */
    public $sessionResolutionHeight;

    /**
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
        'policyRelatedResources' => 'PolicyRelatedResources',
        'sessionResolutionHeight' => 'SessionResolutionHeight',
        'sessionResolutionWidth' => 'SessionResolutionWidth',
    ];

    public function validate()
    {
        if (null !== $this->netRedirectPolicy) {
            $this->netRedirectPolicy->validate();
        }
        if (null !== $this->policyRelatedResources) {
            $this->policyRelatedResources->validate();
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
            $res['NetRedirectPolicy'] = null !== $this->netRedirectPolicy ? $this->netRedirectPolicy->toArray($noStream) : $this->netRedirectPolicy;
        }

        if (null !== $this->policyGroupId) {
            $res['PolicyGroupId'] = $this->policyGroupId;
        }

        if (null !== $this->policyGroupName) {
            $res['PolicyGroupName'] = $this->policyGroupName;
        }

        if (null !== $this->policyRelatedResources) {
            $res['PolicyRelatedResources'] = null !== $this->policyRelatedResources ? $this->policyRelatedResources->toArray($noStream) : $this->policyRelatedResources;
        }

        if (null !== $this->sessionResolutionHeight) {
            $res['SessionResolutionHeight'] = $this->sessionResolutionHeight;
        }

        if (null !== $this->sessionResolutionWidth) {
            $res['SessionResolutionWidth'] = $this->sessionResolutionWidth;
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

        if (isset($map['PolicyRelatedResources'])) {
            $model->policyRelatedResources = policyRelatedResources::fromMap($map['PolicyRelatedResources']);
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyBrowserInstanceGroupRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyBrowserInstanceGroupRequest\policy\clipboardPolicy;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyBrowserInstanceGroupRequest\policy\videoPolicy;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyBrowserInstanceGroupRequest\policy\watermarkPolicy;

class policy extends Model
{
    /**
     * @var clipboardPolicy
     */
    public $clipboardPolicy;

    /**
     * @var string
     */
    public $disconnectKeepSession;

    /**
     * @var int
     */
    public $disconnectKeepSessionTime;

    /**
     * @var string
     */
    public $html5FileTransfer;

    /**
     * @var string
     */
    public $noOperationDisconnect;

    /**
     * @var int
     */
    public $noOperationDisconnectTime;

    /**
     * @var string
     */
    public $policyId;

    /**
     * @var string
     */
    public $policyVersion;

    /**
     * @var videoPolicy
     */
    public $videoPolicy;

    /**
     * @var watermarkPolicy
     */
    public $watermarkPolicy;
    protected $_name = [
        'clipboardPolicy' => 'ClipboardPolicy',
        'disconnectKeepSession' => 'DisconnectKeepSession',
        'disconnectKeepSessionTime' => 'DisconnectKeepSessionTime',
        'html5FileTransfer' => 'Html5FileTransfer',
        'noOperationDisconnect' => 'NoOperationDisconnect',
        'noOperationDisconnectTime' => 'NoOperationDisconnectTime',
        'policyId' => 'PolicyId',
        'policyVersion' => 'PolicyVersion',
        'videoPolicy' => 'VideoPolicy',
        'watermarkPolicy' => 'WatermarkPolicy',
    ];

    public function validate()
    {
        if (null !== $this->clipboardPolicy) {
            $this->clipboardPolicy->validate();
        }
        if (null !== $this->videoPolicy) {
            $this->videoPolicy->validate();
        }
        if (null !== $this->watermarkPolicy) {
            $this->watermarkPolicy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clipboardPolicy) {
            $res['ClipboardPolicy'] = null !== $this->clipboardPolicy ? $this->clipboardPolicy->toArray($noStream) : $this->clipboardPolicy;
        }

        if (null !== $this->disconnectKeepSession) {
            $res['DisconnectKeepSession'] = $this->disconnectKeepSession;
        }

        if (null !== $this->disconnectKeepSessionTime) {
            $res['DisconnectKeepSessionTime'] = $this->disconnectKeepSessionTime;
        }

        if (null !== $this->html5FileTransfer) {
            $res['Html5FileTransfer'] = $this->html5FileTransfer;
        }

        if (null !== $this->noOperationDisconnect) {
            $res['NoOperationDisconnect'] = $this->noOperationDisconnect;
        }

        if (null !== $this->noOperationDisconnectTime) {
            $res['NoOperationDisconnectTime'] = $this->noOperationDisconnectTime;
        }

        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }

        if (null !== $this->policyVersion) {
            $res['PolicyVersion'] = $this->policyVersion;
        }

        if (null !== $this->videoPolicy) {
            $res['VideoPolicy'] = null !== $this->videoPolicy ? $this->videoPolicy->toArray($noStream) : $this->videoPolicy;
        }

        if (null !== $this->watermarkPolicy) {
            $res['WatermarkPolicy'] = null !== $this->watermarkPolicy ? $this->watermarkPolicy->toArray($noStream) : $this->watermarkPolicy;
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
        if (isset($map['ClipboardPolicy'])) {
            $model->clipboardPolicy = clipboardPolicy::fromMap($map['ClipboardPolicy']);
        }

        if (isset($map['DisconnectKeepSession'])) {
            $model->disconnectKeepSession = $map['DisconnectKeepSession'];
        }

        if (isset($map['DisconnectKeepSessionTime'])) {
            $model->disconnectKeepSessionTime = $map['DisconnectKeepSessionTime'];
        }

        if (isset($map['Html5FileTransfer'])) {
            $model->html5FileTransfer = $map['Html5FileTransfer'];
        }

        if (isset($map['NoOperationDisconnect'])) {
            $model->noOperationDisconnect = $map['NoOperationDisconnect'];
        }

        if (isset($map['NoOperationDisconnectTime'])) {
            $model->noOperationDisconnectTime = $map['NoOperationDisconnectTime'];
        }

        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }

        if (isset($map['PolicyVersion'])) {
            $model->policyVersion = $map['PolicyVersion'];
        }

        if (isset($map['VideoPolicy'])) {
            $model->videoPolicy = videoPolicy::fromMap($map['VideoPolicy']);
        }

        if (isset($map['WatermarkPolicy'])) {
            $model->watermarkPolicy = watermarkPolicy::fromMap($map['WatermarkPolicy']);
        }

        return $model;
    }
}

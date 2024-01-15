<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Tea\Model;

class ModifyProjectPolicyRequest extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $clipboard;

    /**
     * @example 0
     *
     * @var int
     */
    public $fileTransfer;

    /**
     * @example 30
     *
     * @var int
     */
    public $frameRate;

    /**
     * @example 15
     *
     * @var int
     */
    public $keepAliveDuration;

    /**
     * @example p-065z4tu9ak07h****
     *
     * @var string
     */
    public $projectId;

    /**
     * @example 4096
     *
     * @var int
     */
    public $sessionResolutionHeight;

    /**
     * @example 4096
     *
     * @var int
     */
    public $sessionResolutionWidth;

    /**
     * @example video
     *
     * @var string
     */
    public $streamingMode;

    /**
     * @example true
     *
     * @var bool
     */
    public $terminalResolutionAdaptation;
    protected $_name = [
        'clipboard'                    => 'Clipboard',
        'fileTransfer'                 => 'FileTransfer',
        'frameRate'                    => 'FrameRate',
        'keepAliveDuration'            => 'KeepAliveDuration',
        'projectId'                    => 'ProjectId',
        'sessionResolutionHeight'      => 'SessionResolutionHeight',
        'sessionResolutionWidth'       => 'SessionResolutionWidth',
        'streamingMode'                => 'StreamingMode',
        'terminalResolutionAdaptation' => 'TerminalResolutionAdaptation',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clipboard) {
            $res['Clipboard'] = $this->clipboard;
        }
        if (null !== $this->fileTransfer) {
            $res['FileTransfer'] = $this->fileTransfer;
        }
        if (null !== $this->frameRate) {
            $res['FrameRate'] = $this->frameRate;
        }
        if (null !== $this->keepAliveDuration) {
            $res['KeepAliveDuration'] = $this->keepAliveDuration;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->sessionResolutionHeight) {
            $res['SessionResolutionHeight'] = $this->sessionResolutionHeight;
        }
        if (null !== $this->sessionResolutionWidth) {
            $res['SessionResolutionWidth'] = $this->sessionResolutionWidth;
        }
        if (null !== $this->streamingMode) {
            $res['StreamingMode'] = $this->streamingMode;
        }
        if (null !== $this->terminalResolutionAdaptation) {
            $res['TerminalResolutionAdaptation'] = $this->terminalResolutionAdaptation;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyProjectPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Clipboard'])) {
            $model->clipboard = $map['Clipboard'];
        }
        if (isset($map['FileTransfer'])) {
            $model->fileTransfer = $map['FileTransfer'];
        }
        if (isset($map['FrameRate'])) {
            $model->frameRate = $map['FrameRate'];
        }
        if (isset($map['KeepAliveDuration'])) {
            $model->keepAliveDuration = $map['KeepAliveDuration'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['SessionResolutionHeight'])) {
            $model->sessionResolutionHeight = $map['SessionResolutionHeight'];
        }
        if (isset($map['SessionResolutionWidth'])) {
            $model->sessionResolutionWidth = $map['SessionResolutionWidth'];
        }
        if (isset($map['StreamingMode'])) {
            $model->streamingMode = $map['StreamingMode'];
        }
        if (isset($map['TerminalResolutionAdaptation'])) {
            $model->terminalResolutionAdaptation = $map['TerminalResolutionAdaptation'];
        }

        return $model;
    }
}

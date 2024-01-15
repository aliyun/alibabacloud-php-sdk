<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetProjectPoliciesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
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
     * @var string
     */
    public $frameRate;

    /**
     * @example 15
     *
     * @var int
     */
    public $keepAliveDuration;

    /**
     * @example 1000
     *
     * @var int
     */
    public $maxHours;

    /**
     * @example 60
     *
     * @var int
     */
    public $maxSessions;

    /**
     * @example p-xxxxxxxxxxx
     *
     * @var string
     */
    public $projectId;

    /**
     * @example 1080
     *
     * @var int
     */
    public $sessionResolutionHeight;

    /**
     * @example 1920
     *
     * @var int
     */
    public $sessionResolutionWidth;

    /**
     * @var string
     */
    public $sessionSpec;

    /**
     * @example mix
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
        'maxHours'                     => 'MaxHours',
        'maxSessions'                  => 'MaxSessions',
        'projectId'                    => 'ProjectId',
        'sessionResolutionHeight'      => 'SessionResolutionHeight',
        'sessionResolutionWidth'       => 'SessionResolutionWidth',
        'sessionSpec'                  => 'SessionSpec',
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
        if (null !== $this->maxHours) {
            $res['MaxHours'] = $this->maxHours;
        }
        if (null !== $this->maxSessions) {
            $res['MaxSessions'] = $this->maxSessions;
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
        if (null !== $this->sessionSpec) {
            $res['SessionSpec'] = $this->sessionSpec;
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
     * @return data
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
        if (isset($map['MaxHours'])) {
            $model->maxHours = $map['MaxHours'];
        }
        if (isset($map['MaxSessions'])) {
            $model->maxSessions = $map['MaxSessions'];
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
        if (isset($map['SessionSpec'])) {
            $model->sessionSpec = $map['SessionSpec'];
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Tea\Model;

class CreateProjectRequest extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $clipboard;

    /**
     * @example c-xxxxxxx
     *
     * @var string
     */
    public $cloudEnvId;

    /**
     * @example c-06vcpamarryyq****
     *
     * @var string
     */
    public $contentId;

    /**
     * @example xxx
     *
     * @var string
     */
    public $description;

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
     * @example notepad++xxxxx
     *
     * @var string
     */
    public $projectName;

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
        'cloudEnvId'                   => 'CloudEnvId',
        'contentId'                    => 'ContentId',
        'description'                  => 'Description',
        'fileTransfer'                 => 'FileTransfer',
        'frameRate'                    => 'FrameRate',
        'keepAliveDuration'            => 'KeepAliveDuration',
        'projectName'                  => 'ProjectName',
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
        if (null !== $this->cloudEnvId) {
            $res['CloudEnvId'] = $this->cloudEnvId;
        }
        if (null !== $this->contentId) {
            $res['ContentId'] = $this->contentId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
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
     * @return CreateProjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Clipboard'])) {
            $model->clipboard = $map['Clipboard'];
        }
        if (isset($map['CloudEnvId'])) {
            $model->cloudEnvId = $map['CloudEnvId'];
        }
        if (isset($map['ContentId'])) {
            $model->contentId = $map['ContentId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
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

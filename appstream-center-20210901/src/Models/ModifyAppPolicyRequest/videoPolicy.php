<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyAppPolicyRequest;

use AlibabaCloud\Dara\Model;

class videoPolicy extends Model
{
    /**
     * @var int
     */
    public $frameRate;

    /**
     * @var int
     */
    public $sessionResolutionHeight;

    /**
     * @var int
     */
    public $sessionResolutionWidth;

    /**
     * @var string
     */
    public $streamingMode;

    /**
     * @var bool
     */
    public $terminalResolutionAdaptive;

    /**
     * @var string
     */
    public $visualQualityStrategy;

    /**
     * @var bool
     */
    public $webrtc;
    protected $_name = [
        'frameRate' => 'FrameRate',
        'sessionResolutionHeight' => 'SessionResolutionHeight',
        'sessionResolutionWidth' => 'SessionResolutionWidth',
        'streamingMode' => 'StreamingMode',
        'terminalResolutionAdaptive' => 'TerminalResolutionAdaptive',
        'visualQualityStrategy' => 'VisualQualityStrategy',
        'webrtc' => 'Webrtc',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->frameRate) {
            $res['FrameRate'] = $this->frameRate;
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

        if (null !== $this->terminalResolutionAdaptive) {
            $res['TerminalResolutionAdaptive'] = $this->terminalResolutionAdaptive;
        }

        if (null !== $this->visualQualityStrategy) {
            $res['VisualQualityStrategy'] = $this->visualQualityStrategy;
        }

        if (null !== $this->webrtc) {
            $res['Webrtc'] = $this->webrtc;
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
        if (isset($map['FrameRate'])) {
            $model->frameRate = $map['FrameRate'];
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

        if (isset($map['TerminalResolutionAdaptive'])) {
            $model->terminalResolutionAdaptive = $map['TerminalResolutionAdaptive'];
        }

        if (isset($map['VisualQualityStrategy'])) {
            $model->visualQualityStrategy = $map['VisualQualityStrategy'];
        }

        if (isset($map['Webrtc'])) {
            $model->webrtc = $map['Webrtc'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyAppPolicyRequest;

use AlibabaCloud\Tea\Model;

class videoPolicy extends Model
{
    /**
     * @example 60
     *
     * @var int
     */
    public $frameRate;

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
     * @example video
     *
     * @var string
     */
    public $streamingMode;

    /**
     * @example false
     *
     * @var bool
     */
    public $terminalResolutionAdaptive;

    /**
     * @var string
     */
    public $visualQualityStrategy;

    /**
     * @example true
     *
     * @var bool
     */
    public $webrtc;
    protected $_name = [
        'frameRate'                  => 'FrameRate',
        'sessionResolutionHeight'    => 'SessionResolutionHeight',
        'sessionResolutionWidth'     => 'SessionResolutionWidth',
        'streamingMode'              => 'StreamingMode',
        'terminalResolutionAdaptive' => 'TerminalResolutionAdaptive',
        'visualQualityStrategy'      => 'VisualQualityStrategy',
        'webrtc'                     => 'Webrtc',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return videoPolicy
     */
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

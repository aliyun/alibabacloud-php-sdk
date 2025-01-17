<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class MediaConvertTransConfig extends Model
{
    /**
     * @var string
     */
    public $adjDarMethod;
    /**
     * @var bool
     */
    public $isCheckAudioBitrate;
    /**
     * @var bool
     */
    public $isCheckAudioBitrateFail;
    /**
     * @var bool
     */
    public $isCheckReso;
    /**
     * @var bool
     */
    public $isCheckResoFail;
    /**
     * @var bool
     */
    public $isCheckVideoBitrate;
    /**
     * @var bool
     */
    public $isCheckVideoBitrateFail;
    /**
     * @var string
     */
    public $transMode;
    protected $_name = [
        'adjDarMethod'            => 'AdjDarMethod',
        'isCheckAudioBitrate'     => 'IsCheckAudioBitrate',
        'isCheckAudioBitrateFail' => 'IsCheckAudioBitrateFail',
        'isCheckReso'             => 'IsCheckReso',
        'isCheckResoFail'         => 'IsCheckResoFail',
        'isCheckVideoBitrate'     => 'IsCheckVideoBitrate',
        'isCheckVideoBitrateFail' => 'IsCheckVideoBitrateFail',
        'transMode'               => 'TransMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adjDarMethod) {
            $res['AdjDarMethod'] = $this->adjDarMethod;
        }

        if (null !== $this->isCheckAudioBitrate) {
            $res['IsCheckAudioBitrate'] = $this->isCheckAudioBitrate;
        }

        if (null !== $this->isCheckAudioBitrateFail) {
            $res['IsCheckAudioBitrateFail'] = $this->isCheckAudioBitrateFail;
        }

        if (null !== $this->isCheckReso) {
            $res['IsCheckReso'] = $this->isCheckReso;
        }

        if (null !== $this->isCheckResoFail) {
            $res['IsCheckResoFail'] = $this->isCheckResoFail;
        }

        if (null !== $this->isCheckVideoBitrate) {
            $res['IsCheckVideoBitrate'] = $this->isCheckVideoBitrate;
        }

        if (null !== $this->isCheckVideoBitrateFail) {
            $res['IsCheckVideoBitrateFail'] = $this->isCheckVideoBitrateFail;
        }

        if (null !== $this->transMode) {
            $res['TransMode'] = $this->transMode;
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
        if (isset($map['AdjDarMethod'])) {
            $model->adjDarMethod = $map['AdjDarMethod'];
        }

        if (isset($map['IsCheckAudioBitrate'])) {
            $model->isCheckAudioBitrate = $map['IsCheckAudioBitrate'];
        }

        if (isset($map['IsCheckAudioBitrateFail'])) {
            $model->isCheckAudioBitrateFail = $map['IsCheckAudioBitrateFail'];
        }

        if (isset($map['IsCheckReso'])) {
            $model->isCheckReso = $map['IsCheckReso'];
        }

        if (isset($map['IsCheckResoFail'])) {
            $model->isCheckResoFail = $map['IsCheckResoFail'];
        }

        if (isset($map['IsCheckVideoBitrate'])) {
            $model->isCheckVideoBitrate = $map['IsCheckVideoBitrate'];
        }

        if (isset($map['IsCheckVideoBitrateFail'])) {
            $model->isCheckVideoBitrateFail = $map['IsCheckVideoBitrateFail'];
        }

        if (isset($map['TransMode'])) {
            $model->transMode = $map['TransMode'];
        }

        return $model;
    }
}

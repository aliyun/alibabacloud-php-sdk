<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\SubmitEditingJobsResponseBody\jobResultList\jobResult\job\editingConfig;

use AlibabaCloud\Tea\Model;

class transConfig extends Model
{
    /**
     * @var string
     */
    public $transMode;

    /**
     * @var string
     */
    public $isCheckReso;

    /**
     * @var string
     */
    public $isCheckResoFail;

    /**
     * @var string
     */
    public $isCheckVideoBitrate;

    /**
     * @var string
     */
    public $isCheckAudioBitrate;

    /**
     * @var string
     */
    public $adjDarMethod;

    /**
     * @var string
     */
    public $isCheckVideoBitrateFail;

    /**
     * @var string
     */
    public $isCheckAudioBitrateFail;

    /**
     * @var string
     */
    public $duration;
    protected $_name = [
        'transMode'               => 'TransMode',
        'isCheckReso'             => 'IsCheckReso',
        'isCheckResoFail'         => 'IsCheckResoFail',
        'isCheckVideoBitrate'     => 'IsCheckVideoBitrate',
        'isCheckAudioBitrate'     => 'IsCheckAudioBitrate',
        'adjDarMethod'            => 'AdjDarMethod',
        'isCheckVideoBitrateFail' => 'IsCheckVideoBitrateFail',
        'isCheckAudioBitrateFail' => 'IsCheckAudioBitrateFail',
        'duration'                => 'Duration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->transMode) {
            $res['TransMode'] = $this->transMode;
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
        if (null !== $this->isCheckAudioBitrate) {
            $res['IsCheckAudioBitrate'] = $this->isCheckAudioBitrate;
        }
        if (null !== $this->adjDarMethod) {
            $res['AdjDarMethod'] = $this->adjDarMethod;
        }
        if (null !== $this->isCheckVideoBitrateFail) {
            $res['IsCheckVideoBitrateFail'] = $this->isCheckVideoBitrateFail;
        }
        if (null !== $this->isCheckAudioBitrateFail) {
            $res['IsCheckAudioBitrateFail'] = $this->isCheckAudioBitrateFail;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return transConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TransMode'])) {
            $model->transMode = $map['TransMode'];
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
        if (isset($map['IsCheckAudioBitrate'])) {
            $model->isCheckAudioBitrate = $map['IsCheckAudioBitrate'];
        }
        if (isset($map['AdjDarMethod'])) {
            $model->adjDarMethod = $map['AdjDarMethod'];
        }
        if (isset($map['IsCheckVideoBitrateFail'])) {
            $model->isCheckVideoBitrateFail = $map['IsCheckVideoBitrateFail'];
        }
        if (isset($map['IsCheckAudioBitrateFail'])) {
            $model->isCheckAudioBitrateFail = $map['IsCheckAudioBitrateFail'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\PageQuerySharedSpeechOpenResponseBody\data\resultData;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The audio format. Valid values: **wav**, **mp3**, and **amr**.
     *
     * @example wav
     *
     * @var string
     */
    public $audioFormat;

    /**
     * @description The unique identifier of the speech in the project.
     *
     * @example identifying
     *
     * @var string
     */
    public $bizCode;

    /**
     * @description The unique identifier of the template.
     *
     * @example ws****
     *
     * @var string
     */
    public $code;

    /**
     * @description The broadcasting speed. Valid values: -500 to 500.
     *
     * @example 50
     *
     * @var int
     */
    public $speechRate;

    /**
     * @description The status of the speeches. Valid values:
     *
     *   **1**: The speeches are pending approval.
     *   **2**: The speeches are approved.
     *   **3**: The speeches are rejected.
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The content of the speech.
     *
     * @example test
     *
     * @var string
     */
    public $text;

    /**
     * @description The sound effect that is used to broadcast speeches.
     *
     * @example Siyue
     *
     * @var string
     */
    public $voice;

    /**
     * @description The volume. Valid values: 0 to 100.
     *
     * @example 50
     *
     * @var int
     */
    public $volume;
    protected $_name = [
        'audioFormat' => 'AudioFormat',
        'bizCode'     => 'BizCode',
        'code'        => 'Code',
        'speechRate'  => 'SpeechRate',
        'status'      => 'Status',
        'text'        => 'Text',
        'voice'       => 'Voice',
        'volume'      => 'Volume',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioFormat) {
            $res['AudioFormat'] = $this->audioFormat;
        }
        if (null !== $this->bizCode) {
            $res['BizCode'] = $this->bizCode;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->speechRate) {
            $res['SpeechRate'] = $this->speechRate;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }
        if (null !== $this->voice) {
            $res['Voice'] = $this->voice;
        }
        if (null !== $this->volume) {
            $res['Volume'] = $this->volume;
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
        if (isset($map['AudioFormat'])) {
            $model->audioFormat = $map['AudioFormat'];
        }
        if (isset($map['BizCode'])) {
            $model->bizCode = $map['BizCode'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['SpeechRate'])) {
            $model->speechRate = $map['SpeechRate'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }
        if (isset($map['Voice'])) {
            $model->voice = $map['Voice'];
        }
        if (isset($map['Volume'])) {
            $model->volume = $map['Volume'];
        }

        return $model;
    }
}

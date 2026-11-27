<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\PushDeviceToastMessageRequest;

use AlibabaCloud\Dara\Model;

class payload extends Model
{
    /**
     * @var string
     */
    public $toastPosition;

    /**
     * @var string
     */
    public $toastTone;

    /**
     * @var string
     */
    public $toastType;

    /**
     * @var string
     */
    public $tts;

    /**
     * @var string
     */
    public $uiContent;
    protected $_name = [
        'toastPosition' => 'ToastPosition',
        'toastTone' => 'ToastTone',
        'toastType' => 'ToastType',
        'tts' => 'Tts',
        'uiContent' => 'UiContent',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->toastPosition) {
            $res['ToastPosition'] = $this->toastPosition;
        }

        if (null !== $this->toastTone) {
            $res['ToastTone'] = $this->toastTone;
        }

        if (null !== $this->toastType) {
            $res['ToastType'] = $this->toastType;
        }

        if (null !== $this->tts) {
            $res['Tts'] = $this->tts;
        }

        if (null !== $this->uiContent) {
            $res['UiContent'] = $this->uiContent;
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
        if (isset($map['ToastPosition'])) {
            $model->toastPosition = $map['ToastPosition'];
        }

        if (isset($map['ToastTone'])) {
            $model->toastTone = $map['ToastTone'];
        }

        if (isset($map['ToastType'])) {
            $model->toastType = $map['ToastType'];
        }

        if (isset($map['Tts'])) {
            $model->tts = $map['Tts'];
        }

        if (isset($map['UiContent'])) {
            $model->uiContent = $map['UiContent'];
        }

        return $model;
    }
}

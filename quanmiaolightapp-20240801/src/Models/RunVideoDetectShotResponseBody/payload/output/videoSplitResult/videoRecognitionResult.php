<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunVideoDetectShotResponseBody\payload\output\videoSplitResult;

use AlibabaCloud\Dara\Model;

class videoRecognitionResult extends Model
{
    /**
     * @var string
     */
    public $asr;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $ocr;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $vl;
    protected $_name = [
        'asr' => 'asr',
        'endTime' => 'endTime',
        'ocr' => 'ocr',
        'startTime' => 'startTime',
        'vl' => 'vl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->asr) {
            $res['asr'] = $this->asr;
        }

        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->ocr) {
            $res['ocr'] = $this->ocr;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->vl) {
            $res['vl'] = $this->vl;
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
        if (isset($map['asr'])) {
            $model->asr = $map['asr'];
        }

        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['ocr'])) {
            $model->ocr = $map['ocr'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['vl'])) {
            $model->vl = $map['vl'];
        }

        return $model;
    }
}

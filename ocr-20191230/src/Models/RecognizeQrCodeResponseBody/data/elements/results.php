<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeQrCodeResponseBody\data\elements;

use AlibabaCloud\Dara\Model;

class results extends Model
{
    /**
     * @var string
     */
    public $label;

    /**
     * @var string[]
     */
    public $qrCodesData;

    /**
     * @var float
     */
    public $rate;

    /**
     * @var string
     */
    public $suggestion;
    protected $_name = [
        'label' => 'Label',
        'qrCodesData' => 'QrCodesData',
        'rate' => 'Rate',
        'suggestion' => 'Suggestion',
    ];

    public function validate()
    {
        if (\is_array($this->qrCodesData)) {
            Model::validateArray($this->qrCodesData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }

        if (null !== $this->qrCodesData) {
            if (\is_array($this->qrCodesData)) {
                $res['QrCodesData'] = [];
                $n1 = 0;
                foreach ($this->qrCodesData as $item1) {
                    $res['QrCodesData'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->rate) {
            $res['Rate'] = $this->rate;
        }

        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
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
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }

        if (isset($map['QrCodesData'])) {
            if (!empty($map['QrCodesData'])) {
                $model->qrCodesData = [];
                $n1 = 0;
                foreach ($map['QrCodesData'] as $item1) {
                    $model->qrCodesData[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Rate'])) {
            $model->rate = $map['Rate'];
        }

        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }

        return $model;
    }
}

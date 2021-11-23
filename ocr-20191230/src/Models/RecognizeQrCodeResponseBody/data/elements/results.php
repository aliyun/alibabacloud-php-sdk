<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeQrCodeResponseBody\data\elements;

use AlibabaCloud\Tea\Model;

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
        'label'       => 'Label',
        'qrCodesData' => 'QrCodesData',
        'rate'        => 'Rate',
        'suggestion'  => 'Suggestion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->qrCodesData) {
            $res['QrCodesData'] = $this->qrCodesData;
        }
        if (null !== $this->rate) {
            $res['Rate'] = $this->rate;
        }
        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return results
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['QrCodesData'])) {
            if (!empty($map['QrCodesData'])) {
                $model->qrCodesData = $map['QrCodesData'];
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

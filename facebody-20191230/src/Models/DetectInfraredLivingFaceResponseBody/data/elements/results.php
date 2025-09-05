<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\DetectInfraredLivingFaceResponseBody\data\elements;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectInfraredLivingFaceResponseBody\data\elements\results\rect;

class results extends Model
{
    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $messageTips;

    /**
     * @var float
     */
    public $rate;

    /**
     * @var rect
     */
    public $rect;

    /**
     * @var string
     */
    public $suggestion;
    protected $_name = [
        'label' => 'Label',
        'messageTips' => 'MessageTips',
        'rate' => 'Rate',
        'rect' => 'Rect',
        'suggestion' => 'Suggestion',
    ];

    public function validate()
    {
        if (null !== $this->rect) {
            $this->rect->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }

        if (null !== $this->messageTips) {
            $res['MessageTips'] = $this->messageTips;
        }

        if (null !== $this->rate) {
            $res['Rate'] = $this->rate;
        }

        if (null !== $this->rect) {
            $res['Rect'] = null !== $this->rect ? $this->rect->toArray($noStream) : $this->rect;
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

        if (isset($map['MessageTips'])) {
            $model->messageTips = $map['MessageTips'];
        }

        if (isset($map['Rate'])) {
            $model->rate = $map['Rate'];
        }

        if (isset($map['Rect'])) {
            $model->rect = rect::fromMap($map['Rect']);
        }

        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }

        return $model;
    }
}

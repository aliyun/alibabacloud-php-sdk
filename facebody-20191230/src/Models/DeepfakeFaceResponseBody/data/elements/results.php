<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\DeepfakeFaceResponseBody\data\elements;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DeepfakeFaceResponseBody\data\elements\results\rect;

class results extends Model
{
    /**
     * @var float
     */
    public $confidence;

    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $messageTips;

    /**
     * @var rect
     */
    public $rect;
    protected $_name = [
        'confidence' => 'Confidence',
        'label' => 'Label',
        'messageTips' => 'MessageTips',
        'rect' => 'Rect',
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
        if (null !== $this->confidence) {
            $res['Confidence'] = $this->confidence;
        }

        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }

        if (null !== $this->messageTips) {
            $res['MessageTips'] = $this->messageTips;
        }

        if (null !== $this->rect) {
            $res['Rect'] = null !== $this->rect ? $this->rect->toArray($noStream) : $this->rect;
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
        if (isset($map['Confidence'])) {
            $model->confidence = $map['Confidence'];
        }

        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }

        if (isset($map['MessageTips'])) {
            $model->messageTips = $map['MessageTips'];
        }

        if (isset($map['Rect'])) {
            $model->rect = rect::fromMap($map['Rect']);
        }

        return $model;
    }
}

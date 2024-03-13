<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\DeepfakeFaceResponseBody\data\elements;

use AlibabaCloud\SDK\Facebody\V20191230\Models\DeepfakeFaceResponseBody\data\elements\results\rect;
use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @example 36.6455
     *
     * @var float
     */
    public $confidence;

    /**
     * @example normalface
     *
     * @var string
     */
    public $label;

    /**
     * @example blurred, occluded or large angle face, please check.
     *
     * @var string
     */
    public $messageTips;

    /**
     * @var rect
     */
    public $rect;
    protected $_name = [
        'confidence'  => 'Confidence',
        'label'       => 'Label',
        'messageTips' => 'MessageTips',
        'rect'        => 'Rect',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['Rect'] = null !== $this->rect ? $this->rect->toMap() : null;
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

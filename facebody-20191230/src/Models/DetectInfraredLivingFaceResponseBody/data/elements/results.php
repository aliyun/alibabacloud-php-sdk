<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\DetectInfraredLivingFaceResponseBody\data\elements;

use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectInfraredLivingFaceResponseBody\data\elements\results\rect;
use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @example liveness
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
     * @example 83.3848
     *
     * @var float
     */
    public $rate;

    /**
     * @var rect
     */
    public $rect;

    /**
     * @example review
     *
     * @var string
     */
    public $suggestion;
    protected $_name = [
        'label'       => 'Label',
        'messageTips' => 'MessageTips',
        'rate'        => 'Rate',
        'rect'        => 'Rect',
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
        if (null !== $this->messageTips) {
            $res['MessageTips'] = $this->messageTips;
        }
        if (null !== $this->rate) {
            $res['Rate'] = $this->rate;
        }
        if (null !== $this->rect) {
            $res['Rect'] = null !== $this->rect ? $this->rect->toMap() : null;
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

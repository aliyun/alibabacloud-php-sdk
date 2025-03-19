<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\TextModerationPlusResponseBody\data;

use AlibabaCloud\Tea\Model;

class attackResult extends Model
{
    /**
     * @description The level of prompt attack
     *
     * @example none
     *
     * @var string
     */
    public $attackLevel;

    /**
     * @description The confidence
     *
     * @example 0
     *
     * @var float
     */
    public $confidence;

    /**
     * @description Description
     *
     * @example safe
     *
     * @var string
     */
    public $description;

    /**
     * @description The label
     *
     * @example safe
     *
     * @var string
     */
    public $label;
    protected $_name = [
        'attackLevel' => 'AttackLevel',
        'confidence' => 'Confidence',
        'description' => 'Description',
        'label' => 'Label',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->attackLevel) {
            $res['AttackLevel'] = $this->attackLevel;
        }
        if (null !== $this->confidence) {
            $res['Confidence'] = $this->confidence;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return attackResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttackLevel'])) {
            $model->attackLevel = $map['AttackLevel'];
        }
        if (isset($map['Confidence'])) {
            $model->confidence = $map['Confidence'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }

        return $model;
    }
}

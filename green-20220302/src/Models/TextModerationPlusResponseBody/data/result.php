<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\TextModerationPlusResponseBody\data;

use AlibabaCloud\SDK\Green\V20220302\Models\TextModerationPlusResponseBody\data\result\customizedHit;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The score of the confidence level. Valid values: 0 to 100. The value is accurate to two decimal places.
     *
     * @example 81.22
     *
     * @var float
     */
    public $confidence;

    /**
     * @description The custom term hit by the moderated content.
     *
     * @var customizedHit[]
     */
    public $customizedHit;

    /**
     * @description The description of the label.
     *
     * @example none
     *
     * @var string
     */
    public $description;

    /**
     * @description The label.
     *
     * @example porn
     *
     * @var string
     */
    public $label;

    /**
     * @description The term hit by the moderated content.
     *
     * @example XXX
     *
     * @var string
     */
    public $riskWords;
    protected $_name = [
        'confidence' => 'Confidence',
        'customizedHit' => 'CustomizedHit',
        'description' => 'Description',
        'label' => 'Label',
        'riskWords' => 'RiskWords',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->confidence) {
            $res['Confidence'] = $this->confidence;
        }
        if (null !== $this->customizedHit) {
            $res['CustomizedHit'] = [];
            if (null !== $this->customizedHit && \is_array($this->customizedHit)) {
                $n = 0;
                foreach ($this->customizedHit as $item) {
                    $res['CustomizedHit'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->riskWords) {
            $res['RiskWords'] = $this->riskWords;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Confidence'])) {
            $model->confidence = $map['Confidence'];
        }
        if (isset($map['CustomizedHit'])) {
            if (!empty($map['CustomizedHit'])) {
                $model->customizedHit = [];
                $n = 0;
                foreach ($map['CustomizedHit'] as $item) {
                    $model->customizedHit[$n++] = null !== $item ? customizedHit::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['RiskWords'])) {
            $model->riskWords = $map['RiskWords'];
        }

        return $model;
    }
}

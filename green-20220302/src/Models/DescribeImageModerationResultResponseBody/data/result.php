<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\DescribeImageModerationResultResponseBody\data;

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
     * @description The description of the result.
     *
     * @example no risk
     *
     * @var string
     */
    public $description;

    /**
     * @description The labels returned after the image moderation.
     *
     * @example violent_explosion
     *
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $riskLevel;
    protected $_name = [
        'confidence' => 'Confidence',
        'description' => 'Description',
        'label' => 'Label',
        'riskLevel' => 'RiskLevel',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->confidence) {
            $res['Confidence'] = $this->confidence;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        return $model;
    }
}

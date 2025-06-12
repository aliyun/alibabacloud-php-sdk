<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\TextModerationPlusResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Green\V20220302\Models\TextModerationPlusResponseBody\data\result\customizedHit;

class result extends Model
{
    /**
     * @var float
     */
    public $confidence;

    /**
     * @var customizedHit[]
     */
    public $customizedHit;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $label;

    /**
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

    public function validate()
    {
        if (\is_array($this->customizedHit)) {
            Model::validateArray($this->customizedHit);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->confidence) {
            $res['Confidence'] = $this->confidence;
        }

        if (null !== $this->customizedHit) {
            if (\is_array($this->customizedHit)) {
                $res['CustomizedHit'] = [];
                $n1 = 0;
                foreach ($this->customizedHit as $item1) {
                    $res['CustomizedHit'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['CustomizedHit'])) {
            if (!empty($map['CustomizedHit'])) {
                $model->customizedHit = [];
                $n1 = 0;
                foreach ($map['CustomizedHit'] as $item1) {
                    $model->customizedHit[$n1++] = customizedHit::fromMap($item1);
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

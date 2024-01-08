<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\TextModerationPlusResponseBody\data;

use AlibabaCloud\SDK\Green\V20220302\Models\TextModerationPlusResponseBody\data\result\customizedHit;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 81.22
     *
     * @var float
     */
    public $confidence;

    /**
     * @var customizedHit[]
     */
    public $customizedHit;

    /**
     * @example porn
     *
     * @var string
     */
    public $label;

    /**
     * @example XXX
     *
     * @var string
     */
    public $riskWords;
    protected $_name = [
        'confidence'    => 'Confidence',
        'customizedHit' => 'CustomizedHit',
        'label'         => 'Label',
        'riskWords'     => 'RiskWords',
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
        if (null !== $this->customizedHit) {
            $res['CustomizedHit'] = [];
            if (null !== $this->customizedHit && \is_array($this->customizedHit)) {
                $n = 0;
                foreach ($this->customizedHit as $item) {
                    $res['CustomizedHit'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
                $n                    = 0;
                foreach ($map['CustomizedHit'] as $item) {
                    $model->customizedHit[$n++] = null !== $item ? customizedHit::fromMap($item) : $item;
                }
            }
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

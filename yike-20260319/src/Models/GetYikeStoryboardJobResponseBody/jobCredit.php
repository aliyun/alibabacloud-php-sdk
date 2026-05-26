<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yike\V20260319\Models\GetYikeStoryboardJobResponseBody;

use AlibabaCloud\Dara\Model;

class jobCredit extends Model
{
    /**
     * @var string
     */
    public $elementImageGeneration;

    /**
     * @var string
     */
    public $totalCreditCost;

    /**
     * @var string
     */
    public $videoComposition;

    /**
     * @var string
     */
    public $videoGeneration;
    protected $_name = [
        'elementImageGeneration' => 'ElementImageGeneration',
        'totalCreditCost' => 'TotalCreditCost',
        'videoComposition' => 'VideoComposition',
        'videoGeneration' => 'VideoGeneration',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->elementImageGeneration) {
            $res['ElementImageGeneration'] = $this->elementImageGeneration;
        }

        if (null !== $this->totalCreditCost) {
            $res['TotalCreditCost'] = $this->totalCreditCost;
        }

        if (null !== $this->videoComposition) {
            $res['VideoComposition'] = $this->videoComposition;
        }

        if (null !== $this->videoGeneration) {
            $res['VideoGeneration'] = $this->videoGeneration;
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
        if (isset($map['ElementImageGeneration'])) {
            $model->elementImageGeneration = $map['ElementImageGeneration'];
        }

        if (isset($map['TotalCreditCost'])) {
            $model->totalCreditCost = $map['TotalCreditCost'];
        }

        if (isset($map['VideoComposition'])) {
            $model->videoComposition = $map['VideoComposition'];
        }

        if (isset($map['VideoGeneration'])) {
            $model->videoGeneration = $map['VideoGeneration'];
        }

        return $model;
    }
}

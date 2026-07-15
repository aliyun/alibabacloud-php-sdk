<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetAiModelProviderResponseBody\data\modelCards;

use AlibabaCloud\Dara\Model;

class credit extends Model
{
    /**
     * @var float
     */
    public $cacheCost;

    /**
     * @var float
     */
    public $inputCost;

    /**
     * @var float
     */
    public $outputCost;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'cacheCost' => 'cacheCost',
        'inputCost' => 'inputCost',
        'outputCost' => 'outputCost',
        'type' => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cacheCost) {
            $res['cacheCost'] = $this->cacheCost;
        }

        if (null !== $this->inputCost) {
            $res['inputCost'] = $this->inputCost;
        }

        if (null !== $this->outputCost) {
            $res['outputCost'] = $this->outputCost;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['cacheCost'])) {
            $model->cacheCost = $map['cacheCost'];
        }

        if (isset($map['inputCost'])) {
            $model->inputCost = $map['inputCost'];
        }

        if (isset($map['outputCost'])) {
            $model->outputCost = $map['outputCost'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}

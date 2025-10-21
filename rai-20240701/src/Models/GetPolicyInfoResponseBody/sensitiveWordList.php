<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models\GetPolicyInfoResponseBody;

use AlibabaCloud\Dara\Model;

class sensitiveWordList extends Model
{
    /**
     * @var int
     */
    public $inputOutputType;

    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $word;
    protected $_name = [
        'inputOutputType' => 'InputOutputType',
        'label' => 'Label',
        'word' => 'Word',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inputOutputType) {
            $res['InputOutputType'] = $this->inputOutputType;
        }

        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }

        if (null !== $this->word) {
            $res['Word'] = $this->word;
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
        if (isset($map['InputOutputType'])) {
            $model->inputOutputType = $map['InputOutputType'];
        }

        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }

        if (isset($map['Word'])) {
            $model->word = $map['Word'];
        }

        return $model;
    }
}

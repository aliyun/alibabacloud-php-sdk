<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FaRui\V20240628\Models\RunContractRuleGenerationResponseBody;

use AlibabaCloud\Tea\Model;

class usage extends Model
{
    /**
     * @example 5
     *
     * @var int
     */
    public $input;

    /**
     * @example page
     *
     * @var string
     */
    public $unit;
    protected $_name = [
        'input' => 'input',
        'unit'  => 'unit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->input) {
            $res['input'] = $this->input;
        }
        if (null !== $this->unit) {
            $res['unit'] = $this->unit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return usage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['input'])) {
            $model->input = $map['input'];
        }
        if (isset($map['unit'])) {
            $model->unit = $map['unit'];
        }

        return $model;
    }
}

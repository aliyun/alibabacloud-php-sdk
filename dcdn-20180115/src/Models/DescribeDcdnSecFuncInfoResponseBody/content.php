<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnSecFuncInfoResponseBody;

use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @description The language (Chinese or English).
     *
     * @example ai_defense
     *
     * @var string
     */
    public $label;

    /**
     * @description The options in the drop-down list.
     *
     * @example ai_defense
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'label' => 'Label',
        'value' => 'Value',
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
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return content
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}

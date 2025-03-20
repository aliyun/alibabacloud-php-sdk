<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\GetWafFilterResponseBody\filter\fields\selector;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The label of the data.
     *
     * @example China
     *
     * @var string
     */
    public $label;

    /**
     * @description The value of the data.
     *
     * @example CN
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'label' => 'Label',
        'value' => 'Value',
    ];

    public function validate() {}

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
     * @return data
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

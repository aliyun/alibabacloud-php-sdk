<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeDataSourceParametersResponseBody\data;

use AlibabaCloud\Tea\Model;

class paramValue extends Model
{
    /**
     * @example guangzhou
     *
     * @var string
     */
    public $label;

    /**
     * @example ap-guangzhou
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
     * @return paramValue
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

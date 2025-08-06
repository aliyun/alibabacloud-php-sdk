<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodMultiUsageDataResponseBody\multiUsageData;

use AlibabaCloud\Dara\Model;

class dataModule extends Model
{
    /**
     * @var int
     */
    public $value;

    /**
     * @var string
     */
    public $valueType;
    protected $_name = [
        'value' => 'Value',
        'valueType' => 'ValueType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        if (null !== $this->valueType) {
            $res['ValueType'] = $this->valueType;
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
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        if (isset($map['ValueType'])) {
            $model->valueType = $map['ValueType'];
        }

        return $model;
    }
}

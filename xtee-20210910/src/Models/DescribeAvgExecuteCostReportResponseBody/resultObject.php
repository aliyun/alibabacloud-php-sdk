<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeAvgExecuteCostReportResponseBody;

use AlibabaCloud\Dara\Model;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $ratio;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'ratio' => 'ratio',
        'value' => 'value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ratio) {
            $res['ratio'] = $this->ratio;
        }

        if (null !== $this->value) {
            $res['value'] = $this->value;
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
        if (isset($map['ratio'])) {
            $model->ratio = $map['ratio'];
        }

        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}

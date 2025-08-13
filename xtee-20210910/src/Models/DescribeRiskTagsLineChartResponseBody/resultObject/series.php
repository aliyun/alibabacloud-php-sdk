<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRiskTagsLineChartResponseBody\resultObject;

use AlibabaCloud\Dara\Model;

class series extends Model
{
    /**
     * @var float
     */
    public $data;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'data' => 'Data',
        'name' => 'Name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}

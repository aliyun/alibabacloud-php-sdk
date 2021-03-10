<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Afs\V20180112\Models\DescribeAfsTotalConfDataResponseBody;

use AlibabaCloud\Tea\Model;

class icTotalConfVerifyDatas extends Model
{
    /**
     * @var string
     */
    public $time;

    /**
     * @var int
     */
    public $value;

    /**
     * @var string
     */
    public $category;
    protected $_name = [
        'time'     => 'Time',
        'value'    => 'Value',
        'category' => 'Category',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return icTotalConfVerifyDatas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        return $model;
    }
}

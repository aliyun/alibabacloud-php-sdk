<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParametersResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParametersResponseBody\configParameters\DBInstanceParameter;

class configParameters extends Model
{
    /**
     * @var DBInstanceParameter[]
     */
    public $DBInstanceParameter;
    protected $_name = [
        'DBInstanceParameter' => 'DBInstanceParameter',
    ];

    public function validate()
    {
        if (\is_array($this->DBInstanceParameter)) {
            Model::validateArray($this->DBInstanceParameter);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceParameter) {
            if (\is_array($this->DBInstanceParameter)) {
                $res['DBInstanceParameter'] = [];
                $n1 = 0;
                foreach ($this->DBInstanceParameter as $item1) {
                    $res['DBInstanceParameter'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['DBInstanceParameter'])) {
            if (!empty($map['DBInstanceParameter'])) {
                $model->DBInstanceParameter = [];
                $n1 = 0;
                foreach ($map['DBInstanceParameter'] as $item1) {
                    $model->DBInstanceParameter[$n1] = DBInstanceParameter::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

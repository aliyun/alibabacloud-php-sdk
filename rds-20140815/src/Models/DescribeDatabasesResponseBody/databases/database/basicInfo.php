<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDatabasesResponseBody\databases\database;

use AlibabaCloud\Dara\Model;

class basicInfo extends Model
{
    /**
     * @var mixed[][]
     */
    public $basicDbProperty;
    protected $_name = [
        'basicDbProperty' => 'BasicDbProperty',
    ];

    public function validate()
    {
        if (\is_array($this->basicDbProperty)) {
            Model::validateArray($this->basicDbProperty);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->basicDbProperty) {
            if (\is_array($this->basicDbProperty)) {
                $res['BasicDbProperty'] = [];
                $n1 = 0;
                foreach ($this->basicDbProperty as $item1) {
                    if (\is_array($item1)) {
                        $res['BasicDbProperty'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['BasicDbProperty'][$n1][$key2] = $value2;
                        }
                    }
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
        if (isset($map['BasicDbProperty'])) {
            if (!empty($map['BasicDbProperty'])) {
                $model->basicDbProperty = [];
                $n1 = 0;
                foreach ($map['BasicDbProperty'] as $item1) {
                    if (!empty($item1)) {
                        $model->basicDbProperty[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->basicDbProperty[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

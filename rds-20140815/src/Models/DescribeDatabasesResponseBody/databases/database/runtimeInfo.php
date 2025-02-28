<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDatabasesResponseBody\databases\database;

use AlibabaCloud\Dara\Model;

class runtimeInfo extends Model
{
    /**
     * @var mixed[][]
     */
    public $runtimeDbProperty;
    protected $_name = [
        'runtimeDbProperty' => 'RuntimeDbProperty',
    ];

    public function validate()
    {
        if (\is_array($this->runtimeDbProperty)) {
            Model::validateArray($this->runtimeDbProperty);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->runtimeDbProperty) {
            if (\is_array($this->runtimeDbProperty)) {
                $res['RuntimeDbProperty'] = [];
                $n1                       = 0;
                foreach ($this->runtimeDbProperty as $item1) {
                    if (\is_array($item1)) {
                        $res['RuntimeDbProperty'][$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['RuntimeDbProperty'][$n1++][$key2] = $value2;
                        }
                    }
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
        if (isset($map['RuntimeDbProperty'])) {
            if (!empty($map['RuntimeDbProperty'])) {
                $model->runtimeDbProperty = [];
                $n1                       = 0;
                foreach ($map['RuntimeDbProperty'] as $item1) {
                    if (!empty($item1)) {
                        $model->runtimeDbProperty[$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->runtimeDbProperty[$n1++][$key2] = $value2;
                        }
                    }
                }
            }
        }

        return $model;
    }
}

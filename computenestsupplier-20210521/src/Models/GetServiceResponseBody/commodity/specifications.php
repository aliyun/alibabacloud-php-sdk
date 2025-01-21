<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceResponseBody\commodity;

use AlibabaCloud\Dara\Model;

class specifications extends Model
{
    /**
     * @var string
     */
    public $code;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string[]
     */
    public $times;
    protected $_name = [
        'code'  => 'Code',
        'name'  => 'Name',
        'times' => 'Times',
    ];

    public function validate()
    {
        if (\is_array($this->times)) {
            Model::validateArray($this->times);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->times) {
            if (\is_array($this->times)) {
                $res['Times'] = [];
                $n1           = 0;
                foreach ($this->times as $item1) {
                    $res['Times'][$n1++] = $item1;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Times'])) {
            if (!empty($map['Times'])) {
                $model->times = [];
                $n1           = 0;
                foreach ($map['Times'] as $item1) {
                    $model->times[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}

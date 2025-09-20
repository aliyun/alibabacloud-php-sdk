<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\CreateTriggerRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imm\V20200930\Models\FastFailPolicy;

class actions extends Model
{
    /**
     * @var FastFailPolicy
     */
    public $fastFailPolicy;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $parameters;
    protected $_name = [
        'fastFailPolicy' => 'FastFailPolicy',
        'name' => 'Name',
        'parameters' => 'Parameters',
    ];

    public function validate()
    {
        if (null !== $this->fastFailPolicy) {
            $this->fastFailPolicy->validate();
        }
        if (\is_array($this->parameters)) {
            Model::validateArray($this->parameters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fastFailPolicy) {
            $res['FastFailPolicy'] = null !== $this->fastFailPolicy ? $this->fastFailPolicy->toArray($noStream) : $this->fastFailPolicy;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->parameters) {
            if (\is_array($this->parameters)) {
                $res['Parameters'] = [];
                $n1 = 0;
                foreach ($this->parameters as $item1) {
                    $res['Parameters'][$n1] = $item1;
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
        if (isset($map['FastFailPolicy'])) {
            $model->fastFailPolicy = FastFailPolicy::fromMap($map['FastFailPolicy']);
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Parameters'])) {
            if (!empty($map['Parameters'])) {
                $model->parameters = [];
                $n1 = 0;
                foreach ($map['Parameters'] as $item1) {
                    $model->parameters[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

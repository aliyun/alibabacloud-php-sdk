<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class TriggerConfig extends Model
{
    /**
     * @var string
     */
    public $authType;

    /**
     * @var string[]
     */
    public $methods;
    protected $_name = [
        'authType' => 'authType',
        'methods' => 'methods',
    ];

    public function validate()
    {
        if (\is_array($this->methods)) {
            Model::validateArray($this->methods);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authType) {
            $res['authType'] = $this->authType;
        }

        if (null !== $this->methods) {
            if (\is_array($this->methods)) {
                $res['methods'] = [];
                $n1 = 0;
                foreach ($this->methods as $item1) {
                    $res['methods'][$n1] = $item1;
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
        if (isset($map['authType'])) {
            $model->authType = $map['authType'];
        }

        if (isset($map['methods'])) {
            if (!empty($map['methods'])) {
                $model->methods = [];
                $n1 = 0;
                foreach ($map['methods'] as $item1) {
                    $model->methods[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

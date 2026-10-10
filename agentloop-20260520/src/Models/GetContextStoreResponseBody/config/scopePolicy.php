<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetContextStoreResponseBody\config;

use AlibabaCloud\Dara\Model;

class scopePolicy extends Model
{
    /**
     * @var string[]
     */
    public $requiredAnyOf;
    protected $_name = [
        'requiredAnyOf' => 'requiredAnyOf',
    ];

    public function validate()
    {
        if (\is_array($this->requiredAnyOf)) {
            Model::validateArray($this->requiredAnyOf);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requiredAnyOf) {
            if (\is_array($this->requiredAnyOf)) {
                $res['requiredAnyOf'] = [];
                $n1 = 0;
                foreach ($this->requiredAnyOf as $item1) {
                    $res['requiredAnyOf'][$n1] = $item1;
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
        if (isset($map['requiredAnyOf'])) {
            if (!empty($map['requiredAnyOf'])) {
                $model->requiredAnyOf = [];
                $n1 = 0;
                foreach ($map['requiredAnyOf'] as $item1) {
                    $model->requiredAnyOf[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

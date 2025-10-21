<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class NodeExecutionContextDTO extends Model
{
    /**
     * @var string[]
     */
    public $context;
    protected $_name = [
        'context' => 'context',
    ];

    public function validate()
    {
        if (\is_array($this->context)) {
            Model::validateArray($this->context);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->context) {
            if (\is_array($this->context)) {
                $res['context'] = [];
                foreach ($this->context as $key1 => $value1) {
                    $res['context'][$key1] = $value1;
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
        if (isset($map['context'])) {
            if (!empty($map['context'])) {
                $model->context = [];
                foreach ($map['context'] as $key1 => $value1) {
                    $model->context[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}

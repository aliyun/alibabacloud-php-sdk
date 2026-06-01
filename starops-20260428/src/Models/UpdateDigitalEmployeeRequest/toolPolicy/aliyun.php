<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\STAROps\V20260428\Models\UpdateDigitalEmployeeRequest\toolPolicy;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\STAROps\V20260428\Models\UpdateDigitalEmployeeRequest\toolPolicy\aliyun\statements;

class aliyun extends Model
{
    /**
     * @var bool
     */
    public $enable;

    /**
     * @var statements[]
     */
    public $statements;
    protected $_name = [
        'enable' => 'enable',
        'statements' => 'statements',
    ];

    public function validate()
    {
        if (\is_array($this->statements)) {
            Model::validateArray($this->statements);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }

        if (null !== $this->statements) {
            if (\is_array($this->statements)) {
                $res['statements'] = [];
                $n1 = 0;
                foreach ($this->statements as $item1) {
                    $res['statements'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }

        if (isset($map['statements'])) {
            if (!empty($map['statements'])) {
                $model->statements = [];
                $n1 = 0;
                foreach ($map['statements'] as $item1) {
                    $model->statements[$n1] = statements::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

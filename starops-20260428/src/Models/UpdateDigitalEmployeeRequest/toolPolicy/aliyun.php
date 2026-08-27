<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\STAROps\V20260428\Models\UpdateDigitalEmployeeRequest\toolPolicy;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\STAROps\V20260428\Models\UpdateDigitalEmployeeRequest\toolPolicy\aliyun\statements;

class aliyun extends Model
{
    /**
     * @var string[]
     */
    public $autoPassPolicy;

    /**
     * @var string[]
     */
    public $denyPolicy;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var statements[]
     */
    public $statements;
    protected $_name = [
        'autoPassPolicy' => 'autoPassPolicy',
        'denyPolicy' => 'denyPolicy',
        'enable' => 'enable',
        'statements' => 'statements',
    ];

    public function validate()
    {
        if (\is_array($this->autoPassPolicy)) {
            Model::validateArray($this->autoPassPolicy);
        }
        if (\is_array($this->denyPolicy)) {
            Model::validateArray($this->denyPolicy);
        }
        if (\is_array($this->statements)) {
            Model::validateArray($this->statements);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoPassPolicy) {
            if (\is_array($this->autoPassPolicy)) {
                $res['autoPassPolicy'] = [];
                $n1 = 0;
                foreach ($this->autoPassPolicy as $item1) {
                    $res['autoPassPolicy'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->denyPolicy) {
            if (\is_array($this->denyPolicy)) {
                $res['denyPolicy'] = [];
                $n1 = 0;
                foreach ($this->denyPolicy as $item1) {
                    $res['denyPolicy'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

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
        if (isset($map['autoPassPolicy'])) {
            if (!empty($map['autoPassPolicy'])) {
                $model->autoPassPolicy = [];
                $n1 = 0;
                foreach ($map['autoPassPolicy'] as $item1) {
                    $model->autoPassPolicy[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['denyPolicy'])) {
            if (!empty($map['denyPolicy'])) {
                $model->denyPolicy = [];
                $n1 = 0;
                foreach ($map['denyPolicy'] as $item1) {
                    $model->denyPolicy[$n1] = $item1;
                    ++$n1;
                }
            }
        }

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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class SecurityContextCapabilities extends Model
{
    /**
     * @var string[]
     */
    public $add;

    /**
     * @var string[]
     */
    public $drop;
    protected $_name = [
        'add' => 'Add',
        'drop' => 'Drop',
    ];

    public function validate()
    {
        if (\is_array($this->add)) {
            Model::validateArray($this->add);
        }
        if (\is_array($this->drop)) {
            Model::validateArray($this->drop);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->add) {
            if (\is_array($this->add)) {
                $res['Add'] = [];
                $n1 = 0;
                foreach ($this->add as $item1) {
                    $res['Add'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->drop) {
            if (\is_array($this->drop)) {
                $res['Drop'] = [];
                $n1 = 0;
                foreach ($this->drop as $item1) {
                    $res['Drop'][$n1] = $item1;
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
        if (isset($map['Add'])) {
            if (!empty($map['Add'])) {
                $model->add = [];
                $n1 = 0;
                foreach ($map['Add'] as $item1) {
                    $model->add[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Drop'])) {
            if (!empty($map['Drop'])) {
                $model->drop = [];
                $n1 = 0;
                foreach ($map['Drop'] as $item1) {
                    $model->drop[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\UpdateVpcConfigRequest\updates;

class UpdateVpcConfigRequest extends Model
{
    /**
     * @var string[]
     */
    public $removals;

    /**
     * @var updates[]
     */
    public $updates;
    protected $_name = [
        'removals' => 'removals',
        'updates' => 'updates',
    ];

    public function validate()
    {
        if (\is_array($this->removals)) {
            Model::validateArray($this->removals);
        }
        if (\is_array($this->updates)) {
            Model::validateArray($this->updates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->removals) {
            if (\is_array($this->removals)) {
                $res['removals'] = [];
                $n1 = 0;
                foreach ($this->removals as $item1) {
                    $res['removals'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->updates) {
            if (\is_array($this->updates)) {
                $res['updates'] = [];
                $n1 = 0;
                foreach ($this->updates as $item1) {
                    $res['updates'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['removals'])) {
            if (!empty($map['removals'])) {
                $model->removals = [];
                $n1 = 0;
                foreach ($map['removals'] as $item1) {
                    $model->removals[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['updates'])) {
            if (!empty($map['updates'])) {
                $model->updates = [];
                $n1 = 0;
                foreach ($map['updates'] as $item1) {
                    $model->updates[$n1] = updates::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

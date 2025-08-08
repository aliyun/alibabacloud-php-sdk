<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class AlterTableRequest extends Model
{
    /**
     * @var FullSchemaChange[]
     */
    public $changes;
    protected $_name = [
        'changes' => 'changes',
    ];

    public function validate()
    {
        if (\is_array($this->changes)) {
            Model::validateArray($this->changes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->changes) {
            if (\is_array($this->changes)) {
                $res['changes'] = [];
                $n1 = 0;
                foreach ($this->changes as $item1) {
                    $res['changes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['changes'])) {
            if (!empty($map['changes'])) {
                $model->changes = [];
                $n1 = 0;
                foreach ($map['changes'] as $item1) {
                    $model->changes[$n1] = FullSchemaChange::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

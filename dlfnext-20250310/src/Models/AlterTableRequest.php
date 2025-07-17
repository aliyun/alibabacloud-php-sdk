<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Tea\Model;

class AlterTableRequest extends Model
{
    /**
     * @var FullSchemaChange[]
     */
    public $changes;
    protected $_name = [
        'changes' => 'changes',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->changes) {
            $res['changes'] = [];
            if (null !== $this->changes && \is_array($this->changes)) {
                $n = 0;
                foreach ($this->changes as $item) {
                    $res['changes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AlterTableRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['changes'])) {
            if (!empty($map['changes'])) {
                $model->changes = [];
                $n = 0;
                foreach ($map['changes'] as $item) {
                    $model->changes[$n++] = null !== $item ? FullSchemaChange::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

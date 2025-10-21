<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class RowUpdate extends Model
{
    /**
     * @var Row
     */
    public $row;

    /**
     * @var string
     */
    public $rowKind;
    protected $_name = [
        'row' => 'row',
        'rowKind' => 'rowKind',
    ];

    public function validate()
    {
        if (null !== $this->row) {
            $this->row->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->row) {
            $res['row'] = null !== $this->row ? $this->row->toArray($noStream) : $this->row;
        }

        if (null !== $this->rowKind) {
            $res['rowKind'] = $this->rowKind;
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
        if (isset($map['row'])) {
            $model->row = Row::fromMap($map['row']);
        }

        if (isset($map['rowKind'])) {
            $model->rowKind = $map['rowKind'];
        }

        return $model;
    }
}

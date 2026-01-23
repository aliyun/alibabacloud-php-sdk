<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetStandardResponseBody\standardInfo\attributeWithValueList\attribute\valueConfig\valueRange;

use AlibabaCloud\Dara\Model;

class lookupTableReference extends Model
{
    /**
     * @var string
     */
    public $column;

    /**
     * @var int
     */
    public $lookupTableId;
    protected $_name = [
        'column' => 'Column',
        'lookupTableId' => 'LookupTableId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->column) {
            $res['Column'] = $this->column;
        }

        if (null !== $this->lookupTableId) {
            $res['LookupTableId'] = $this->lookupTableId;
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
        if (isset($map['Column'])) {
            $model->column = $map['Column'];
        }

        if (isset($map['LookupTableId'])) {
            $model->lookupTableId = $map['LookupTableId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\InsertMultiDimTableRecordRequest;

use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var mixed[]
     */
    public $fields;
    protected $_name = [
        'fields' => 'Fields',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->fields) {
            $res['Fields'] = $this->fields;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return records
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Fields'])) {
            $model->fields = $map['Fields'];
        }

        return $model;
    }
}

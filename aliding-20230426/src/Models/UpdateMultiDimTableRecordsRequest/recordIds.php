<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateMultiDimTableRecordsRequest;

use AlibabaCloud\Tea\Model;

class recordIds extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var mixed[]
     */
    public $fields;

    /**
     * @description This parameter is required.
     *
     * @example HyDGtSj
     *
     * @var string
     */
    public $id;
    protected $_name = [
        'fields' => 'Fields',
        'id' => 'Id',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->fields) {
            $res['Fields'] = $this->fields;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recordIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Fields'])) {
            $model->fields = $map['Fields'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}

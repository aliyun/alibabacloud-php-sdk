<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteTraceAppRequest\deleteReason;

use AlibabaCloud\Tea\Model;

class reasonIds extends Model
{
    /**
     * @description The ID of the reason for deletion.
     *
     * @example 0
     *
     * @var int
     */
    public $id;

    /**
     * @description A description of the reason for removal.
     *
     * @example The function is not perfect, and the root cause of the problem cannot be located.
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'id'   => 'Id',
        'name' => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return reasonIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}

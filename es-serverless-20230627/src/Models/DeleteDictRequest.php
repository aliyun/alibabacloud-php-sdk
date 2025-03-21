<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Esserverless\V20230627\Models;

use AlibabaCloud\Tea\Model;

class DeleteDictRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example a.dic
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @example MAIN
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'name' => 'name',
        'type' => 'type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteDictRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}

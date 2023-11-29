<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\CreateOssExternalStoreRequest\parameter;

use AlibabaCloud\Tea\Model;

class columns extends Model
{
    /**
     * @description The name of the field.
     *
     * @example auto-test
     *
     * @var string
     */
    public $name;

    /**
     * @description The type of the field.
     *
     * @example sls
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'name' => 'name',
        'type' => 'type',
    ];

    public function validate()
    {
    }

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
     * @return columns
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yunjian\V20211217\Models;

use AlibabaCloud\Tea\Model;

class DeleteUrgentDemandItemRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 111222
     *
     * @var int
     */
    public $id;

    /**
     * @description This parameter is required.
     *
     * @example 111222
     *
     * @var string
     */
    public $modifier;
    protected $_name = [
        'id' => 'id',
        'modifier' => 'modifier',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->modifier) {
            $res['modifier'] = $this->modifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteUrgentDemandItemRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['modifier'])) {
            $model->modifier = $map['modifier'];
        }

        return $model;
    }
}

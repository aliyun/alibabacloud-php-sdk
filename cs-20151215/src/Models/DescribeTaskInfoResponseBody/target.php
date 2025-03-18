<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeTaskInfoResponseBody;

use AlibabaCloud\Tea\Model;

class target extends Model
{
    /**
     * @description The ID of the object.
     *
     * @example c78592bfe92244365b3c3ad47f1de****
     *
     * @var string
     */
    public $id;

    /**
     * @description The type of the object.
     *
     * @example cluster
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'id' => 'id',
        'type' => 'type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return target
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}

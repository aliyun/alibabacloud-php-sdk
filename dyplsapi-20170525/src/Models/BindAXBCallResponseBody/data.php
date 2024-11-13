<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\BindAXBCallResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 绑定关系ID
     *
     * @example 476567566
     *
     * @var string
     */
    public $bindId;
    protected $_name = [
        'bindId' => 'BindId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindId) {
            $res['BindId'] = $this->bindId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BindId'])) {
            $model->bindId = $map['BindId'];
        }

        return $model;
    }
}

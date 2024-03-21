<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models;

use AlibabaCloud\Tea\Model;

class RefuseSupplementRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $supplementId;
    protected $_name = [
        'supplementId' => 'SupplementId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supplementId) {
            $res['SupplementId'] = $this->supplementId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RefuseSupplementRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SupplementId'])) {
            $model->supplementId = $map['SupplementId'];
        }

        return $model;
    }
}

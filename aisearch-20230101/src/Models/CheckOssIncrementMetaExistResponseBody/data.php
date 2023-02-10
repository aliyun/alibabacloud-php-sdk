<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aisearch\V20230101\Models\CheckOssIncrementMetaExistResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example False
     *
     * @var bool
     */
    public $exist;
    protected $_name = [
        'exist' => 'Exist',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->exist) {
            $res['Exist'] = $this->exist;
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
        if (isset($map['Exist'])) {
            $model->exist = $map['Exist'];
        }

        return $model;
    }
}

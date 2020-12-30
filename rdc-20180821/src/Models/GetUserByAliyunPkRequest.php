<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rdc\V20180821\Models;

use AlibabaCloud\Tea\Model;

class GetUserByAliyunPkRequest extends Model
{
    /**
     * @var string
     */
    public $pk;
    protected $_name = [
        'pk' => 'Pk',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pk) {
            $res['Pk'] = $this->pk;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserByAliyunPkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Pk'])) {
            $model->pk = $map['Pk'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class ListResourcesByAdvancedSearchRequest extends Model
{
    /**
     * @example SELECT ResourceId, ResourceName WHERE Tags.Kvpair=\"business:online\"
     *
     * @var string
     */
    public $sql;
    protected $_name = [
        'sql' => 'Sql',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sql) {
            $res['Sql'] = $this->sql;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListResourcesByAdvancedSearchRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Sql'])) {
            $model->sql = $map['Sql'];
        }

        return $model;
    }
}

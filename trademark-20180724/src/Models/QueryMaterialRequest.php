<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class QueryMaterialRequest extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var bool
     */
    public $queryUnconfirmedInfo;
    protected $_name = [
        'id'                   => 'Id',
        'queryUnconfirmedInfo' => 'QueryUnconfirmedInfo',
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
        if (null !== $this->queryUnconfirmedInfo) {
            $res['QueryUnconfirmedInfo'] = $this->queryUnconfirmedInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryMaterialRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['QueryUnconfirmedInfo'])) {
            $model->queryUnconfirmedInfo = $map['QueryUnconfirmedInfo'];
        }

        return $model;
    }
}

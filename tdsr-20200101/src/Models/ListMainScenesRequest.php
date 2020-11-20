<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ListMainScenesRequest extends Model
{
    /**
     * @var string
     */
    public $queryName;
    protected $_name = [
        'queryName' => 'QueryName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->queryName) {
            $res['QueryName'] = $this->queryName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMainScenesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['QueryName'])) {
            $model->queryName = $map['QueryName'];
        }

        return $model;
    }
}

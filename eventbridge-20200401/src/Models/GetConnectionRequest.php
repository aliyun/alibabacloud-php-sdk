<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Tea\Model;

class GetConnectionRequest extends Model
{
    /**
     * @description The connection name.
     *
     * @example connection-name
     *
     * @var string
     */
    public $connectionName;
    protected $_name = [
        'connectionName' => 'ConnectionName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionName) {
            $res['ConnectionName'] = $this->connectionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetConnectionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionName'])) {
            $model->connectionName = $map['ConnectionName'];
        }

        return $model;
    }
}

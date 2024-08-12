<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class GetDatabasesRequest extends Model
{
    /**
     * @example paimon-ods
     *
     * @var string
     */
    public $databaseName;
    protected $_name = [
        'databaseName' => 'databaseName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->databaseName) {
            $res['databaseName'] = $this->databaseName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDatabasesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['databaseName'])) {
            $model->databaseName = $map['databaseName'];
        }

        return $model;
    }
}

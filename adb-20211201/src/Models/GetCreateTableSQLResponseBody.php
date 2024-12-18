<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class GetCreateTableSQLResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 109462AF-B5FA-3D5A-9377-B27E5B******
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The SQL statement.
     *
     * @example create table (
     * );
     * @var string
     */
    public $SQL;
    protected $_name = [
        'requestId' => 'RequestId',
        'SQL'       => 'SQL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->SQL) {
            $res['SQL'] = $this->SQL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCreateTableSQLResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SQL'])) {
            $model->SQL = $map['SQL'];
        }

        return $model;
    }
}

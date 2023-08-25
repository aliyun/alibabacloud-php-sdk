<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class GetTableDDLResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 863D51B7-5321-41D8-A0B6-A088B0******
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
     * @return GetTableDDLResponseBody
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

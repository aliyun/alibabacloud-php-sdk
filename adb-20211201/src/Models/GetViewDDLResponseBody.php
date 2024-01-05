<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class GetViewDDLResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 421794A3-72A5-5D27-9E8B-A75A4C503E17
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The SQL statement.
     *
     * @example CREATE VIEW `test`.`test_view` AS SELECT
     * `test_tbl_adb`
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
     * @return GetViewDDLResponseBody
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

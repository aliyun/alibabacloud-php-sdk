<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeBackupDatabaseResponseBody extends Model
{
    /**
     * @description The name of the database. Format: "db1,db2".
     *
     * @example db1,db2
     *
     * @var string
     */
    public $databaseNames;

    /**
     * @description The ID of the request.
     *
     * @example 08A3B71B-FE08-4B03-974F-CC7EA6DB1828
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'databaseNames' => 'DatabaseNames',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->databaseNames) {
            $res['DatabaseNames'] = $this->databaseNames;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBackupDatabaseResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatabaseNames'])) {
            $model->databaseNames = $map['DatabaseNames'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

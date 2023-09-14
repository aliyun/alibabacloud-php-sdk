<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class AllocateInstancePublicConnectionResponseBody extends Model
{
    /**
     * @description The endpoint that is used to connect to the database instance.
     *
     * @example test*****.mysql.rds.aliyuncs.com
     *
     * @var string
     */
    public $connectionString;

    /**
     * @description The ID of the instance.
     *
     * @example rm-bp1*****
     *
     * @var string
     */
    public $dbInstanceName;

    /**
     * @description The ID of the request.
     *
     * @example 65BDA532-28AF-4122-AA39-B382721EEE64
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'connectionString' => 'ConnectionString',
        'dbInstanceName'   => 'DbInstanceName',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
        }
        if (null !== $this->dbInstanceName) {
            $res['DbInstanceName'] = $this->dbInstanceName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AllocateInstancePublicConnectionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }
        if (isset($map['DbInstanceName'])) {
            $model->dbInstanceName = $map['DbInstanceName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

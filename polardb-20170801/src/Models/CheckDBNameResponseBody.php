<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class CheckDBNameResponseBody extends Model
{
    /**
     * @description The name of the database.
     *
     * @example test_db
     *
     * @var string
     */
    public $DBName;

    /**
     * @description The ID of the request.
     *
     * @example CDB3258F-B5DE-43C4-8935-CBA0CA******
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DBName'    => 'DBName',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckDBNameResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBInstanceSSLRequest extends Model
{
    /**
     * @description The ID of the instance.
     *
     * This parameter is required.
     *
     * @example gp-bp12ga6v69h86****
     *
     * @var string
     */
    public $DBInstanceId;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBInstanceSSLRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        return $model;
    }
}

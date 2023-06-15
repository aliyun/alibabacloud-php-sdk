<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\CreateDBInstanceEndpointResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The internal endpoint.
     *
     * @example rm-****.mysql.rds.aliyuncs.com
     *
     * @var string
     */
    public $connectionString;

    /**
     * @description The endpoint ID of the instance.
     *
     * @example ep-****
     *
     * @var string
     */
    public $DBInstanceEndpointId;

    /**
     * @description The ID of the instance.
     *
     * @example rm-****
     *
     * @var string
     */
    public $DBInstanceName;
    protected $_name = [
        'connectionString'     => 'ConnectionString',
        'DBInstanceEndpointId' => 'DBInstanceEndpointId',
        'DBInstanceName'       => 'DBInstanceName',
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
        if (null !== $this->DBInstanceEndpointId) {
            $res['DBInstanceEndpointId'] = $this->DBInstanceEndpointId;
        }
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }
        if (isset($map['DBInstanceEndpointId'])) {
            $model->DBInstanceEndpointId = $map['DBInstanceEndpointId'];
        }
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }

        return $model;
    }
}

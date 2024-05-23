<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DeleteDatabaseRequest extends Model
{
    /**
     * @description The instance ID. You can call the DescribeDBInstances operation to query the instance ID.
     *
     * This parameter is required.
     * @example rm-uf6wjk5*****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The name of the database.
     *
     * This parameter is required.
     * @example testdb01
     *
     * @var string
     */
    public $DBName;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'DBInstanceId'    => 'DBInstanceId',
        'DBName'          => 'DBName',
        'resourceOwnerId' => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteDatabaseRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}

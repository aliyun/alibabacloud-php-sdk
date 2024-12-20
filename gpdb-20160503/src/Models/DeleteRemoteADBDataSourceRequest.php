<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class DeleteRemoteADBDataSourceRequest extends Model
{
    /**
     * @description The service ID.
     *
     * This parameter is required.
     * @example 1
     *
     * @var string
     */
    public $dataSourceId;

    /**
     * @description The ID of the instance that uses the data provided by another instance.
     *
     * This parameter is required.
     * @example gp-test
     *
     * @var string
     */
    public $localDBInstanceId;

    /**
     * @var int
     */
    public $ownerId;
    protected $_name = [
        'dataSourceId'      => 'DataSourceId',
        'localDBInstanceId' => 'LocalDBInstanceId',
        'ownerId'           => 'OwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->localDBInstanceId) {
            $res['LocalDBInstanceId'] = $this->localDBInstanceId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteRemoteADBDataSourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }
        if (isset($map['LocalDBInstanceId'])) {
            $model->localDBInstanceId = $map['LocalDBInstanceId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        return $model;
    }
}

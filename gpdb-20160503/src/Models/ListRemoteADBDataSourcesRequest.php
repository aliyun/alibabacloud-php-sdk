<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class ListRemoteADBDataSourcesRequest extends Model
{
    /**
     * @description Instance name.
     *
     * This parameter is required.
     * @example gp-xxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description Data source ID.
     *
     * @example 119
     *
     * @var string
     */
    public $dataSourceId;

    /**
     * @var int
     */
    public $ownerId;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'dataSourceId' => 'DataSourceId',
        'ownerId'      => 'OwnerId',
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
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRemoteADBDataSourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        return $model;
    }
}

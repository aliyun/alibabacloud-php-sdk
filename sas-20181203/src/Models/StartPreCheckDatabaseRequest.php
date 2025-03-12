<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class StartPreCheckDatabaseRequest extends Model
{
    /**
     * @description The type of the database. Valid values:
     *
     *   **MYSQL**
     *   **MSSQL**
     *   **Oracle**
     *
     * This parameter is required.
     * @example MYSQL
     *
     * @var string
     */
    public $databaseType;

    /**
     * @description The UUID of the agent that is used to back up the data of the database.
     *
     * This parameter is required.
     * @example ec1c0ba21d2911ed800000163e0e****
     *
     * @var string
     */
    public $instanceUuid;

    /**
     * @description The region ID of the server that hosts the database.
     *
     * This parameter is required.
     * @example cn-hongkong
     *
     * @var string
     */
    public $uniRegionId;
    protected $_name = [
        'databaseType' => 'DatabaseType',
        'instanceUuid' => 'InstanceUuid',
        'uniRegionId'  => 'UniRegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->databaseType) {
            $res['DatabaseType'] = $this->databaseType;
        }
        if (null !== $this->instanceUuid) {
            $res['InstanceUuid'] = $this->instanceUuid;
        }
        if (null !== $this->uniRegionId) {
            $res['UniRegionId'] = $this->uniRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartPreCheckDatabaseRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatabaseType'])) {
            $model->databaseType = $map['DatabaseType'];
        }
        if (isset($map['InstanceUuid'])) {
            $model->instanceUuid = $map['InstanceUuid'];
        }
        if (isset($map['UniRegionId'])) {
            $model->uniRegionId = $map['UniRegionId'];
        }

        return $model;
    }
}

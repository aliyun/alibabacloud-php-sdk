<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class StartPreCheckDatabaseRequest extends Model
{
    /**
     * @example MYSQL
     *
     * @var string
     */
    public $databaseType;

    /**
     * @example ec1c0ba21d2911ed800000163e0e****
     *
     * @var string
     */
    public $instanceUuid;

    /**
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

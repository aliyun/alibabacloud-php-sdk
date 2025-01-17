<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class StartPreCheckDatabaseRequest extends Model
{
    /**
     * @var string
     */
    public $databaseType;
    /**
     * @var string
     */
    public $instanceUuid;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;

class DeleteRemoteADBDataSourceRequest extends Model
{
    /**
     * @var string
     */
    public $dataSourceId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

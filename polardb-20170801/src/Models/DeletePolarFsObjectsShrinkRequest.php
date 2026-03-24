<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class DeletePolarFsObjectsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $objectsToDeleteShrink;

    /**
     * @var string
     */
    public $polarFsInstanceId;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'objectsToDeleteShrink' => 'ObjectsToDelete',
        'polarFsInstanceId' => 'PolarFsInstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->objectsToDeleteShrink) {
            $res['ObjectsToDelete'] = $this->objectsToDeleteShrink;
        }

        if (null !== $this->polarFsInstanceId) {
            $res['PolarFsInstanceId'] = $this->polarFsInstanceId;
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
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['ObjectsToDelete'])) {
            $model->objectsToDeleteShrink = $map['ObjectsToDelete'];
        }

        if (isset($map['PolarFsInstanceId'])) {
            $model->polarFsInstanceId = $map['PolarFsInstanceId'];
        }

        return $model;
    }
}

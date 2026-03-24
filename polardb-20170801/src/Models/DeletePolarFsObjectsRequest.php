<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class DeletePolarFsObjectsRequest extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string[]
     */
    public $objectsToDelete;

    /**
     * @var string
     */
    public $polarFsInstanceId;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'objectsToDelete' => 'ObjectsToDelete',
        'polarFsInstanceId' => 'PolarFsInstanceId',
    ];

    public function validate()
    {
        if (\is_array($this->objectsToDelete)) {
            Model::validateArray($this->objectsToDelete);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->objectsToDelete) {
            if (\is_array($this->objectsToDelete)) {
                $res['ObjectsToDelete'] = [];
                $n1 = 0;
                foreach ($this->objectsToDelete as $item1) {
                    $res['ObjectsToDelete'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['ObjectsToDelete'])) {
                $model->objectsToDelete = [];
                $n1 = 0;
                foreach ($map['ObjectsToDelete'] as $item1) {
                    $model->objectsToDelete[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PolarFsInstanceId'])) {
            $model->polarFsInstanceId = $map['PolarFsInstanceId'];
        }

        return $model;
    }
}

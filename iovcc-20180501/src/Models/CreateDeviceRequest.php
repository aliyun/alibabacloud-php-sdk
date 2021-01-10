<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class CreateDeviceRequest extends Model
{
    /**
     * @var string
     */
    public $modelName;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $hardwareId;
    protected $_name = [
        'modelName'  => 'ModelName',
        'projectId'  => 'ProjectId',
        'hardwareId' => 'HardwareId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->hardwareId) {
            $res['HardwareId'] = $this->hardwareId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDeviceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['HardwareId'])) {
            $model->hardwareId = $map['HardwareId'];
        }

        return $model;
    }
}

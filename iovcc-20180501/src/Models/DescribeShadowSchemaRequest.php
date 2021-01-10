<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class DescribeShadowSchemaRequest extends Model
{
    /**
     * @var string
     */
    public $deviceModel;

    /**
     * @var bool
     */
    public $isSimple;

    /**
     * @var string
     */
    public $projectId;
    protected $_name = [
        'deviceModel' => 'DeviceModel',
        'isSimple'    => 'IsSimple',
        'projectId'   => 'ProjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceModel) {
            $res['DeviceModel'] = $this->deviceModel;
        }
        if (null !== $this->isSimple) {
            $res['IsSimple'] = $this->isSimple;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeShadowSchemaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceModel'])) {
            $model->deviceModel = $map['DeviceModel'];
        }
        if (isset($map['IsSimple'])) {
            $model->isSimple = $map['IsSimple'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models;

use AlibabaCloud\Tea\Model;

class UpdateInstanceRequest extends Model
{
    /**
     * @example xgboost数据集加速实例
     *
     * @var string
     */
    public $description;

    /**
     * @example 20
     *
     * @var string
     */
    public $maxSlot;

    /**
     * @example acc_instance_1
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'description' => 'Description',
        'maxSlot'     => 'MaxSlot',
        'name'        => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->maxSlot) {
            $res['MaxSlot'] = $this->maxSlot;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['MaxSlot'])) {
            $model->maxSlot = $map['MaxSlot'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}

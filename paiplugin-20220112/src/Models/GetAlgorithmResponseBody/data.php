<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiPlugin\V20220112\Models\GetAlgorithmResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 算法说明。
     *
     * @var string
     */
    public $description;

    /**
     * @description 算法Id。
     *
     * @var string
     */
    public $id;

    /**
     * @description 预测所需参数名与对应的参数说明。
     *
     * @var string
     */
    public $inferUserConfigMap;

    /**
     * @description 算法名称。
     *
     * @var string
     */
    public $name;

    /**
     * @description 训练所需参数名与对应的参数说明。
     *
     * @var string
     */
    public $trainUserConfigMap;
    protected $_name = [
        'description'        => 'Description',
        'id'                 => 'Id',
        'inferUserConfigMap' => 'InferUserConfigMap',
        'name'               => 'Name',
        'trainUserConfigMap' => 'TrainUserConfigMap',
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
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->inferUserConfigMap) {
            $res['InferUserConfigMap'] = $this->inferUserConfigMap;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->trainUserConfigMap) {
            $res['TrainUserConfigMap'] = $this->trainUserConfigMap;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InferUserConfigMap'])) {
            $model->inferUserConfigMap = $map['InferUserConfigMap'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['TrainUserConfigMap'])) {
            $model->trainUserConfigMap = $map['TrainUserConfigMap'];
        }

        return $model;
    }
}

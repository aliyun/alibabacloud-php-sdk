<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiPlugin\V20220112\Models\GetAlgorithmResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $inferUserConfigMap;

    /**
     * @var string
     */
    public $name;

    /**
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListLayersResponseBody;

use AlibabaCloud\Tea\Model;

class layers extends Model
{
    /**
     * @example This is a test.
     *
     * @var string
     */
    public $description;

    /**
     * @example 3
     *
     * @var string
     */
    public $laboratoryId;

    /**
     * @example 3
     *
     * @var string
     */
    public $layerId;

    /**
     * @example layer1
     *
     * @var string
     */
    public $name;

    /**
     * @example 3
     *
     * @var string
     */
    public $sceneId;
    protected $_name = [
        'description'  => 'Description',
        'laboratoryId' => 'LaboratoryId',
        'layerId'      => 'LayerId',
        'name'         => 'Name',
        'sceneId'      => 'SceneId',
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
        if (null !== $this->laboratoryId) {
            $res['LaboratoryId'] = $this->laboratoryId;
        }
        if (null !== $this->layerId) {
            $res['LayerId'] = $this->layerId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return layers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['LaboratoryId'])) {
            $model->laboratoryId = $map['LaboratoryId'];
        }
        if (isset($map['LayerId'])) {
            $model->layerId = $map['LayerId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }

        return $model;
    }
}

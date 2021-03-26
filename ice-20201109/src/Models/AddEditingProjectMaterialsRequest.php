<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class AddEditingProjectMaterialsRequest extends Model
{
    /**
     * @description 云剪辑工程ID
     *
     * @var string
     */
    public $projectId;

    /**
     * @description 素材ID
     *
     * @var string
     */
    public $materialMaps;
    protected $_name = [
        'projectId'    => 'ProjectId',
        'materialMaps' => 'MaterialMaps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->materialMaps) {
            $res['MaterialMaps'] = $this->materialMaps;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddEditingProjectMaterialsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['MaterialMaps'])) {
            $model->materialMaps = $map['MaterialMaps'];
        }

        return $model;
    }
}
